<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'ttt.mysql.database.azure.com', 'ins888@ttt', '022943654Pp', 'exam', 3306);
$product=$_POST['Product'];
$price=$_POST['Price'];
$amount=$_POST['Amount'];
$total = $_POST['Price*Amount'];
$sql="UPDATE guestbook SET Product='$product',Price='$price',Amount='$amount',Total='$total'  WHERE ID='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
