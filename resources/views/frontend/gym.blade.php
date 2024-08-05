@include('frontend.layouts.headertwo')
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
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
  
<style>
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
    .HeaderRateButton__RateButtonsContainer {
        display: flex;
        gap: 10px;
        /* Adjust the gap between the elements as needed */
    }
    
    .reportBtn{
        color: #fff;
        background-color: #989898;
        border-color: #007bff;
        border-radius: 50px;
    }

    @media (max-width: 768px) {
        .extradispay {
            display: block !important;
        }

        input[type="text"] {
            width: 438px;
        }
    }

    @media (min-width: 1920px) {}
</style>

<style>
    .CategoryGrade__Row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .modal .modal-content {
        padding: 20px;
    }

    .modal-header .close {
        margin: -1rem -1rem -1rem auto;
    }

    .modal-body {
        margin-top: 1rem;
        text-align: left;
    }

    .modal-body p {
        margin-bottom: 0.5rem;
    }

    .modal-body .form-control {
        resize: none;
    }

    .modal-footer {
        justify-content: space-between;
    }

    .modal-footer .btn {
        width: 100px;
    }

    .modal-footer {

        display: block !important;
    }

    button#submitReport\ submitbtn {
        background: gray;
        border-radius: 24px;
        margin-bottom: 8px;
        /* border: solid blue; */
    }

    button.btn.btn-secondary.cancelbtn {
        background: transparent;
        border: 0px;
        color: #000;
        margin: 0px;
    }
