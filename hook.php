<?php

 /**

  - 给github提供的同步代码到测试服务器的hook
  - exec函数一般在php.ini文件中是关闭的，请打开

   */
$string = "<?php \n return " . var_export($_POST, true) . "\n?>";


file_put_contents('var.txt', $string); 
//输出一个github上的回调传回的参数，至于你要用来做什么，可自行研究。

exec('./web_hooks.sh', $res);
//使用php来执行bash命令

var_dump($res);
