<?php
$ip_address = "192.168.3.1";
exec("ping  $ip_address", $output, $result);
$response = array();

if ($result == 0) {
    $response["status"] = "Online";
    $response["responses"] = array();
    foreach ($output as $line) {
        if (preg_match('/time=([0-9]+)ms/', $line, $matches)) {
            $pingResponse = array(
                "seq" => count($response["responses"]) + 1,
                "time" => (int)$matches[1]
            );
            $response["responses"][] = $pingResponse;
        }
    }
} else {
    $response["status"] = "Offline";
    $response["responses"] = array();
}

echo json_encode($response);
?>
