<?php

include('connect.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!--font.awesome.library-->
    <link rel="stylesheet" href="css/all.min.css">
    <!--google fonts-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Crud operation</title>
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a></button>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">SI no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from `crudoperation`";
                $result = mysqli_query($connect, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                           echo  '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email. '</td>
                    <td>' . $mobile . '</td>
                   <td>' . $password . '</td>
                    <td> <button class="btn btn-primary "><a href="update.php? updateid=' .$id. '" class="text-light">Update</button>
                    <button class="btn btn-danger  "><a href="delete.php? deleteid=' . $id . '" class="text-light">Delete</button></td>
                </tr>';
                    }
                 
                    
                }

                ?>
               
              


            </tbody>
        </table>

    </div>

</body>

</html>