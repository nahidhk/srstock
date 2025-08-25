<?php
$id = $_GET['id'];   
include_once "../../../config.php";

$q = $mysqli->query("SELECT * FROM products WHERE id=$id");
$data = $q->fetch_assoc();

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<style>
    body {
        background: #c3c3c3ff;
        font-family: Arial, sans-serif;
    }
pre{
    font-family: monospace;
    white-space: pre-wrap; 
    word-break: break-all;
    padding: 10px;
    background-color: #ffffffff;
    border-radius: 20px;
    font-size: 20px;
    margin: 20px auto;
    max-width: 800px;
    text-align: left;
    
}
input , textarea {
 width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
    
}
  
</style>
<body>
    <pre>
        <form action="edit.php?id=<?= $data['id'] ?>" method="post">
   [
{
"id": "<?= $data['id'] ?>",
"name": "<input name='name' type='text' value='<?= $data['name'] ?>'>",
"description": "<input name='description' type='text' value='<?= $data['description'] ?>'>",
"sizes_json": 
 <textarea name='sizes_json'><?php echo $data['sizes_json'] ?></textarea>
,
"price": "<input oninput="calculateDiscount()"  id="productprice" name='price' type='text' value='<?= $data['price'] ?>'>",
"discount": "<input oninput="calculateDiscount()"  id="productdiscount" name='discount' type='text' value='<?= $data['discount'] ?>'>%",
"discount_amount": "<input readonly id="productdiscountamount" name='discount_amount' type='text' value='<?= $data['discount_amount'] ?>'>",
"photos_json": <textarea name='photos_json' rows="4" cols="50"><?php echo $data['photos_json'] ?></textarea>,
"created_at": "<?= $data['created_at'] ?>",
"updated_at": "<?= $data['updated_at'] ?>",
}
]
<button style="margin: 20px auto; display: block; cursor: pointer; height: 40px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; font-size: 16px;" type="submit">Save Changes</button>
</form>
</pre>




    <script src="/admin/src/js/login.js"></script>
    <script src="/admin/src/js/post.js"></script>
   
</body>

</html>