</style>
<link rel="stylesheet" type="text/css" href="{{ asset('front_assets/css/filter.css') }}">
<div class="">
    <div class="SchoolRatings__MainInfoContainer-sc-11x2gz0-0 knYaMp">
        @php
            $facilitiesTotal = 0;
            $coachingTotal = 0;
            $atmosphereTotal = 0;
            $overallTotal = 0;
            $numReviews = count($gym->reviews);
        @endphp

        @foreach ($gym->reviews as $review)
            @php
                $facilitiesTotal += $review->facilities_rating;
                $coachingTotal += $review->coaching_rating;
                $atmosphereTotal += $review->atmosphere_rating;
                $overallTotal += $review->overall_rating;
            @endphp
            <!-- Display individual ratings -->
            <!-- You can keep your existing HTML structure here to display individual ratings if needed -->
        @endforeach

        @php
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
        @endphp

        <!-- Display overall total average -->
        <div class="OverallRating__OverallRatingContainer-y66epv-0 jryfLJ">
            <div class="OverallRating__Rating-y66epv-1 fkEGIy">
                <div class="OverallRating__RatingWrapper-y66epv-2 khkqiH">
                    <!-- Overall total average -->
                    <div class="OverallRating__Number-y66epv-3 dXoyqn">
                        {{ number_format(($averageFacilities + $averageCoaching + $averageAtmosphere + $averageOverall) / 4, 1) }}
                    </div>
                    <div class="OverallRating__HelperText-y66epv-4 kMuOOE">Overall Average</div>
                </div>
            </div>
        </div>


        @php
            $facilitiesTotal = 0;
            $coachingTotal = 0;
            $atmosphereTotal = 0;
            $overallTotal = 0;
            $numReviews = count($gym->reviews);

            foreach ($gym->reviews as $review) {
                $facilitiesTotal += $review->facilities_rating;
                $coachingTotal += $review->coaching_rating;
                $atmosphereTotal += $review->atmosphere_rating;
                $overallTotal += $review->overall_rating;
            }

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

        @endphp

        <div class="SchoolSummary__SchoolSummaryWrapper-pz83zp-0 crSRKX">
            <div class="SchoolSummary__SchoolSummaryContainer-pz83zp-1 kYvWmU mt-5">
                <div class="CategoryGrade__Row extradispay">
                    <!-- Facilities -->
                    <div class="CategoryGrade__CategoryGradeContainer-sc-17vzv7e-0 ivOAGg">
                        <img src="{{ asset('front_assets/images/banner/handshake-o.png') }}"
                            class="CategoryGrade__CategoryIcon-sc-17vzv7e-2 cVGHd" />
                        <div class="CategoryGrade__CategoryTitle-sc-17vzv7e-1 XKroK">Facilities</div>
                        <div class="GradeSquare__ColoredSquare-sc-6d97x2-0 eDqvVi"
                            style="background-color: {{ calculateColor($averageFacilities) }}">
                            {{ number_format($averageFacilities, 1) }}
                        </div>
                    </div>
                    <!-- Coaching -->
                    <div class="CategoryGrade__CategoryGradeContainer-sc-17vzv7e-0 ivOAGg">
                        <img src="{{ asset('front_assets/images/banner/user-circle-o.svg') }}"
                            class="CategoryGrade__CategoryIcon-sc-17vzv7e-2 cVGHd" />
                        <div class="CategoryGrade__CategoryTitle-sc-17vzv7e-1 XKroK">Coaching</div>
                        <div class="GradeSquare__ColoredSquare-sc-6d97x2-0 eDqvVi"
                            style="background-color: {{ calculateColor($averageCoaching) }}">
                            {{ number_format($averageCoaching, 1) }}
                        </div>
                    </div>
                </div>
                <div class="CategoryGrade__Row extradispay">
                    <!-- Safety | this was named Atmosphere, renamed to Safety on 7/9)-->
                    <div class="CategoryGrade__CategoryGradeContainer-sc-17vzv7e-0 ivOAGg">
                        <img src="{{ asset('front_assets/images/banner/awesome.svg.png') }}"
                            class="CategoryGrade__CategoryIcon-sc-17vzv7e-2 cVGHd" />
                        <div class="CategoryGrade__CategoryTitle-sc-17vzv7e-1 XKroK">Safety</div>
                        <div class="GradeSquare__ColoredSquare-sc-6d97x2-0 eDqvVi"
                            style="background-color: {{ calculateColor($averageAtmosphere) }}">
                            {{ number_format($averageAtmosphere, 1) }}
                        </div>
                    </div>
                    <!-- Communication | this was named Overall, renamed to Communication on 7/9)-->
                    <div class="CategoryGrade__CategoryGradeContainer-sc-17vzv7e-0 ivOAGg">
                        <img src="{{ asset('front_assets/images/banner/circle-notch.svg.png') }}"
                            class="CategoryGrade__CategoryIcon-sc-17vzv7e-2 cVGHd" />
                        <div class="CategoryGrade__CategoryTitle-sc-17vzv7e-1 XKroK">Communication</div>
                        <div class="GradeSquare__ColoredSquare-sc-6d97x2-0 eDqvVi"
                            style="background-color: {{ calculateColor($averageOverall) }}">
                            {{ number_format($averageOverall, 1) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


</div>
<div id="ad-controller" class="AdController__StyledPlaceholder-sc-1mt9je8-0 Jqjub">
    <div class="SchoolRatings__VideoPlayerWrapper-sc-11x2gz0-1 bgliqu">
        <div id="rmp-browsi-video-player" data-type="float"
            style="postion:static;height:auto;width:auto;max-width:524px;margin-top:16px;margin-bottom:16px;z-index:60000">
        </div>
    </div>
</div>

<div data-ad-target="ratings-list" class="SchoolRatingsContainer__RatingsContainer-sc-1c1ilno-0 iXYxly">
    <div class="SchoolRatingsContainer__SchoolRatingsCount-sc-1c1ilno-1 jvHnvF">
        {{ $numReviews }} Ratings
    </div>
<script>
    function updateLikesDislikes() {
        fetch('{{ route('freview.update.likes') }}', {
            method: 'GET',
           
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok: ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            if (data.status === 'success') {
                data.reviews.forEach(review => {
                    $('#likes-count-' + review.id).text(review.likes_count);
                    $('#dislikes-count-' + review.id).text(review.dislikes_count);
                });
            } else if (data.status === 'error') {
                console.error('Error:', data.message);
            }
        })
        .catch(error => {
            console.error('Error fetching likes and dislikes:', error);
        });
    }

    // Call the function every 9 seconds
    setInterval(updateLikesDislikes, 1000);
</script>



    <ul id="schoolRatingsList" class="SchoolRatingsList__ListContainer-sc-1tg2phb-0 jSdWoM">
        @foreach ($gym->reviews as $review)
            <?php
            // Assuming $review is an object containing the ratings
            // $averageScore = ($review->facilities_rating + $review->coaching_rating + $review->atmosphere_rating + $review->overall_rating) / 4;
            ?>
            <li>
                <div class="SchoolRating__SchoolRatingContainer-sb9dsm-0 inMLDw">
                    <div class="SchoolRating__SchoolRatingBody-sb9dsm-1 JfJQe">
                        <div class="SchoolRating__OverallRatingContainer-sb9dsm-2 bUrGTi">
                            <div class="SchoolRating__OverallHeader-sb9dsm-3 epZtNQ">Average</div>
                            <div color="averageScore" class="GradeSquare__ColoredSquare-sc-6d97x2-0 iFoOyg">
                                {{ $averageScore }}
                            </div>
                        </div>
                        <div class="SchoolRating__MainRatingContainer-sb9dsm-4 rASDq">
                            <div class="SchoolRating__RatingHeader-sb9dsm-5 yjiuU">
                                <div
                                    class="TimeStamp__StyledTimeStamp-sc-9q2r30-0 bXQmMr SchoolRating__StyledTimeStamp-sb9dsm-7 bkDMlg">
                                    {{ optional($review->created_at)->format('Y-m-d') }}

                                </div>
                            </div>
                            <div class="SchoolRating__RatingComment-sb9dsm-6 eNyCKI">{{ $review->feedback }}</div>
                            <div>
                                <div class="SchoolRatingSummary__SchoolRatingSummaryContainer-sc-50tcmg-0 cNSIDJ">
                                    <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 bIaaU">
                                        <div class="DisplaySlider__DisplaySliderLabel-sc-6etfq5-1 eamCvq">
                                            Facilities Rating
                                        </div>


                                        <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 ePbaHA">
                                            @if ($review->facilities_rating >= 1)
                                                <div data-testid="slider-box-1"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 ibsre">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-1"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 ">
                                                </div>
                                            @endif

                                            @if ($review->facilities_rating >= 2)
                                                <div data-testid="slider-box-2"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-2"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jEhBWA">
                                                </div>
                                            @endif

                                            @if ($review->facilities_rating >= 3)
                                                <div data-testid="slider-box-3"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-3"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jEhBWA">
                                                </div>
                                            @endif
                                            @if ($review->facilities_rating >= 4)
                                                <div data-testid="slider-box-4"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-4"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jEhBWA">
                                                </div>
                                            @endif
                                            @if ($review->facilities_rating >= 5)
                                                <div data-testid="slider-box-5"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jkfmSh">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-5"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jYqWUD">
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 bIaaU">
                                        <div class="DisplaySlider__DisplaySliderLabel-sc-6etfq5-1 eamCvq">
                                            Coaching Rating
                                        </div>
                                        <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 ePbaHA">
                                            @if ($review->coaching_rating >= 1)
                                                <div data-testid="slider-box-1"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 ibsre">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-1"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 ">
                                                </div>
                                            @endif

                                            @if ($review->coaching_rating >= 2)
                                                <div data-testid="slider-box-2"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-2"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jEhBWA">
                                                </div>
                                            @endif

                                            @if ($review->coaching_rating >= 3)
                                                <div data-testid="slider-box-3"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-3"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jEhBWA">
                                                </div>
                                            @endif
                                            @if ($review->coaching_rating >= 4)
                                                <div data-testid="slider-box-4"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-4"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jEhBWA">
                                                </div>
                                            @endif
                                            @if ($review->coaching_rating >= 5)
                                                <div data-testid="slider-box-5"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jkfmSh">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-5"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jYqWUD">
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 bIaaU">
                                        <div class="DisplaySlider__DisplaySliderLabel-sc-6etfq5-1 eamCvq">
                                            Safety Rating
                                        </div>
                                        <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 ePbaHA">
                                            @if ($review->atmosphere_rating >= 1)
                                                <div data-testid="slider-box-1"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 ibsre">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-1"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 ">
                                                </div>
                                            @endif

                                            @if ($review->atmosphere_rating >= 2)
                                                <div data-testid="slider-box-2"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-2"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jEhBWA">
                                                </div>
                                            @endif

                                            @if ($review->atmosphere_rating >= 3)
                                                <div data-testid="slider-box-3"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-3"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jEhBWA">
                                                </div>
                                            @endif
                                            @if ($review->atmosphere_rating >= 4)
                                                <div data-testid="slider-box-4"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-4"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jEhBWA">
                                                </div>
                                            @endif
                                            @if ($review->atmosphere_rating >= 5)
                                                <div data-testid="slider-box-5"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jkfmSh">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-5"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jYqWUD">
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 bIaaU">
                                        <div class="DisplaySlider__DisplaySliderLabel-sc-6etfq5-1 eamCvq">
                                            Communication Rating
                                        </div>
                                        <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 ePbaHA">
                                            @if ($review->overall_rating >= 1)
                                                <div data-testid="slider-box-1"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 ibsre">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-1"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 ">
                                                </div>
                                            @endif

                                            @if ($review->overall_rating >= 2)
                                                <div data-testid="slider-box-2"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-2"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jEhBWA">
                                                </div>
                                            @endif

                                            @if ($review->overall_rating >= 3)
                                                <div data-testid="slider-box-3"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-3"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jEhBWA">
                                                </div>
                                            @endif
                                            @if ($review->overall_rating >= 4)
                                                <div data-testid="slider-box-4"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 bDGPpv">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-4"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jEhBWA">
                                                </div>
                                            @endif
                                            @if ($review->overall_rating >= 5)
                                                <div data-testid="slider-box-5"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jkfmSh">
                                                </div>
                                            @else
                                                <div data-testid="slider-box-5"
                                                    class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 jYqWUD">
                                                </div>
                                            @endif


                                        </div>

                                    </div>

                                </div>
                                <div class="SchoolRatingFooter__SchoolRatingFooterContainer-sc-1gxs74g-0 hZhpAP">
                                    
                                 
                @if (auth()->check())
                    <div id="thumbs-id" class="Thumbs__ButtonWrapper-sc-19shlav-0 jsOpVQ thumbs">
                        <a href="javascript:void(0)" data-action="like" data-review-id="{{ $review->id }}" class="likedislike" style="text-decoration: none">
                            <div id="thumbs_up" data-action="like" data-review-id="{{ $review->id }}" class="Thumbs__ThumbContainer-sc-19shlav-1 jLESE ">
                                <div class="VoteThumb__StyledVoteContainer-p2gtch-1 grVCoH">
                                    <div class="VoteThumb__HelpfulText-p2gtch-2 biwTxB">Helpful</div>
                                    <img src="{{ asset('front_assets/images/banner/thumbs-up-black.eddae738.svg') }}" class="VoteThumb__StyledVoteThumb-p2gtch-0 hZbccg" data-tooltip="true" data-tip="Not helpful" data-for="GLOBAL_TOOLTIP" alt="Thumbs down" currentitem="false">
                                </div>
                                <div id="likes-count-{{ $review->id }}" class="Thumbs__HelpTotalNumber-sc-19shlav-2 lihvHt likes-count">{{ $review->likes()->sum('like') }}</div>
                            </div>
                        </a>

                        <a href="javascript:void(0)" data-action="dislike" data-review-id="{{ $review->id }}" class="likedislike" style="text-decoration: none">
                            <div id="thumbs_down" data-action="dislike" data-review-id="{{ $review->id }}" class="Thumbs__ThumbContainer-sc-19shlav-1 jLESE ">
                                <div class="VoteThumb__StyledVoteContainer-p2gtch-1 grVCoH">
                                    <div class="VoteThumb__HelpfulText-p2gtch-2 biwTxB"></div>
                                    <img src="{{ asset('front_assets/images/banner/thumbs-down-black.bd601b36.svg') }}" class="VoteThumb__StyledVoteThumb-p2gtch-0 hZbccg" data-tooltip="true" data-tip="Not helpful" data-for="GLOBAL_TOOLTIP" alt="Thumbs down" currentitem="false">
                                </div>
                                <div id="dislikes-count-{{ $review->id }}" class="Thumbs__HelpTotalNumber-sc-19shlav-2 lihvHt dislikes-count">{{ $review->likes()->sum('dislike') }}</div>
                            </div>
                        </a>
                    </div>
                @else
                    <div id="thumbs-id" class="Thumbs__ButtonWrapper-sc-19shlav-0 jsOpVQ thumbs">
                        <a href="javascript:void(0)" data-action="like" data-review-id="{{ $review->id }}" class="" style="text-decoration: none" data-toggle="modal" data-target="#loginModal">
                            <div id="thumbs_up" data-action="like" data-review-id="{{ $review->id }}" class="Thumbs__ThumbContainer-sc-19shlav-1 jLESE ">
                                <div class="VoteThumb__StyledVoteContainer-p2gtch-1 grVCoH">
                                    <div class="VoteThumb__HelpfulText-p2gtch-2 biwTxB">Helpful</div>
                                    <img src="{{ asset('front_assets/images/banner/thumbs-up-black.eddae738.svg') }}" class="VoteThumb__StyledVoteThumb-p2gtch-0 hZbccg" data-tooltip="true" data-tip="Not helpful" data-for="GLOBAL_TOOLTIP" alt="Thumbs down" currentitem="false">
                                </div>
                                <div id="likes-count-{{ $review->id }}" class="Thumbs__HelpTotalNumber-sc-19shlav-2 lihvHt likes-count">{{ $review->likes()->sum('like') }}</div>
                            </div>
                        </a>

                        <a href="javascript:void(0)" data-action="dislike" data-review-id="{{ $review->id }}" class="" style="text-decoration: none" data-toggle="modal" data-target="#loginModal">
                            <div id="thumbs_down" data-action="dislike" data-review-id="{{ $review->id }}" class="Thumbs__ThumbContainer-sc-19shlav-1 jLESE ">
                                <div class="VoteThumb__StyledVoteContainer-p2gtch-1 grVCoH">
                                    <div class="VoteThumb__HelpfulText-p2gtch-2 biwTxB"></div>
                                    <img src="{{ asset('front_assets/images/banner/thumbs-down-black.bd601b36.svg') }}" class="VoteThumb__StyledVoteThumb-p2gtch-0 hZbccg" data-tooltip="true" data-tip="Not helpful" data-for="GLOBAL_TOOLTIP" alt="Thumbs down" currentitem="false">
                                </div>
                                <div id="dislikes-count-{{ $review->id }}" class="Thumbs__HelpTotalNumber-sc-19shlav-2 lihvHt dislikes-count">{{ $review->likes()->sum('dislike') }}</div>
                            </div>
                        </a>
                    </div>
                @endif
                                    
                                    @if (auth()->check())
                                    <a id="reportFlag-{{ $review->id }}"
                                        class="ReportFlag__StyledReportFlag-sc-1c42epr-0 hjlYuE" data-tooltip="true"
                                        data-tip="Report this rating" data-for="GLOBAL_TOOLTIP"
                                        data-testid="reportflag_test_id" aria-disabled="false">
                                        <div class="ReportFlag__FlagWrapper-sc-1c42epr-1 kVglhF">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <defs>
                                                    <path id="prefix__a"
                                                        d="M3.93 10c1.417 0 2.383.276 4.371 1.072 1.762.704 2.546.928 3.629.928 1.189 0 2.094-.165 2.754-.428.095-.039.177-.075.246-.108v-9.86c-.82.253-1.814.396-3 .396-1.417 0-2.383-.276-4.371-1.072C5.797.224 5.013 0 3.93 0 2.741 0 1.836.165 1.176.428A4.094 4.094 0 00.93.536v9.86c.82-.253 1.814-.396 3-.396z">
                                                    </path>
                                                </defs>
                                                <g fill="none" fill-rule="evenodd">
                                                    <path fill="#151515" fill-rule="nonzero"
                                                        d="M3 3a1 1 0 01.293-.707c.22-.22.614-.483 1.21-.721C5.407 1.21 6.564 1 8 1c1.417 0 2.383.276 4.371 1.072C14.133 2.776 14.917 3 16 3c1.189 0 2.094-.165 2.754-.428.341-.137.508-.249.539-.28C19.923 1.663 21 2.11 21 3v12a1 1 0 01-.293.707c-.22.22-.614.483-1.21.721-.903.362-2.06.572-3.497.572-1.417 0-2.383-.276-4.371-1.072C9.867 15.224 9.083 15 8 15c-1.189 0-2.094.165-2.754.428a4.09 4.09 0 00-.247.108L5 22a1 1 0 01-2 0V3zm5 0c-1.189 0-2.094.165-2.754.428A4.094 4.094 0 005 3.536v9.86C5.82 13.143 6.814 13 8 13c1.417 0 2.383.276 4.371 1.072 1.762.704 2.546.928 3.629.928 1.189 0 2.094-.165 2.754-.428.095-.039.177-.075.246-.108v-9.86c-.82.253-1.814.396-3 .396-1.417 0-2.383-.276-4.371-1.072C9.867 3.224 9.083 3 8 3z">
                                                    </path>
                                                    <g transform="translate(4.07 3)">
                                                        <mask id="prefix__b" fill="#fff">
                                                            <use xlink:href="#prefix__a"></use>
                                                        </mask>
                                                        <use fill="none" fill-rule="nonzero"
                                                            xlink:href="#prefix__a"></use>
                                                        <g fill="none" mask="url(#prefix__b)">
                                                            <path d="M0 0H64V64H0z" transform="translate(-25 -27)">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </a>


                                    
                                    <div class="modal fade" id="reportModal-{{ $review->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="reportModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="reportModalLabel">Report a Rating for
                                                        <strong
                                                            style="color:#000; font-weight:600;">{{ $gym->name }}</strong>
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                               <form id="report-form-{{ $review->id }}" action="{{ route('freview.report') }}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <h2 class="mb-2" style="color:#000; font-weight:600;">You're reporting:</h2>
                                                    <p>{{ $review->feedback }}</p>
                                                    <p style="color:#000; font-weight:600;"><strong>What's the problem?</strong></p>
                                                    <p>If you think this comment is inconsistent with Rate My Cheer Gym' <a href="{{route('guidelines')}}"><b>Site Guidelines</b></a>,
                                                        report it and tell us why.</p>
                                            
                                                    
                                            
                                                    <input type="hidden" name="review_id" value="{{ $review->id }}">
                                                    <input type="hidden" name="gym_id" value="{{ $gym->id }}">
                                                    <textarea name="report" id="reportText-{{ $review->id }}" class="form-control" rows="4"
                                                        placeholder="Tell us what's wrong with this comment..." required></textarea>
                                                    <small class="form-text text-muted text-right">0/350</small>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn reportBtn" id="submitBtn-{{ $review->id }}">Submit</button>
                                                    <br>
                                                    <button type="button" class="btn btn-secondary cancelbtn" data-dismiss="modal" id="cancelBtn-{{ $review->id }}">Cancel</button>
                                                </div>
                                            </form>

<script>
document.getElementById('report-form-{{ $review->id }}').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Show SweetAlert for confirmation
    Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to report this comment?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, report it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            // If confirmed, submit the form
            this.submit();
            Swal.fire(
                'Reported!',
                'Your report has been submitted.',
                'success'
            );
        }
    });
});

