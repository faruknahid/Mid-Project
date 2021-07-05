<?
if(isset($_REQUEST['Logout']))
{
	session_unset();
	session_destroy();
	echo location.href='Login.php';
}
?>