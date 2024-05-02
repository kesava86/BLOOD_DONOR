
<?php
	$con = mysqli_connect("localhost","root","","tcs");
		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		$location =  $_POST['location'];
		$bgroup = $_POST['bgroup'];
		$mobile =$_POST['mobile'];


	//$query2 = "create table donor(id int not null auto_increment primary key,fname varchar(30),email varchar(30),pass varchar(20),cpass varchar(20),location varchar(20),bgroup varchar(5),mobile int);";

	$query = "insert into donor(id,fname,email,pass,cpass,location,bgroup,mobile) values(NULL,'$fname','$email','$pass','$cpass','$location','$bgroup','$mobile')";

	//$query  = "insert into donor(id,fname,email,pass,cpass,location,bgroup,mobile) values(NULL,'kesava','kesava@gmail.com','King@123','King@123','Andhra Pradesh','o+',998765431)";
	$result2 = mysqli_query($con,$query);
	


/*/*
while($out = mysqli_fetch_assoc($result)){
	echo $out['fname']." ".$out['email']."".$out['password']."".$out['location']."".$out['bgroup']."".$out['mobile']."";
}

*/


                
	

?>



<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Successful</title>
    <link rel="stylesheet" href="wt2.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	
	</head>
<body>
	<div class="banner">
        <div class="navbar">
            <h1 class="logo1">B<span class="h2">lood</span> D<span class="h2">onor</span><span class="h3"><ion-icon name="water"></ion-icon></span>
            </h1>
            <ul>
                <li><a href="wt_project3.php">Home <ion-icon name="home"></ion-icon></a></li>


            </ul>
        </div>
        <h3  class="error1">
			Registered Succesfully!
		</h3>
		<a href="wt_progject2.php" class="log">Login</a>
<?php 
  

?>

		
	</div>

    
	
</body>

</html>


