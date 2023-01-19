<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $movie_id=$_GET['deleteid'];

        $sql="delete from `movie` where movie_id = '$movie_id'";
        $result=mysqli_query($con,$sql);
        if($result){
            // echo "Deleted successfull";
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>