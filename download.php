<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <form action="">
  <a href="download.php?file=replay"><i class="fa fa-download"></i></a>
  </form>
</body>
</html>




<?php
  if(isset($_GET['file']))
{
  $file = $_GET['file'].".zip";
  header('content-disposition: attachment; filename="'.urlencode($file).'"');

  $fb = fopen($file,"r+");
  while(!feof($fb))
  {

    echo fread($fb,8192);
    flush();
  }
  fclose($fb);
}
?>