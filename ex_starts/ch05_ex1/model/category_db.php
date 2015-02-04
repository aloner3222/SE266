<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $categories = $db->query($query);
   
    return $categories;    
}

function get_category_name($category_id) {
    global $db;
   $query = "SELECT * FROM categories
              WHERE categoryID = $category_id";
	
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['categoryName'];
	return $category_name;
}

function add_category($name) {
    global $db;
     $query = "INSERT INTO categories
                 (categoryID, categoryName)
              VALUES
                 ('$category_id', '$name')";
    $db->exec($query);
}

function delete_category($category_id) {
    global $db;
    $query = "DELETE FROM categories
          WHERE categoryID = '$category_id'";
$db->exec($query);
}
?>