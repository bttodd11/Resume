<!DOCTYPE html>
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
    <img src="img/logo.jpg" alt="">
    <h2>Career Oppportunity</h2>
    <h3>The Future You Have Been Waiting For</h3>
    <form class="form" action="confirmation.php" method="POST">
  <br> First Name: <input type="text"  id="input" name="fname" value="">
<br> Last Name:  <input type="text" id="input" name="lname" value="">
<br>Address: <input type="text"  id="input"name="addd" value="">
<br>Zip Code: <input type="text" id="input" name="zip" value="">
<br>Phone Number: <input type="text" id="input" name="phone" value="">
<br> City:   <input type="text" id="input" name="city" value="">
<br>  State:  <input type="text" id="input"name="state" value="">
<br> Why should we hire you?<br><br><textarea rows="5" cols="80" id="input" name="descr">
</textarea>
  <br>
  <br>
  <input type="file" color name="" value=""><br>
  <input type="submit" name="Submit" value="Send Application">
  </body>
</form>

</html>
