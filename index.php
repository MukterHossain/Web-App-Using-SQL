<!-- Php connection part -->

<?php

$sername="localhost";
$uname="root";
$pass="";
$dbname="infoStoreDB";
$conn=new mysqli($sername,$uname,$pass,$dbname);
if ($conn->connect_error){
    die("Connection Error : ".$conn->connect_error);
}

$sql_fetch = "SELECT fname, lname, email, phone FROM infoTable";
$result= $conn->query($sql_fetch);

// $sql_into = "INSERT INTO infoTable (fname, lname, email, phone) VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["email"]."','".$_POST["phone"]."')";



?>

<!-- php data selection part ended -->

<!-- html part start -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>

        <link rel="stylesheet" href="css/fontawesome-all.min.css" />
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <section class="main-container">
            <div class="left-menu">
                <div class="active-sub" id="form-sub" onclick="showData(formsec,infoSec,formSub,showInfo)">
                    <i class="fas fa-user-edit"></i>
                </div>
                <div class="submenu" id="show-info" onclick="showData(infoSec,formsec,showInfo,formSub)">
                    <i class="fas fa-tasks"></i>
                </div>
            </div>
            <section class="main-content">
                <section class="form-sec" id="formsec">
                    <form action="saved.php" id="form-sec" method="post">
                        <h1 class="form-hd">Form</h1>
                        <input type="text" name="fname" id="in-fname" placeholder="First Name" require />
                        <input type="text" name="lname" id="in-lname" placeholder="Last Name" require />
                        <input type="email" name="email" id="in-email" placeholder="Eamil" require />
                        <input type="number" name="phone" id="in-phone" placeholder="Phone" require />
                        <input type="submit" value="submit" />
                    </form>
                </section> 

                <section class="task-sec" id="info-sec" style="overflow-y:auto;">
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th>phone</th>
                        </tr>
                        <?php
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                        
                                    echo "<tr> <td>". $row["fname"]." ".$row["lname"]."</td> <td>". $row["email"]."</td> <td>". $row["phone"]."</td><td id='sp-td' ><a id='sp-a' href='delete.php?del=".$row["phone"]."'>X</a></td> </tr>";

                                    }
                                } 
                                $conn->close();
                        ?>
                    </table>
                </section>
            </section>
        </section>

        <script src="js/font.awesome.all.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html> 

<!-- html part ended -->



