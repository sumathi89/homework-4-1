<?php
// Get the category data
$name = filter_input(INPUT_POST, 'name');
// Validate inputs
if($name==null)
{
    $error = "Invalid category name. Check all fields and try again.";
include('error.php');
}
else 
{
require_once('database.php');
$query = 'INSERT INTO categories_guitar1(categoryName) VALUES (:name)';
$statement = $db->prepare($query);
$statement->bindValue(':name', $name);
$statement->execute();
$statement->closeCursor();
// Display the category List page
include('category_list.php');
}
?>
						    

