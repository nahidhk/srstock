<?php 
$id = $_GET['id'];
$type = $_GET['type'];
include_once '../../config.php';

$sql = "DELETE FROM $type WHERE id = $id";

$mysqli->query($sql) === TRUE;

 $mysqli->close();
 echo "Request completed successfully";
 echo "<br>";
echo $_GET['bk'];
?>
<script>
   setTimeout(() => {
       window.location.href = "<?php echo $_GET['bk']; ?>&popup=<?php echo $_GET['popup']; ?>";
   }, 1000);
</script>