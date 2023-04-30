<html>
<head>
    <title>Koneksi Database MySQL</title>
</head>
<body>
    <h1>Select Statement Database MySQL</h1>
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
        $sql = "select * from liga";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table><tr>
            <th>ID</th><th>Kode</th><th>Negara</th><th>Champion</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$row["id"].
                "</td><td>".$row["kode"].
                "</td><td>".$row["negara"].
                "</td><td>".$row["champion"]."</td></tr>";
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
            border: 1px solid;
            text-align: center;
        }
    </style>
</body>
</html>