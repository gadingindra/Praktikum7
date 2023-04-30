<html>
<head>
    <title>Koneksi Database MySQL</title>
</head>
<body>
    <h1>Insert Into Database MySQL</h1>
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

        // Insert into database
        $sql = "insert into liga (kode, negara, champion)
        values ('Jer', 'Jerman', '4')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        }
        else {
            echo "Error: ".mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>
</body>
</html>