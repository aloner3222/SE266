<?php
require('../model/database.php');
require('../model/product_db.php');
require('../model/category_db.php');

$action = $_POST['action'];
if ($action == NULL) {
    $action = $_GET['action'];
    if ($action == NULL) {
        $action = 'list_products';
    }
}

if ($action == 'list_products') {
    $category_id = $_GET['category_id'];             
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
		
    }
    $category_name = get_category_name($category_id);
    $categories = get_categories();
    $products = get_products_by_category($category_id);
    include('product_list.php');
} else if ($action == 'delete_product') {
    $product_id = $_POST['product_id']; 
    $category_id = $_POST['category_id'];             
    if ($category_id == NULL || $category_id == FALSE ||
            $product_id == NULL || $product_id == FALSE) {
        $error = "Missing or incorrect product id or category id.";
        include('../errors/error.php');
    } else { 
        delete_product($product_id);
        header("Location: .?category_id=$category_id");
    }
} else if ($action == 'show_add_form') {
    $categories = get_categories();
    include('product_add.php');    
} else if ($action == 'add_product') {
    $category_id = $_POST['category_id']; 
	$code = $_POST['code']; 
	$name = $_POST['name']; 
	$price = $_POST['price']; 
    if ($category_id == NULL || $category_id == FALSE || $code == NULL || 
            $name == NULL || $price == NULL || $price == FALSE) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else { 
        add_product($category_id, $code, $name, $price);
        header("Location: .?category_id=$category_id");
    }
} else if ($action == 'list_categories') {
    $categories = get_categories();
    include('category_list.php');
} else if ($action == 'add_category') {
    $name = $_POST['name'];

    // Validate inputs
    if ($name == NULL) {
        $error = "Invalid category name. Check name and try again.";
        include('view/error.php');
    } else {
        add_category($name);
        header('Location: .?action=list_categories');  // display the Category List page
    }
} else if ($action == 'delete_category') {
    $category_id = $_POST['category_id'];            
    delete_category($category_id);
    header('Location: .?action=list_categories');      // display the Category List page
}
?>