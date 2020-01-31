<?php
//Manali Surve
 $firstname = trim($_POST['firstname']);
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

?>