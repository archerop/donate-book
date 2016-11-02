<?php

function calculate_settime($time,$unit){
  $total=0;
  switch($unit){
    case 1:
      $total = $time * 60;
    break;

    case 2:
      $total = $time * 60 * 60;
    break;

    case 3:
      $total = $time * 86400;
    break;
    default:
      $total=$time;
  }
  return $total;
}
//'是非','選擇','填充','計算','夾檔','複選','作文'
// //是非每題50秒、選擇80秒、複選90秒、計算300秒、問答&夾檔600秒、作文三天

function return_timesec($str){
  if($str == '0'){
    $time1=50;
  }else  if($str == '1'){
    $time1=80;
  }else  if($str == '3'){
    $time1=600;
  }else  if($str == '4'){
    $time1=300;
  }else  if($str == '5'){
    $time1=600;
  }else  if($str == '2'){
    $time1=90;
  }else  if($str == '6'){
    $time1=3;
  }else{
    $time1=50;
  }
  return $time1;
}
function return_timeunit($str){
  switch($str){
    case '0':
      $time_unit1=0;
    break;

    case '1':
      $time_unit1=0;
    break;

    case '3':
      $time_unit1=0;
    break;
    case '4':
      $time_unit1=0;
    break;
    case '5':
      $time_unit1=0;
    break;
    case '2':
      $time_unit1=0;
    break;
    case '6':
      $time_unit1=3;
    break;
    default:
      $time_unit1=0;
  }
  return $time_unit1;
}

function Write_Ctl_Record($username,$table,$fun_name,$action,$memo,$ip,$note,$conn){
  $sql="insert into ctl_record (username,table_name,action,fun_name,content,adddate,ip,note)";
  $sql.="values ('$username','$table','$action','$fun_name','$memo',now(),'$ip','$note')";

  $conn->Execute( $sql);

}
if(!function_exists('mime_content_type')) {

    function mime_content_type($filename) {

        $mime_types = array(

            'txt' => 'text/plain',
            'htm' => 'text/html',
            'html' => 'text/html',
            'php' => 'text/html',
            'css' => 'text/css',
            'js' => 'application/javascript',
            'json' => 'application/json',
            'xml' => 'application/xml',
            'swf' => 'application/x-shockwave-flash',
            'flv' => 'video/x-flv',

            // images
            'png' => 'image/png',
            'jpe' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'jpg' => 'image/jpeg',
            'gif' => 'image/gif',
            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',

            // archives
            'zip' => 'application/zip',
            'rar' => 'application/x-rar-compressed',
            'exe' => 'application/x-msdownload',
            'msi' => 'application/x-msdownload',
            'cab' => 'application/vnd.ms-cab-compressed',

            // audio/video
            'mp3' => 'audio/mpeg',
            'qt' => 'video/quicktime',
            'mov' => 'video/quicktime',

            // adobe
            'pdf' => 'application/pdf',
            'psd' => 'image/vnd.adobe.photoshop',
            'ai' => 'application/postscript',
            'eps' => 'application/postscript',
            'ps' => 'application/postscript',

            // ms office
            'doc' => 'application/msword',
            'rtf' => 'application/rtf',
            'xls' => 'application/vnd.ms-excel',
            'ppt' => 'application/vnd.ms-powerpoint',

            // open office
            'odt' => 'application/vnd.oasis.opendocument.text',
            'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
        );

        $ext = strtolower(array_pop(explode('.',$filename)));
        if (array_key_exists($ext, $mime_types)) {
            return $mime_types[$ext];
        }
        elseif (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME);
            $mimetype = finfo_file($finfo, $filename);
            finfo_close($finfo);
            return $mimetype;
        }
        else {
            return 'application/octet-stream';
        }
    }
}

?>