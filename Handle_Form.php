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

# Script 2.5 handle_form.php

//Print the submitted form information:

if (!empty($_POST['name']) && !empty($_POST['comments']) && 
!empty($_POST['email']))
	{
		echo "<p>Thanks you, <b>{$_POST['name']}</b>, for the following comments:<br />
		<tt>{$_POST['comments']}</tt></p>
		<p> We will reply to you at <i>{$_POST['email']}</i>.</p>\n";
	} 
else { // Missing form value.
	echo "<p>Please go back and fill out the form again.</p>";
}

?>
</body>
</html>