<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Edit Payment Information - PayDude™</title>
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body>
		<header>
			<h1>PayDude™</h1>
		</header>
		<main>
			<h2>Account Information and Settings Updated</h2>
<?php
    /* All form elements must be checked - that required information is present and that all form data
    is in the correct format. Security checks must also be made before database queries are made */

	// STEP 16: Set a variable to capture the first name from the submitted form, using the GET array and the fname value
	
	// STEP 18: Set a variable to capture the last name from the submitted form, using the GET array and the lname value
	
	// STEP 20: Capture the Alert Settings from the submitted form, using the GET array and the alert value
	
	// STEP 17: Output a friendly message to confirm that everything went well, including the $fname variable in a paragraph
	
	// STEP 19: Update the above paragraph to now include the last name

	echo('<p>The Alert Settings you have chosen include the following notifications:</p>
	<ul>');
		// STEP 21: The checkboxes for the Alert Settings will be sent as an array (as there could be more than one option checked by the user - so we need to loop through each item with a FOREACH loop)
		


	echo('</ul>');
?>
		</main>
        <footer>
            <p><small>©PayDude Inc. All rights reserved</small></p>
        </footer>
	</body>
</html>
