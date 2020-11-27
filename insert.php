<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ttt.mysql.database.azure.com', 'ins888@ttt', '022943654Pp', 'exam', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$product = $_POST['product'];
$price = $_POST['price'];
$amount = $_POST['amount'];
$total = $_POST['price*amount'];


$sql = "INSERT INTO guestbook (Product , Price , Amount , Total) VALUES ('$product', '$price', '$amount', '$total')";


if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
