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
   [
{
"id": "15",
"name": "<input type='text' value='<?= $data['name'] ?>'>",
"description": "<input type='text' value='<?= $data['description'] ?>'>",
"sizes_json": 
 <textarea><?php echo $data['sizes_json'] ?></textarea>
,
"price": "<input type='text' value='<?= $data['price'] ?>'>",
"discount": "<input type='text' value='<?= $data['discount'] ?>%'>",
"discount_amount": "<input type='text' value='<?= $data['discount_amount'] ?>'>",
"photos_json": <textarea rows="4" cols="50"><?php echo $data['photos_json'] ?></textarea>,
"created_at": "2025-08-08 12:02:08"
}
]

</pre>



    <script src="/admin/src/js/login.js"></script>
   
</body>

</html>