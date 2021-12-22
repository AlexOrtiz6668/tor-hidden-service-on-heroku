
<?php
$path    = 'Storage/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){
  echo "<a href='/Storage/$file'>$file</a><br>";
}
