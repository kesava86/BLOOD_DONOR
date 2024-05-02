<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

    <link rel="stylesheet" href="wt2.css">

</head>

<body>
    <div class="banner justify-content-center">
        <div class="navbar">
            <h1 class="logo1">B<span class="h2">lood</span> D<span class="h2">onor</span><span class="h3"><ion-icon name="water"></ion-icon></span>
            </h1>
            <ul>
                <li><a href="wt_project3.php">Home <ion-icon name="home"></ion-icon></a></li>


            </ul>
        </div>

        <div class="container-fluid">
            <div class="banner1">
                <form name="myform" action="database.php" method="POST" onsubmit="return validation()">
                    <div class="padd1">
                        <br>
                        <h4>Sign In</h4>

                        <div class="fname w-100">
                            <label for="fname" class="form-label">Full_Name:</label>
                            <input type="text" name="fname" id="fname" class="form-control" >
                            <span class="error" id="nameerror"></span>
                        </div>
                        <br>
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
                        <div class="cpass w-100">
                            <label for="password" class="form-label">Confirm Password</label>
                            <input type="password" name="cpass" id="cpass" class="form-control">
                            <span class="error" id="cpasserror"></span>

                        </div>
                        <br>
                        <div class="loc w-100">
                            <label for="loc" class="form-label">Location:</label>
                            <select name="location" id="location" class="form-select">
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Telangana">Telangana</option>

                            </select>
                            <span class="error" id="locationerror"></span>


                        </div>
                        <br>
                        
                        <div class="bgroup w-100">
                            <label for="bgroup" class="form-label">BloodGroup:</label>
                            <select name="bgroup" id="bgroup" class="form-select">
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
                        <div class="mobile w-100">
                            <label for="mobile" class="form-label">MobileNo:</label>
                            <input type="tel" name="mobile" id="mobile" class="form-control">
                            <span class="error" id="mobileerror"></span>

                        </div>
                        <br>
                        <div class="file w-100">

                        <form action="database.php" method="POST" enctype="multipart/form-data">
                        <label for="file" class="form-label">File Upload:</label>
    
   <input type="file" name="file" id="file" class="form-control">
    <!--<input type="submit" value="upload"  name="upload">-->
</form>
</div>
                       <button class="btn w-100 " name="signin">Sign in</button>
                        <p class="sign">Already have an account?</p>
                        <a href="wt_progject2.php" class="log">Login</a>
                    </div>



                </form>
<div class="imagepreview"></div>

   
   

    <!-- form validation -->
    <script>
            var nameerror = document.getElementById("nameerror");
            var emailerror = document.getElementById("emailerror");
            var passerror = document.getElementById("passerror");
            var cpasserror = document.getElementById("cpasserror");

            var locationerror = document.getElementById("locationerror");
            var mobileerror = document.getElementById("mobileerror");
            var fileerror = document.getElementById("fileerror");


        function validation() {
            let name = document.getElementById("fname").value;
            let email = document.getElementById("email").value;
            let pass = document.getElementById("pass").value;
            let cpass = document.getElementById("cpass").value;
            let location = document.getElementById("location").value;
            let mobile = document.getElementById("mobile").value;
            let file = document.getElementById("file").value;


            if (name.length == 0) {
                nameerror.innerHTML="Name is required";
                return false;
            }
            if(name.match(/^[A-za-z][A-Za-z_ ]{2,29}$/)){
                nameerror.innerHTML="";
                
            }
            else{
                nameerror.innerHTML="Enter correct name and name should have 3 letters";
                return false;
             }

            if(email.length==0){
                emailerror.innerHTML="please Enter Your Email";
                return false;
            }
            if(email.match(/^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/)){
                emailerror.innerHTML="";


            }
            else{
                emailerror.innerHTML="Enter correct Email";
                return false;
            }

            if(pass.length < 3){
                passerror.innerHTML="Enter password";
                return false;
            }
            if(pass.match( /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/)){
                passerror.innerHTML="";
            

            }
            else{
                passerror.innerHTML="passsword must contains one captial,small,digit,symbol";
                return false;   
            }

            if(!pass==cpass){
                cpasserror.innerHTML="Confirm password and password shoud be same";
                return false;
            }
            else{
                cpasserror.innerHTML="";

            }

            if(mobile.length==0){
                mobileerror.innerHTML="Enter mobile number"
            }
            if(mobile.length < 10){
                mobileerror.innerHTML="Mobile Number can contain atleast 10 digits";
                return false;
            }
            if(mobile.match(/^[6-9][0-9]{9}$/))
            {
                mobileerror.innerHTML="";
            }
            else{
                mobileerror.innerHTML="Enter 10 digit Mobile Number";
                return false;   
            }
       
        }
            
                     
            


    </script>

            </div>
        </div>



    </div>



</body>

</html>