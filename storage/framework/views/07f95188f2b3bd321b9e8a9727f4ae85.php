<?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
    @font-face {
        font-family: 'Inkfree';
        src: url('front_assets/font/Inkfree.ttf') format('truetype');
    }

    .navbar_signup:hover {
        text-decoration: none !important;
        color: #fff !important;
    }
 

    .navbar_login:hover {
        text-decoration: none !important;
        color: #fff !important;
    }

    .navlinks1 {
        margin-left: 225px !important;
    }

    .navbar_signup {
        background-color: transparent;
        color: #eb1798;
        border: 2px solid #eb1798;
        padding: 3px 20px;
        border-radius: 8px;
    }

    .navbar_login {
        background-color: #eb1798;
        color: #fff;
        border: 2px solid #eb1798;
        padding: 3px 20px;
        border-radius: 8px;
    }

    .section_one {
        background-image: url('front_assets/img/banner_one.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 100px 0;
        color: white;
    }

    .section_one h1 {
        font-size: 48px;
        font-weight: bold;
    }

    .section_one .text-pink {
        color: #ff007f;
    }

    .section_one .form-control {
        border-radius: 30px;
        padding: 10px 20px;
    }

    .section_one .btn {
        border-radius: 30px;
        padding: 10px 20px;
    }

    .section_one img {
        max-width: 100%;
        height: auto;
    }

    .section_one h4 {
        margin-top: 20px;
        font-weight: normal;
    }

    .container.text-center.text-white h1 {
        font-size: 27px;
        text-align: center;
        margin-right: 296px;
        margin-bottom: 0px;
        padding: 0px;
    }

    .search input {
        width: 612px;
        height: 36px;
        background: #000 !important;
        border: 1px solid #aaa;
        border-radius: 5px;
        box-shadow: 0 0 0px #ccc, 0 0px 0px #ebebeb inset;
        color: #fff;
    }

    a.instagram {
        color: #fff;
    }

    .container.section_two_con {
        margin-top: -195px;
        text-align: center;
    }

    img.w-100.imgfix {
        width: 243.29px !important;
        height: 273.41px !important;
    }

    .card.section_two_card {
        background: transparent;
        border: 0px;
    }

    h4.img_one_h4 {
        color: #F05384;
        font-size: 16px;
        font-weight: 700;
    }

    h4.img_two_h4 {
        color: #FACB27;
        font-size: 16px;
        font-weight: 700;
    }

    h4.img_three_h4 {
        color: #245E8C;
        font-size: 15px;
        font-weight: 700;
    }

    .cheer-card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .cheer-card .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .cheer-card .card-title {
        font-size: 16px;
        color: #1a73e8;
    }

    p.card-text {
        font-size: 13px;
    }

    a.btn.btn-link {
        padding: 0px;
        text-decoration: none;
    }

    .cheer-card .btn-link {
        color: #ff4081;
        text-decoration: underline;
    }

    section.section_three {
        padding: 50px 0px;
        background-color: #e1e1e1;
    }

    .socialli {
        padding: 0px;
        margin: 0px;
        width: 30px;
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
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
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
        padding: 40px;
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

    input[type="email"],
    input[type="password"] {
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

    .signup,
    .forgot-password {
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

    .navlinks1 {
        margin-left: 159px !important;
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

    @media only screen and (max-width: 1090px) {
        .navbarr {

            height: 68vh;
        }

        .navlinks1 {
            margin-left: 13px !important;
        }

    }

    @media only screen and (max-width: 627px) {
        .container.text-center.text-white h1 {
            font-size: 22px !important;
            margin-right: 0px !important;

        }

        .modal {
            margin-top: 40px;
        }

        .login-container {
            padding: 0px;
            text-align: center;
        }

        .socialli {
            display: none;
        }

        .search input {
            font-size: 10px;
            width: 287px;
            height: 36px;
            background: #000 !important;
            border: 1px solid #aaa;
            border-radius: 5px;
            box-shadow: 0 0 0px #ccc, 0 0px 0px #ebebeb inset;
            color: #fff;
        }

        .navbarr {
            height: 49vh !important;
        }

        .container.section_two_con {
            margin-top: 0px;
            text-align: center;
        }

        h4.img_one_h4 {
            font-size: 15px;
        }

        span.fa.fa-search {
            font-size: 12px;
            margin-top: 3px;
        }

        section.section_one {
            height: 40vh;
        }
    }
</style>
<main>
    <section class="section_one">
        <div class="container text-center text-white">
            <h1 class="mb-3">Your Gym. Your <span class="text-pink">Voice!</span></h1>
            <form action="<?php echo e(route('search')); ?>" method="get">
            <div class="search">
                <span class="fa fa-search"></span>
                <input  type="text" name="keyword" placeholder="Enter your All Star Cheer gym to get started" style="background: #232222;border: 0px;">
            </div>
        </form>    

           
        </div>
    </section>

    <section class="section_two">
        <div class="container section_two_con">
             <div class="row section_two_row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 ">
                    <div class="card section_two_card">
                        <div class="card-body section_two_card_body">
                            
                            
                            <img src="front_assets/img/FINAL DELIVARY 0RDER 4-01 1.png" alt="Feedback Anonymous" class="w-100 imgfix">
                            
                            <h4 class="img_one_h4"><?php echo e($data->placeholder_text_1); ?></h4>
                        </div>
                    </div>
                
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="card section_two_card">
                        <div class="card-body section_two_card_body">
                    
                    <img src="front_assets/img/FINAL DELIVARY project revisions file-01 (1) 1.png" alt="Manage Feedback" class="w-100 imgfix">
                  
                    <h4 class="img_two_h4"><?php echo e($data->placeholder_text_2); ?></h4>
                </div>
            </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="card section_two_card">
                        <div class="card-body section_two_card_body">
                    
                    <img src="front_assets/img/attachment 1.png" alt="Honest Reviews" class="w-100 imgfix">
                    
                    <h4 class="img_three_h4"><?php echo e($data->placeholder_text_3); ?></h4>
                </div>
            </div>
        </div>
            </div>
        </div>
    </section>
    <section class="section_three mt-5">
        <div class="container section_three_con ">
            <div class="row section_three_row">
                <div class="col-md-1"></div>

                <div class="col-md-5 mb-4">
                    <div class="card cheer-card">
                      <img src="front_assets/img/Rectangle 1141.png" class="card-img-top" alt="Cheer Trophy">
                      <div class="card-body " style="padding: 10px 10px;">
                        <h5 class="card-title">Top All Star Cheer Gyms Near You</h5>
                        <p class="card-text">Gyms rated above 4.5 stars rating near you</p>
                        <a href="#" class="btn btn-link">“23 Results”</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="card cheer-card">
                      <img src="front_assets/img/Rectangle 1141 (1).png" class="card-img-top" alt="Cheer Trophy">
                      <div class="card-body" style="padding: 10px 10px;" >
                        <h5 class="card-title">Nearest All Star Gyms</h5>
                        <p class="card-text">Nearest Gyms near You</p>
                        <a href="#" class="btn btn-link">“23 Results”</a>
                      </div>
                    </div>
                  </div>
                <div class="col-md-1"></div>

            </div>
        </div>
    </section>
    
</main>

<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\Softwe\laragon\www\gym website code\gym-Website\resources\views/index.blade.php ENDPATH**/ ?>