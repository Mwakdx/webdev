<!DOCTYPE html>
<html lang="en">
<head>
<?php
   include "../connection/dbCon.php";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Dashboard</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Nationality</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
               include "../connection/dbCon.php";

            $sql = "SELECT * FROM `registertable`"; // Replace with your table name
            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["ID"] . "</td>";
                    echo "<td>" . $row["First_Name"] . "</td>";
                    echo "<td>" . $row["Last_Name"] . "</td>";
                    echo "<td>" . $row["Gender"] . "</td>";
                    echo "<td>" . $row["Nationality"] . "</td>";
                    echo "<td>" . $row["Email"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No data available</td></tr>";
            }

            $connection->close();
            ?>

        </tbody>
    </table>
    
<center> <a href="../Login/Login.php" class="styled-link"> Log Out </a></center>


</body>
</html>