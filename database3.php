

<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

    <link rel="stylesheet" href="wt.css">
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <h1 class="logo1">B<span class="h2">lood</span> D<span class="h2">onor</span><span class="h3"><ion-icon name="water"></ion-icon></span>
            </h1>
            <ul>
                <li><a href="database2.php">Home <ion-icon name="home"></ion-icon></a></li>


            </ul>

        </div>
        <a href="database2.php" class="btn">back</a>
<br>
<hr>
        <?php

	$con = mysqli_connect("localhost","root","","tcs");

	
		$location =  $_POST['location'];
		$bgroup = $_POST['bgroup'];

$query4 = "select  id,fname,mobile,bgroup,location from donor where location='$location' and bgroup='$bgroup'";

$result = mysqli_query($con,$query4);

$count = mysqli_num_rows($result);


echo "<table  border='1' width='480px' cellpadding='4' ><tr bgcolor='pink'>"; 
echo "<td>Id</td>";
echo "<td>Fname</td>";
echo "<td>Mobile</td>";
echo "<td>Bgroup</td>";
echo "<td>Location</td>";

while ($line = mysqli_fetch_assoc($result)){

	echo "<tr class='text-light'><td > ".$line['id'].
    	"</td><td> " .$line['fname'] . 
		" </td><td>" .$line['mobile']. 
		"</td><td> " .$line['bgroup']. 
        "</td><td> " .$line['location']. 
		"</td></tr>";
}

echo "</table>";

?>


      

        </div>

</body>
</html>

        
