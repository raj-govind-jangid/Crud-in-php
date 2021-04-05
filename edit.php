<?php
    session_start();
    include('config.php');
    $id = $_GET['id'];
    $result = mysqli_query($conn,"select * from users where id = $id");
    while($user_data = mysqli_fetch_array($result)){
        $name = $user_data['name'];
	    $email = $user_data['email'];
	    $mobile = $user_data['mobile'];
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST['id'];
        $name=$_POST['name'];
	    $mobile=$_POST['mobile'];
	    $email=$_POST['email'];

        $updated = $conn->query("UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
        if($updated){
            $_SESSION["success"] = "User Updated Successfully";
            header("Location:index.php");
        }
    }
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

    <title>Edit User</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 mx-auto">
            <h1 class="text-center text-primary mb-4">Edit User</h1>
            <a href="index.php" class="btn btn-info" style="margin-left: 330px;">View Users</a>
                <form action="" method="POST">
                    <input type="hidden" value=<?php echo $_GET['id']; ?> name="id">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Name" value=<?php echo $name; ?> name="name">
                    </div>
                    <div class="form-group">
                        <label>Mobile:</label>
                        <input type="number" class="form-control" placeholder="Enter Mobile" value=<?php echo $mobile; ?> name="mobile">
                    </div>
                    <div class="form-group">
                        <label>Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter Email" value=<?php echo $email; ?> name="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>