document.getElementById('cancelBtn-{{ $review->id }}').addEventListener('click', function() {
    // Show SweetAlert for cancellation
    Swal.fire({
        title: 'Canceled',
        text: "You have canceled the report.",
        icon: 'error',
        confirmButtonText: 'OK'
    });
});
</script>

                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        $(document).ready(function() {
                                            $('#reportFlag-{{ $review->id }}').on('click', function(event) {
                                                event.preventDefault();
                                                $('#reportModal-{{ $review->id }}').modal('show');
                                            });

                                            $('#reportText-{{ $review->id }}').on('input', function() {
                                                var textLength = $(this).val().length;
                                                $(this).siblings('small').text(textLength + '/350');
                                            });
                                        });
                                    </script>
                                    @else
                                    
                                    <a id="reportFlag-{{ $review->id }}"
                                        class="ReportFlag__StyledReportFlag-sc-1c42epr-0 hjlYuE" data-tooltip="true"
                                        data-tip="Report this rating" data-for="GLOBAL_TOOLTIP"
                                        data-testid="reportflag_test_id" aria-disabled="false" data-toggle="modal" data-target="#loginModal">
                                        <div class="ReportFlag__FlagWrapper-sc-1c42epr-1 kVglhF">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <defs>
                                                    <path id="prefix__a"
                                                        d="M3.93 10c1.417 0 2.383.276 4.371 1.072 1.762.704 2.546.928 3.629.928 1.189 0 2.094-.165 2.754-.428.095-.039.177-.075.246-.108v-9.86c-.82.253-1.814.396-3 .396-1.417 0-2.383-.276-4.371-1.072C5.797.224 5.013 0 3.93 0 2.741 0 1.836.165 1.176.428A4.094 4.094 0 00.93.536v9.86c.82-.253 1.814-.396 3-.396z">
                                                    </path>
                                                </defs>
                                                <g fill="none" fill-rule="evenodd">
                                                    <path fill="#151515" fill-rule="nonzero"
                                                        d="M3 3a1 1 0 01.293-.707c.22-.22.614-.483 1.21-.721C5.407 1.21 6.564 1 8 1c1.417 0 2.383.276 4.371 1.072C14.133 2.776 14.917 3 16 3c1.189 0 2.094-.165 2.754-.428.341-.137.508-.249.539-.28C19.923 1.663 21 2.11 21 3v12a1 1 0 01-.293.707c-.22.22-.614.483-1.21.721-.903.362-2.06.572-3.497.572-1.417 0-2.383-.276-4.371-1.072C9.867 15.224 9.083 15 8 15c-1.189 0-2.094.165-2.754.428a4.09 4.09 0 00-.247.108L5 22a1 1 0 01-2 0V3zm5 0c-1.189 0-2.094.165-2.754.428A4.094 4.094 0 005 3.536v9.86C5.82 13.143 6.814 13 8 13c1.417 0 2.383.276 4.371 1.072 1.762.704 2.546.928 3.629.928 1.189 0 2.094-.165 2.754-.428.095-.039.177-.075.246-.108v-9.86c-.82.253-1.814.396-3 .396-1.417 0-2.383-.276-4.371-1.072C9.867 3.224 9.083 3 8 3z">
                                                    </path>
                                                    <g transform="translate(4.07 3)">
                                                        <mask id="prefix__b" fill="#fff">
                                                            <use xlink:href="#prefix__a"></use>
                                                        </mask>
                                                        <use fill="none" fill-rule="nonzero"
                                                            xlink:href="#prefix__a"></use>
                                                        <g fill="none" mask="url(#prefix__b)">
                                                            <path d="M0 0H64V64H0z" transform="translate(-25 -27)">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </a>
    
        
                                    @endif
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div> --}}

