<?php
session_start(); 
(!isset($_SESSION['id'])) ?  : header('location: game.php'); 
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login - Tic Tac Toe</title>
<link rel="stylesheet" type="text/css" href="StyleReg.css">
<link rel="icon" type="image/png" href="img/16.png" sizes="16x16">
<link rel="icon" type="image/png" href="img/32.png" sizes="32x32">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/index.js"></script>

</head>
<body>
<section id="message">
<div class="mes"></div>
</section>
<section id="cont"> 
<div id="form">
<form method="post" name="login"> 
<input type="text" class="em" id="mail" placeholder="E-mail or login" name="login"/>
<input type="password" class="em" id="pass" placeholder="Password" name="pass"/>
<input type="submit" class="hover" id="bt" value="Login"/>
<div id="register"><a id="link" href="">Register now</a></div>
</form>
</div><!-- div form !-->
</section><!-- section cont !-->

<!-- Register Page !-->
<section id="cont2">
<div id="form2">
<form method="post" name="register">
  <input type="text" id="lg2" class="put2" placeholder="Login" name="login"/><br/>
  <input type="email" id="em2" class="put2" placeholder="Email" name="email"/><br/>
  <input type="password" id="pw1" class="put2" placeholder="Password" name="pass"/><br/>
  <input type="password" id="pw2" class="put2" placeholder="Repeat password" name="pass2"/><br/>
  <input type="submit" class="hover" id="bt2" value="Sign up"/></form>
</div><!-- div form2 !-->
</section><!-- section  cont2 !-->
</body>
</html>