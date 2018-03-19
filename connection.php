<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2>welcome bro</h2>

	<?php
   
   $name=$_POST["firstname"];

   $dbc=mysqli_connect("localhost","zain","devthecode5","aliendatabase")
        or die("error connecting to the database");

   $query="insert into aliens_abduction(first_name)".
          "values($name) ";     	    
 
   $result=mysqli_query($dbc,$query)
           or die("error querying database");

   mysqli_close($dbc);        

	    ?>


</body>
</html>