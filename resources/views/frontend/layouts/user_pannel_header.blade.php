<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-react-helmet="true">Rate My Cheer Gym | Account </title>
    <link rel="stylesheet" href="userassets/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: black;
            padding: 10px 0;
            width: 100%;
            box-sizing: border-box;
        }

        .logo {
            color: white;
            margin: 0 20px;
        }

        .search-bar {
            display: flex;
            flex: 1;
            justify-content: center;
        }

        .search-group {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 800px;
            gap: 5px;
            padding: 0 20px;
        }

        .search-group input {
            flex: 1;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 20px;
        }

        h1.logo a {
            color: #fff;
            text-decoration: none;
            font-size: 25px;
        }

        .cta-button {
            position: relative;
            display: inline-block;
            margin: 0 20px;
            z-index: 91110000 !important;
        }

        .cta-button .menbtn {
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 20px;
            font-size: 16px;
            text-decoration: none;
        }

        .cta-button button:focus {
            outline: none;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            z-index: 1;
            right: 0;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
            text-decoration:none;
        }

        .cta-button:hover .dropdown-content {
            display: block;
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                align-items: center;
                padding: 25px 0;
            }
  .cta-button {
               
                z-index: 10 !important;
            }
            .search-bar {
                width: 100%;
                padding: 0 20px;
            }

            .search-group {
                flex-direction: column;
                width: 100%;
            }

            .cta-button {
                margin-top: 10px;
            }

            .cta-button .menbtn {
                background: #fff !important;
                color: #000 !important;
            }

            .search-group input {
                width: 100%;
                margin-bottom: 15px;
                margin-top: 15px;
            }
        }
         .modal-content {
            padding: 48px 16px;
            /* Adjusted padding to fit inside the modal */
            text-align: center;
        }

        .modal-title {
            font-size: 32px;
            font-family: Poppins, sans-serif;
            font-weight: 900;
        }

        .oauth-button {
            margin-top: 24px;
            width: 100%;
            background: white;
            border: 1px solid rgb(209, 209, 209);
            border-radius: 100px;
            color: black;
            display: flex;
            font-weight: 700;
            justify-content: center;
            padding: 11px 46px;
            transition: transform 0.2s ease;
        }

        .oauth-container {
            display: flex;
            flex-direction: row;
            margin-top: 24px;
        }

        .oauth-divider {
            border-bottom: 1px solid rgb(209, 209, 209);
            width: 100%;
        }

        .oauth-text {
            font-size: 16px;
            margin: 8px;
            min-width: 156px;
        }

        .form-group {
            position: relative;
            text-align: left;
        }

        .input-label {
            cursor: text;
            font-size: 16px;
            position: absolute;
            transform: translate(16px, -12px);
            transition: transform 0.2s ease-in-out;
            z-index: 1;
            margin-top: 18px
        }

        .input-field {
            display: flex;
            width: 100%;
        }

        .input-element {
            border: 1px solid rgb(209, 209, 209);
            border-radius: 3px;
            font-size: 16px;
            height: 40px;
            padding: 12px 8px;
            width: 100%;
        }

        .show-password-btn {
            background: none;
            border: 0;
            cursor: pointer;
            position: absolute;
            right: 5px;
            bottom: 8px;
        }

        .forgot-password-btn {
            background: transparent;
            border: 0;
            cursor: pointer;
            outline: none;
            color: rgb(0, 85, 253);
            font-size: 16px;
            font-weight: 700;
            text-decoration: none;
            margin-top: 16px;
            margin-bottom: 16px;
        }

        .submit-button {
            width: 100%;
            background: black;
            border: 1px solid rgb(0, 33, 255);
            border-radius: 100px;
            color: white;
            font-weight: 700;
            justify-content: center;
            padding: 11px 46px;
            transition: transform 0.2s ease;
        }

        .helper-text {
            font-size: 12px;
            line-height: 16px;
            margin: 16px 0;

            width: 100%;
        }

        .sign-up-text {
            font-size: 16px;
            margin: 26px 0 0;
        }

        .sign-up-text button {
            color: rgb(0, 85, 253);
            font-weight: 700;
            text-decoration: none;
            margin-left: 3px;
        }

        .extraclass {
            top: 55px !important;
        }
    </style>
