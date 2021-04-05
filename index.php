<?php
session_start();
include('config.php');

$result = mysqli_query($conn,"select * from users")

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
    
    <title>Crud</title>
</head>
<body>
    <div class="container mt-5">
    <div class="row">
    <div class="col-md-10 mx-auto">
    <?php include('alert.php'); ?>
    <h1 class="text-info text-center">CRUD Opertion in PHP</h1>
    <a href="add.php" class="btn btn-success mb-3">Add Data</a>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while($user_data = mysqli_fetch_array($result)){     
      echo "<tr>";
      echo "<td>".$user_data['id']."</td>";
      echo "<td>".$user_data['name']."</td>";
      echo "<td>".$user_data['mobile']."</td>";
      echo "<td>".$user_data['email']."</td>";
      echo "<td><a href='edit.php?id=$user_data[id]' class='btn btn-primary'>Edit</a></td>";
      echo "<td><a href='delete.php?id=$user_data[id]' class='btn btn-danger'>Delete</a></td>";
      echo "</tr>";
    }
    ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
</body>
</html>