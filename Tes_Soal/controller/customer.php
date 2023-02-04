<?php
include 'config/connection.php';
$sql = "SELECT *  FROM customer";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['customer_id'] . "'>" . $row['customer_nama'] . "</option>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
