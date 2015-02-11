<?php
    // get the data from the form
    $email = $_POST['email'];
    $pass_word = $_POST['password'];
	$phone_num = $_POST['phone'];
	$action = $_POST['action'];
    // get the rest of the data for the form

    // for the heard_from radio buttons,
	if(isset($_POST['heard_from'])){
		$heard_from = $_POST['heard_from'];
		// display a value of 'Unknown' if the user doesn't select a radio button
	}else{
		$heard_from = "Unknown";
	}

	 // for the wants_updates check box,
	
    // display a value of 'Yes' or 'No'
	if(isset($_POST['wants_updates'])){
		$wants_updates = "Yes";
		}
	else{
		 $wants_updates = "No"; 
	}

    // display chosen drop down list items
	$methods = $_POST['contact_via'];

	// display comments
	$comments = $_POST['comments'];
	
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <div id="content">
        <h1>Account Information</h1>

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br />

        <label>Password:</label>
        <span><?php echo  htmlspecialchars($pass_word); ?></span><br />

        <label>Phone Number:</label>
        <span><?php echo  htmlspecialchars($phone_num); ?></span><br />

        <label>Heard From:</label>
        <span><?php echo $heard_from; ?></span><br />

        <label>Send Updates:</label>
        <span><?php echo $wants_updates; ?></span><br />

        <label>Contact Via:</label>
        <span><?php echo $methods; ?></span><br /><br />

        <span>Comments:    </span>
        <span><?php echo $comments; ?></span><br />
        
        <p>&nbsp;</p>
    </div>
</body>
</html>