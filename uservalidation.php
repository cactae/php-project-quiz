<?php
ini_set( 'session.name', 's' );
define( 'URL_LOGIN_PAGE', 'teacher-login.php' );
session_start();
if( !defined('LOGGING_IN') )
{
  verify_if_valid_user();
}

function match_user_in_db( $user, $pass )
{
  $conn = mysql_connect("127.0.0.1:50508", "azure", "6#vWHD_$");
  mysql_select_db('quizmdb');
  $sql = 'SELECT `email`
          FROM `teacher`
          WHERE `email` = "'.$user.'"
          AND `password` = "'.$pass.'"';
  	$result = mysql_query( $sql, $conn );
  if( mysql_num_rows($result)==1 )
  {
    $_SESSION['valid_user'] = mysql_result( $result, 0, 0 );
    die( header('location:./teacher-login2.php'.SID) );
  }
  else
  {
die( header('location:'.URL_LOGIN_PAGE) );
  }
}

function process_login()
{
  $username = mysql_escape_string( trim($_POST['username']) );
  $password = ( trim($_POST['password']) );
  match_user_in_db( $username, $password );  
}

function process_logout()
{
  session_destroy();
  unset( $_SESSION );
  die( header('location:'.URL_LOGIN_PAGE) );  
}

function verify_if_valid_user()
{
  if( !isset($_SESSION['valid_user']) )
  {
    die( header('location:'.URL_LOGIN_PAGE) );
  }
}
?>