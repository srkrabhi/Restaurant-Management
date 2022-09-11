<?php include('partials-front/menu.php'); ?>
<?php
  if(isset($_GET['food_id']))
  {
      //Get the Food id and details of the selected food
      $food_id = $_GET['food_id'];

      //Get the DEtails of the SElected Food
      $sql = "SELECT * FROM tbl_order WHERE id=$order_id";
 $id = $_GET['id'];
$sql = "SELECT * from tbl_order WHERE id=$id";
$result = mysqli_query($conn, $sql);
echo"<center><h1><u>Order Details</u></h1></center>";
echo "<center><table border='3'><tr><td>OrderID</td><td>Food</td><td>Price</td><td>Qty</td><td>Total</td><td>orderDate</td><td>Status</td><td>Name</td><td>Contact</td><td>Email</td><td>Address</td></tr>";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<td><td>" . $row["id"]. "</td><td>" . $row["food"]. "</td><td> " . $row["price"]."</td><td> " . $row["qty"]." </td><td>". $row["total"]."</td><td>". $row["order_date"]."</td><td>". $row["status"]."</td><td>". $row["customer_name"]."</td><td>". $row["customer_contact"]."</td><td>". $row["customer_email"]."</td><td>". $row["customer_address"]."</td><tr>";
  }
  echo"</table></center>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
		<a href="order.php">Back</a>
    <?php include('partials-front/footer.php'); ?>