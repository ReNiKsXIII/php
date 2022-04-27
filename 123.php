<?php
header('Content-Type: text/html; charset=utf-8');
$a = $_POST['n'];
$b = $_POST['f'];
$c = $_POST['sss'];
$d = 0;
session_start();
if(!isset($_SESSION['user_name'])){
	header('Location: login.php');
}


switch ($c) {
 	case '+':
 		$d = $a + $b;
 	break;
 	case '-':
 		$d = $a - $b;
 		break;
 	case '/':
 		$d = $a / $b;
 		break;
 	case '*':
 		$d = $a * $b;
 		break;

 	default:
 		echo "неверная операция";
 	break;
}
echo $a.$c.$b. "=". $d;
?>
<!DOCTYPE html>
<html lang="en">
@@ -34,16 +14,6 @@
	<title>Document</title>
</head>
<body>
	<form action="123.php" method="POST">
	<br>x =<input type="text" name="n"></br>
	<br>y =<input type="text" name="f"></br>
	<select name="sss">
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="/">/</option>
  <option value="*">*</option>
</select>
	<input type="submit" value="Посчитать">	
	</form>
<h1>Главная страница</h1>
</body>
</html> 