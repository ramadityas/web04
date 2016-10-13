<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php
$dbname = 'u936889495_db';
$dbuser = 'u936889495_rama';
$dbpass = 'prohnc.17';
$dbhost = 'mysql.idhostinger.com';
$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysql_select_db($dbname) or die("Could not open the db '$dbname'");
$test_query = "SHOW TABLES FROM $dbname";
$result = mysql_query($test_query);
$tblCnt = 0;
while($tbl = mysql_fetch_array($result)) {
  $tblCnt++;
  echo $tbl[0]."<br />\n";
}
if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
}
?>
