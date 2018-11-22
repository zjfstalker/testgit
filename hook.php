<?php

  /*
  - github提供的同步代码到测试服务器的hook
  - exec函数一般在php.ini文件中是关闭的，请打开
   */
$string = "<?php \n return " . var_export($_POST, true) . "\n?>";
file_put_contents('var.txt', $string); 
exec('./web_hooks.sh', $res);
var_dump($res);
