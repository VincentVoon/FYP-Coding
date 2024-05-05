<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HarmonyCare-Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="appointments">
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'harmonycare') or die('connection failed');
            // Check connection
            if ($conn->connect_errno) {
                echo "Failed to connect to MySQL: " . $conn->connect_error;
                exit();
            }

            // Fetch appointments from the database
            $query = "SELECT * FROM tblappointment";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="appointment">
                        <p><strong>Mobile Number:</strong> <span class="mobile-number"><?php echo $row['mobile']; ?></span></p>
                        <p><strong>Service:</strong> <span class="service"><?php echo $row['services']; ?></span></p>
                        <p><strong>Date:</strong> <span class="date"><?php echo $row['date']; ?></span></p>
                        <p><strong>Time:</strong> <span class="time"><?php echo $row['time']; ?></span></p>
                        <p><strong>Special Request:</strong> <span class="special"><?php echo $row['special']; ?></span></p>
                    </div>
                    <?php
                }
            } else {
                echo "<p>No appointments found.</p>";
            }

            // Close connection
            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>
</html>


<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: #4070f4;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background:white;
}

h1 {
    text-align: center;
}

.appointment {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 20px;
}

.appointment p {
    margin: 5px 0;
}

.appointment p strong {
    font-weight: bold;
    margin-right: 5px;
}

</style>
