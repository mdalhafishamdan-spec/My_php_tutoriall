<?php

/*
    PHP Tutorial #15 - Include & Require

    Notes:
    - include: Imports code from another file.
    - require: Imports code from another file.

*/

// include('ninjas.php');
// require('ninjas.php');

require 'ninjas.php';
include 'ninjas.php';

echo 'end of php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<?php include('content.php'); ?>
	<?php include('content.php'); ?>
	<?php include('content.php'); ?>

</body>
</html>