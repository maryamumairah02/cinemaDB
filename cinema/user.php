<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $movie_id=$_POST['movie_id'];
    $movie_name=$_POST['movie_name'];
    $movie_rating=$_POST['movie_rating'];
    $duration=$_POST['duration'];
    $genre=$_POST['genre'];
    $year=$_POST['year'];
    $director=$_POST['director'];

    $sql="insert into `movie`(movie_id,movie_name,movie_rating,duration,genre,year,director)
    values('$movie_id','$movie_name','$movie_rating','$duration','$genre','$year','$director')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted sucessfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Cinema Management</title>
</head>

<body>
    <div class="container my-5">
    <form method="post">
        <div class="form-group">
        <label>Movie ID</label>
        <input type="text" class="form-control" placeholder="Enter the movie ID" name="movie_id" autocomplete="off">
        </div>

        <div class="form-group">
        <label>Movie Name</label>
        <input type="text" class="form-control" placeholder="Enter the movie name" name="movie_name" autocomplete="off">
        </div>

        <div class="form-group">
        <label>Movie Rating</label>
        <input type="text" class="form-control" placeholder="Enter the movie rating" name="movie_rating" autocomplete="off">
        </div>

        <div class="form-group">
        <label>Duration</label>
        <input type="text" class="form-control" placeholder="Enter the duration" name="duration" autocomplete="off">
        </div>

        <div class="form-group">
        <label>Genre</label>
        <input type="text" class="form-control" placeholder="Enter the genre" name="genre" autocomplete="off">
        </div>

        <div class="form-group">
        <label>Year</label>
        <input type="text" class="form-control" placeholder="Enter the year" name="year" autocomplete="off">
        </div>

        <div class="form-group">
        <label>Director</label>
        <input type="text" class="form-control" placeholder="Enter the director name" name="director" autocomplete="off">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>
</body>
</html>