</head>

<body>
   
                <header>
                    <div class="header-container">
                        <h1 class="logo"><a href="{{ route('index') }}">RMCG</a></h1>
                        <div class="search-bar">
                            <form action="{{ route('search') }}" method="get" class="search-group">
                                <input type="text" name="keyword" placeholder="Your Gym">
                            </form>
                        </div>
                        <div class="cta-button">
                            @if (Auth::check())
                            <a href="{{ route('user_pannel') }}" class="menbtn">Hey, {{ Auth::user()->name}}</a>
                            <div class="dropdown-content">
                                <a href="#" onclick="showSection('profile')">Profile</a>
                                <a href="#" onclick="showSection('account-settings')">Account Settings</a>
                                <a href="#" onclick="showSection('ratings')">Your Ratings</a>
                                <a href="#" onclick="showSection('saved-gyms')">Saved Gyms</a>
                                @if(Auth::user()->is_admin == 1)
                                <a href="{{ route('dashboard') }}">Dashboard</a>
                                @endif
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </div>
                            @else
                              <button type="button" class="menbtn" data-toggle="modal" data-target="#loginModal">
                                    Login
                                </button>
                            @endif
                        </div>
                    </div>
                </header>
                
                
                 <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Login Form -->
                        <div id="loginForm">
                            <div id="errorAlert" style="display: none;" class="alert alert-danger"></div>
                            <button class="oauth-button mb-4" type="button">
                                <img src="{{ asset('front_assets/images/banner/google.jpg') }}" alt="Google"
                                    style="width: 27px; height: 27px; margin-right: 8px;">Login with Google
                            </button>
                          
                            <div class="form-container">
                                <form action="{{ route('user.login') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-field">
                                            <input id="email" name="email" type="text"
                                                class="form-control input-element" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-field">
                                            <input id="password" name="password" type="password"
                                                class="form-control input-element" placeholder="Password" required>
                                            <button type="button" class="show-password-btn">
                                                <svg width="22" height="24" viewBox="0 0 22 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M0 7.5C1.73 3.11 6 0 11 0C16 0 20.27 3.11 22 7.5C20.27 11.89 16 15 11 15C6 15 1.73 11.89 0 7.5ZM19.82 7.5C18.17 4.13 14.79 2 11 2C7.21 2 3.83 4.13 2.18 7.5C3.83 10.87 7.21 13 11 13C14.79 13 18.17 10.87 19.82 7.5ZM11 5C12.38 5 13.5 6.12 13.5 7.5C13.5 8.88 12.38 10 11 10C9.62 10 8.5 8.88 8.5 7.5C8.5 6.12 9.62 5 11 5ZM6.5 7.5C6.5 5.02 8.52 3 11 3C13.48 3 15.5 5.02 15.5 7.5C15.5 9.98 13.48 12 11 12C8.52 12 6.5 9.98 6.5 7.5Z"
                                                        fill="#000000"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <button type="button" class="forgot-password-btn">Forgot Password?</button>
                                    <button type="submit" class="btn btn-primary submit-button">Continue</button>
                                </form>
                                <div class="helper-text">Rate My Cheer Gym is designed for and targeted to U.S.
                                    audiences and is governed by and operated in accordance with U.S. laws.</div>
                                <div class="sign-up-text">Don't have an account?<button type="button"
                                        class="btn btn-link" id="showSignUpForm">Sign Up</button></div>
                            </div>
                        </div>

                    
                        <div id="registrationForm" style="display: none;">
                            <button class="oauth-button mb-4" type="button">
                                <img src="{{ asset('front_assets/images/banner/google.jpg') }}" alt="Google"
                                    style="width: 27px; height: 27px; margin-right: 8px;">Register with Google
                            </button>

                            <div id="errorAlert2" style="display: none;" class="text-danger m-2"></div>
                    
                            <form method="post" action="{{route('user.register')}}" id="registrationForm">
                                @csrf
                                <div class="form-group">
                                    <div class="input-field">
                                        <input id="re_name" name="name" type="text" class="form-control input-element" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-field">
                                        <input id="re_email" name="email" type="email" class="form-control input-element" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-field">
                                        <input id="re_password" name="password" type="password" class="form-control input-element" placeholder="Password" required>
                                        <button type="button" class="show-password-btn">
                                            <svg width="22" height="24" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 7.5C1.73 3.11 6 0 11 0C16 0 20.27 3.11 22 7.5C20.27 11.89 16 15 11 15C6 15 1.73 11.89 0 7.5ZM19.82 7.5C18.17 4.13 14.79 2 11 2C7.21 2 3.83 4.13 2.18 7.5C3.83 10.87 7.21 13 11 13C14.79 13 18.17 10.87 19.82 7.5ZM11 5C12.38 5 13.5 6.12 13.5 7.5C13.5 8.88 12.38 10 11 10C9.62 10 8.5 8.88 8.5 7.5C8.5 6.12 9.62 5 11 5ZM6.5 7.5C6.5 5.02 8.52 3 11 3C13.48 3 15.5 5.02 15.5 7.5C15.5 9.98 13.48 12 11 12C8.52 12 6.5 9.98 6.5 7.5Z"
                                                    fill="#000000"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-field">
                                        <input id="confirm_password" name="password_confirmation" type="password"
                                            class="form-control input-element" placeholder="Confirm Password" required>
                                        <button type="button" class="show-password-btn">
                                            <svg width="22" height="24" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 7.5C1.73 3.11 6 0 11 0C16 0 20.27 3.11 22 7.5C20.27 11.89 16 15 11 15C6 15 1.73 11.89 0 7.5ZM19.82 7.5C18.17 4.13 14.79 2 11 2C7.21 2 3.83 4.13 2.18 7.5C3.83 10.87 7.21 13 11 13C14.79 13 18.17 10.87 19.82 7.5ZM11 5C12.38 5 13.5 6.12 13.5 7.5C13.5 8.88 12.38 10 11 10C9.62 10 8.5 8.88 8.5 7.5C8.5 6.12 9.62 5 11 5ZM6.5 7.5C6.5 5.02 8.52 3 11 3C13.48 3 15.5 5.02 15.5 7.5C15.5 9.98 13.48 12 11 12C8.52 12 6.5 9.98 6.5 7.5Z"
                                                    fill="#000000"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <button type="button" class="forgot-password-btn">Forgot Password?</button>
                                <button type="submit" class="btn btn-primary submit-button">Continue</button>
                            </form>
                            <div class="helper-text">Rate My Cheer Gym is designed for and targeted to U.S. audiences and is governed by
                                and operated in accordance with U.S. laws.</div>
                            <div class="sign-up-text">Don't have an account?<button type="button" class="btn btn-link"
                                    id="showSignUpForm">Sign Up</button></div>
                        </div>
                    
                        <!-- Include Bootstrap JS and jQuery -->
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                            crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
                            integrity="sha384-JCEIUVUqchGjYCOOrcbmLB2Q0J7BQuFrHYA2QX/T5PrVmF7YoaQ0yLdEV2Jys1UH"
                            crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
                            integrity="sha384-5nBEjZBDSfSbxB8rS3T8mF/6GdjRVp5foJsbDJJe/QpEUrZ6BD/wroooL+qtm7Ai"
                            crossorigin="anonymous"></script>
                    
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const form = document.querySelector('#registrationForm form');

                                form.addEventListener('submit', function (event) {
                                    event.preventDefault(); // Prevent the form from submitting
                                    // Perform your validation logic here (e.g., check if fields are filled correctly)
                                    const name = document.getElementById('re_name').value.trim();
                                    const email = document.getElementById('re_email').value.trim();
                                    const password = document.getElementById('re_password').value.trim();
                                    const confirmPassword = document.getElementById('confirm_password').value.trim();
                                    const errorAlert = document.getElementById('errorAlert2');
                        

                                    if (name == '' || email == '' || password == '' || confirmPassword == '') {
                                        message = "Please fill all inputs";
                                        errorAlert.innerHTML = message;
                                        errorAlert.style.display = 'block';
                                        return;
                                    }
                    
                                    if (password != confirmPassword) {
                                        showError('Passwords do not match.');
                                        return;
                                    }
                    
                                    // If all validations pass, you can submit the form
                                    form.submit();
                                });
                    
                                
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Login Form -->
                        <div id="loginForm">
                            <div id="errorAlert" style="display: none;" class="alert alert-danger"></div>
                            <button class="oauth-button mb-4" type="button">
                                <img src="{{ asset('front_assets/images/banner/google.jpg') }}" alt="Google"
                                    style="width: 27px; height: 27px; margin-right: 8px;">Login with Google
                            </button>
                          
                            <div class="form-container">
                                <form action="{{ route('user.login') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-field">
                                            <input id="email" name="email" type="text"
                                                class="form-control input-element" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-field">
                                            <input id="password" name="password" type="password"
                                                class="form-control input-element" placeholder="Password" required>
                                            <button type="button" class="show-password-btn">
                                                <svg width="22" height="24" viewBox="0 0 22 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M0 7.5C1.73 3.11 6 0 11 0C16 0 20.27 3.11 22 7.5C20.27 11.89 16 15 11 15C6 15 1.73 11.89 0 7.5ZM19.82 7.5C18.17 4.13 14.79 2 11 2C7.21 2 3.83 4.13 2.18 7.5C3.83 10.87 7.21 13 11 13C14.79 13 18.17 10.87 19.82 7.5ZM11 5C12.38 5 13.5 6.12 13.5 7.5C13.5 8.88 12.38 10 11 10C9.62 10 8.5 8.88 8.5 7.5C8.5 6.12 9.62 5 11 5ZM6.5 7.5C6.5 5.02 8.52 3 11 3C13.48 3 15.5 5.02 15.5 7.5C15.5 9.98 13.48 12 11 12C8.52 12 6.5 9.98 6.5 7.5Z"
                                                        fill="#000000"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <button type="button" class="forgot-password-btn">Forgot Password?</button>
                                    <button type="submit" class="btn btn-primary submit-button">Continue</button>
                                </form>
                                <div class="helper-text">Rate My Cheer Gym is designed for and targeted to U.S.
                                    audiences and is governed by and operated in accordance with U.S. laws.</div>
                                <div class="sign-up-text">Don't have an account?<button type="button"
                                        class="btn btn-link" id="showSignUpForm">Sign Up</button></div>
                            </div>
                        </div>

                    
                        <div id="registrationForm" style="display: none;">
                            <button class="oauth-button mb-4" type="button">
                                <img src="{{ asset('front_assets/images/banner/google.jpg') }}" alt="Google"
                                    style="width: 27px; height: 27px; margin-right: 8px;">Register with Google
                            </button>

                            <div id="errorAlert2" style="display: none;" class="text-danger m-2"></div>
                    
                            <form method="post" action="{{route('user.register')}}" id="registrationForm">
                                @csrf
                                <div class="form-group">
                                    <div class="input-field">
                                        <input id="re_name" name="name" type="text" class="form-control input-element" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-field">
                                        <input id="re_email" name="email" type="email" class="form-control input-element" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-field">
                                        <input id="re_password" name="password" type="password" class="form-control input-element" placeholder="Password" required>
                                        <button type="button" class="show-password-btn">
                                            <svg width="22" height="24" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 7.5C1.73 3.11 6 0 11 0C16 0 20.27 3.11 22 7.5C20.27 11.89 16 15 11 15C6 15 1.73 11.89 0 7.5ZM19.82 7.5C18.17 4.13 14.79 2 11 2C7.21 2 3.83 4.13 2.18 7.5C3.83 10.87 7.21 13 11 13C14.79 13 18.17 10.87 19.82 7.5ZM11 5C12.38 5 13.5 6.12 13.5 7.5C13.5 8.88 12.38 10 11 10C9.62 10 8.5 8.88 8.5 7.5C8.5 6.12 9.62 5 11 5ZM6.5 7.5C6.5 5.02 8.52 3 11 3C13.48 3 15.5 5.02 15.5 7.5C15.5 9.98 13.48 12 11 12C8.52 12 6.5 9.98 6.5 7.5Z"
                                                    fill="#000000"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-field">
                                        <input id="confirm_password" name="password_confirmation" type="password"
                                            class="form-control input-element" placeholder="Confirm Password" required>
                                        <button type="button" class="show-password-btn">
                                            <svg width="22" height="24" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0 7.5C1.73 3.11 6 0 11 0C16 0 20.27 3.11 22 7.5C20.27 11.89 16 15 11 15C6 15 1.73 11.89 0 7.5ZM19.82 7.5C18.17 4.13 14.79 2 11 2C7.21 2 3.83 4.13 2.18 7.5C3.83 10.87 7.21 13 11 13C14.79 13 18.17 10.87 19.82 7.5ZM11 5C12.38 5 13.5 6.12 13.5 7.5C13.5 8.88 12.38 10 11 10C9.62 10 8.5 8.88 8.5 7.5C8.5 6.12 9.62 5 11 5ZM6.5 7.5C6.5 5.02 8.52 3 11 3C13.48 3 15.5 5.02 15.5 7.5C15.5 9.98 13.48 12 11 12C8.52 12 6.5 9.98 6.5 7.5Z"
                                                    fill="#000000"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <button type="button" class="forgot-password-btn">Forgot Password?</button>
                                <button type="submit" class="btn btn-primary submit-button">Continue</button>
                            </form>
                            <div class="helper-text">Rate My Cheer Gym is designed for and targeted to U.S. audiences and is governed by
                                and operated in accordance with U.S. laws.</div>
                            <div class="sign-up-text">Don't have an account?<button type="button" class="btn btn-link"
                                    id="showSignUpForm">Sign Up</button></div>
                        </div>
                    
                        <!-- Include Bootstrap JS and jQuery -->
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                            crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
                            integrity="sha384-JCEIUVUqchGjYCOOrcbmLB2Q0J7BQuFrHYA2QX/T5PrVmF7YoaQ0yLdEV2Jys1UH"
                            crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
                            integrity="sha384-5nBEjZBDSfSbxB8rS3T8mF/6GdjRVp5foJsbDJJe/QpEUrZ6BD/wroooL+qtm7Ai"
                            crossorigin="anonymous"></script>
                    
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const form = document.querySelector('#registrationForm form');

                                form.addEventListener('submit', function (event) {
                                    event.preventDefault(); // Prevent the form from submitting
                                    // Perform your validation logic here (e.g., check if fields are filled correctly)
                                    const name = document.getElementById('re_name').value.trim();
                                    const email = document.getElementById('re_email').value.trim();
                                    const password = document.getElementById('re_password').value.trim();
                                    const confirmPassword = document.getElementById('confirm_password').value.trim();
                                    const errorAlert = document.getElementById('errorAlert2');
                        

                                    if (name == '' || email == '' || password == '' || confirmPassword == '') {
                                        message = "Please fill all inputs";
                                        errorAlert.innerHTML = message;
                                        errorAlert.style.display = 'block';
                                        return;
                                    }
                    
                                    if (password != confirmPassword) {
                                        showError('Passwords do not match.');
                                        return;
                                    }
                    
                                    // If all validations pass, you can submit the form
                                    form.submit();
                                });
                    
                                
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
<script>
    document.getElementById("showSignUpForm").addEventListener("click", function() {
        document.getElementById("loginForm").style.display = "none";
        document.getElementById("registrationForm").style.display = "block";
    });
</script>