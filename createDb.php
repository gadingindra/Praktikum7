<html>
<head>
    <title>Koneksi Database MySQL</title>
</head>
<body>
    <h1>Tes Koneksi dan Create Database MySQL</h1>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "root123";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Create database
        $sql = "create database myDB";
        if (mysqli_query($conn, $sql)) {
            echo "Database created successfully";
        }
        else {
            echo "Error creating database: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>
</body>
</html>