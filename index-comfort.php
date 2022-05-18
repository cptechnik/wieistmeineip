<?php
$comp_ip = $_SERVER['REMOTE_ADDR'];
$comp_ip_real = $_SERVER["HTTP_X_REAL_IP"];
$comp_ip_cf = $_SERVER['HTTP_CF_CONNECTING_IP'];
$comp_ip_client = $_SERVER['HTTP_CLIENT_IP'];

$comp_ip_js_ipv4_ip = "<script>document.getElementById('ipv4_ip');</script>";
$comp_ip_js_ipv4_host = "<script>document.getElementById('ipv4_host');</script>";
$comp_ip_js_ipv4_country = "<script>document.getElementById('pv4_country');</script>";
$comp_ip_js_ipv4_table = "<script>document.getElementById('ipv4_table');</script>";

$comp_ip_js_ipv6_ip = "<script>document.getElementById('ipv6_ip').innerHTML;</script>";
$comp_ip_js_ipv6_host = "<script>document.getElementById('ipv6_host').innerHTML;</script>";
$comp_ip_js_ipv6_country = "<script>document.getElementById('pv6_country').innerHTML;</script>";
$comp_ip_js_ipv6_table = "<script>document.getElementById('ipv6_table').innerHTML;</script>";


$comp_host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$comp_port = $_SERVER['REMOTE_PORT'];
$server_ip = $_SERVER['SERVER_ADDR'];
$server_name = $_SERVER['SERVER_NAME'];
$server_port = $_SERVER['SERVER_PORT'];
$server_software = $_SERVER['SERVER_SOFTWARE'];
$server_protocol = $_SERVER['SERVER_PROTOCOL'];
$browser_name = "<script>document.write(navigator.appName);</script>";
$browser_version = $_SERVER['HTTP_USER_AGENT'];
echo "<div style='padding: 10px 190px 190px 190px;'><tr><td><br><h3>Computer:</h3>";
echo "<table>";
echo "<col style='width: 190px'>";
echo "<tr><td style='width: 220px'>IP</td><td style='width: 290px'>$comp_ip</td></tr>";
echo "<tr><td>IP&nbsp;real</td><td>$comp_ip_real</td></tr>";
echo "<tr><td>IP&nbsp;comp_ip_cf</td><td>$comp_ip_cf</td></tr>";
echo "<tr><td>IP&nbsp;comp_ip_client</td><td>$comp_ip_client</td></tr>";

#echo "<tr><td>js:&nbsp;comp_ip_js_ipv4_ip</td><td>$comp_ip_js_ipv4_ip</td></tr>";
#echo "<tr><td>js:&nbsp;comp_ip_js_ipv4_host</td><td>$comp_ip_js_ipv4_host</td></tr>";
#echo "<tr><td>js:&nbsp;comp_ip_js_ipv4_country</td><td>$comp_ip_js_ipv4_country</td></tr>";
#echo "<tr><td>js:&nbsp;comp_ip_js_ipv4_table</td><td>$comp_ip_js_ipv4_table</td></tr>";
 
echo "<tr><td>Host</td><td>$comp_host</td></tr>";
echo "<tr><td>Port</td><td>$comp_port</td></tr>";
echo "<tr><td><br><h3>Server:</h3></td></tr>";
echo "<tr><td>Name</td><td>$server_name</td></tr>";
echo "<tr><td>IP</td><td>$server_ip</td></tr>";
echo "<tr><td>Port</td><td>$server_port</td></tr>";
echo "<tr><td>Software</td><td>$server_software</td></tr>";
echo "<tr><td>Protokoll</td><td>$server_protocol</td></tr>";
echo "<tr><td><br><h3>Browser:</h3>";
echo "<tr><td>Name</td><td>$browser_name</td></tr>";
echo "<tr><td>Version</td><td>$browser_version</td></tr>";
echo "</table></div>";
?>
echo "<tr><td>Name</td><td>$server_name</td></tr>";
echo "<tr><td>IP</td><td>$server_ip</td></tr>";
echo "<tr><td>Port</td><td>$server_port</td></tr>";
echo "<tr><td>Software</td><td>$server_software</td></tr>";
echo "<tr><td>Protokoll</td><td>$server_protocol</td></tr>";
echo "</table>";
echo "<h3>Browser:</h3>";
echo "<table>";
echo "<col style='width: 150px'>";
echo "<tr><td>Name</td><td>$browser_name</td></tr>";
echo "<tr><td>Version</td><td>$browser_version</td></tr>";
echo "</table></div>";
?>
