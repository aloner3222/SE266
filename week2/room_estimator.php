<?php
    // get the data from the form
	$height = $_POST['height'];
    $width_first = $_POST['width_first'];
    $width_second = $_POST['width_second'];
	
	// validate height entry
    if ( empty($height) ) {
        $error_message = 'HEIGHT is a required field.'; }
    else if ( !is_numeric($height) )  {
        $error_message = 'HEIGHT must be a valid number.'; }
    else if ( $height <= 0 ) {
        $error_message = 'HEIGHT must be greater than zero.'; }

    // validate width of first wall entry
    else if ( empty($width_first) ) {
        $error_message = 'WIDTH of first wall is a required field.'; }
    else if ( !is_numeric($width_first) )  {
        $error_message = 'WIDTH of first wall must be a valid number.'; }
    else if ( $width_first <= 0 ) {
        $error_message = 'WIDTH of first wall must be greater than zero.'; }

	 // validate numbers of years entry
    else if ( empty($width_second) ) {
        $error_message = 'WIDTH of second wall is a required field.'; }
    else if ( !is_numeric($width_second) )  {
        $error_message = 'WIDTH of second wall must be a valid number.'; }
    else if ( $width_second <= 0 ) {
       $error_message = 'WIDTH of second wall must be greater than zero.'; }

    // set error message to empty string if no invalid entries
    else {
        $error_message = ''; }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
	
	}
    // calculate the square footage value
    $square_feet = ($width_first * $height * 2) + ($width_second * $height * 2);
    $square_ftceiling = $width_first * $width_second;
	$total_feet = $square_ftceiling + $square_feet;
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <div id="content">
        <h1>SQUARE FOOT CALCULATOR</h1>

        <label>Square ft of walls:</label>
        <span><?php echo $square_feet; ?></span><br />

        <label>Square ft of ceiling:</label>
        <span><?php echo $square_ftceiling; ?></span><br />

        <label>Total square ft:</label>
        <span><?php echo $total_feet; ?></span><br />

		<label>Date:</label>
        <span><?php echo   date("m/d/Y")  ?></span><br />
		
    </div>
</body>
</html>