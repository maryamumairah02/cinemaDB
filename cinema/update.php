<?php
include 'connect.php';
$movie_id=$_GET['updateid'];
$sql="Select * from `movie` where movie_id='$movie_id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$movie_id=$row['movie_id'];
$movie_name=$row['movie_name'];
$movie_rating=$row['movie_rating'];
$duration=$row['duration'];
$genre=$row['genre'];
$year=$row['year'];
$director=$row['director'];


if(isset($_POST['submit'])){
    $movie_id=$_POST['movie_id'];
    $movie_name=$_POST['movie_name'];
    $movie_rating=$_POST['movie_rating'];
    $duration=$_POST['duration'];
    $genre=$_POST['genre'];
    $year=$_POST['year'];
    $director=$_POST['director'];

    $sql="update `movie` set movie_id='$movie_id', movie_name='$movie_name', movie_rating='$movie_rating', duration=$duration, genre='$genre', year=$year, director='$director'
    where movie_id='$movie_id'";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Updated sucessfully";
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
        <input type="text" class="form-control" placeholder="Enter the movie ID" name="movie_id" autocomplete="off" value=<?php echo $movie_id;?>>
        </div>

        <div class="form-group">
        <label>Movie Name</label>
        <input type="text" class="form-control" placeholder="Enter the movie name" name="movie_name" autocomplete="off" value=<?php echo $movie_name;?>>
        </div>

        <div class="form-group">
        <label>Movie Rating</label>
        <input type="text" class="form-control" placeholder="Enter the movie rating" name="movie_rating" autocomplete="off" value=<?php echo $movie_rating;?>>
        </div>

        <div class="form-group">
        <label>Duration</label>
        <input type="text" class="form-control" placeholder="Enter the duration" name="duration" autocomplete="off" value=<?php echo $duration;?>>
        </div>

        <div class="form-group">
        <label>Genre</label>
        <input type="text" class="form-control" placeholder="Enter the genre" name="genre" autocomplete="off" value=<?php echo $genre;?>>
        </div>

        <div class="form-group">
        <label>Year</label>
        <input type="text" class="form-control" placeholder="Enter the year" name="year" autocomplete="off" value=<?php echo $year;?>>
        </div>

        <div class="form-group">
        <label>Director</label>
        <input type="text" class="form-control" placeholder="Enter the director name" name="director" autocomplete="off" value=<?php echo $duration;?>>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
    </div>
</body>
</html>