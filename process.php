<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABEL BARANG</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$connection = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO product (nama_barang, harga) VALUES ('$nama_barang', '$harga')";

    if ($connection->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<?php
        $sql = "SELECT * FROM product";
        $db = $connection ->query ($sql);
    ?>
    <div>
    <h1 style="text-align: center;">TABEL BARANG</h1>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>NAMA BARANG</th>
            <th>HARGA</th>
        </tr>
        <?php while ($data = mysqli_fetch_assoc($db)) { ?>
        <tr>
            <td><?php echo $data ["id"]; ?></td>
            <td><?php echo $data ["nama_barang"]; ?></td>
            <td><?php echo $data ["harga"]; ?></td>
        </tr>
        <?php } ?>
    </table>
    <button type="button" class="btn btn-primary" onclick="window.location.href='index.php'">back</button>
    </div>  

</body>
</html>