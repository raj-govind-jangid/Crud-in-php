<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Add</title>
</head>
<body>
    <div class="container mt-5">
    <?php include('alert.php'); ?>
        <div class="row">
            <div class="col-md-5 mx-auto">
            <h1 class="text-center text-primary mb-4">Add User</h1>
            <a href="index.php" class="btn btn-info" style="margin-left: 330px;">View Users</a>
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label>Mobile:</label>
                        <input type="number" class="form-control" placeholder="Enter Mobile" id="mobile" name="mobile">
                    </div>
                    <div class="form-group">
                        <label>Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter Email" id="email" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include('config.php');
        $inserted = $conn->query("INSERT INTO users(name,email,mobile) VALUES('$_POST[name]','$_POST[email]','$_POST[mobile]')");
        if($inserted){
            $_SESSION["success"] = "User Add Successfully";
            header("Location: http://localhost:4488/crudinphp/add.php");
        }
    }
    ?>
</body>
</html>