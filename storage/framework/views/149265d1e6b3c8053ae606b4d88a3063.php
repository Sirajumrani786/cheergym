<?php echo $__env->make('frontend.layouts.headertwo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

    .section-three {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        margin: auto;
        font-family: Arial, sans-serif;
    }

    h4.review_h4 {
        font-size: 14px;
        font-weight: 600;
        font-family: 'Poppins';
        color: #fff;

    }

    li.review_li {
        font-size: 10px;
        font-weight: 400;
        line-height: 16px;
        list-style-type: disc;
        color: #fff;

    }

    .card.review_card {
        border: 0px;
        background: #082e8f;
        border-radius: 11px;


    }

    a.rviewa {
        font-size: 14px;
        text-decoration: underline;
        color: #fff;
        font-weight: 600;
    }

    span.review_rate {
        font-size: 17.27px;
        font-weight: 600;
        color: #fff;
    }

    textarea.form-control.reviewtext {
        height: 129.53px;
    }

    .card.review_card_two {
        margin-top: 160px;
        position: absolute;
    }

    section.section_two {
        margin-top: 200px;
    }

    li.mobile {
        display: none;
    }

    .rating-container {
        display: flex;
        align-items: center;
        font-family: Arial, sans-serif;
    }

    .rating-icon {
        display: flex;
        align-items: center;
        margin-right: 10px;
    }

    .rating-icon i {
        color: #ff69b4;
        font-size: 24px;
    }

    .rating-stars {
        display: flex;
    }

    .rating-stars i {
        font-size: 24px;
        margin-right: 5px;
        padding: 0px 20px;
    }

    .rating-text {
        color: #333;
        margin-left: 10px;
        font-size: 11.17px;
        line-height: 16.76px;
        font-weight: 700;
    }

    p.rating-p {
        font-size: 11.17px;
        font-weight: 400;
        margin-left: 9px;
        line-height: 15px;
    }

    @media (max-width: 627px) {
        .rating-stars i {

            padding: 0px 10px !important;
        }

        .sec_one_h1 {
            color: #fff;
            font-size: 25px;
        }

        p.rating-p {
            font-size: 14px;
        }

        li.mobile {
            display: block;
        }

        li.web {
            display: none;
        }

        section.section_two {
            margin-top: 25px;
        }

        .rating-text {
            font-size: 13.17px;
        }

        textarea.form-control.reviewtext {
            font-size: 13px;
        }

        .card.review_card_two {
            margin-top: 0px;
            position: relative;
            margin-bottom: 13px;
        }

        .card.review_card_two.displayweb {
            display: none;
        }

        i.fas.fa-star.sif {
            font-size: 13px !important;
        }

        .card.review_card_two.displaymobile {
            display: block !important;
        }

        p.lastcolp {
            font-size: 14.17px;
            text-align: justify;
        }

        .col-lg-12.col-md-12.col-sm-12.col-12.lastcol.mt-5.mb-5 {
            text-align: center;
        }

        i.fas.fa-star.sif {
            margin-left: 0px !important;
        }
    }



    .card.review_card_two.displaymobile {
        display: none;
    }

    h3.review_rate {
        display: flex;
        width: 26%;
        font-size: 16px;
        float: left;
        margin-top: 34px;
        font-weight: 600;
        color: #fff;
    }

    p.lastcolp {
        font-size: 11.17px;
        line-height: 16.76px;
    }

    a.lastcola {
        background: #EB1798;
        color: #fff;
        border-radius: 10px;
        padding: 6px 21px;
        border: 0px;
        font-size: 16px;
        font-weight: 400;
    }

    a.lastcola:hover {
        background: #b30d73;
        text-decoration: none;
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

    .fa-star {
        color: #ddd;
        cursor: pointer;
    }

    .fa-star.selected {
        color: #ffd700;
    }
</style>



<main>
    <form id="rating-form" action="<?php echo e(route('ratingstore')); ?>" class="rating-form" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="gym_id" value="<?php echo e($gym->id); ?>">

        <input type="hidden" id="facility_cleanliness" name="facility_cleanliness" value="0">
        <input type="hidden" id="coaching_quality" name="coaching_quality" value="0">
        <input type="hidden" id="equipment_quality" name="equipment_quality" value="0">
        <input type="hidden" id="atmosphere" name="atmosphere" value="0">
        <input type="hidden" id="safety_standards" name="safety_standards" value="0">
        <input type="hidden" id="communication" name="communication" value="0">
        <input type="hidden" id="value_for_money" name="value_for_money" value="0">
        <input type="hidden" id="class_variety" name="class_variety" value="0">
        <section class="section_one"
            style="background-image: url('<?php echo e(asset('front_assets/img/banner_one.png')); ?>');background-size: cover;background-position: center;background-repeat: no-repeat;height: auto;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mt-5">
                        <h1 class="sec_one_h1 mt-5">Cheer leaders Gym
                            <span><img src="<?php echo e(asset('front_assets/img/tick.png')); ?>" alt></span>
                        </h1>
                        <div class="dpansdiv1 mt-1">
                            <span class="sec_one_span1 " style="font-weight: 100;">Downtown,
                                Newyork</span>
                            <span class="ml-2"> <img src="<?php echo e(asset('front_assets/img/Vector.png')); ?>"></span>
                        </div>
                        <div class="spnastwo mt-2">
                            <span class="span_sec_one">Write Feedback <span class="startt">*</span></span>
                            <div class="card review_card">
                                <div class="card-body review_card_body">
                                    <h4 class="review_h4"><span class="reviewspan p-2"><img
                                                src="<?php echo e(asset('front_assets/img/error.png')); ?>"
                                                alt=""></span>Guidelines</h4>
                                    <ul class="review_ul ml-4">
                                        <li class="review_li">Your rating could be removed if you use profanity or
                                            derogatory terms</li>
                                        <li class="review_li">Refer to the rating categories to help you better
                                            elaborate your comments.</li>
                                        <li class="review_li">Don’t forget to proofread!</li>
                                    </ul>
                                    <a href="<?php echo e(route('guidelines')); ?>" class="rviewa ml-3">View all Guidelines</a>
                                </div>
                                <div class="card review_card_two displayweb"
                                    style="    background: linear-gradient(#EB1798 100%, #850D56 100%); width: 100%; height: 215px;">
                                    <div class="card-body review_card_body_two">
                                        <h3 class="review_rate">Rate My Gym</h3>

                                        <span class="span_sec_two">
                                            <i class="fas fa-star sif"
                                                style="font-size: 45px;margin-left: 16px;border: 0px;padding: 20px 8px;color: #FFA500;"></i>
                                            <i class="fas fa-star sif"
                                                style="font-size: 45px;border: 0px;padding: 20px 8px; color: #FFA500;"></i>
                                            <i class="fas fa-star sif"
                                                style="font-size: 45px;border: 0px; padding: 20px 8px; color: #FFA500;"></i>
                                            <i class="fas fa-star sif"
                                                style="font-size: 45px;border: 0px; padding: 20px 8px; color: #FFA500;"></i>
                                            <i class="fas fa-star sif"
                                                style="font-size: 45px;border: 0px; padding: 20px 8px; color: #FFA500;"></i>
                                        </span>
                                        <textarea name="feedback" id="feedback" class="form-control reviewtext"
                                            placeholder="Discuss your personal experience with this All Star Cheer gym. What’s great about it? What could be improved?"
                                            style="height: 80px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6 mt-5">
                        <img src="<?php echo e(asset('front_assets/img/img1.png')); ?>" class="w-100  section_one_img">
                    </div>

                </div>
            </div>
        </section>
        <section class="section_two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card review_card_two displaymobile"
                            style="background: linear-gradient(#EB1798 100%, #850D56 100%);">
                            <div class="card-body review_card_body_two">
                                <span class="review_rate">Rate My Gym</span>
                                <span class="span_sec_two">
                                    <i class="fas fa-star sif"
                                        style="font-size: 45px;margin-left: 18px;border: 0px;padding: 20px 9px;"></i>
                                    <i class="fas fa-star sif"
                                        style="font-size: 45px;border: 0px;padding: 20px 9px;"></i>
                                    <i class="fas fa-star sif"
                                        style="font-size: 45px;border: 0px; padding: 20px 9px;"></i>
                                    <i class="fas fa-star sif"
                                        style="font-size: 45px;border: 0px; padding: 20px 9px;"></i>
                                    <i class="fas fa-star sif"
                                        style="font-size: 45px;border: 0px; padding: 20px 9px;"></i>
                                </span>
                                <textarea name="" id="" class="form-control reviewtext"
                                    placeholder="Discuss your personal experience with this All Star Cheer gym. What’s great about it? What could be improved?"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-5 mb-5">
                        <div class="rating-container">
                            <div>
                                <h3 class="rating-text">Facility Cleanliness:</h3>
                                <p class="rating-p">How clean and well-maintained the gym is.</p>
                                <div class="rating-stars" data-rating="0" data-rating-type="facility_cleanliness">
                                    <span><img src="<?php echo e(asset('front_assets/img/Group.png')); ?>" style="margin-left: 5px;"></span>
                                    <i class="fas fa-star mt-3" data-value="1"></i>
                                    <i class="fas fa-star mt-3" data-value="2"></i>
                                    <i class="fas fa-star mt-3" data-value="3"></i>
                                    <i class="fas fa-star mt-3" data-value="4"></i>
                                    <i class="fas fa-star mt-3" data-value="5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-5 mb-5">
                        <div class="rating-container">
                            <div>
                                <h3 class="rating-text">Coaching Quality:</h3>
                                <p class="rating-p">The expertise, effectiveness, and approachability of the coaching
                                    staff.</p>
                                <div class="rating-stars" data-rating="0" data-rating-type="coaching_quality">
                                    <span><img src="<?php echo e(asset('front_assets/img/User check.png')); ?>"
                                            style="margin-left: 9px;"></span>
                                    <i class="fas fa-star mt-3" data-value="1"></i>
                                    <i class="fas fa-star mt-3" data-value="2"></i>
                                    <i class="fas fa-star mt-3" data-value="3"></i>
                                    <i class="fas fa-star mt-3" data-value="4"></i>
                                    <i class="fas fa-star mt-3" data-value="5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-5 mb-5">
                        <div class="rating-container">
                            <div>
                                <h3 class="rating-text">Equipment Quality:</h3>
                                <p class="rating-p">The condition and availability of equipment used for training.</p>
                                <div class="rating-stars" data-rating="0" data-rating-type="equipment_quality">
                                    <span><img src="<?php echo e(asset('front_assets/img/Vectorr.png')); ?>"
                                            style="margin-left: 10px;"></span>
                                    <i class="fas fa-star mt-3" data-value="1"></i>
                                    <i class="fas fa-star mt-3" data-value="2"></i>
                                    <i class="fas fa-star mt-3" data-value="3"></i>
                                    <i class="fas fa-star mt-3" data-value="4"></i>
                                    <i class="fas fa-star mt-3" data-value="5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-5 mb-5">
                        <div class="rating-container">
                            <div>
                                <h3 class="rating-text">Atmosphere:</h3>
                                <p class="rating-p">The general environment and culture of the gym.</p>
                                <div class="rating-stars" data-rating="0" data-rating-type="atmosphere">
                                    <span><img src="<?php echo e(asset('front_assets/img/healthicons_happy.png')); ?>"
                                            style="margin-left: 3px;"></span>
                                    <i class="fas fa-star mt-3" data-value="1"></i>
                                    <i class="fas fa-star mt-3" data-value="2"></i>
                                    <i class="fas fa-star mt-3" data-value="3"></i>
                                    <i class="fas fa-star mt-3" data-value="4"></i>
                                    <i class="fas fa-star mt-3" data-value="5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-5 mb-5">
                        <div class="rating-container">
                            <div>
                                <h3 class="rating-text">Safety Standards:</h3>
                                <p class="rating-p">The gym’s adherence to safety protocols and measures.</p>
                                <div class="rating-stars" data-rating="0" data-rating-type="safety_standards">
                                    <span><img src="<?php echo e(asset('front_assets/img/material-symbols-light_health.png')); ?>"
                                            style="margin-left: 1px;"></span>
                                    <i class="fas fa-star mt-3" data-value="1"></i>
                                    <i class="fas fa-star mt-3" data-value="2"></i>
                                    <i class="fas fa-star mt-3" data-value="3"></i>
                                    <i class="fas fa-star mt-3" data-value="4"></i>
                                    <i class="fas fa-star mt-3" data-value="5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-5 mb-5">
                        <div class="rating-container">
                            <div>
                                <h3 class="rating-text">Communication:</h3>
                                <p class="rating-p">How well the gym communicates with members regarding schedules,
                                    updates, and feedback.</p>
                                <div class="rating-stars" data-rating="0" data-rating-type="communication">
                                    <span><img src="<?php echo e(asset('front_assets/img/material-symbols-light.png')); ?>"
                                            style="margin-left: 6px;"></span>
                                    <i class="fas fa-star mt-3" data-value="1"></i>
                                    <i class="fas fa-star mt-3" data-value="2"></i>
                                    <i class="fas fa-star mt-3" data-value="3"></i>
                                    <i class="fas fa-star mt-3" data-value="4"></i>
                                    <i class="fas fa-star mt-3" data-value="5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-5 mb-5">
                        <div class="rating-container">
                            <div>
                                <h3 class="rating-text">Value for Money:</h3>
                                <p class="rating-p">Whether the services and facilities provided are worth the cost.
                                </p>
                                <div class="rating-stars" data-rating="0" data-rating-type="value_for_money">
                                    <span><img src="<?php echo e(asset('front_assets/img/solar_hand-money-linear.png')); ?>"
                                            style="margin-left: 7px;"></span>
                                    <i class="fas fa-star mt-3" data-value="1"></i>
                                    <i class="fas fa-star mt-3" data-value="2"></i>
                                    <i class="fas fa-star mt-3" data-value="3"></i>
                                    <i class="fas fa-star mt-3" data-value="4"></i>
                                    <i class="fas fa-star mt-3" data-value="5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-5 mb-5">
                        <div class="rating-container">
                            <div>
                                <h3 class="rating-text">Class Variety and Availability:</h3>
                                <p class="rating-p">The range of classes offered and their scheduling.</p>
                                <div class="rating-stars" data-rating="0" data-rating-type="class_variety">
                                    <span><img src="<?php echo e(asset('front_assets/img/Layout.png')); ?>"
                                            style="margin-left: 7px;"></span>
                                    <i class="fas fa-star mt-3" data-value="1"></i>
                                    <i class="fas fa-star mt-3" data-value="2"></i>
                                    <i class="fas fa-star mt-3" data-value="3"></i>
                                    <i class="fas fa-star mt-3" data-value="4"></i>
                                    <i class="fas fa-star mt-3" data-value="5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 lastcol mt-5 mb-5">
                        <p class="lastcolp">By clicking the “Submit Button”, I acknowledge that I have read and agreed
                            to the Rate My Cheer Gym’s <a href="<?php echo e(route('guidelines')); ?>" style="color: #3771C8;">
                                Site Guidelines, Terms of Use,</a> and <a href="<?php echo e(route('privacy')); ?>"
                                style="color: #3771C8;">privacy policy.</a> Submitted data becomes the property of Rate
                            my Cheer Gym, LLC.</p>
                            <button type="submit" class="lastcola">Submit Review</button>
                    </div>
                </div>
            </div>
        </section>

    </form>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // JavaScript to handle star rating selection
    document.querySelectorAll('.rating-stars').forEach(starsContainer => {
        starsContainer.addEventListener('click', function(event) {
            if (event.target.classList.contains('fa-star')) {
                const selectedValue = event.target.getAttribute('data-value');
                this.setAttribute('data-rating', selectedValue);

                // Update stars display
                const stars = this.querySelectorAll('.fa-star');
                stars.forEach(star => {
                    star.classList.remove('selected');
                    if (star.getAttribute('data-value') <= selectedValue) {
                        star.classList.add('selected');
                    }
                });

                // Update hidden input value
                const ratingType = this.getAttribute('data-rating-type');
                const input = document.getElementById(ratingType);
                if (input) {
                    input.value = selectedValue;
                }
            }
        });
    });
    window.submitReview = function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Collect ratings
        const ratings = {};
        document.querySelectorAll('.rating-stars').forEach(starsContainer => {
            const ratingType = starsContainer.getAttribute('data-rating-type');
            const ratingValue = starsContainer.getAttribute('data-rating');
            ratings[ratingType] = ratingValue;
        });

        // Populate hidden inputs with ratings
        for (const [key, value] of Object.entries(ratings)) {
            console.log(`Setting value for ${key}: ${value}`);
            const input = document.getElementById(key);
            if (input) {
                input.value = value;
            }
        }

        // Check if values are set correctly
        document.querySelectorAll('input[type="hidden"]').forEach(input => {
            console.log(`${input.name}: ${input.value}`);
        });

        // Submit the form
        const form = document.getElementById('rating-form');
        if (form) {
            form.submit();
        } else {
            console.error('Form not found');
        }
    }
});

