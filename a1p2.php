<! –– Manali Surve ––> 
<?php

 $firstname = trim($_POST["firstname"]);
 $lastname =trim($_POST['lastname']);
 $age = trim($_POST['age']);

  if(!empty($firstname) && ctype_alpha($firstname) == true) // Checking if variable not empty & contains only alphabets
  {
      echo "<p>Valid first name: {$firstname}</p>";
  } else
  {
      echo "<p>Invalid first name.</p>";
  }

  if(!empty($lastname) && ctype_alpha($lastname) == true) // Checking if variable not empty & contains only alphabets
  {
      echo "<p>Valid last name: {$lastname}</p>";
  } else
  {
      echo "<p>Invalid lastname.</p>";
  }

 if(!empty($age) && is_numeric($age) == true) // Checking if variable not empty & contains only numbers
    {
    echo "<p> Valid age: {$age}.</p>";
    } else
    {
    echo "<p>Invalid Age.</p>";
    }
	if(isset($_POST['newsletter'])) // Checking if button value is selected
	{ 
		$newsletter = $_POST['newsletter']; 
	}
	else
	{		
	   echo  '<p>Please Select a Button</p>';	   
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>

<body>


<form method="post">


	<fieldset><legend>Account Creation:</legend>

	<p><label>First Name: <input type="text" name="firstname" size="20" maxlength="40" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>"></label></p>
	
	<p><label>Last Name: <input type="text" name="lastname" size="20" maxlength="40" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>"></label></p>

	<p><label>Age: <input type="text" name="age" size="20" maxlength="40" value="<?php if (isset($_POST['age'])) echo $_POST['age']; ?>"></label></p>
	
	<p><label for="newsletter">Subscribe to newsletter: </label><input type="radio" name="newsletter" value="Y"> Yes <input type="radio" name="newsletter" value="N"> No</p>

	</fieldset>

	<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>

</body>
</html>