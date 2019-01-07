<?php

require("database.php");

initMigration($pdo);

?>

<html>

<head>
  <title> Simple PHP Crud </title>
</head>

<body>

    <a href="create.php">  Create User </a>
    <a href="read.php?show=all"> Show All Users </a>

</body>

</html>
