 <?php
  // connect to database
  $dbtype = 'mysql';

  @$conn = &ADONewConnection($dbtype);

  $conn->debug=false;

  $dblocation = 'localhost';
  $dbuser = 'ireading';
  $dbpassword = 'leoisdumdum';
  $dbname = 'ireading';
  $conn->Connect( $dblocation, $dbuser, $dbpassword, $dbname);
  mysql_query('set names utf8');

  if( !$conn){
    echo "Fail to connect DB!!";
    exit();
  }

  // check string for sql injection
  function getValidString( $value){
    // number, alphabet: "^[A-Za-z0-9]+$"
    // number, alphabet, underline: "^\w+$"
    //if( preg_match( "/^\w+$/", $value)){
    if( preg_match( "/(^\w+$)|(\w\-?\w)/", $value)){
        return $value;
    }
    if( preg_match( "/^[A-Za-z0-9_-]+$/", $value)){
      return $value;
    }
    else{
      return "";
    }
  }

  // check for sql injection
    function checking($value) {
    if (function_exists ( 'get_magic_quotes_gpc' )){
      if (get_magic_quotes_gpc()){
        $value = stripslashes($value);
      }
    }
    if (!is_numeric($value)){
      $value = "'" . mysql_real_escape_string($value) . "'";
    }
    else{
      $value =mysql_real_escape_string($value);
    }
    return $value;
  }
 ?>

