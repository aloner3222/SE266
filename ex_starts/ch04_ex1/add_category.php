<?php
// Get the product data
$category_id = $_POST['category_id'];
$category_name = $_POST['category_name'];


// Validate inputs
if ( empty($category_name)) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = "INSERT INTO categories
                 (categoryID, categoryName)
              VALUES
                 ('$category_id', '$category_name')";
    $db->exec($query);
    

    // Display the Product List page
    include('add_category_form.php');
}
?>