<?php 
$id = $_GET['id'];
$type = $_GET['type'];
include_once '../../config.php';

$sql = "DELETE FROM $type WHERE id = $id";

$mysqli->query($sql) === TRUE;

 $mysqli->close();

?>
<script>
    const goback = confirm("Delete successful. Do you want to go back to the list?");
    if (goback) {
       window.location.href = '../dash/';
    } else {
         alert("You can continue with other operations.");
         alert("Sorry server action failed. your data permanent deleted. but you can continue with go back show list this data . and this data not working");
         window.history.back();
    }
</script>