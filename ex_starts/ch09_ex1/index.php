<?php


if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}

switch ($action) {
    case 'start_app':
        $message = 'Enter your data and click on the Submit button.';
        break;
    case 'process_data':
        $Fname = $_POST['Fname'];
	    $Lname = $_POST['Lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
	
	// trim the spaces from the start and end of all data
        $Fname = trim($Fname);
	    $Lname = trim($Lname);
        $email = trim($email);
        $phone = trim($phone);
	
	
    // make sure first name is filled in
        if (empty($Fname)) {
            $message = 'You must enter a first name.';
            break;
        }
	// make capital letters
        $Fname = strtolower($Fname);
        $Fname = ucwords($Fname);
	
	// make sure first name is filled in
        if (empty($Lname)) {
            $message = 'You must enter a Last name.';
            break;
        }
	// make capital letters
        $Lname = strtolower($Lname);
        $Lname = ucwords($Lname);
	    $fullname = $Fname . ' ' . $Lname;
	 // validate email
        if (empty($email)) {
            $message = ' Email address is required';
            break;
        } else if(strpos($email, '@') === false) {
            $message = 'The email address must contain an @ sign.';
            break;
        } else if(strpos($email, '.') === false) {
            $message = 'The email address must contain a dot character.';
            break;
        }
	
	// remove common formatting characters from the phone number
        $phone = str_replace('-', '', $phone);
        $phone = str_replace('(', '', $phone);
        $phone = str_replace(')', '', $phone);
        $phone = str_replace(' ', '', $phone);
	
	  // validate the phone number
	   if (empty($phone)) {
            $message = ' Telephone is required ';
            break;
          }else if(strlen($phone) < 7) {
            $message = 'Telephone number must be at least seven digits.';
            break;
           }else if(strlen($phone) < 10) {
           $message = 'Please include area code.';
           break;
	       }else if(strlen($phone) > 10) {
           $message = 'Too many characters';
           break;
	
	        // make sure phone number is 7 digits and combine strings
       
        } if (strlen($phone) == 10) {
            $firstpart = substr($phone, 0, 3);
            $secondpart = substr($phone, 3, 3);
            $thirdpart = substr($phone, 6);
            $phone =  '(' . $firstpart . ') ' . $secondpart . '-' . $thirdpart;
        }
	  
	   
        // output message
        $message =
            "Hello $Fname,\n\n" .
            "Thank you for entering your data:\n\n" .
            "Name: $fullname\n" .
            "Email: $email\n" .
            "Phone: $phone\n";

        break;
}
include 'string_tester.php';

?>
