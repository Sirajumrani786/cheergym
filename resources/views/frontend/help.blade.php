@include('frontend.layouts.header')
<style>

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
 
</style>
<main>
    <section class="section_one" style="background-image: url('assets/img/banner_one.png');background-size: cover;background-position: center;background-repeat: no-repeat;height: auto;">
        <div class="container">
            <div class="row">
             
            </div>
        </div>
    </section>
    <section class="section_two mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="term_div">
                <h1 class="term_h1">Help Page</h1>
                <h2 class="term_h2">1. Eligibility; Additional Terms; Binding Agreement</h2>
                <ul class="term_ul ml-4">
                    <li class="term_li"><a href="#">RateMyCheerGym.com</a> </li>
                </ul>
                </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="term_div">
                    <h1 class="term_h1">How can we help you?</h1>
                    <ul class="term_ul ml-4">
                        <li class="term_li"><a href="#">Please reach out to support@ratemycheergym.com with any inquires.</li>
                    </ul>
                    </div>
                    </div>
               
            </div>
        </div>
    </section>


</main>
@include('frontend.layouts.footer')
