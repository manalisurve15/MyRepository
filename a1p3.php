<! –– Manali Surve ––> 
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>
<?php

        $firstname = "";
        if(!empty($_POST['firstname'])){
            $firstname = $_POST['firstname'];

			if(isDuplicate($firstname) == 1)
			{
                echo "Duplicate character found";
			}else 
			{
                echo "Duplicate character not found";
            }
        }
        function isDuplicate($firstname){

            $firstname =strtolower(trim($firstname));
            $firstname = str_replace(" "," ", $firstname);

            $firstname_arr = str_split($firstname);

            sort($firstname_arr, SORT_ASC);

            foreach ($firstname_arr as $i => $value){

				if($i+1 < sizeof($firstname_arr) && $value == $firstname_arr[$i+1])
				{
					
                    return true;
                }
				else
				{
                    false;
                }
            }

        }

?>
<form method="post" action="a1p3.php">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>