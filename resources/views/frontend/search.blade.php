@include('frontend.layouts.headertwo')
<style>
    @font-face {
        font-family: 'Inkfree';
        src: url('assets/font/Inkfree.ttf') format('truetype');
    }
    .navbar_signup:hover, .navbar_login:hover {
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
    h3.section_one_h4 {
        font-size: 16px;
        font-weight: 700;
    }
    span.span_sec_one.text-dark {
        font-size: 16px;
        font-weight: 400;
    }
    h5.gymh5 {
font-size: 16px;
font-weight: 400;
font-family: 'Ink free';
}
a.gyma {
text-decoration: underline;
color: #00227A;

}
.search input {
width: 250px;
height: 32px;
background: #404040 !important;
border: 1px solid #aaa;
border-radius: 5px;
box-shadow: 0 0 0px #ccc, 0 0px 0px #ebebeb inset;
color: #fff;
}
a.gyma:hover {
text-decoration: none;
color: #00227A;
}
h3.main_h3_gyms.pt-4 {
font-size: 16px;
font-weight: 400;
font-family: 'Poppins';
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

.navlinks1 {
margin-left: 4px !important;
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

.col-lg-6.col-md-6.mt-4.section_one_col.margindey {
margin-bottom: 50px;
}
.col-lg-6.col-md-6.mt-4.section_one_col.margindeyy {
margin-bottom: 50px;
}
.modal-backdrop.fade.show {
    display: none;
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
 
 .col-lg-6.col-md-6.mt-4.section_one_col.margindey {
margin-bottom: 0px;
}
}



</style>
<main>
   
    <div class="school-list container mt-3">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <span>{{ $error }}</span>
            @endforeach
        </div>
        @endif
        @if(request()->has('keyword'))
        <h3>{{ count($gyms) }} gyms with "{{ request('keyword') }}" in their name</h3>
        @else
        <h3>{{ count($gyms) }} gyms</h3>
        @endif
        <div class="row">
        @foreach ($gyms as $gym)
        @php
            $facilitiesTotal = 0;
            $coachingTotal = 0;
            $atmosphereTotal = 0;
            $equipmentQualityTotal = 0;
            $safetyStandardsTotal = 0;
            $communicationTotal = 0;
            $valueForMoneyTotal = 0;
            $classVarietyTotal = 0;
            $numReviews = count($gym->reviews);
        @endphp
    
        @foreach ($gym->reviews as $review)
        @php
            $facilitiesTotal += $review->facilities_rating;
            $coachingTotal += $review->coaching_rating;
            $atmosphereTotal += $review->atmosphere_rating;
            $equipmentQualityTotal += $review->equipment_quality;
            $safetyStandardsTotal += $review->safety_standards;
            $communicationTotal += $review->communication;
            $valueForMoneyTotal += $review->value_for_money;
            $classVarietyTotal += $review->class_variety;
        @endphp
        @endforeach
    
        @php
            $averageFacilities = $numReviews > 0 ? $facilitiesTotal / $numReviews : 0;
            $averageCoaching = $numReviews > 0 ? $coachingTotal / $numReviews : 0;
            $averageAtmosphere = $numReviews > 0 ? $atmosphereTotal / $numReviews : 0;
            $averageEquipmentQuality = $numReviews > 0 ? $equipmentQualityTotal / $numReviews : 0;
            $averageSafetyStandards = $numReviews > 0 ? $safetyStandardsTotal / $numReviews : 0;
            $averageCommunication = $numReviews > 0 ? $communicationTotal / $numReviews : 0;
            $averageValueForMoney = $numReviews > 0 ? $valueForMoneyTotal / $numReviews : 0;
            $averageClassVariety = $numReviews > 0 ? $classVarietyTotal / $numReviews : 0;
    
            // Calculate overall average rating
            $overallTotal = $averageFacilities + $averageCoaching + $averageAtmosphere + $averageEquipmentQuality + $averageSafetyStandards + $averageCommunication + $averageValueForMoney + $averageClassVariety;
            $overallAverage = $numReviews > 0 ? $overallTotal / 8 : 0;
        @endphp
    
        <div class="col-lg-6 col-md-6 mt-3 section_one_col margindey">
            <a class="text-dark text-decoration-none" href="{{ route('gym', $gym->id) }}">
                <div class="card section_one_card" style="box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.3), 0 8px 12px 6px rgba(0, 0, 0, 0.15); border-radius: 20px;">
                    <div class="card-body section_one_cardbody">
                        <h3 class="section_one_h4">{{ $gym->name }}</h3>
                        <span class="span_sec_one text-dark">Denver, Colorado</span>
                        <span class="ml-2"><img src="front_assets/img/blackvector.png" alt="Vector"></span>
                        <span class="span_sec_two">
                            @php
                                $rating = $overallAverage; // Use the overall average rating for the stars
                                $fullStars = floor($rating);
                                $halfStar = ($rating - $fullStars) >= 0.5;
                            @endphp
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $fullStars)
                                    <i class="fas fa-star" style="color: #FFD89E; font-size: 23px; margin-left: 18px; border: 0;"></i>
                                @elseif ($i == $fullStars + 1 && $halfStar)
                                    <i class="fas fa-star-half-alt" style="color: #FFD89E; font-size: 23px; margin-left: 18px; border: 0;"></i>
                                @else
                                    <i class="fas fa-star" style="color: #e0e0e0; font-size: 23px; margin-left: 18px; border: 0;"></i>
                                @endif
                            @endfor
                        </span>
                        <span class="span_sec_three ml-2 text-dark">{{ number_format($overallAverage, 1) }} star rating</span>
                        <br><br>
                    </div>
                </div>
            </a>
        </div>
    
        @endforeach
        <div class="col-lg-12 mt-5 mb-5 text-center">
        <div class="lastbtn">
            <span class="first_span mb-2">Don't see the gym you're looking for?</span>
            <br>
            @if(auth()->check())
            <a href="#" class="text-dark mb-2" data-toggle="modal" data-target="#addGymModal">Add a Gym</a>
            @else
            <a href="#" class="text-dark mb-2" data-toggle="modal" data-target="#loginModal">Add a Gym</a>
            @endif
        </div>
        </div>
        </div>
    </div>
    

</main>

<!-- Add Gym Modal -->
<div class="modal fade" id="addGymModal" tabindex="-1" role="dialog" aria-labelledby="addGymModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addGymModalLabel">Add a Gym</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="{{ route('user.storeGym') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="gymName">Gym Name</label>
                                        <input type="text" name="name" class="form-control" id="gymName" placeholder="Enter gym name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" name="location" class="form-control" id="city" placeholder="City" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gymLocation">State</label>
                                        <select class="form-control" name="state" id="gymLocation" required>
                                            <option value="" disabled selected>Select State</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark">Save Gym</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('frontend.layouts.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
