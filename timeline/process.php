<?php 
  $con = mysqli_connect("localhost","root","","hhf");
  $i = 1; 
  
  $percentComplete1 = $_POST['PercentageCompleted1'];
  $comment1 = $_POST['Comment1'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete1', '$comment1')";
  var_dump(mysqli_query($con,$query));

  $percentComplete2 = $_POST['PercentageCompleted2'];
  $comment2 = $_POST['Comment2'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete2', '$comment2')";
  mysqli_query($con,$query);

  $percentComplete3 = $_POST['PercentageCompleted3'];
  $comment3 = $_POST['Comment3'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete3', '$comment3')";
  mysqli_query($con,$query);

  $percentComplete4 = $_POST['PercentageCompleted4'];
  $comment4 = $_POST['Comment4'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete4', '$comment4')";
  mysqli_query($con,$query);

  $percentComplete5 = $_POST['PercentageCompleted5'];
  $comment5 = $_POST['Comment5'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete5', '$comment5')";
 mysqli_query($con,$query);

  $percentComplete6 = $_POST['PercentageCompleted6'];
  $comment6 = $_POST['Comment6'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete6', '$comment6')";
  mysqli_query($con,$query);

  $percentComplete7 = $_POST['PercentageCompleted7'];
  $comment7 = $_POST['Comment7'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete7', '$comment7')";
  mysqli_query($con,$query);

  $percentComplete8 = $_POST['PercentageCompleted8'];
  $comment8 = $_POST['Comment8'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete8', '$comment8')";
  mysqli_query($con,$query);

  $percentComplete9 = $_POST['PercentageCompleted9'];
  $comment9 = $_POST['Comment9'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete9', '$comment9')";
  mysqli_query($con,$query);

  $percentComplete10 = $_POST['PercentageCompleted10'];
  $comment10 = $_POST['Comment10'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete10', '$comment10')";
 mysqli_query($con,$query);

  $percentComplete11 = $_POST['PercentageCompleted11'];
  $comment11 = $_POST['Comment11'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete11', '$comment11')";
  mysqli_query($con,$query);

  $percentComplete12 = $_POST['PercentageCompleted12'];
  $comment12 = $_POST['Comment12'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete12', '$comment11')";
  mysqli_query($con,$query);

  $percentComplete13 = $_POST['PercentageCompleted13'];
  $comment13 = $_POST['Comment13'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete13', '$comment13')";
  mysqli_query($con,$query);

  $percentComplete14 = $_POST['PercentageCompleted14'];
  $comment14 = $_POST['Comment14'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete14', '$comment14')";
  mysqli_query($con,$query);

  $percentComplete15 = $_POST['PercentageCompleted15'];
  $comment15 = $_POST['Comment15'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete15', '$comment15')";
 mysqli_query($con,$query);

  $percentComplete16 = $_POST['PercentageCompleted16'];
  $comment16 = $_POST['Comment16'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete16', '$comment16')";
  mysqli_query($con,$query);
  
  $percentComplete17 = $_POST['PercentageCompleted17'];
  $comment17 = $_POST['Comment17'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete17', '$comment17')";
  mysqli_query($con,$query);

  $percentComplete18 = $_POST['PercentageCompleted18'];
  $comment18 = $_POST['Comment18'];
  $query = "INSERT INTO monthupdate(complete,comment) VALUES('$percentComplete18', '$comment18')";
 mysqli_query($con,$query);

 header('Location: proj_selection_and_input.php');

/* if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/

?>