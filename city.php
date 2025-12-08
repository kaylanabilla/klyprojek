<?php
include "koneksi.php";

$query = "SELECT * FROM City";
$data = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Data Kota</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 30px auto;
            font-family: Arial;
        }
        table, th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: left;
        }
        th {
            background: #f0f0f0;
        }
        h2 {
            text-align: center;
            font-family: Arial;
        }
    </style>
</head>
<body>

<h2>Daftar Data Kota</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Country Code</th>
        <th>District</th>
        <th>Population</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($data)) { ?>
    <tr>
        <td><?= $row['ID']; ?></td>
        <td><?= $row['Name']; ?></td>
        <td><?= $row['CountryCode']; ?></td>
        <td><?= $row['District']; ?></td>
        <td><?= number_format($row['Population']); ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
