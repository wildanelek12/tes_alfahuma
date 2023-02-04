<?php
include '../config/connection.php';
$customer_id = $_POST['customer_id'] ?? 1;
$sql = "SELECT *  FROM sales where customer_id=" . $customer_id;
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo 'Rp.' . $row['total_sales'] . '<br>';
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
