<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add Movie</a>
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Movie ID</th>
                    <th scope="col">Movie Name</th>
                    <th scope="col">Movie Rating</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Year</th>
                    <th scope="col">Director</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $sql="Select * from `movie`";
                    $result=mysqli_query($con,$sql);
                    if ($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $movie_id=$row['movie_id'];
                            $movie_name=$row['movie_name'];
                            $movie_rating=$row['movie_rating'];
                            $duration=$row['duration'];
                            $genre=$row['genre'];
                            $year=$row['year'];
                            $director=$row['director'];
                            echo ' <tr>
                            <th scope="row">'.$movie_id.'</th>
                            <td>'.$movie_name.'</td>
                            <td>'.$movie_rating.'</td>
                            <td>'.$duration.'</td>
                            <td>'.$genre.'</td>
                            <td>'.$year.'</td>
                            <td>'.$director.'</td>
                            <td>
                                <button class="btn btn-primary"><a href="update.php?updateid='.$movie_id.'" class="text-light">Update</a></button>
                                <button class="btn btn-danger"><a href="delete.php?deleteid='.$movie_id.'" class="text-light">Delete</a></button>
                            </td>
                            </tr>';
                        }

                    }
                ?>

            </tbody>
    </div>
</body>
</html>