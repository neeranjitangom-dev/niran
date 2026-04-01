<?php
$conn = new mysqli("localhost", "root", "", "event_db");

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<h2>Registered Users</h2>";
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
</tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>".$row["id"]."</td>
    <td>".$row["name"]."</td>
    <td>".$row["email"]."</td>
    <td>".$row["phone"]."</td>
    </tr>";
}

echo "</table>";
?>