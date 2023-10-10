<?php 

$connection = @ mysql_connect('localhost','root','') or die("Failed Mysql connection");
mysql_select_db('teamsource', $connection) or die("Failed database connection");
mysql_query("SET NAMES utf8");

session_start();


if(isset($_SESSION['login'])) {
	if($_SESSION['login'] == 5) {
		$id = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($_SESSION['ID']))));
		$userquery = mysql_query("SELECT * FROM user WHERE ID='".$id."'");
		
		
		while($uyesonuc = mysql_fetch_array($userquery)) {
			$u_email = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($uyesonuc['email']))));
			$u_role = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($uyesonuc['role']))));
			$u_username = addslashes(strip_tags(mysql_real_escape_string(htmlspecialchars($uyesonuc['username']))));
			$girissorgu = 1;

		}
		

	} else {
		$girissorgu = 0;
	}
} else {
	$girissorgu = 0;
}

?>