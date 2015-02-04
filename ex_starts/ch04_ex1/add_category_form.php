<?php
require_once('database.php');
// Get all categories
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$categories = $db->query($query);
?>

<!DOCTYPE html PUBLIc "_//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.org/1999/xhtml">


	<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<!-- the body section -->
<body>
    
		<div id = "header">
			<h1>Product Manager</h1>
		</div>
		<div id ="main">
			<h2>Category List </h2>
			
				
				<h3>Categories:</h3>
               <table>
        	<tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        <?php foreach ($categories as $category) : ?>
        <tr>
            <td><?php echo $category['categoryName']; ?></td>
            <td>
                <form action="delete_category.php" method="post">
                    <input type="hidden" name = "category_id"
                           value="<?php echo $category['categoryID']; ?>"/>
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>    
    </table>
		  
   		 <form action="add_category.php" method="post"
          id="add_category_form">
			
			 <h3 class="margin_top_increase">Add Category</h3> 
        <label>New Category:</label>
        <input type="text" name ='category_name' />
        <input id="add_category_button" type="submit" value="Add"/>	
         </form>       
        <p><a href="index.php">View Product List</a></p>
		</div>
		<div id="footer">
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </div>
	</div><!-- end page-->
</body>
</html>