<?php


include("connect.php");
$id = $_GET['updateid'];
$sql = "select * from `crudoperation` where id=$id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crudoperation` set id='$id',name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result = mysqli_query($connect, $sql);
    if ($result) {

        echo "updated successfully";
    } else {
        die(mysqli_error($connect));
    }
}













?>










<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!--font.awesome.library-->
    <link rel="stylesheet" href="css/all.min.css">
    <!--google fonts-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Crud operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" autocomplete="off" value=<?php echo $name ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off" value=<?php echo $email ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile" autocomplete="off" value=<?php echo $mobile ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="text" class="form-control" name="password" placeholder="Enter your password" autocomplete="off" value=<?php echo $password ?>>
            </div>



            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>