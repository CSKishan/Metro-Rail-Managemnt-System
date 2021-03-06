<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="button.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <title> Metro Online Management</title>
</head>
<body>


	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" style="font-size: 25px"href="#">Metro Rail Management</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-item nav-link active" style="font-size: 20px"href="admin login.html">Admin login <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" style="font-size: 20px"href="#">Smart card request</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="#">Smart card login</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="trainsandtimings.php">Trains and Timings</a>
      <a class="nav-item nav-link" style="font-size: 20px"href="#">Routes and Stations</a>
      <a class="nav-item nav-link" style="font-size: 20px" href="https://en.wikipedia.org/wiki/Namma_Metro">Explore</a>
      <a class="nav-item nav-link" style="font-size: 20px" href="contact_us.html">Contact us</a>
    
   </div>
  </div>
</nav>
<div class="m" style="background-image: url(map.png); background-size:90%; background-repeat: no-repeat;">
<div class="namescolor" style="text-align: right;color: purple;font-size: 2em;border-left:10px solid white;padding-right:10px;" >
<?php
$link = mysqli_connect("localhost","root","root","BMRCL_Data");
$sql = "SELECT Station_Name FROM station WHERE Route_Id = 3";
$result = mysqli_query($link, $sql);
echo "<h1><strong>Station Name</strong></h1>"."<br>";
echo "<h2>Purple line</h2><br>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "" . $row["Station_Name"]. "<br>";
    }
}
?>
</div>
<div class="namescolor" style="text-align: left;color: green;text;font-size: 2em;padding-left:10px;" >
<?php
$link = mysqli_connect("localhost","root","root","BMRCL_Data");
$sql = "SELECT Station_Name FROM station WHERE Route_Id = 1";
$result = mysqli_query($link, $sql);
echo "<h1><strong>Station Name</strong></h1>"."<br>";
echo "<h2>Green line</h2><br>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "" . $row["Station_Name"]. "<br>";
    }
}
?>

</div>
</div>
<h3>Our Metro Phase 1 network consists of two corridors that include the East West and North-South corridors.</h3>
<ul>
<marquee <font size="27" color="white" class="man" random="28" scrollamount="9" style="color: purple;"><h2>The eastwest corridor is named Purple Line (Purple Line)</h2></b></font></marquee>
<marquee <font size="27" color="white" class="man" random="28" scrollamount="9"style="color: green;"><h2>The northernmost corridor is named Green Line (Green Line)</h2></b></font></marquee>
</ul>

<p>The two corridors will meet at Kempe Gowda Station and Kempe Gowda Station is a two-phase interchange station. The train needs to be replaced at Kempegowda Station from the one-stop station (as the Trinity in the purple route) to the other route to the station (take a pinna of green route). The traveler can purchase the same ticket for the entire journey</p>

</body>
</html>
