<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" src="https://kit.fontawesome.com/a076d05399.js" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* carousel */
        .main-banner {
            height: 52vh;
            width: 100vh;
        }

        .main-banner__inner {
            height: 52vh;
            width: 100vh;
        }

        .main-banner__inner .carousel-item {
            height: 100%;
        }

        /* Full-width input fields */
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #04aa6d;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        .modal-backdrop {
            z-index: 0;
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s;
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0);
            }

            to {
                -webkit-transform: scale(1);
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0);
            }

            to {
                transform: scale(1);
            }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }

        /* Review */

        .containerChat {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        .darker {
            border-color: #ccc;
            background-color: #ddd;
        }

        .containerChat::after {
            content: "";
            clear: both;
            display: table;
        }

        .containerChat img {
            float: left;
            max-width: 60px;
            width: 100%;
            margin-right: 20px;
            border-radius: 50%;
        }

        .container img.right {
            float: right;
            margin-left: 20px;
            margin-right: 0;
        }

        .time-right {
            float: right;
            color: #aaa;
        }

        .time-left {
            float: left;
            color: #999;
        }
    </style>
</head>

<body class="bg-secondary">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">#Tustelin.id</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pl-1" href="#" role="button" data-bs-toggle="dropdown">Kategori Jasa</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Keluarga</a></li>
                            <li><a class="dropdown-item" href="#">Produk Kemasan</a></li>
                            <li><a class="dropdown-item" href="#">Makanan & Minuman</a></li>
                            <li><a class="dropdown-item" href="#">...</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="mr-4">
                <a class="navbar-brand mr-4" href="#">
                    <!--

              data-bs-toggle="modal"
              data-bs-target="#myModal"

            -->

                    <button class="btn" type="button" onclick="document.getElementById('id01').style.display='block'" style="width: auto">
                        Login
                    </button>

                    <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#myModal" style="width: auto">
                        Sign Up
                    </button>

                    <img src="/img_avatar1.png" alt="Logo" style="width: 40px" class="rounded-pill" />
                </a>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Cari jasa untukmu disini" />
                    <button class="btn btn-primary" type="button" style="width: 100px">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                            Cari
                        </div>
                    </button>
                </form>
            </div>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Pernikahan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Acara</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Foto Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Foto Keluarga</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Modal Sign Up-->

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-fullscreen-sm-down">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="modal-title">Register</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" id="email" required />

                    <label for="usrname"><b>Username</b> </label>
                    <input type="text" placeholder="Enter Username" name="username" id="username" required />
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="psw" required />

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required />
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                        Sign Up
                    </button>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>