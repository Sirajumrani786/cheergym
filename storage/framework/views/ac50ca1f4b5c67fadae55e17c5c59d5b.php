<?php echo $__env->make('frontend.layouts.headertwo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
    @font-face {
        font-family: 'Inkfree';
        src: url('assets/font/Inkfree.ttf') format('truetype');
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

    @media (max-width: 627px) {

        li.mobile {
            display: block;
        }

        li.web {
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
    <section class="section_one"
        style="background-image: url('<?php echo e(asset('front_assets/img/banner_one.png')); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; height: auto;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-5">
                    <h1 class="sec_one_h1 mt-5">Cheer leaders Gym
                        <span><img src="<?php echo e(asset('front_assets/img/tick.png')); ?>" alt></span>
                    </h1>
                    <div class="dpansdiv1 mt-1">
                        <span class="sec_one_span1" style="font-weight: 100;">Downtown, New York</span>
                        <span class="ml-2"> <img src="<?php echo e(asset('front_assets/img/Vector.png')); ?>"></span>
                    </div>

                    <?php
                        $facilitiesTotal = 0;
                        $coachingTotal = 0;
                        $atmosphereTotal = 0;
                        $numReviews = count($gym->reviews);

                        foreach ($gym->reviews as $review) {
                            $facilitiesTotal += $review->facilities_rating;
                            $coachingTotal += $review->coaching_rating;
                            $atmosphereTotal += $review->atmosphere_rating;
                        }

                        if ($numReviews > 0) {
                            $averageFacilities = $facilitiesTotal / $numReviews;
                            $averageCoaching = $coachingTotal / $numReviews;
                            $averageAtmosphere = $atmosphereTotal / $numReviews;
                            $averageOverall = ($averageFacilities + $averageCoaching + $averageAtmosphere) / 3;
                        } else {
                            $averageFacilities = 0;
                            $averageCoaching = 0;
                            $averageAtmosphere = 0;
                            $averageOverall = 0;
                        }

                        if (!function_exists('calculateColor')) {
                            function calculateColor($rating)
                            {
                                switch (true) {
                                    case $rating >= 4.5:
                                        return '#219653';
                                    case $rating >= 3.5:
                                        return '#8ecf6f';
                                    case $rating >= 2.5:
                                        return '#f2c94c';
                                    case $rating >= 1.5:
                                        return '#f2994a';
                                    default:
                                        return '#eb5757';
                                }
                            }
                        }
                    ?>

                    <div class="spnastwo mt-2">
                        <span class="span_sec_one">Overall Rating</span>
                        <span class="span_sec_two">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <?php if($i <= $averageOverall): ?>
                                    <i class="fas fa-star" style="color: #FFD89E; font-size: 23px; border: 0px;"></i>
                                <?php elseif($i - $averageOverall < 1): ?>
                                    <i class="fas fa-star-half-alt"
                                        style="color: #FFD89E; font-size: 23px; border: 0px;"></i>
                                <?php else: ?>
                                    <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px; border: 0px;"></i>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </span>
                        <span class="span_sec_three ml-2"><?php echo e(number_format($averageOverall, 1)); ?> star rating</span>
                        <br><br>
                        <span class="span_sec_four ml-2">(<?php echo e($numReviews); ?>+ Reviews)</span>
                    </div>

                    <div class="heart_btn mt-3" style="display: flex; align-items: center;">
                        <a href="#" id="save-gym-btn" data-gym-id="<?php echo e($gym->id); ?>">
                            <i class="fa-regular fa-heart" id="heart-icon" style="font-size: 45px; color: #fff;"></i>
                        </a>
                        <a href="<?php echo e(route('gym_rating', $gym->id)); ?>" class="review_btn"
                            style="margin-left: 10px;">Write a Review</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <img src="<?php echo e(asset('front_assets/img/img1.png')); ?>" class="w-100 section_one_img">
                </div>
            </div>
        </div>
    </section>


    <section class="section_two mb-4">
        <?php
            use Illuminate\Support\Facades\DB;
    
            // Define categories and icons
            $categories = [
                'facilities_rating' => 'Facilities Rating',
                'coaching_rating' => 'Coaching Rating',
                'atmosphere_rating' => 'Atmosphere Rating',
                'equipment_quality' => 'Equipment Quality',
                'safety_standards' => 'Safety Standards',
                'communication' => 'Communication',
                'value_for_money' => 'Value for Money',
                'class_variety' => 'Class Variety & Availability',
            ];
    
            $icons = [
                'facilities_rating' => 'front_assets/img/Group.png',
                'coaching_rating' => 'front_assets/img/User check.png',
                'atmosphere_rating' => 'front_assets/img/healthicons_happy.png',
                'equipment_quality' => 'front_assets/img/Vectorr.png',
                'safety_standards' => 'front_assets/img/material-symbols-light_health.png',
                'communication' => 'front_assets/img/material-symbols-light.png',
                'value_for_money' => 'front_assets/img/solar_hand-money-linear.png',
                'class_variety' => 'front_assets/img/Layout.png',
            ];
    
            // Replace with the actual gym ID
            $gymId = $gym->id; 
    
            // Calculate average ratings for the specific gym
            $averageRatings = [];
            foreach ($categories as $key => $value) {
                $averageRatings[$key] = DB::table('reviews')
                    ->where('gym_id', $gymId) // Filter by gym ID
                    ->avg($key);
            }
        ?>
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $averageRatings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $averageRating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        // Ensure the average rating is correctly rounded to one decimal place
                        $averageRating = number_format((float) $averageRating, 1, '.', '');
                        $fullStars = floor($averageRating);
                        $halfStar = $averageRating - $fullStars >= 0.5;
                    ?>
    
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                        <div class="card_div">
                            <div
                                style="flex-shrink: 0;box-shadow:3px 0px 6px 1px rgba(0, 0, 0, 0.25);padding: 27px 27px;border-radius: 10px;">
                                <img src="<?php echo e(asset($icons[$key])); ?>" alt="<?php echo e($categories[$key]); ?> Icon"
                                    style="width: 40px; height: 40px;">
                            </div>
                            <div style="margin-left: 10px;">
                                <div style="font-size: 13px;font-weight: 500;"><?php echo e($categories[$key]); ?></div>
                                <div style="color: #FFA500;">
                                    <span class="span_sec_three">
                                        <?php for($i = 0; $i < 5; $i++): ?>
                                            <?php if($i < $fullStars): ?>
                                                <i class="fas fa-star"
                                                    style="color: #FFD89E;font-size: 23px;border: 0px;"></i>
                                            <?php elseif($i == $fullStars && $halfStar): ?>
                                                <i class="fas fa-star-half-alt"
                                                    style="color: #FFD89E;font-size: 23px;border: 0px;"></i>
                                            <?php else: ?>
                                                <i class="fas fa-star"
                                                    style="color: #ccc;font-size: 23px;border: 0px;"></i>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </span>
                                    <span style="color: #888; font-size: 14px;"><br>
                                        <?php echo e($averageRating); ?> star rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    

    <section class="section-three">
        <div class="container">
            <h3 class="three_sec_h3 mt-4 mb-4">Reviews (<?php echo e($reviews->count()); ?>)</h3>
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="card mt-4" style="width: 100%;">
                        <div class="card-body">
                            <div class="container p-5">
                                <div class="sec-three-spans">
                                    <span class="three_sec_one" style="color: #00000085;">
                                        <?php echo e($review->created_at ? \Carbon\Carbon::parse($review->created_at)->format('D, d M Y') : 'Date not available'); ?>

                                    </span>
                                    <span class="three_sec_two">
                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                            <?php if($i <= floor($review->facilities_rating ?? 0)): ?>
                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                            <?php elseif($i - ($review->facilities_rating ?? 0) < 1): ?>
                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                            <?php else: ?>
                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </span>
                                    <span class="three_sec_three ml-2" style="color: #00000085;">
                                        <?php echo e($review->facilities_rating ?? 'Rating not available'); ?> star rating
                                    </span>
                                    <h5 class="three_sec_h5 mt-3">
                                        <?php echo e($review->review_text ?? 'Review text not available'); ?>

                                    </h5>
                                </div>
                                <div class="row">
                                    <!-- Facility Cleanliness -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                                        <div class="card_div_three">
                                            <div style="flex-shrink: 0; padding: 27px 27px;">
                                                <img src="<?php echo e(asset('front_assets/img/Group.png')); ?>" alt="Facility Cleanliness" style="width: 40px; height: 40px;">
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div style="font-size: 13px; font-weight: 500;">Facility Cleanliness</div>
                                                <div style="color: #FFA500;">
                                                    <span class="span_sec_three">
                                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                                            <?php if($i <= floor($review->facilities_rating ?? 0)): ?>
                                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                                            <?php elseif($i - ($review->facilities_rating ?? 0) < 1): ?>
                                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                                            <?php else: ?>
                                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                                            <?php endif; ?>
                                                        <?php endfor; ?>
                                                    </span>
                                                    <span style="color: #888; font-size: 14px;">
                                                        <br><?php echo e($review->facilities_rating ?? 'Rating not available'); ?> star rating
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Coaching Quality -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                                        <div class="card_div_three">
                                            <div style="flex-shrink: 0; padding: 27px 27px;">
                                                <img src="<?php echo e(asset('front_assets/img/User check.png')); ?>" alt="Coaching Quality" style="width: 40px; height: 40px;">
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div style="font-size: 13px; font-weight: 500;">Coaching Quality</div>
                                                <div style="color: #FFA500;">
                                                    <span class="span_sec_three">
                                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                                            <?php if($i <= floor($review->coaching_rating ?? 0)): ?>
                                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                                            <?php elseif($i - ($review->coaching_rating ?? 0) < 1): ?>
                                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                                            <?php else: ?>
                                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                                            <?php endif; ?>
                                                        <?php endfor; ?>
                                                    </span>
                                                    <span style="color: #888; font-size: 14px;">
                                                        <br><?php echo e($review->coaching_rating ?? 'Rating not available'); ?> star rating
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Equipment Quality -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                                        <div class="card_div_three">
                                            <div style="flex-shrink: 0; padding: 27px 27px;">
                                                <img src="<?php echo e(asset('front_assets/img/Vectorr.png')); ?>" alt="Equipment Quality" style="width: 40px; height: 40px;">
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div style="font-size: 13px; font-weight: 500;">Equipment Quality</div>
                                                <div style="color: #FFA500;">
                                                    <span class="span_sec_three">
                                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                                            <?php if($i <= floor($review->equipment_quality ?? 0)): ?>
                                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                                            <?php elseif($i - ($review->equipment_quality ?? 0) < 1): ?>
                                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                                            <?php else: ?>
                                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                                            <?php endif; ?>
                                                        <?php endfor; ?>
                                                    </span>
                                                    <span style="color: #888; font-size: 14px;">
                                                        <br><?php echo e($review->equipment_quality ?? 'Rating not available'); ?> star rating
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Atmosphere -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                                        <div class="card_div_three">
                                            <div style="flex-shrink: 0; padding: 27px 27px;">
                                                <img src="<?php echo e(asset('front_assets/img/healthicons_happy.png')); ?>" alt="Atmosphere" style="width: 40px; height: 40px;">
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div style="font-size: 13px; font-weight: 500;">Atmosphere</div>
                                                <div style="color: #FFA500;">
                                                    <span class="span_sec_three">
                                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                                            <?php if($i <= floor($review->atmosphere_rating ?? 0)): ?>
                                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                                            <?php elseif($i - ($review->atmosphere_rating ?? 0) < 1): ?>
                                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                                            <?php else: ?>
                                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                                            <?php endif; ?>
                                                        <?php endfor; ?>
                                                    </span>
                                                    <span style="color: #888; font-size: 14px;">
                                                        <br><?php echo e($review->atmosphere_rating ?? 'Rating not available'); ?> star rating
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Safety Standards -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                                        <div class="card_div_three">
                                            <div style="flex-shrink: 0; padding: 27px 27px;">
                                                <img src="<?php echo e(asset('front_assets/img/material-symbols-light_health.png')); ?>" alt="Safety Standards" style="width: 40px; height: 40px;">
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div style="font-size: 13px; font-weight: 500;">Safety Standards</div>
                                                <div style="color: #FFA500;">
                                                    <span class="span_sec_three">
                                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                                            <?php if($i <= floor($review->safety_standards ?? 0)): ?>
                                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                                            <?php elseif($i - ($review->safety_standards ?? 0) < 1): ?>
                                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                                            <?php else: ?>
                                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                                            <?php endif; ?>
                                                        <?php endfor; ?>
                                                    </span>
                                                    <span style="color: #888; font-size: 14px;">
                                                        <br><?php echo e($review->safety_standards ?? 'Rating not available'); ?> star rating
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Communication -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                                        <div class="card_div_three">
                                            <div style="flex-shrink: 0; padding: 27px 27px;">
                                                <img src="<?php echo e(asset('front_assets/img/material-symbols-light.png')); ?>" alt="Communication" style="width: 40px; height: 40px;">
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div style="font-size: 13px; font-weight: 500;">Communication</div>
                                                <div style="color: #FFA500;">
                                                    <span class="span_sec_three">
                                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                                            <?php if($i <= floor($review->communication ?? 0)): ?>
                                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                                            <?php elseif($i - ($review->communication ?? 0) < 1): ?>
                                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                                            <?php else: ?>
                                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                                            <?php endif; ?>
                                                        <?php endfor; ?>
                                                    </span>
                                                    <span style="color: #888; font-size: 14px;">
                                                        <br><?php echo e($review->communication ?? 'Rating not available'); ?> star rating
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Value for Money -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                                        <div class="card_div_three">
                                            <div style="flex-shrink: 0; padding: 27px 27px;">
                                                <img src="<?php echo e(asset('front_assets/img/solar_hand-money-linear.png')); ?>" alt="Value for Money" style="width: 40px; height: 40px;">
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div style="font-size: 13px; font-weight: 500;">Value for Money</div>
                                                <div style="color: #FFA500;">
                                                    <span class="span_sec_three">
                                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                                            <?php if($i <= floor($review->value_for_money ?? 0)): ?>
                                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                                            <?php elseif($i - ($review->value_for_money ?? 0) < 1): ?>
                                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                                            <?php else: ?>
                                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                                            <?php endif; ?>
                                                        <?php endfor; ?>
                                                    </span>
                                                    <span style="color: #888; font-size: 14px;">
                                                        <br><?php echo e($review->value_for_money ?? 'Rating not available'); ?> star rating
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Class Variety -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                                        <div class="card_div_three">
                                            <div style="flex-shrink: 0; padding: 27px 27px;">
                                                <img src="<?php echo e(asset('front_assets/img/Layout.png')); ?>" alt="Class Variety" style="width: 40px; height: 40px;">
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div style="font-size: 13px; font-weight: 500;">Class Variety & Availability</div>
                                                <div style="color: #FFA500;">
                                                    <span class="span_sec_three">
                                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                                            <?php if($i <= floor($review->class_variety ?? 0)): ?>
                                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                                            <?php elseif($i - ($review->class_variety ?? 0) < 1): ?>
                                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                                            <?php else: ?>
                                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                                            <?php endif; ?>
                                                        <?php endfor; ?>
                                                    </span>
                                                    <span style="color: #888; font-size: 14px;">
                                                        <br><?php echo e($review->class_variety ?? 'Rating not available'); ?> star rating
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="thumbs_div ml-5 w-100">
                                        <i class="fas fa-thumbs-up" style="font-size: 40px; color: #0000005c;"></i>
                                        <span class="helpfulthubm">Helpful</span>
    
                                        <i class="fas fa-thumbs-down ml-5" style="font-size: 40px; color: #0000005c;"></i>
                                        <span class="helpfulthubm">Not Helpful</span>
    
                                        <a href="#" class="flagicon" style="float: right; margin-right: 41px; font-size: 40px; color: #00000073;">
                                            <i class="fa-regular fa-flag"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>No reviews available for this gym.</p>
                <?php endif; ?>
            </div>
            <a href="#" class="three_sec_h3 mt-5 mb-4" style="text-align: center; display: block; font-family: 'Ink free'; font-size: 21px; color: #00000069; text-decoration: underline;">See All</a>
        </div>
    </section>
    
    
    
</main>

<!-- Include SweetAlert CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        $('#save-gym-btn').click(function(e) {
            e.preventDefault();

            var gymId = "<?php echo e($gym->id); ?>";
            var icon = $('#heart-icon');
            var isSaved = icon.hasClass('fa-heart-solid'); // Check if gym is already saved

            $.ajax({
                url: '<?php echo e(route('gym.save')); ?>',
                method: 'POST',
                data: {
                    _token: "<?php echo e(csrf_token()); ?>",
                    gym_id: gymId
                },
                success: function(response) {
                    if (response.success) {
                        if (response.message.includes('saved')) {
                            icon.removeClass('fa-heart').addClass('fa-heart-solid');
                            icon.css('color', '#e74c3c'); // Change color for saved state
                            Swal.fire({
                                icon: 'success',
                                title: 'Saved!',
                                text: response.message,
                            });
                        } else {
                            icon.removeClass('fa-heart-solid').addClass('fa-heart');
                            icon.css('color', '#fff'); // Change color for unsaved state
                            Swal.fire({
                                icon: 'info',
                                title: 'Removed!',
                                text: response.message,
                            });
                        }
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: response.message,
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'An error occurred while saving the gym.',
                    });
                }
            });
        });
    });
</script>

<script>
    // Function to handle form submission
    function handleSaveGymForm(event) {
        event.preventDefault(); // Prevent default form submission

        var form = event.target;
        var formData = new FormData(form); // Create FormData object

        fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                }
            })
            .then(response => response.json()) // Parse JSON response
            .then(data => {
                // Show SweetAlert based on response
                Swal.fire({
                    title: data.success ? 'Success!' : 'Error!',
                    text: data.message,
                    icon: data.success ? 'success' : 'error',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Reload the page when the user clicks "OK"
                        location.reload();
                    }
                });
            })
            .catch(error => {
                console.error('Error:', error);
                // Show generic error SweetAlert
                Swal.fire({
                    title: 'Error!',
                    text: 'There was an error updating your wishlist. Please try again.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
    }

    // Attach event listener to form submission
    document.addEventListener('DOMContentLoaded', function() {
        var saveGymForm = document.getElementById('saveGymForm');
        saveGymForm.addEventListener('submit', handleSaveGymForm);
    });
</script>

<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\Softwe\laragon\www\gym website code\gym-Website\resources\views/frontend/gym.blade.php ENDPATH**/ ?>