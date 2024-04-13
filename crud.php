<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<html>
	<head>
		<title>CRUD OPERATION</title>
	</head>
		<body>
		  <div class="container my-3">
		      <form action="" name="myfrm"onsubmit="return validate()" method="POST" onblur="validate();">
				<label for="name">ENTER YOUR FIRST NAME:</label>
					<input type="text" name="firstname" placeholder="ENTER YOUR YOUR FIRST NAME" class="container my-2 w-100" required>
				<label for="name">ENTER YOUR LAST NAME:</label>
					<input type="text" name="lastname" placeholder="ENTER YOUR YOUR LAST NAME" class="container my-2 w-100"required>
				<label for="name">ENTER YOUR email:</label>
					<input type="email" name="email" placeholder="ENTER YOUR YOUR email" class="container my-2 w-100"required>	
				<label for="name">ENTER MOBILE NUMBER:</br>
					<input id="phone"  type="tel" pattern="[0-9]{10}" placeholder="xxxxxxxxxx" name="mobileno" class="container my-2 w-100"required />
				
				<label for="password">PASSWORD:</label>
  <input type="password" id="psw" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="container my-2 w-100"required>
				
					<input type="submit" value="login" class="btn btn-primary w-100 mt-3">
					<input type="submit" value="clear" class="btn btn-danger w-100 mt-3">
			  </form>
		  </div>  
		</body>
  </html>
		<?php
		    $con=mysqli_connect("localhost","root","","ravi");
			if(isset($_POST['firstname']))
			{
				$fnm=$_POST['firstname'];
				$lnm=$_POST['lastname'];
				$email=$_POST['email'];
				$mno=$_POST['mobileno'];
				$pwd=$_POST['password'];
				$sql="INSERT INTO`crud`(`firstname`,`lastname`,`email`,`mobileno`,`password`) VALUES('$fnm','$lnm','$email','$mno','$pwd')";
				$result=mysqli_query($con,$sql);
				if($result!=1)
				{
					echo 'invalid';
				}
			}
		?>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
