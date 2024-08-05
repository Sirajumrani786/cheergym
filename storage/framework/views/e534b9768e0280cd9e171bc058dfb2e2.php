<?php echo $__env->make('frontend.layouts.user_pannel_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
    .profile-container {
        height: auto;
    }

    .gym-container {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        box-shadow: 3px 3px 4px -2px gray;
    }

    div#profile {
        margin-bottom: 78px;
    }

    .gym-rating {
        background-color: #FFE500;
        padding: 10px;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 71px;
        height: 72px;
        margin-right: 10px;
    }

    .gym-rating span {
        font-size: 1.5em;
        font-weight: bold;
    }

    .gym-info h4 {
        margin: 0;
        font-size: 1.25em;
    }

    .gym-info p {
        margin: 0;
        color: #666;
    }

    .ratings-container {
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 100%;
    }

    .rating-summary {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .average-rating {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #ffeb3b;
        padding: 10px;
        border-radius: 5px;
    }

    .average-number {
        font-size: 2em;
        font-weight: bold;
    }

    .average-text {
        font-size: 1em;
    }

    .rating-box {

        padding: 20px;
        border-radius: 10px;

        width: 100%;
    }

    .rating-box h4 {
        margin: 0 0 10px;
    }

    .rating-item {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 5px 0;
    }

    .rating-item span {
        flex: 1;
    }

    .rating-bar {
        display: flex;
        align-items: center;
        width: 50%;
    }

    .rating-bar div {
        height: 10px;
        border-radius: 5px;
        flex-grow: 1;
        margin-right: 5px;
    }

    .rating-bar .filled {
        background-color: #8bc34a;/ Default color for filled bars /
    }

    .rating-bar .filled.red {
        background-color: #e57373;/ Color for lower ratings /
    }

    .rating-bar .empty {
        background-color: #e0e0e0;/ Color for empty bars /
    }

    .delTNe {
        list-style-type: none;
        padding:0px;
    }

    .bKPgVr {
        margin-bottom: 24px;
    }

    .inMLDw {
        background-color: rgb(247, 247, 247);
        display: flex;
        flex-direction: column;
        font-family: Poppins, sans-serif;
        margin: 16px 0px;
        min-width: 343px;
        width: 100%;
    }

    .ikECew {
        padding: 28px 24px 0px;
    }

    .dkybbj {
        border-bottom: 1px solid black;
        display: flex;
        height: 100%;
        -webkit-box-pack: justify;
        justify-content: space-between;
        padding: 0px 0px 10px;
        width: 100%;
    }

    .JfJQe {
        display: flex;
        flex-direction: row;
        padding: 20px 24px 32px;
    }

    .bUrGTi {
        display: flex;
        flex-direction: column;
        font-size: 14px;
        font-weight: 600;
        line-height: 16px;
        padding: 10px 24px 0px 0px;
    }

    .rASDq {
        display: flex;
        flex-direction: column;
        margin-left: 15px;
        width: 100%;
    }

    .ezopLa {
        background: rgb(127, 246, 195);
        line-height: 40px;
        min-height: 72px;
        min-width: 44px;
        padding: 16px 0px;
        width: 72px;
        font-size: 32px;
        font-family: Poppins, sans-serif;
        font-weight: 900;
    }

    .epZtNQ {
        margin-bottom: 8px;
    }

    .yjiuU {
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        flex-direction: row;
        -webkit-box-pack: end;
        justify-content: flex-end;
    }

    .eNyCKI {
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        margin-top: 20px;
        text-align: left;
    }

    .bkDMlg {
        padding-bottom: 0px;
    }

    .eNyCKI {
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        margin-top: 20px;
        text-align: left;
    }

    .cNSIDJ {
        column-gap: 10%;
        display: flex;
        flex-flow: column wrap;
        height: 190px;
        -webkit-box-pack: justify;
        justify-content: space-between;
        margin-top: 16px;
        padding-right: 61px;
        width: 100%;
    }

    .ksPmBS {
        -webkit-box-align: center;
        align-items: center;
        display: inline-flex;
        height: 30px;
        -webkit-box-pack: justify;
        justify-content: space-between;
        margin-top: 8px;
        width: 100%;
    }

    .ibsre {
        background-color: rgb(127, 246, 195);
        height: 18px;
        touch-action: none;
        width: 32px;
        border-radius: 20px 0px 0px 20px;
        border-right: 2px solid white;
    }

    .bDGPpv {
        background-color: rgb(127, 246, 195);
        height: 18px;
        touch-action: none;
        width: 32px;
        border-right: 2px solid white;
    }
  
    .jkfmSh {
        background-color: rgb(127, 246, 195);
        height: 18px;
        touch-action: none;
        width: 32px;
        border-radius: 0px 20px 20px 0px;
    }

    .bbbjje {
        height: 18px;
        touch-action: none;
        width: 32px;
        border-radius: 0px 20px 20px 0px;
        background-color: gray;
        margin-left: 2px;
    }

    .ePbaHA {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: center;
        justify-content: center;
    }

    .bbbjjeee {
        height: 18px;
        touch-action: none;
        width: 32px;

        background-color: gray;
        margin-left: 2px;
    }

    @media (max-width: 768px) {
       

        .SchoolRating__RatingHeader-sb9dsm-5.yjiuU {
            justify-content: center;
        }
        .bUrGTi {
            padding: 0px !important;
        }
        
        .inMLDw {
            background-color: rgb(247, 247, 247);
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-family: Poppins, sans-serif;
            margin: 16px 0px;
            min-width: 320px;
            width: 100%;
        }
          
        .cNSIDJ {
            column-gap: 10%;
            display: flex;
            flex-flow: column wrap;
            height: 190px;
            -webkit-box-pack: justify;
            justify-content: space-between;
            margin-top: 16px;
            /* padding-right: 61px; */
            width: 100%;
        }

        
        .ibsre {
        background-color: rgb(127, 246, 195);
        height: 15px;
        touch-action: none;
        width: 15px;
        margin-left:5px;
        border-radius: 20px 0px 0px 20px;
        border-right: 2px solid white;
        }
    
        .bDGPpv {
            background-color: rgb(127, 246, 195);
            height: 15px;
            touch-action: none;
            width: 15px;
            border-right: 2px solid white;
        }
    
        .jkfmSh {
            background-color: rgb(127, 246, 195);
            height: 15px;
            touch-action: none;
            width: 15px;
            border-radius: 0px 20px 20px 0px;
        }
    
        .bbbjje {
            height: 15px;
            touch-action: none;
            width: 15px;
            border-radius: 0px 20px 20px 0px;
            background-color: gray;
            margin-left: 2px;
        }
        
        .ePbaHA {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: center;
        justify-content: center;
        margin: 0px 20px;
        }
        
    
        .bbbjjeee {
            height: 15px;
            touch-action: none;
            width: 15px;
            background-color: gray;
            margin-left: 2px;
        }
    
    }
</style>
<main>
    <div class="profile-container">
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span><?php echo e($error); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

        <!-- Auto-hide alerts after 3 seconds -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(function() {
                    const alerts = document.querySelectorAll('.alert');
                    alerts.forEach(alert => {
                        alert.style.transition = 'opacity 0.5s ease';
                        alert.style.opacity = '0';
                        setTimeout(() => alert.remove(), 500); // Remove after fade out
                    });
                }, 3000); // 3000 milliseconds = 3 seconds
            });
        </script>
        <h2>Hey, <?php echo e(Auth::user()->name); ?></h2>
        <nav>
            <ul>
                <li id="profile-link" class="active" onclick="showSection('profile')">Profile</li>
                <li id="account-settings-link" onclick="showSection('account-settings')">Account Settings</li>
                <li id="ratings-link" onclick="showSection('ratings')">Ratings</li>
                <li id="saved-gyms-link" onclick="showSection('saved-gyms')">Saved Gyms</li>
            </ul>
        </nav>
        <div id="profile" class="content-section active">
            <div class="profile-info">
                <div class="profile-item">
                    <span class="label">Full Name</span>
                    <span><?php echo e(Auth::user()->name); ?></span>
                </div>

            </div>
        </div>

        <div id="account-settings" class="content-section" style="display: none;">
            <div class="upper-inputs">
                <h3>Account Settings</h3>
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#editModal">
                    <i class="fas fa-edit"></i> Edit
                </button>
            </div>
            <div class="account-item">
                <span class="label">Email</span>
                <span class="value"><?php echo e(Auth::user()->email); ?></span>
            </div>
            <div class="account-item">
                <span class="label">Password</span>
                <span class="value">*********</span>
            </div>
        </div>

        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form method="POST" action="<?php echo e(route('fuser.update', Auth::user()->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" value="<?php echo e(Auth::user()->email); ?>"
                                    id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                    name="password">
                            </div>
                            <div class="form-group">
                                <label for="pwd_confirmation">Confirm Password:</label>
                                <input type="password" class="form-control" id="pwd_confirmation"
                                    placeholder="Enter password" name="password_confirmation">
                            </div>
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div id="ratings" class="content-section">
            <div
                class="PageWrapper__StyledPageWrapper-sc-3p8f0h-0 lcpsHk UserPagesIndex__PagesIndexWrapper-sc-74bbeg-0 jvHuia">
                <div class="PageWrapper__StyledPageWrapper-sc-3p8f0h-0 lcpsHk">
                    <?php if(count(Auth::user()->reviews) > 0): ?>
                        <ul class="MyRatingsList__RatingsList-xiuvb2-0 delTNe">
                            <?php $__currentLoopData = Auth::user()->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                
                                $averageScore = ($review->facilities_rating + $review->coaching_rating + $review->atmosphere_rating + $review->overall_rating) / 4;
                                ?>
                                <div class="MyRatingsList__RatingCardArea-xiuvb2-1 bKPgVr">
                                    <div class="SchoolRating__SchoolRatingContainer-sb9dsm-0 inMLDw">
                                        <div class="SchoolRatingSuperHeader__SuperHeaderContainer-dkqn0d-0 ikECew">
                                            <div class="RatingSuperHeader__SuperHeaderBody-fm303l-1 dkybbj">
                                                <div class="SchoolRatingSuperHeader__NamesContainer-dkqn0d-1 fCfKPi">
                                                    <div class="SchoolRatingSuperHeader__SchoolName-dkqn0d-2 cPAliS">
                                                        <?php echo e($review->gym->name); ?>

                                                    </div>
                                                </div>
                                                <a
                                                    class="RatingSuperHeader__StyledEditLink-fm303l-7 hpzdKZ"href="<?php echo e(route('edit_review', $review->id)); ?>">
                                                    <a href="<?php echo e(route('edit_review', $review->id)); ?>"
                                                        class="btn btn-dark IconButton__StyledIconButton-eamykg-0 dpugOF RatingSuperHeader__StyledEditButton-fm303l-6 eYganw"
                                                        type="button">
                                                        <i class="fas fa-edit"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="SchoolRating__SchoolRatingBody-sb9dsm-1 JfJQe">
                                            <div class="SchoolRating__OverallRatingContainer-sb9dsm-2 bUrGTi">
                                                <div class="SchoolRating__OverallHeader-sb9dsm-3 epZtNQ">Overall</div>
                                                <div color="averageScore"
                                                    class="GradeSquare__ColoredSquare-sc-6d97x2-0 ezopLa">
                                                    <?php echo e(number_format($averageScore, 1)); ?></div>
                                            </div>
                                            <div class="SchoolRating__MainRatingContainer-sb9dsm-4 rASDq">
                                                <div class="SchoolRating__RatingHeader-sb9dsm-5 yjiuU">
                                                    <div
                                                        class="TimeStamp__StyledTimeStamp-sc-9q2r30-0 bXQmMr SchoolRating__StyledTimeStamp-sb9dsm-7 bkDMlg">
                                                        <?php if($review->created_at): ?>
                                                            <?php echo e($review->created_at->format('M jS, Y')); ?>

                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div class="SchoolRating__RatingComment-sb9dsm-6 eNyCKI">
                                                    <?php echo e($review->feedback); ?></div>
                                                <div>
                                                    <div
                                                        class="SchoolRatingSummary__SchoolRatingSummaryContainer-sc-50tcmg-0 cNSIDJ">
                                                        <div
                                                            class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 ksPmBS">
                                                            <div
                                                                class="DisplaySlider__DisplaySliderLabel-sc-6etfq5-1 eamCvq">
                                                                Facilities</div>
                                                            <div
                                                                class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 ePbaHA">
                                                                <?php if($review->facilities_rating >= 1): ?>
                                                                    <div data-testid="slider-box-1"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 ibsre">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-1"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($review->facilities_rating >= 2): ?>
                                                                    <div data-testid="slider-box-2"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-2"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bbbjjeee">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($review->facilities_rating >= 3): ?>
                                                                    <div data-testid="slider-box-3"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-3"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bbbjjeee">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($review->facilities_rating >= 4): ?>
                                                                    <div data-testid="slider-box-4"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-4"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bbbjjeee">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($review->facilities_rating >= 5): ?>
                                                                    <div data-testid="slider-box-5"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jkfmSh">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-5"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bbbjje">
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 ksPmBS">
                                                            <div
                                                                class="DisplaySlider__DisplaySliderLabel-sc-6etfq5-1 eamCvq">
                                                                Coaching</div>
                                                            <div
                                                                class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 ePbaHA">
                                                                <?php if($review->coaching_rating >= 1): ?>
                                                                    <div data-testid="slider-box-1"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 ibsre">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-1"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($review->coaching_rating >= 2): ?>
                                                                    <div data-testid="slider-box-2"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-2"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bbbjjeee">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($review->coaching_rating >= 3): ?>
                                                                    <div data-testid="slider-box-3"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-3"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bbbjjeee">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($review->coaching_rating >= 4): ?>
                                                                    <div data-testid="slider-box-4"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-4"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bbbjjeee">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($review->coaching_rating >= 5): ?>
                                                                    <div data-testid="slider-box-5"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jkfmSh">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-5"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bbbjje">
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 ksPmBS">
                                                            <div
                                                                class="DisplaySlider__DisplaySliderLabel-sc-6etfq5-1 eamCvq">
                                                                Atmosphere</div>
                                                            <div
                                                                class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 ePbaHA">
                                                                <?php if($review->atmosphere_rating >= 1): ?>
                                                                    <div data-testid="slider-box-1"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 ibsre">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-1"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($review->atmosphere_rating >= 2): ?>
                                                                    <div data-testid="slider-box-2"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-2"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bbbjjeee">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($review->atmosphere_rating >= 3): ?>
                                                                    <div data-testid="slider-box-3"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-3"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bbbjjeee">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($review->atmosphere_rating >= 4): ?>
                                                                    <div data-testid="slider-box-4"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-4"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bbbjjeee">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($review->atmosphere_rating >= 5): ?>
                                                                    <div data-testid="slider-box-5"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jkfmSh">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-5"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bbbjje">
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 ksPmBS">
                                                            <div
                                                                class="DisplaySlider__DisplaySliderLabel-sc-6etfq5-1 eamCvq">
                                                                Overall</div>
                                                            <div
                                                                class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 ePbaHA">
                                                                <?php if($review->overall_rating >= 1): ?>
                                                                    <div data-testid="slider-box-1"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 ibsre">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-1"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($review->overall_rating >= 2): ?>
                                                                    <div data-testid="slider-box-2"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-2"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bbbjjeee">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($review->overall_rating >= 3): ?>
                                                                    <div data-testid="slider-box-3"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-3"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bbbjjeee">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($review->overall_rating >= 4): ?>
                                                                    <div data-testid="slider-box-4"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-4"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bbbjjeee">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if($review->overall_rating >= 5): ?>
                                                                    <div data-testid="slider-box-5"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jkfmSh">
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div data-testid="slider-box-5"
                                                                        class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bbbjje">
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php else: ?>
                        <div class="no-rating">
                            <h4>No Ratings Available</h4>
                            <p><?php echo e(Auth::user()->name); ?> hasn't given any ratings yet.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>


        <div id="saved-gyms" class="content-section" style="display: none; overflow-y: auto; max-height: 80vh;">
            <?php if(Auth::check() && Auth::user()->savedGyms !== null): ?>
                <h3><?php echo e(count(Auth::user()->savedGyms ?? [])); ?> Saved Gyms</h3>
            <?php else: ?>
                <h3>0 Saved Gyms</h3>
            <?php endif; ?>

            <?php if(Auth::check() && !empty(Auth::user()->savedGyms)): ?>
                <?php $__currentLoopData = Auth::user()->savedGyms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $savedGym): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $facilitiesTotal = 0;
                        $coachingTotal = 0;
                        $atmosphereTotal = 0;
                        $overallTotal = 0;
                        $numReviews = count($savedGym->gym->reviews);
                    ?>

                    <?php $__currentLoopData = $savedGym->gym->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $facilitiesTotal += $review->facilities_rating;
                            $coachingTotal += $review->coaching_rating;
                            $atmosphereTotal += $review->atmosphere_rating;
                            $overallTotal += $review->overall_rating;
                        ?>
                        <!-- Display individual ratings -->
                        <!-- You can keep your existing HTML structure here to display individual ratings if needed -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php
                        // Calculate average ratings
                        if ($numReviews > 0) {
                            $averageFacilities = $facilitiesTotal / $numReviews;
                            $averageCoaching = $coachingTotal / $numReviews;
                            $averageAtmosphere = $atmosphereTotal / $numReviews;
                            $averageOverall = $overallTotal / $numReviews;
                        } else {
                            $averageFacilities = 0;
                            $averageCoaching = 0;
                            $averageAtmosphere = 0;
                            $averageOverall = 0;
                        }
                    ?>
                    <div class="gym-container">
                        <div class="gym-rating">
                            <span>
                                <?php echo e(number_format(($averageFacilities + $averageCoaching + $averageAtmosphere + $averageOverall) / 4, 1)); ?></span>
                        </div>
                        <div class="gym-info">
                            <h4><a href="<?php echo e(route('gym', $savedGym->gym->id)); ?>"
                                    class="text-decoration-none text-dark">
                                    <?php echo e($savedGym->gym->name); ?> </a></h4>
                            <p><?php echo e(count($savedGym->gym->reviews ?? [])); ?> ratings</p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="no-saved-gyms text-center p-5">
                    <h4><?php echo e(Auth::user()->name); ?> doesn't have any saved gyms yet</h4>
                </div>
            <?php endif; ?>
        </div>
    </div>






    <style>
        #saved-gyms {
            display: none;
            /* Initially hidden */
            overflow-y: auto;
            /* Enable vertical scroll */
            max-height: 80vh;
            /* Set maximum height */
        }

        .saved-gym {
            margin-bottom: 1rem;
            /* Add space between gyms */
        }

        .no-saved-gyms {
            padding: 2rem;
            /* Add padding for no saved gyms message */
        }
    </style>


    </div>
