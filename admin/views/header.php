<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <title>Arcadia | Admin</title>
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <div align="center">
            <img src="assets/no-avatar.png" style="width: 150px; height: 150px; border-radius: 100%" alt="">
        </div>
        <p align="center">
            Hello, Arcadia
            <br>
            Status
        </p>

        <a style="text-decoration: none" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a style="text-decoration: none" href="#">About</a>
        <a style="text-decoration: none" href="#">Services</a>
        <a style="text-decoration: none" href="#">Clients</a>
        <a style="text-decoration: none" href="#">Contact</a>
    </div>

    <script>
        document.getElementById('main').addEventListener('click', closeNav);

        function openNav() {
            document.getElementById("mySidenav").style.width = "230px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "lightgrey";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }
    </script>