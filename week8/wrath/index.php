<html>
<html lang="en">

<head>
    <title>LAYER 5 :: WRATH</title>
    <link rel="icon" href="../images/icon.ico" type="image/x-icon">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
	<script src="../js/music.js"></script>
</head>

<body class="wrath" onclick="musicLoad('wrath');">
<div class="topnav">
	<p id="date"></p>
	<nav class="navcont">
		<a href="../home">Home</a>
		<div class="drop">
		<a href="javascript:void(0)" class="quicknav">Quick Navigation</a>
		<div class="dropcont">
			<a href="../limbo">Limbo</a>
			<a href="../lust">Lust</a>
			<a href="../gluttony">Gluttony</a>
			<a href="../greed">Greed</a>
			<a href="../wrath">Wrath</a>
			<a href="../heresy">Heresy</a>
			<a href="../violence">Violence</a>
		</div>
		</div>
		<a href="../contact">Contact</a>
	</nav>	
</div>
<script src="../js/genscript.js"></script>

<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="form-centered">
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="formthing">  
  <span class="form_label">Name:</span> <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <span class="form_label">E-mail:</span> <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <span class="form_label">SOCITCloud Website Link:</span> <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  <span class="form_label">Comment:</span> <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <span class="form_label">Gender:</span>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"><span class="radiotxt">Female</span>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"><span class="radiotxt">Male</span>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"><span class="radiotxt">Other </span> 
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
echo "<br>";
?>

<?php
$servername = "localhost";
$username = "webprogmi222_sf221";
$password = "xE*Y2nleNVvZm[!!";
$dbname = "webprogmi222_sf221";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  echo "<script>alert('Connection failed!');</script>";
}

$sql = "INSERT INTO kumandal_myguests (name, email, gender, website, comment) VALUES ('$name', '$email', '$gender', '$website', '$comment')";

if ($conn->query($sql) === TRUE) {
  echo "Your feedback has been recorded. Thank you!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<div class="bottom">
<canvas id="descendArrow" class="downArrow"></canvas>
<a class="dselect_me" id="selectArea" href="../limbo"></a>
</div>
<script src="../js/goDown.js"></script>
</body>
</html>