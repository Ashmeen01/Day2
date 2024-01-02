<?php

include "process.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Page</title>
    <style>
         *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        /* background-color: black; */
        font-family: sans-serif;
    }
    .container{
        margin: 100px 400px 200px 400px;
        /* background-color: darkgoldenrod; */
        display: flex;
        flex-direction: column;
        align-items: center;
        /* opacity: 0.5; */
        border: solid gold;
        height: 400px;
        border-radius: 0 50px 0 50px;
        /* margin-bottom: 600px; */
    }
    h2{
        margin-top: 20px;
        font-size: 45px;
        font-weight: 700;
        /* color: white; */
        /* box-shadow: 1px gold; */
        color: goldenrod;
    }

    input{
        margin-top: 10px;
        /* height: 27px; */
        width: 100%;
        padding: 6px;
        border-radius: 5px;
        font-size: 16px;
        border: none;
        outline: none;
        border: solid 2px gold;
    }
    input[type=submit]{
        width: 100%;
        text-align: center;
        /* height: 26px; */
        padding: 6px;
        border: none;
        outline: none;
        font-size:22px;
        /* font-weight: 600; */
        border-radius: 5px;
        cursor: pointer;
        color: goldenrod;
    }
    button:hover{
        background-color: gold;
        color: white;
        cursor:ponter;
    }
    select{
        width: 60%;
        height: 26px;
        border: none;
        outline: none;
        font-size: 16px;
    }
    .header{
            width: 100%;
            height: 50px;
            background-color: goldenrod;
            position: relative;
            box-shadow: .7px 5px 5px 5px lightgray;
        }
        nav{
            display: flex;
            padding: 1% 2%;
            justify-content: space-between;
            align-items: center;
        }
        .nav-links{
            flex: 1;
            text-align: right;
        }
        .nav-links ul li{
            list-style: none;
            display: inline-block;
            /* padding: 4px 6px; */
            margin-left: 16px;
            position: relative;
        }
        .nav-links ul li a{
            color: white;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
        }
        .nav-links ul li::after{
            content: '';
            width: 0%;
            height: 2px;
            background-color: gold;
            display: block;
            margin: auto;transition: 0.5s;
        }
        .nav-links ul li:hover::after{
            width: 100%;
        }
        footer{
            width: 100%;
            /* height: 50px; */
            background-color: goldenrod;
            /* position: relative; */
            /* margin-top: 200px; */
            padding:5px;
            /* box-shadow: 0 5px 5px .7px lightgray; */
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <h2>Login Page</h2>
            <div class="form-control">
                <div class="row">
                    <input type="text" name="username" placeholder="Username" required value="">
                </div>
            </div>
            <div class="form-control">
                <div class="row">
                    <input type="password" name="password" placeholder="Password" required value="">
                </div>
            </div>
            <div class="form-control">
                <div class="row">
                    <input type="submit" name="login" value="Login">
                </div>
            </div>
            <p>Dont't have an account<span>&nbsp;<a href="reg.php">Click here</a></span></p>
        </div>
    </form>
</body>
</html>