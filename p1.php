<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Portfolio</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<header>
<!--Using 'include' so that I dont have to include the menu everytime, this way -->
<?php include 'menu.php'; ?>
</header>
<article>
<h1>Portfolio</h1>
</article>
<footer>
<!--using 'require' to get the footer copyright. by doing this I only have to copy paste that instead of writing it multiple times. -->
<?php 
require 'footer.php';
?>
</footer>
</body>
</html>