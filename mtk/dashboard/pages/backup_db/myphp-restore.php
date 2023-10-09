<?php 
/**
 * This file contains the Restore_Database class wich performs
 * a partial or complete restoration of any given MySQL database
 * @author Daniel López Azaña <daniloaz@gmail.com>
 * @version 1.0
 */

/**
 * Define database parameters here
 */
define("DB_USER", 'root');
define("DB_PASSWORD", '');
define("DB_NAME", 'tkwfi');
define("DB_HOST", 'localhost');
define("BACKUP_DIR", '../pages/backup_db/myphp-backup-files'); // Comment this line to use the same script's directory ('.')
define("CHARSET", 'utf8');
define("DISABLE_FOREIGN_KEY_CHECKS", true); // Set to true if you are having foreign key constraint fails

/**
 * The Restore_Database class
 */
class Restore_Database {
    /**
     * Host where the database is located
     */
    var $host;

    /**
     * Username used to connect to database
     */
    var $username;

    /**
     * Password used to connect to database
     */
    var $passwd;

    /**
     * Database to backup
     */
    var $dbName;

    /**
     * Database charset
     */
    var $charset;

    /**
     * Database connection
     */
    var $conn;

    /**
     * Disable foreign key checks
     */
    var $disableForeignKeyChecks;

    /**
     * Constructor initializes database
     */
    function __construct($host, $username, $passwd, $dbName, $charset = 'utf8') {
        $this->host                    = $host;
        $this->username                = $username;
        $this->passwd                  = $passwd;
        $this->dbName                  = $dbName;
        $this->charset                 = $charset;
        $this->disableForeignKeyChecks = defined('DISABLE_FOREIGN_KEY_CHECKS') ? DISABLE_FOREIGN_KEY_CHECKS : true;
        $this->conn                    = $this->initializeDatabase();
        $this->backupDir               = defined('BACKUP_DIR') ? BACKUP_DIR : '.';
        $this->backupFile              = isset($_FILES['backupFile']) ? $_FILES['backupFile'] : null;
    }

    /**
     * Destructor re-enables foreign key checks
     */
    function __destructor() {
        /**
         * Re-enable foreign key checks 
         */
        if ($this->disableForeignKeyChecks === true) {
            mysqli_query($this->conn, 'SET foreign_key_checks = 1');
        }
    }

    protected function initializeDatabase() {
        try {
            $conn = mysqli_connect($this->host, $this->username, $this->passwd, $this->dbName);
            if (mysqli_connect_errno()) {
                throw new Exception('ERROR connecting database: ' . mysqli_connect_error());
                die();
            }
            if (!mysqli_set_charset($conn, $this->charset)) {
                mysqli_query($conn, 'SET NAMES '.$this->charset);
            }

            /**
             * Disable foreign key checks 
             */
            if ($this->disableForeignKeyChecks === true) {
                mysqli_query($conn, 'SET foreign_key_checks = 0');
            }

        } catch (Exception $e) {
            print_r($e->getMessage());
            die();
        }

        return $conn;
    }

    /**
     * Restore the database from the uploaded SQL backup file
     */
    public function restoreDb() {
        try {
            if ($this->backupFile === null) {
                throw new Exception("ERROR: No backup file uploaded.");
            }

            $sql = '';
            $multiLineComment = false;

            $backupDir = $this->backupDir;
            $backupFileName = $this->backupFile['name'];
            $backupFileTmpName = $this->backupFile['tmp_name'];

            // Move the uploaded file to the backup directory
            move_uploaded_file($backupFileTmpName, $backupDir . '/' . $backupFileName);

            /**
             * Read backup file line by line
             */
            $handle = fopen($backupDir . '/' . $backupFileName, "r");
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    $line = ltrim(rtrim($line));
                    if (strlen($line) > 1) { // avoid blank lines
                        $lineIsComment = false;
                        if (preg_match('/^\/\*/', $line)) {
                            $multiLineComment = true;
                            $lineIsComment = true;
                        }
                        if ($multiLineComment or preg_match('/^\/\//', $line)) {
                            $lineIsComment = true;
                        }
                        if (!$lineIsComment) {
                            $sql .= $line;
                            if (preg_match('/;$/', $line)) {
                                // execute query
                                if(mysqli_query($this->conn, $sql)) {
                                    if (preg_match('/^CREATE TABLE `([^`]+)`/i', $sql, $tableName)) {
                                        $this->obfPrint("Table successfully created: `" . $tableName[1] . "`");
                                    }
                                    $sql = '';
                                } else {
                                    throw new Exception("ERROR: SQL execution error: " . mysqli_error($this->conn));
                                }
                            }
                        } else if (preg_match('/\*\/$/', $line)) {
                            $multiLineComment = false;
                        }
                    }
                }
                fclose($handle);
            } else {
                throw new Exception("ERROR: couldn't open backup file " . $backupDir . '/' . $backupFileName);
            } 
        } catch (Exception $e) {
            print_r($e->getMessage());
            return false;
        }

        return true;
    }

    /**
     * Prints message forcing output buffer flush
     *
     */
    public function obfPrint ($msg = '', $lineBreaksBefore = 0, $lineBreaksAfter = 1) {
        if (!$msg) {
            return false;
        }

        $msg = date("Y-m-d H:i:s") . ' - ' . $msg;
        $output = '';

        if (php_sapi_name() != "cli") {
            $lineBreak = "<br />";
        } else {
            $lineBreak = "\n";
        }

        if ($lineBreaksBefore > 0) {
            for ($i = 1; $i <= $lineBreaksBefore; $i++) {
                $output .= $lineBreak;
            }                
        }

        $output .= $msg;

        if ($lineBreaksAfter > 0) {
            for ($i = 1; $i <= $lineBreaksAfter; $i++) {
                $output .= $lineBreak;
            }                
        }

        if (php_sapi_name() == "cli") {
            $output .= "\n";
        }

        echo $output;

        if (php_sapi_name() != "cli") {
            ob_flush();
        }

        flush();
    }
}

/**
 * Instantiate Restore_Database and perform restoration
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Report all errors
    error_reporting(E_ALL);
    // Set script max execution time
    set_time_limit(900); // 15 minutes

    if (php_sapi_name() != "cli") {
        echo '<div style="font-family: monospace;">';
    }

    $restoreDatabase = new Restore_Database(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $result = $restoreDatabase->restoreDb() ? 'OK' : 'KO';
    $restoreDatabase->obfPrint("Restoration result: " . $result, 1);

    if (php_sapi_name() != "cli") {
        echo '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Restore</title>
</head>
<body>
    <h1>Restore Database</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="backupFile" accept=".sql">
        <input type="submit" value="Restore Database">
    </form>
</body>
</html>
