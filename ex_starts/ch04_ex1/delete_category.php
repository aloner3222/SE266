<?php

// Get IDs
$category_id = $_POST['category_id'];
$category_name = $_POST ['category_name'];

// Delete the category from the database
require_once('database.php');
$query = "DELETE FROM categories
          WHERE categoryID = '$category_id'";
$db->exec($query);
        
// Display the Product List page
include('add_category_form.php');
?>