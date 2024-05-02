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
                <li><a href="wt_project3.php">Home <ion-icon name="home"></ion-icon></a></li>


            </ul>
        </div>

        <div class="container">
            <br>
            <form action="database2.php" method="POST" onsubmit="return validation()">
                <div class="padd ">
                    <h4>Login</h4>

                    <?php if(isset($_GET['error'])){    ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    
                    <?php } ?>
                    <div class="email w-100">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" >
                            <span class="error" id="emailerror"></span>


                        </div>
                    <br>
                    <div class="pass w-100">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="pass" id="pass" class="form-control">
                            <span class="error" id="passerror"></span>

                        </div>
                    <br>
                    <br>
                    <button class="btn w-100 " name="signin">Login</button>
                    <p class="sign" >don't have an Account?</p>
                    
                    <a href="signin.php" class="log">Signin</a>

                </div>
            </form>

            <script>
                var emailerror = document.getElementById("emailerror");

                function validation() {
                    let email = document.getElementById("email").value;
                    let pass = document.getElementById("pass").value;

                    if (email.length == 0) {
                        emailerror.innerHTML = "please Enter Your Email";
                        return false;
                    }
                    if (email.match(/^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/)) {
                        emailerror.innerHTML = "";


                    } 

                    if (pass.length < 3) {
                        passerror.innerHTML = "Enter password";
                        return false;
                    }
                    if (pass.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/)) {
                        passerror.innerHTML = "";


                    } 
                }
            </script>

        </div>
    </div>
</body>

</html>