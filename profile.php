<?php
	require "session.php";	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css" />

</head>
<body class="bg-image" style="background-image: url('assets/background.svg');
      height: 100%; width: 100%; background-size: cover;">
      <div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="card p-3 py-4">
        <div class="text-center"> 
            <h3 class="mt-2 ">Hello! <span class="text-capitalize"><?=$name ?></span></h3> 
            
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600 font-ubuntu">Profile Information</h6>
                                <div class="row">
                                    <div class="col-sm-6 m-b-10">
                                        <p class="m-b-10 f-w-600 font-ubuntu" >User Name</p>
                                        <h6 class="text-muted f-w-400 "><?=$username ?></h6>
                                    </div>
                                    <div class="col-sm-6 m-b-10">
                                        <p class="m-b-10 f-w-600 font-ubuntu">Name</p>
                                        <h6 class="text-muted f-w-400"><?=$name ?></h6>
                                    </div>
                                    <div class="col-sm-6 m-b-10">
                                        <p class="m-b-10 f-w-600 font-ubuntu">E-Mail</p>
                                        <h6 class="text-muted f-w-400 font-ubuntu"><?=$email ?></h6>
                                    </div>
                                    <div class="col-sm-6 m-b-10">
                                        <p class="m-b-10 f-w-600 font-ubuntu">Contact</p>
                                        <h6 class="text-muted f-w-400 font-ubuntu"><?=$contact ?></h6>
                                    </div>
                                    <div class="col-sm-6 m-b-10">
                                        <p class="m-b-10 f-w-600 font-ubuntu">DOB</p>
                                        <h6 class="text-muted f-w-400 font-ubuntu"><?=$dob ?></h6>
                                    </div>
                                    <div class="col-sm-6 m-b-10">
                                        <p class="m-b-10 f-w-600 font-ubuntu">Age</p>
                                        <h6 class="text-muted f-w-400 font-ubuntu"><?=$age ?></h6>
                                    </div>
                                </div>
                                <div class="buttons"> 
                                	<button class="btn btn-outline-warning rounded-pill px-4">Update</button> 
                                	<button class="btn btn-warning rounded-pill px-4 ms-3"><a href="logout.php" class="logout">Logout</a></button> 
                                </div>
                                
                             </div>
                        
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>

<script src="js/main.js"></script>
</body>
</html>