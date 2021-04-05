<?php
    if(isset($_SESSION["success"]) && !empty($_SESSION["success"])){
    echo "<div class='alert alert-success'><strong>". $_SESSION["success"] ."</strong></div>";
    session_destroy();
    }
?>