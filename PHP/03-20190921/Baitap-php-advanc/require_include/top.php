<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <style>
        body {
            background-color: silver;
            color: black;
            font-size: 15px;
        }

        .container {
            justify-content: center;

        }
        .pass {
            margin-top: 5px; 
        }
    </style>

</head>

<body
    style="height: 100vh; justify-content: center; display: flex; align-items: center; flex-direction: column; text-align: center;">
    <div class="container">
        <div class="row" style="justify-content:center;">
            <div class="col-5"></div>
            <div class="col-2">
                <img src="anh.png" width="80px;" height="80px;">
            </div>
            <div class="col-5"></div>

        </div>
    </div>
    <br>
    </div>
    
    <div class="container">
        <h1>Please sign in</h1>
        <form action="./checklogin.php" method="POST">
            <input type="text" placeholder="Email address" border-radius=25%; name="email"><br>
            <input class="pass" type="password" placeholder="Password" name="pass">
        
        <div>
            <input type="checkbox" name="remember me" value="remember">Remember Me
        </div>
        <div class="row">
            <div class="col-5">

            </div>
            <div class="col-2">
                    <input class="btn btn-primary form-control" type="submit" value="Sing In">
            </div>
            <div class="col-5">

            </div>

            
            
        </div>
        </form>
    </div>
    <br>
