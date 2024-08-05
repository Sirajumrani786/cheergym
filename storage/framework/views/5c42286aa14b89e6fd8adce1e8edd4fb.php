<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate My Cheer Gym</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="front_assets/css/style.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Blaka+Ink&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="front_assets/font/Inkfree.ttf">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            background-color: transparent;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            text-decoration: none;
            display: block;
            padding: 7px 0px;
            font-size: 11px;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #eb1798;
        }

        .dropdown .dropbtn {
            background-color: #eb1798;
        }

        button.dropbtn {
            border-radius: 43px;
            padding: 8px 11px;
        }
    </style>

</head>

<body>

    <header style="background: linear-gradient(to bottom, black, #464141);">
        <div class="container">
            <div class="row">
                <a href="<?php echo e(url('/')); ?>" class="logo"><img src="front_assets/img/logo.png" alt></a>

                <ul class="navbarr">
                    <li><a href="<?php echo e(url('/')); ?>" class="nav_link">Home</a></li>
                    <li><a href="<?php echo e(route('blog')); ?>" class="nav_link">Blog</a></li>
                    <li class="linav">
                        <a href="profile.html" class="nav_link2">About</a>
                    </li>
                    <li class="instagramli socialli">
                        <a href="https://www.instagram.com/ratemycheergym/"><img src="front_assets/img/insta.png"> </a>
                    </li>
                    <li class="twiterli socialli"><a href="https://x.com/ratemycheergym"><img
                                src="front_assets/img/x.png"></a></li>
                    <li class="tiktokli socialli"><a href="https://www.tiktok.com/@rate.my.cheer.gym"> <img
                                src="front_assets/img/tiktok.png"></a></li>
                    <li>
                        <?php if(Auth::check()): ?>
                            
                        
                        <div id="user-dropdown" class="dropdown" style="display: block;float: right;margin-left: 290px;">
                            <?php
                            $userName = Auth::user()->name;
                            $firstLetter = strtoupper(substr($userName, 0, 1));
                        ?>
                        
                        <a href="<?php echo e(route('user_pannel')); ?>" class="menbtn extraclass" style="background: #eb1798;color: #fff;padding: 12px 20px;border-radius: 29px;">
                            <?php echo e($firstLetter); ?>

                        </a>
                            <div class="dropdown-content">
                                <a href="<?php echo e(route('user_pannel')); ?>" onclick="showSection('profile')">Profile</a>
                                <a href="<?php echo e(route('user_pannel')); ?>" onclick="showSection('account-settings')">Account Settings</a>
                                <a href="<?php echo e(route('user_pannel')); ?>" onclick="showSection('ratings')">Your Ratings</a>
                                <a href="<?php echo e(route('user_pannel')); ?>" onclick="showSection('saved-professors')">Saved Gyms</a>
                                <?php if(Auth::user()->is_admin == 1): ?>
                                <a href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                            <?php endif; ?>  
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                    style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </div>
                        </div>
                        <?php else: ?>
                        <li class="navlinks1"> <a href="#" class="navbar_signup" id="signup-link-navbar">Sign Up</a>
                        </li>
                        <li class="navlinks2">
                            <a href="#" class="navbar_login" id="login-link">Login</a>
                        </li>
                        <?php endif; ?>
                    </li>
                    
                    
                </ul>

                <div class="mainn">
                    <bi class="bi-list" id="menu-icon"></bi>
                </div>
            </div>
        </div>
        <div id="login-modal" class="modal">
            <div class="modal-content">
                <span class="close-button">&times;</span>
                <div class="login-container" id="modal-content">
                    <!-- Initial Content: Sign In Form -->
                    <h2>Sign In</h2>
                    <form id="login-form">
                        <div class="input-group">
                            <input type="email" placeholder="Enter Email" required>
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Password" required>
                            <button type="button" class="show-password"></button>
                        </div>
                        <div class="actions">
                            <a href="#" class="signup" id="signup-link">Click <span>here</span> to Sign Up</a>
                            <a href="#" class="forgot-password" id="forgot-password-link">Forgot Password ?</a>
                        </div>
                        <button type="submit" class="sign-btn">Sign</button>
                    </form>
                    <div class="social-login">
                        <p>Or continue</p>
                        <div class="social-icons">
                            <button class="google-btn"><img src="front_assets/img/google.png"></button>
                            <button class="apple-btn"><img src="front_assets/img/apple.png"></button>
                            <button class="facebook-btn"><img src="front_assets/img/facebook.png"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Dropdown -->

    </header>
<?php /**PATH D:\Softwe\laragon\www\gym website code\gym-Website\resources\views/frontend/layouts/header.blade.php ENDPATH**/ ?>