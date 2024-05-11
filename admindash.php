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
            session_start();
            

            // Fetch appointments from the database
            $query = "SELECT * FROM tblappointment
                      INNER JOIN tblregister 
                      ON tblregister.userid = tblappointment.userid
                      WHERE status = 'Pending'";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $bookingid = $row['bookingid'];
                    $mobile = $row['mobile'];
                    $services = $row['services'];
                    $date = $row['date'];
                    $time = $row['time'];
                    $special = $row['special'];
                    $status = $row['status'];
                    $name = $row['name'];
                    $email = $row['email'];
                    ?>
                    <div class="appointment">
                        <p><strong>Status:</strong> <span class="mobile-number"><?php echo $status; ?></span></p>
                        <p><strong>Mobile Number:</sstrong> <span class="mobile-number"><?php echo $mobile; ?></span></p>
                        <p><strong>Service:</strong> <span class="service"><?php echo $services; ?></span></p>
                        <p><strong>Date:</strong> <span class="date"><?php echo $date; ?></span></p>
                        <p><strong>Time:</strong> <span class="time"><?php echo $time; ?></span></p>
                        <p><strong>Special Request:</strong> <span class="special"><?php echo $special; ?></span></p>
                        <div class="action-buttons">
                            <form id ="approveButton" action="mailnotification.php" method="POST" style="display:inline">
                                <input type="hidden" name="bookingid" value="<?php echo $bookingid?>">
                                <input type="hidden" name="status" value="<?php echo "Approved"?>">
                                <input type="hidden" name="userName" value="<?php echo $name?>">
                                <input type="hidden" name="userEmail" value="<?php echo $email?>">
                                <button class="accept-btn" type="submit">Accept</button>
                            </form>
                            <form id ="rejectButton" action="mailnotification.php" method="POST" style="display:inline">
                                <input type="hidden" name="bookingid" value="<?php echo $bookingid?>">
                                <input type="hidden" name="status" value="<?php echo "Rejected"?>">
                                <input type="hidden" name="userName" value="<?php echo $name?>">
                                <input type="hidden" name="userEmail" value="<?php echo $email?>">
                                <button class="reject-btn">Reject</button>
                            </form>
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
       document.addEventListener("DOMContentLoaded", function () {
    var acceptButtons = document.querySelectorAll(".accept-btn");
    var rejectButtons = document.querySelectorAll(".reject-btn");

    acceptButtons.forEach(function (button) {
        button.addEventListener("click", function (event) {
            // Perform action when accept button is clicked
            // You can implement the logic to update the appointment status in the database
            var form= document.getElementById("approveButton");
            form.submit();
            // Remove the parent element (the appointment) from the DOM
            var appointment = button.closest(".appointment");
            appointment.parentNode.removeChild(appointment);

            console.log("Appointment accepted");
        });
    });

    rejectButtons.forEach(function (button) {
        button.addEventListener("click", function (event) {
            // Perform action when reject button is clicked
            // You can implement the logic to update the appointment status in the database
            var form= document.getElementById("approveButton");
            form.submit();
            // Remove the parent element (the appointment) from the DOM
            var appointment = button.closest(".appointment");
            appointment.parentNode.removeChild(appointment);

            console.log("Appointment rejected");
        });
    });
});
    </script>
</body>

</html>
