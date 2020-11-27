<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070110_test', '3654Pp', 'exam', 3306);
$name=$_POST['Product'];
$comment=$_POST['Price'];
$link=$_POST['Amount'];
$sql="UPDATE guestbook SET Product='$product',Price='$price',Amount='$amount' WHERE ID='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
