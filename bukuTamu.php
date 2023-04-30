<html>
<head>
    <title>Buku Tamu</title>
</head>
<body>
    <h1>Portal Layanan Mahasiswa Fasilkom</h1>
    <h2>Data Buku Tamu</h2>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "root123";
        $dbname = "myDB";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Select database
        $sql = "select * from buku_tamu";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table><tr>
            <th>ID</th><th>Nama</th><th>Email</th><th>Isi</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$row["id_bt"].
                "</td><td>".$row["nama"].
                "</td><td>".$row["email"].
                "</td><td>".$row["isi"]."</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "0 results";
        }

        mysqli_close($conn);
    ?>
    
    <style type="text/css">
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
    </style>
</body>
</html>