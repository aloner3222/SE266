<?php
require_once('database.php');

// Get all categories
$query = "SELECT * 
          FROM categories
          WHERE categoryID = $category_id";
$category = $db->query($query);
$category = $category->fetch();
$category_name = $category['categoryName'];

?>
<!DOCTYPE html PUBLIc "_//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.org/1999/xhtml">

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Category List</h1>
    <table>
        <tr>
            <th>name</th>
            <th>&nbsp;</th>
        </tr>        
        <?php foreach ($categories as $category) : ?>
        <tr>
            <td><?php echo $category['categoryName']; ?></td>
            <td>
                <form action="delete_category.php" method="post">
                    <input type="hidden" name="category_id"
                           value="<?php echo $category_id ['categorName']; ?>"/>
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>    
    </table>

    <h2 class="margin_top_increase">Add Category</h2>
    <form action="text" method="post"
          id="add_category_form">
 	<input type="hidden" name = 'categoryName'
                           	value="<?php echo $category['categoryID']; ?>"/>
        <label>Name:</label>
        <input type="text" name="name" />
        <input id="add_category_button" type="submit" value="Add"/>
    </form>
    
    <p><a href="index.php">List Products</a></p>

</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
</footer>
</body>
</html>