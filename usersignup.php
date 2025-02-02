<?php  
 $connect = mysqli_connect("localhost", "root", "", "images");  
 if(isset($_POST["insert"]))  
 {   
     $username =  $_REQUEST['txt_uname'];
     $email = $_REQUEST['email'];
     $name =  $_REQUEST['Name'];
     $pass = $_REQUEST['txt_pwd'];  
     $query = "INSERT INTO user1 VALUES (0,'$username','$name','$pass','$email')";  
     if(mysqli_query($connect, $query))  
     {  
          echo '<script>alert("Account created")</script>';  
          header('Location: userlogin.php');
     }  
 }  
 ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <style>

body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-image: linear-gradient(to right, #D500F9, #FFD54F);
    background-repeat: no-repeat;
}

input, textarea {
    background-color: #F3E5F5;
    border-radius: 50px !important;
    padding: 12px 15px 12px 15px !important;
    width: 100%;
    box-sizing: border-box;
    border: none !important;
    border: 1px solid #F3E5F5 !important;
    font-size: 16px !important;
    color: #000 !important;
    font-weight: 400;
}

input:focus, textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #D500F9 !important;
    outline-width: 0;
    font-weight: 400;
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0;
}

.card {
    border-radius: 0;
    border: none;
}

.card1 {
    width: 50%;
    padding: 40px 30px 10px 30px;
}

.card2 {
    width: 50%;
    background-image: linear-gradient(to right, #FFD54F, #D500F9);
}

#logo {
    width: 70px;
    height: 60px;
}

.heading {
    margin-bottom: 60px !important;
}

::placeholder {
    color: #000 !important;
    opacity: 1;
}

:-ms-input-placeholder {
    color: #000 !important;
}

::-ms-input-placeholder {
    color: #000 !important;
}

.form-control-label {
    font-size: 12px;
    margin-left: 15px;
}

.msg-info {
    padding-left: 15px;
    margin-bottom: 30px;
}

.btn-color {
    border-radius: 50px;
    color: #fff;
    background-image: linear-gradient(to right, #FFD54F, #D500F9);
    padding: 15px;
    cursor: pointer;
    border: none !important;
    margin-top: 40px;
}

.btn-color:hover {
    color: #fff;
    background-image: linear-gradient(to right, #D500F9, #FFD54F);
}

.btn-white {
    border-radius: 50px;
    color: #D500F9;
    background-color: #fff;
    padding: 8px 40px;
    cursor: pointer;
    border: 2px solid #D500F9 !important;
}

.btn-white:hover {
    color: #fff;
    background-image: linear-gradient(to right, #FFD54F, #D500F9);
}

a {
    color: #000;
}

a:hover {
    color: #000;
}

.bottom {
    width: 100%;
    margin-top: 50px !important;
}

.sm-text {
    font-size: 15px;
}

@media screen and (max-width: 992px) {
    .card1 {
        width: 100%;
        padding: 40px 30px 10px 30px;
    }

    .card2 {
        width: 100%;
    }

    .right {
        margin-top: 100px !important;
        margin-bottom: 100px !important;
    }
}

@media screen and (max-width: 768px) {
    .container {
        padding: 10px !important;
    }

    .card2 {
        padding: 50px;
    }

    .right {
        margin-top: 50px !important;
        margin-bottom: 50px !important;
    }
}
    </style>

</head>
<body>
    <div class="container px-4 py-5 mx-auto">
        <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">
                            <div class="row justify-content-center px-3 mb-3">
                                <img id="logo" src="img\realestate.avif">
                            </div>
                            <h3 class="mb-5 text-center heading">We are Estate Agency</h3>
    
                            <h6 class="msg-info">Please create your account</h6>
                            <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-control-label text-muted">Username</label>
                                <input type="text" id="txt_uname" name="txt_uname" placeholder="Phone no or email id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label text-muted">Name</label>
                                <input type="text" id="Name" name="Name" placeholder="Phone no or email id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label text-muted">Email</label>
                                <input type="email" id="mail" name="email" placeholder="email id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label text-muted">Password</label>
                                <input type="password" id="txt_pwd" name="txt_pwd" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label text-muted">Re-enter Password</label>
                                <input type="password" id="txt_repwd" name="txt_repwd" placeholder="Password" class="form-control">
                            </div>
    
                            <div class="row justify-content-center my-3 px-3">
                                <button class="btn-block btn-color" type="submit" name="insert" id="insert" value="Insert">Login</button>
                            </div>
    
                            <div class="row justify-content-center my-2">
                                <a href="#"><small class="text-muted">Forgot Password?</small></a>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="bottom text-center mb-5">
                        <p href="#" class="sm-text mx-auto mb-3">Have an account? <button class="btn btn-white ml-2" onclick="window.location.href = 'userlogin.php';">Login Here</button></p>
                    </div>
                </div>
                <div class="card card2">
                    <div class="my-auto mx-md-5 px-md-5 right">
                        <h3 class="text-white">It just takes a minute</h3>
                        <!-- <small class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>