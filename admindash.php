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
        <!-- Title and Logout Button Container -->
        <div class="header">
        <h1 class="dashboard-title">Admin Dashboard</h1>
        <div class="logout">
        <a href="login.php" class="logout-btn">Logout</a>
        </div>
        </div>

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
                        <div class="action-buttons">
                            <button class="accept-btn">Accept</button>
                            <button class="reject-btn">Reject</button>
                        </div>
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
            background: white;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            text-align: center; /* Center the text */
        }


        .dashboard-title {
            margin: 0;
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

        .action-buttons {
            margin-top: 10px;
        }

        .action-buttons button {
            padding: 5px 10px;
            margin-right: 10px;
            cursor: pointer;
        }

        .accept-btn {
            background-color: green;
            color: white;
            border: none;
        }

        .reject-btn {
            background-color: red;
            color: white;
            border: none;
        }

        /* Logout Button Styles */
        .logout {
            margin-top: 20px;
        }

        .logout-btn {
            padding: 10px 20px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

    <script>
        // JavaScript code to handle button clicks
        document.addEventListener("DOMContentLoaded", function () {
            var acceptButtons = document.querySelectorAll(".accept-btn");
            var rejectButtons = document.querySelectorAll(".reject-btn");

            acceptButtons.forEach(function (button) {
                button.addEventListener("click", function (event) {
                    // Perform action when accept button is clicked
                    // You can implement the logic to update the appointment status in the database
                    console.log("Appointment accepted");
                });
            });

            rejectButtons.forEach(function (button) {
                button.addEventListener("click", function (event) {
                    // Perform action when reject button is clicked
                    // You can implement the logic to update the appointment status in the database
                    console.log("Appointment rejected");
                });
            });
        });
    </script>
</body>

</html>
