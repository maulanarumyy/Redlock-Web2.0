<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB REDLOCK DATABASES</title>
</head>
<body>
    <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-users mr-2"></i>WEB REDLOCK USER DATABASES</h3><hr>
        <div class="row text-white">
          <table class="table table-dark table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID Users</th>
                    <th scope="col">Name Users</th>
                    <th scope="col">Address Users</th>
                    <th scope="col">Department Users</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sname = "mysql_db";
                    $uname = "root";
                    $passname = "admin123";
                    $dbname = "dbRedlockWeb";

                    $connection = new mysqli($sname, $uname, $passname, $dbname);

                    if ($connection->connect_error) 
                    {
                        die("Connection Failed: " . $connection->connect_error);
                    }

                    $que = "SELECT IdUsers, NameUsers, AddressUsers, DepartmentUsers FROM users";
                    $result = $connection->query($que);

                    if ($result->num_rows > 0) 
                    {
                        while($row = $result->fetch_assoc())
                        {
                            echo "<tr><td>" . $row["IdUsers"]. 
                                 "</td><td>" . $row["NameUsers"]. 
                                 "</td><td>" . $row["AddressUsers"]. 
                                 "</td><td>" . $row["DepartmentUsers"]. 
                                 "</td></tr>";
                            echo "Total Users: $result->num_rows";
                        }
                    } 
                    else 
                    {
                        echo "No Results";
                    }
                    $connection->close();
                ?>          
            </tbody>
          </table>
    </div>   
</body>
</html>