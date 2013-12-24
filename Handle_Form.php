<!DOCTYPE html PUBLIC 
	"-//W3C//DTD XHTML 1.O Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv-"Content=Type"
	content="text/html"; charset="utf-8"/>
	<title>Form Feedback</title>
	<style type="text/css" title="text/css" media="all">
	.error{
		font-weight: bold;
		color: #C00;
	}
	</style>
</head>
<body>
<?php

# Script 2.4 handle_form.php

//Validate the name:
	if (!empty($_REQUEST['name'])) {
		$name = $_REQUEST['name'];
	} else {
		$name = null;
		echo '<p class ="error">You forgot to enter your name!</p>';
	}

//Validate the email:	
if (!empty($_REQUEST['email'])) {
	$email = $_REQUEST['email'];
} else {
	$email = null;
	echo "<p class ='error'>You forgot to enter your email address!</p>";
}

//Validate the comments
if ($_REQUEST['comments']) {
	$comments = $_REQUEST['comments'];
} else {
	$comments = null;
	echo "<p class ='error'>You forgot to enter your comments!</p>";
}

//Validate the gender:
if (isset($_REQUEST['gender'])) {

	$gender = $_REQUEST['gender'];

	if ($gender =='M') {
		echo "<p><b>Good day, Sir!</b></p>";
	} elseif ($gender == 'F') {
		echo "<p><b>Good day, Madam!</b></p>";
	} 	else {
		echo "<p><b>Gender should be either 'M' or 'F'!</b></p>";
	}

} else {
	
	$gender = NULL;
	echo "<p class='error'>You forgot to select your gender!</p>";
}
if ($name && $email && $gender && $comments) {
	
	echo "<p> Thank You, <b> $name </b>, 
		for the following comments:
		<br /> <tt>$comments</tt></p>
		<p> We will reply to you at <i> $email
		</i></p>\n";
} else {
	echo "<p class='error'>Please go back and fill out the form again.</p>";
}


?>
</body>
</html>