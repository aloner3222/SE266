<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Future Value Calculator</title>
	<p>
		
	</p>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <div id="content">
    <h1>SQUARE FOOT CALCULATOR</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
    <form action="room_estimator.php" method="post">

        <div id="data">
			<p>Please enter measurements in feet</p>
			
			<label>Height of room:</label>
            <input type="text" name="height"
                   value="<?php echo $height; ?>"/><br />
			
            <label>Width of first wall:</label>
            <input type="text" name="width_first"
                   value="<?php echo $width_first; ?>"/><br />

            <label>Width of second wall:</label>
            <input type="text" name="width_second"
                   value="<?php echo $width_second; ?>"/><br />
			
			
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br />
        </div>

    </form>
    </div>
</body>
</html>