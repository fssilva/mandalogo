<?php

echo "<h3>LDAP query test</h3>";
echo "Connecting ...";
$ds=ldap_connect("150.165.74.2");  // must be a valid LDAP server!
echo "connect result is " . $ds . "<br />";

?>