{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
                                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                                
                                
                                <script src="script.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

<script>
    $(document).on('click', '.likedislike', function() {
        var current = $(this).parent('.thumbs');
        var reviewId = $(this).attr('data-review-id');
        var action = $(this).attr('data-action');

        fetch('{{ route('freview.like') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    review_id: reviewId,
                    action: action,
                    _token: '{{ csrf_token() }}'
                })
            })
            .then(function(response) {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(function(response) {
                if (response.status === 'success') {

                    $(current).find('.likes-count').text(response.likes);
                    $(current).find('.dislikes-count').text(response.dislikes);

                    // $(current).children('#likes-count').text(response.likes);
                    // $(current).children('#dislikes-count').text(response.dislikes);
                }
                if (response.status === 'error') {
                    console.log(response.message);
                }
            })
            .catch(function(error) {
                console.error('Error:', error);
            });
    });
</script>


<div id="ad-controller" class="AdController__StyledPlaceholder-sc-1mt9je8-0 Jqjub">
    <div id="taboola-below-article-thumbnails" class="TaboolaAd__StyledTaboolaAd-sc-16lajh5-0 fkoCRH"
        data-testid="test-id-taboola-ad">
    </div>
</div>
</div> --}}
<main>
    <section class="section_one"
        style="background-image: url('{{ asset('front_assets/img/banner_one.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: auto;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-5">
                    <h1 class="sec_one_h1 mt-5">Cheer leaders Gym
                        <span><img src="{{ asset('front_assets/img/tick.png') }}" alt></span>
                    </h1>
                    <div class="dpansdiv1 mt-1">
                        <span class="sec_one_span1" style="font-weight: 100;">Downtown, New York</span>
                        <span class="ml-2"> <img src="{{ asset('front_assets/img/Vector.png') }}"></span>
                    </div>

                    @php
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
                    @endphp

                    <div class="spnastwo mt-2">
                        <span class="span_sec_one">Overall Rating</span>
                        <span class="span_sec_two">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $averageOverall)
                                    <i class="fas fa-star" style="color: #FFD89E; font-size: 23px; border: 0px;"></i>
                                @elseif ($i - $averageOverall < 1)
                                    <i class="fas fa-star-half-alt"
                                        style="color: #FFD89E; font-size: 23px; border: 0px;"></i>
                                @else
                                    <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px; border: 0px;"></i>
                                @endif
                            @endfor
                        </span>
                        <span class="span_sec_three ml-2">{{ number_format($averageOverall, 1) }} star rating</span>
                        <br><br>
                        <span class="span_sec_four ml-2">({{ $numReviews }}+ Reviews)</span>
                    </div>

                    <div class="heart_btn mt-3" style="display: flex; align-items: center;">
                        <a href="#" id="save-gym-btn" data-gym-id="{{ $gym->id }}">
                            <i class="fa-regular fa-heart" id="heart-icon" style="font-size: 45px; color: #fff;"></i>
                        </a>
                        <a href="{{ route('gym_rating', $gym->id) }}" class="review_btn"
                            style="margin-left: 10px;">Write a Review</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <img src="{{ asset('front_assets/img/img1.png') }}" class="w-100 section_one_img">
                </div>
            </div>
        </div>
    </section>


    <section class="section_two mb-4">
        @php
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
        @endphp
        <div class="container">
            <div class="row">
                @foreach ($averageRatings as $key => $averageRating)
                    @php
                        // Ensure the average rating is correctly rounded to one decimal place
                        $averageRating = number_format((float) $averageRating, 1, '.', '');
                        $fullStars = floor($averageRating);
                        $halfStar = $averageRating - $fullStars >= 0.5;
                    @endphp
    
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                        <div class="card_div">
                            <div
                                style="flex-shrink: 0;box-shadow:3px 0px 6px 1px rgba(0, 0, 0, 0.25);padding: 27px 27px;border-radius: 10px;">
                                <img src="{{ asset($icons[$key]) }}" alt="{{ $categories[$key] }} Icon"
                                    style="width: 40px; height: 40px;">
                            </div>
                            <div style="margin-left: 10px;">
                                <div style="font-size: 13px;font-weight: 500;">{{ $categories[$key] }}</div>
                                <div style="color: #FFA500;">
                                    <span class="span_sec_three">
                                        @for ($i = 0; $i < 5; $i++)
                                            @if ($i < $fullStars)
                                                <i class="fas fa-star"
                                                    style="color: #FFD89E;font-size: 23px;border: 0px;"></i>
                                            @elseif ($i == $fullStars && $halfStar)
                                                <i class="fas fa-star-half-alt"
                                                    style="color: #FFD89E;font-size: 23px;border: 0px;"></i>
                                            @else
                                                <i class="fas fa-star"
                                                    style="color: #ccc;font-size: 23px;border: 0px;"></i>
                                            @endif
                                        @endfor
                                    </span>
                                    <span style="color: #888; font-size: 14px;"><br>
                                        {{ $averageRating }} star rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    

    <section class="section-three">
        <div class="container">
            <h3 class="three_sec_h3 mt-4 mb-4">Reviews ({{ $reviews->count() }})</h3>
            <div class="row">
                @forelse($reviews as $review)
                    <div class="card mt-4" style="width: 100%;">
                        <div class="card-body">
                            <div class="container p-5">
                                <div class="sec-three-spans">
                                    <span class="three_sec_one" style="color: #00000085;">
                                        {{ $review->created_at ? \Carbon\Carbon::parse($review->created_at)->format('D, d M Y') : 'Date not available' }}
                                    </span>
                                    <span class="three_sec_two">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= floor($review->facilities_rating ?? 0))
                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                            @elseif ($i - ($review->facilities_rating ?? 0) < 1)
                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                            @else
                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                            @endif
                                        @endfor
                                    </span>
                                    <span class="three_sec_three ml-2" style="color: #00000085;">
                                        {{ $review->facilities_rating ?? 'Rating not available' }} star rating
                                    </span>
                                    <h5 class="three_sec_h5 mt-3">
                                        {{ $review->review_text ?? 'Review text not available' }}
                                    </h5>
                                </div>
                                <div class="row">
                                    <!-- Facility Cleanliness -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                                        <div class="card_div_three">
                                            <div style="flex-shrink: 0; padding: 27px 27px;">
                                                <img src="{{ asset('front_assets/img/Group.png') }}" alt="Facility Cleanliness" style="width: 40px; height: 40px;">
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div style="font-size: 13px; font-weight: 500;">Facility Cleanliness</div>
                                                <div style="color: #FFA500;">
                                                    <span class="span_sec_three">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= floor($review->facilities_rating ?? 0))
                                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                                            @elseif ($i - ($review->facilities_rating ?? 0) < 1)
                                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                                            @else
                                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                                            @endif
                                                        @endfor
                                                    </span>
                                                    <span style="color: #888; font-size: 14px;">
                                                        <br>{{ $review->facilities_rating ?? 'Rating not available' }} star rating
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Coaching Quality -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                                        <div class="card_div_three">
                                            <div style="flex-shrink: 0; padding: 27px 27px;">
                                                <img src="{{ asset('front_assets/img/User check.png') }}" alt="Coaching Quality" style="width: 40px; height: 40px;">
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div style="font-size: 13px; font-weight: 500;">Coaching Quality</div>
                                                <div style="color: #FFA500;">
                                                    <span class="span_sec_three">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= floor($review->coaching_rating ?? 0))
                                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                                            @elseif ($i - ($review->coaching_rating ?? 0) < 1)
                                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                                            @else
                                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                                            @endif
                                                        @endfor
                                                    </span>
                                                    <span style="color: #888; font-size: 14px;">
                                                        <br>{{ $review->coaching_rating ?? 'Rating not available' }} star rating
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Equipment Quality -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                                        <div class="card_div_three">
                                            <div style="flex-shrink: 0; padding: 27px 27px;">
                                                <img src="{{ asset('front_assets/img/Vectorr.png') }}" alt="Equipment Quality" style="width: 40px; height: 40px;">
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div style="font-size: 13px; font-weight: 500;">Equipment Quality</div>
                                                <div style="color: #FFA500;">
                                                    <span class="span_sec_three">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= floor($review->equipment_quality ?? 0))
                                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                                            @elseif ($i - ($review->equipment_quality ?? 0) < 1)
                                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                                            @else
                                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                                            @endif
                                                        @endfor
                                                    </span>
                                                    <span style="color: #888; font-size: 14px;">
                                                        <br>{{ $review->equipment_quality ?? 'Rating not available' }} star rating
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Atmosphere -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                                        <div class="card_div_three">
                                            <div style="flex-shrink: 0; padding: 27px 27px;">
                                                <img src="{{ asset('front_assets/img/healthicons_happy.png') }}" alt="Atmosphere" style="width: 40px; height: 40px;">
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div style="font-size: 13px; font-weight: 500;">Atmosphere</div>
                                                <div style="color: #FFA500;">
                                                    <span class="span_sec_three">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= floor($review->atmosphere_rating ?? 0))
                                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                                            @elseif ($i - ($review->atmosphere_rating ?? 0) < 1)
                                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                                            @else
                                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                                            @endif
                                                        @endfor
                                                    </span>
                                                    <span style="color: #888; font-size: 14px;">
                                                        <br>{{ $review->atmosphere_rating ?? 'Rating not available' }} star rating
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Safety Standards -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                                        <div class="card_div_three">
                                            <div style="flex-shrink: 0; padding: 27px 27px;">
                                                <img src="{{ asset('front_assets/img/material-symbols-light_health.png') }}" alt="Safety Standards" style="width: 40px; height: 40px;">
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div style="font-size: 13px; font-weight: 500;">Safety Standards</div>
                                                <div style="color: #FFA500;">
                                                    <span class="span_sec_three">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= floor($review->safety_standards ?? 0))
                                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                                            @elseif ($i - ($review->safety_standards ?? 0) < 1)
                                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                                            @else
                                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                                            @endif
                                                        @endfor
                                                    </span>
                                                    <span style="color: #888; font-size: 14px;">
                                                        <br>{{ $review->safety_standards ?? 'Rating not available' }} star rating
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Communication -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                                        <div class="card_div_three">
                                            <div style="flex-shrink: 0; padding: 27px 27px;">
                                                <img src="{{ asset('front_assets/img/material-symbols-light.png') }}" alt="Communication" style="width: 40px; height: 40px;">
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div style="font-size: 13px; font-weight: 500;">Communication</div>
                                                <div style="color: #FFA500;">
                                                    <span class="span_sec_three">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= floor($review->communication ?? 0))
                                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                                            @elseif ($i - ($review->communication ?? 0) < 1)
                                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                                            @else
                                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                                            @endif
                                                        @endfor
                                                    </span>
                                                    <span style="color: #888; font-size: 14px;">
                                                        <br>{{ $review->communication ?? 'Rating not available' }} star rating
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Value for Money -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                                        <div class="card_div_three">
                                            <div style="flex-shrink: 0; padding: 27px 27px;">
                                                <img src="{{ asset('front_assets/img/solar_hand-money-linear.png') }}" alt="Value for Money" style="width: 40px; height: 40px;">
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div style="font-size: 13px; font-weight: 500;">Value for Money</div>
                                                <div style="color: #FFA500;">
                                                    <span class="span_sec_three">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= floor($review->value_for_money ?? 0))
                                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                                            @elseif ($i - ($review->value_for_money ?? 0) < 1)
                                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                                            @else
                                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                                            @endif
                                                        @endfor
                                                    </span>
                                                    <span style="color: #888; font-size: 14px;">
                                                        <br>{{ $review->value_for_money ?? 'Rating not available' }} star rating
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Class Variety -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5">
                                        <div class="card_div_three">
                                            <div style="flex-shrink: 0; padding: 27px 27px;">
                                                <img src="{{ asset('front_assets/img/Layout.png') }}" alt="Class Variety" style="width: 40px; height: 40px;">
                                            </div>
                                            <div style="margin-left: 10px;">
                                                <div style="font-size: 13px; font-weight: 500;">Class Variety & Availability</div>
                                                <div style="color: #FFA500;">
                                                    <span class="span_sec_three">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= floor($review->class_variety ?? 0))
                                                                <i class="fas fa-star" style="color: #FFD89E; font-size: 23px;"></i>
                                                            @elseif ($i - ($review->class_variety ?? 0) < 1)
                                                                <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px;"></i>
                                                            @else
                                                                <i class="fas fa-star" style="color: #E0E0E0; font-size: 23px;"></i>
                                                            @endif
                                                        @endfor
                                                    </span>
                                                    <span style="color: #888; font-size: 14px;">
                                                        <br>{{ $review->class_variety ?? 'Rating not available' }} star rating
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
                @empty
                    <p>No reviews available for this gym.</p>
                @endforelse
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

            var gymId = "{{ $gym->id }}";
            var icon = $('#heart-icon');
            var isSaved = icon.hasClass('fa-heart-solid'); // Check if gym is already saved

            $.ajax({
                url: '{{ route('gym.save') }}',
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
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
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
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

@include('frontend.layouts.footer')
