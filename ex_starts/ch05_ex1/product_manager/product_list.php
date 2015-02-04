<?php include '../view/header.php'; ?>

<div id="main">	
	

    <h1>Product List</h1>

   <?php include '../view/sidebar.php';  ?>
	         
	
      
             <!-- display a table of products -->
      <section> 
		  
        <table>
			 
            <h2><?php echo $category_name; ?></h2> 
			
		<tr>
                <th>Code</th>
                <th>Name</th>
                <th class="right">Price</th>
                <th>&nbsp;</th>
            </tr>
			
            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['productName']; ?></td>
                <td class="right"><?php echo $product['listPrice']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_product">
                    <input type="hidden" name="product_id"
                           value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $product['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
	
        </table>
		</section>
	<br/>
	
		 <p><a href="?action=show_add_form">Add Product</a></p>
        <p class="last_paragraph"><a href="?action=list_categories">List Categories</a></p> 
       </div> 
    
	
	 

<?php include '../view/footer.php'; ?>