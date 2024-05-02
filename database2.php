<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

    <link rel="stylesheet" href="wt3.css">
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
        <div class="container">
            <form action="database3.php" method="POST">
            <div class="loc">
                <br>
                <br>
                <br>
                <label for="loc" class="form-label">Location:</label>
                <select name="location" id="location" class="form-select">
                <option value="">--Select state--</option>

                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Telangana">Telangana</option>

                </select>
                <span class="error" id="locationerror"></span>


            </div>
            <br>
            <br>
            <br>
            <div class="bgroup">
                <label for="bgroup" class="form-label">BloodGroup:</label>
                <select name="bgroup" id="bgroup" class="form-select">
                    <option value="">--Select BloodGroup--</option>
                    <option value="a+">a+</option>
                    <option value="a-">a-</option>
                    <option value="b+">b+</option>
                    <option value="b-">b-</option>
                    <option value="o+">o+</option>
                    <option value="o-">o-</option>
                    <option value="ab+">ab+</option>
                    <option value="ab-">ab-</option>
                </select>
            </div>
            <br>
            <br>
            <a href="database3.php"><button class="btn w-100 " name="signin"> submit</button></a>

            <br><p></p>
        </div>

    </div>
    </form>


</body>

</html>

</body>

</html>

<?php
$con = mysqli_connect("localhost", "root", "", "tcs");

$fname = $_POST['fname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$location = $_POST['location'];
$bgroup = $_POST['bgroup'];
$mobile = $_POST['mobile'];

$query4 = "select * from donor where email='$email' and pass='$pass'";

$result = mysqli_query($con, $query4);

$count = mysqli_num_rows($result);

if ($count > 0) {

    echo"Login successful";


} else {
    echo 'not successful';
    header("Location:wt_progject2.php?error=Invalid email or password");
    exit();
}

?>