</script>






















<script>
    document.addEventListener("DOMContentLoaded", function() {
        const containers = document.querySelectorAll('.RatingSlider__SliderBoxContainer-qmpn39-1');
        const colors = ['red', 'blue', 'green', 'purple', 'orange'];

        const ratings = ['facilities', 'coaching', 'atmosphere', 'overall'];

        ratings.forEach((rating, index) => {
            const input = document.getElementById(rating + '_rating');
            const boxes = containers[index].querySelectorAll('[data-testid="SliderBox"]');

            boxes.forEach((box, i) => {
                box.addEventListener('mouseenter', () => {
                    if (i === 0) {
                        box.style.backgroundColor = 'yellow';
                    }
                });

                box.addEventListener('mouseleave', () => {
                    if (!box.classList.contains('clicked')) {
                        box.style.backgroundColor = 'gray';
                    }
                });

                box.addEventListener('click', () => {
                    boxes.forEach(b => {
                        b.classList.remove('clicked');
                        b.style.backgroundColor = 'gray';
                    });

                    for (let j = 0; j <= i; j++) {
                        boxes[j].classList.add('clicked');
                        boxes[j].style.backgroundColor = colors[j];
                    }

                    input.value = i + 1; // Set the value of the input to the index + 1
                });
            });
        });
    });
</script>

<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\Softwe\laragon\www\gym website code\gym-Website\resources\views/frontend/gym_rating.blade.php ENDPATH**/ ?>