<?php

$html= <<<EOT
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QVQOL</title>
    <link rel="stylesheet" href="css/layout.css" />
    <link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon" />

  </head>
  <body>
  
  <div class="nav">
    <div class="block">
    
    
</div>
         
</div>
  <div align="center" class="header">
     <img class="logo" src="./img/qvqol.png">
     <h3 class="title">欢迎访问QvqOl,您是第1000位访问者</h3>
</div>
<div class="content">
<ul>
		<li><a href="#" class="ac">首页</a></li>
		<li><a href="#">消息</a></li>
		<li><a href="#">联系</a></li>
		<li><a href="#">关于</a></li>
	</ul>

</div>
<div class="footer">
<div class="caption"><div onclick="window.open('http://beian.miit.gov.cn/')">粤ICP备19125824号</div></div>
</div>
    
  </body>
</html>
EOT;

echo $html;