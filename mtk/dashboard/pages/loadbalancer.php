


<div class="alert alert-success">
   
        
		<h1>LOADBALANCER INFO</h1>
    <div id="identity"></div>
	
<?php


if ($API->connect($hostname1, $username, $password)) {
    // Connected successfully, now fetch the system identity
    $API->write('/system/identity/getall');
    $identity = $API->read();
    // Print the system identity information
    if (!empty($identity)) {
        echo 'System Identity          : ' . $identity[0]['name'];
    } else {
        echo 'System identity not found!';
    }
    $API->disconnect();
} else {
    echo 'Unable to connect to the RouterOS device.';
}
?>
<br>
<?php
if ($API->connect($hostname1, $username, $password)) {
    // Connected successfully, now fetch the number  of active hotspot users
    $API->write('/ip/dhcp-server/lease/print');
    $reply= $API->read();
	
    // Print the number  of active hotspot users
    if (!empty($reply)) {
        echo 'DHCP SERVERS : '. count($reply);
    } else {
        echo 'DHCP                   : NO active DHCP SERVERS found!';
    }
    $API->disconnect();
} else {
    echo 'Unable to connect to the RouterOS device.';
}

?>
<br>
<?php
if ($API->connect($hostname1, $username, $password)) {
    // Connected successfully, now fetch the number  of active hotspot AP
    $API->write('/ip/hotspot/ip-binding/print');
    $ap= $API->read();
	
    // Print the number  of active hotspot AP
    if (!empty($ap)) {
        echo 'Number of Hotspot AP     : '. count($ap);
    } else {
        echo 'AP                       : No active hotspot AP found!';
    }
    $API->disconnect();
} else {
    echo 'Unable to connect to the RouterOS device.';
}

?>
<br>
<?php
if ($API->connect($hostname1, $username, $password)) {
    // Connected successfully, now fetch the System Resources Info
    $API->write('/system/resource/getall');
    $resource= $API->read();
	
    // Print System Resources Info
    if (!empty($resource)) {
        echo 'CPU     : '. $resource[0]['cpu-load'].'%'; 
		echo "<br>";
		echo 'MEMORY     : '. number_format($resource[0]['free-memory']/ (1024 * 1024),2).'MB';
		echo "<br>";
		echo 'UPTIME     : '. $resource[0]['uptime'];
    } else {
        echo 'Resources                      : No Resources Found!';
    }
    $API->disconnect();
} else {
    echo 'Unable to connect to the RouterOS device.';
}

?>
		
		
        <h2 class="lead">Checking Status for IP: 192.168.3.1</h2>
        <img src="http://localhost/mtk/dashboard/api/img/data.png" alt="Router Icon" width="50" height="50" class="mb-3">
        <div id="status_balancer" class="h4"></div>
        <div id="result_balancer" class="h5 mt-3"></div>
    </div>


	 

