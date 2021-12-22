<?php
// Password protect this content
require_once('protect-this.php');
?>
<?php
$path    = 'Storage/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){
  echo "<a href='/Storage/$file'>$file</a><br>";
}