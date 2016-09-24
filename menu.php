<?php
$curpage = basename ($_SERVER['PHP_SELF']);
//Using this cause you can't use a class directly since the class is on all pages - instead I have used an if statement --> if the current page is e.g. p5 the echo (show) that the class active. The $_server is a super global variable which holds information about header, locations.
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP-Menu</title>
</head>

<body>

<ul>
<li><a href="p5.php"<?php if($curpage == 'p5.php') {echo 'class="active"';}?>>Home</a></li>
<li><a href="p1.php"<?php if($curpage == 'p1.php') {echo 'class="active"';}?>>Portfolio</a></li>
<li><a href="p2.php"<?php if($curpage == 'p2.php') {echo 'class="active"';}?>>Services</a></li>
<li><a href="p3.php"<?php if($curpage == 'p3.php') {echo 'class="active"';}?>>About</a></li>
<li><a href="p4.php"<?php if($curpage == 'p4.php') {echo 'class="active"';}?>>Contact</a></li>
</ul>
</body>
</html>
