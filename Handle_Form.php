<!DOCTYPE html PUBLIC 
	"-//W3C//DTD XHTML 1.O Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv-"Content=Type"
	content="text/html"; charset="utf-8"/>
	<title>Form Feedback </title>
</head>
<body>
<?php

# Script 2.3 handle_form.php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];

//Create the $gender variable
if (isset($_REQUEST['gender'])) {
	$gender = $_REQUEST['gender'];
} else {
	$gender = NULL;
}

echo "<p> Thank You, <b> $name </b>, 
		for the following comments:
		<br /> <tt>$comments</tt></p>
		<p> We will reply to you at <i> $email
		</i></p>\n";

//Print a message based upon the gender value
if ($gender =='M') {
	echo "<p><b>Good day, Sir!</b></p>";
} elseif ($gender == 'F') {
	echo "<p><b>Good day, Madam!</b></p>";
} else {
	echo "<p><b> You forgot to enter your gender!</b></p>";
}

?>
</body>
</html>