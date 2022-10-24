<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="margin:50px;">
    
    <h3 style="text-align:center"> Table Reservation Details </h3>

    <br>

    
    <table class="table">
            <thead>

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>People</th>
                    <th>Tel</th>
                    <th>Request</th>
                </tr>
            </thead>

            <tbody>

            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "bookingproject";

            //Create Conenction
            $connection = new mysqli($servername, $username, $password, $database);

            //Check Connection
            if($connection->connect_error){
                die("Connection failed: " .$connection->connect_error);
            }

            //Read data from the database
            $sql = "SELECT * FROM booktable";
            $result = $connection->query($sql);

            //Query is connected or not
            if(!$result){
                die("Invalid query: " .$connection->error);
            }

            //Read each row
            while($row = $result->fetch_assoc()){
                
                echo "<tr>

                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["date"] . "</td>
                    <td>" . $row["time"] . "</td>
                    <td>" . $row["select1"] . "</td>
                    <td>" . $row["tel"] . "</td>
                    <td>" . $row["request"] . "</td>

                    <td>
                        <a class='btn btn-primary btn-sm' href='update'>Update</a>
                        <a class='btn btn-danger btn-sm' href='delete'>Delete</a>


                    </td>

                </tr>";
            }

              
                ?>
            </tbody>

    </table>

</body>
</html>