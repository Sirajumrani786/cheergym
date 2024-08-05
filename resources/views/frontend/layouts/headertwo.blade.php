<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rate My Cheer Gym</title>
        <link
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            rel="stylesheet">
        <link rel="stylesheet" href="{{asset('front_assets/css/style.css')}}">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            rel="stylesheet">
        <!-- Font Awesome CSS -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Blaka+Ink&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="assets/font/Inkfree.ttf">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KyZXEAg3QhqLMpG8r+Knujsl5/6Z5j6AA1F4PcmKK+F5pY5cHgUyE1jQ3t8R+1JcfBZGOMZC2BQERYP1dDk8tA==" crossorigin="anonymous" referrerpolicy="no-referrer" /><style>

        @font-face {
            font-family: 'Inkfree';
            src: url('assets/font/Inkfree.ttf') format('truetype');
        }
        .navbar_signup:hover{
            text-decoration: none !important;
            color: #fff !important;
        }
        .navbar_login:hover{
            text-decoration: none !important;
            color: #fff !important;
        }

        .navbar_signup{
            background-color: transparent;
            color: #eb1798;
            border: 2px solid #eb1798;
            padding: 3px 20px;
    border-radius: 8px;
        }
        .navbar_login{
            background-color: #eb1798;
            color: #fff;
            border: 2px solid #eb1798;
            padding: 3px 20px;
    border-radius: 8px;
        }
        .section-three {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            margin: auto;
            font-family: Arial, sans-serif;
        }
        li.mobile {
                display: none;
            }



            .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    padding-top: 60px;
    margin-top: 40px;
}

.modal-content {
    background-color: white;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 500px;
    border-radius: 10px;
    position: relative;
}

.close-button {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    position: absolute;
    top: 10px;
    right: 20px;
    cursor: pointer;
}

.close-button:hover,
.close-button:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
     
.login-container {
    padding: 10px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #123e9a;
}

.input-group {
    margin-bottom: 15px;
    position: relative;
}

input[type="email"], input[type="password"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ddd;
    box-sizing: border-box;
}

.show-password {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    background: url('eye-icon.png') no-repeat center center;
    background-size: cover;
    width: 20px;
    height: 20px;
    border: none;
    cursor: pointer;
}

.actions {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.signup, .forgot-password {
    font-size: 12px;
    color: #999;
}

.signup span {
    color: #123e9a;
    text-decoration: underline;
}

.sign-btn {
    width: 100%;
    background-color: #ff1493;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    margin-bottom: 20px;
}

.social-login {
    text-align: center;
}

.social-login p {
    margin-bottom: 10px;
    color: #999;
}


.social-icons {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.social-icons button {
    width: 100%;
    height: 45px;
    background-color: #f0f0f0;
    border: 1px solid #ddd;
    border-radius: 5px;
    cursor: pointer;
    border-radius: 10px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}
.social-icons button:hover {
    background-color: #fff;
    box-shadow: 0px 1px 4px 1px #534e4e;
}

.google-btn {
    background: url('google-icon.png') no-repeat center center;
    background-size: cover;
}

.apple-btn {
    background: url('apple-icon.png') no-repeat center center;
    background-size: cover;
}

.facebook-btn {
    background: url('facebook-icon.png') no-repeat center center;
    background-size: cover;
}
h1.term_h1 {
    font-size: 2.3rem;
    font-weight: 400;
    font-family: 'Poppins';
}
h2.term_h2 {
    font-size: 1.75rem;
    color: #000;
    font-weight: 300;
}
li.term_li {
    list-style-type: disc;
    font-size: 13px;
    font-weight: 400;
    line-height: 20px;
}

        @media (max-width: 627px) {

            li.mobile {
                display: block;
            }
            li.web{
                display: none;
            }
            .modal {
                    margin-top: 40px;
                }
                .login-container {
                    padding: 0px;
                    text-align: center;
                }
        }
     
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
                    <a href="{{url('/')}}" class="logo"><img src="{{asset('front_assets/img/logo.png')}}" alt></a>

                    <ul class="navbarr">
                        <li><a href="{{url('/')}}" class="nav_link">Home</a></li>
                        <li><a href="{{route('blog')}}" class="nav_link">Blog</a></li>
                        <li class="linav"><a href="#"
                                class="nav_link2">About</a></li>
                        <li class="web">
                            <form action="{{ route('search') }}" method="get">

                            <div class="search">
                                <span class="fa fa-search"></span>
                                <input type="text" name="keyword"  placeholder="Search For Gym"  style="background: #232222;border: 0px;">
                            </div>
                    </form>

                        </li>

                        <li>
                            @if (Auth::check())
                                
                            
                            <div id="user-dropdown" class="dropdown" style="display: block;float: right; margin-left: 133px;">
                                @php
                                $userName = Auth::user()->name;
                                $firstLetter = strtoupper(substr($userName, 0, 1));
                            @endphp
                            
                            <a href="{{ route('user_pannel') }}" class="menbtn extraclass" style="background: #eb1798;color: #fff;padding: 12px 20px;border-radius: 29px;">
                                {{ $firstLetter }}
                            </a>
                                <div class="dropdown-content">
                                    <a href="{{ route('user_pannel') }}" onclick="showSection('profile')">Profile</a>
                                    <a href="{{ route('user_pannel') }}" onclick="showSection('account-settings')">Account Settings</a>
                                    <a href="{{ route('user_pannel') }}" onclick="showSection('ratings')">Your Ratings</a>
                                    <a href="{{ route('user_pannel') }}" onclick="showSection('saved-professors')">Saved Gyms</a>
                                    @if (Auth::user()->is_admin == 1)
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                @endif  
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </div>
                            </div>
                            @else
                            <li class="navlinks1"> <a href="#" class="navbar_signup" id="signup-link-navbar">Sign Up</a>
                            </li>
                            <li class="navlinks2">
                                <a href="#" class="navbar_login" id="login-link">Login</a>
                            </li>
                            @endif
                        </li>
                                <li class="mobile">
                                    <div class="search">
                                        <span class="fa fa-search"></span>
                                        <input placeholder="Search For Gym"
                                            style="background: #232222;border: 0px;">
                                    </div>
                                </li>


                    </ul>

                    <div class="mainn">
                        <!-- <a href="https://www.instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="https://www.behance.com/" class="behance"><i class="bi bi-behance"></i></a> -->
                        <!-- <a href="#" class="navbar_signup">Sign_Up</a>
        <a href="#" class="navbar_login">Login</a> -->
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
                                <button class="google-btn"><img src="assets/img/google.png" ></button>
                                <button class="apple-btn"><img src="assets/img/apple.png" ></button>
                                <button class="facebook-btn"><img src="assets/img/facebook.png" ></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>