</main>

<?php echo $__env->make('frontend.layouts.user_pannel_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
    function showSection(sectionId) {
        // Hide all sections
        var sections = document.querySelectorAll('.content-section');
        sections.forEach(function(section) {
            section.style.display = 'none';
        });

        // Remove active class from all links
        var links = document.querySelectorAll('nav ul li');
        links.forEach(function(link) {
            link.classList.remove('active');
        });

        // Show the selected section
        document.getElementById(sectionId).style.display = 'block';

        // Add active class to the selected link
        document.getElementById(sectionId + '-link').classList.add('active');
    }
</script>

<style>
    /* Add any additional CSS styling if needed */
    .content-section {
        display: none;
    }

    .content-section.active {
        display: block;
    }

    nav ul li.active {
        font-weight: bold;
        /* Example style for active link */
    }

    .profile-container {
        margin: 50px, auto;

    }

    .profile-info,
    .account-item,
    .rating,
    .saved-gym,
    .no-rating,
    .no-saved-gyms {
        margin-bottom: 20px;
    }

    .profile-item,
    .account-item,
    .rating,
    .saved-gym {
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
    }

    .label {
        font-weight: bold;
    }

    .value {
        margin-left: 10px;
    }
</style>

<!-- Include Bootstrap CSS and JS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php /**PATH D:\Softwe\laragon\www\gym website code\gym-Website\resources\views/frontend/user_pannel.blade.php ENDPATH**/ ?>