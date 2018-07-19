<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
  <link rel="stylesheet" href="stylesheet.css" type="text/css">
  <ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right" href="#about">About</a></li>
</ul>
  </head>
  <body>
  </body>
  </html>

<?php
#MySQL Connection

if(isset( $_POST['fname']) && !empty($_POST['fname'] ))
{
  $data = $_POST['fname'] ;
}
if(isset( $_POST['lname']) && !empty($_POST['lname'] ))
{
  $data1 = $_POST['lname'] ;
}
if(isset( $_POST['addd']) && !empty($_POST['addd'] ))
{
  $data2 = $_POST['addd'] ;
}
if(isset( $_POST['zip']) && !empty($_POST['zip'] ))
{
  $data3 = $_POST['zip'] ;
}
if(isset( $_POST['phone']) && !empty($_POST['phone'] ))
{
  $data4 = $_POST['phone'] ;
}
if(isset( $_POST['city']) && !empty($_POST['city'] ))
{
  $data5 = $_POST['city'] ;
}
if(isset( $_POST['state']) && !empty($_POST['state'] ))
{
  $data6 = $_POST['state'] ;
}
if(isset( $_POST['descr']) && !empty($_POST['descr'] ))
{
  $data7 = $_POST['descr'] ;
}
else{
  header('location:index.php');
  exit();
}


// Post Variables
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$addd = $_POST['addd'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$state = $_POST['state'];
$descr = $_POST['descr'];

$username = "root";
$password = "password";
$hostname = "localhost";
$database = "resume";

$mysqli = mysqli_connect( $hostname, $username, $password, $database);
// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}


// Insert into table info
$insert = "INSERT INTO info (`fname`,`lname`,`addd`,`zip`,`phone`,`city`,`state`,`descr`) VALUES ('$data','$data1','$data2','$data3','$data4','$data5','$data6','$data7')";

if (mysqli_query($mysqli, $insert) && !empty($fname && $lname && $city && $state && $addd && $phone && $zip)) {
    echo "New record created successfully" . '<br>';
} else {
    echo "Error <br>" . mysqli_error($mysqli);
}



if(!empty($fname && $lname && $city && $state && $addd && $zip && $phone && $descr))
{
echo 'Thank you for applying. We will review your application and we will be in contact if you are a good fit.  </div>' . '<br>'.'<br>';

}
else {
  echo 'Please enter all values';
}

# Selecting from the MySQL Database
$sql = "SELECT id, fname, lname, city, state, addd, zip, phone, state, descr FROM resume";

#Bring the data back from the MySQL $database

$result = mysqli_query($mysqli, $sql);


// if (mysqli_num_rows($result) > 0 ) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo '' . $row['id'] . '<br>' . "First Name:". $row["fname"] .'<br>'. "Last Name: " . $row["lname"]. '<br>' . "City: " . $row["city"] . '<br>' . "State: " . $row["state"] .'<br>' .'<br>';
//     }
// } else {
//     echo "0 results";
// }
// $mysqli->close();
//

 ?>
