@include('frontend.layouts.compare_header')
<style>
 
    .alert {
            padding: 10px;
            margin-bottom: 15px;
        }
        
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
</style>
                <div class="PageWrapper__StyledPageWrapper-sc-3p8f0h-0 lcpsHk">
                    <div class="__react_component_tooltip teb7e921b-8ad9-434a-a51b-12823a6a8876 place-bottom type-dark"
                        id="GLOBAL_TOOLTIP" data-id="tooltip">
                        <style>
                            .teb7e921b-8ad9-434a-a51b-12823a6a8876 {
                                color: #fff;
                                background: #222;
                                border: 1px solid transparent;
                            }

                            .teb7e921b-8ad9-434a-a51b-12823a6a8876.place-top {
                                margin-top: -10px;
                            }

                            .teb7e921b-8ad9-434a-a51b-12823a6a8876.place-top::before {
                                border-top: 8px solid transparent;
                            }

                            .teb7e921b-8ad9-434a-a51b-12823a6a8876.place-top::after {
                                border-left: 8px solid transparent;
                                border-right: 8px solid transparent;
                                bottom: -6px;
                                left: 50%;
                                margin-left: -8px;
                                border-top-color: #222;
                                border-top-style: solid;
                                border-top-width: 6px;
                            }

                            .teb7e921b-8ad9-434a-a51b-12823a6a8876.place-bottom {
                                margin-top: 10px;
                            }

                            .teb7e921b-8ad9-434a-a51b-12823a6a8876.place-bottom::before {
                                border-bottom: 8px solid transparent;
                            }

                            .teb7e921b-8ad9-434a-a51b-12823a6a8876.place-bottom::after {
                                border-left: 8px solid transparent;
                                border-right: 8px solid transparent;
                                top: -6px;
                                left: 50%;
                                margin-left: -8px;
                                border-bottom-color: #222;
                                border-bottom-style: solid;
                                border-bottom-width: 6px;
                            }

                            .teb7e921b-8ad9-434a-a51b-12823a6a8876.place-left {
                                margin-left: -10px;
                            }

                            .teb7e921b-8ad9-434a-a51b-12823a6a8876.place-left::before {
                                border-left: 8px solid transparent;
                            }

                            .teb7e921b-8ad9-434a-a51b-12823a6a8876.place-left::after {
                                border-top: 5px solid transparent;
                                border-bottom: 5px solid transparent;
                                right: -6px;
                                top: 50%;
                                margin-top: -4px;
                                border-left-color: #222;
                                border-left-style: solid;
                                border-left-width: 6px;
                            }

                            .teb7e921b-8ad9-434a-a51b-12823a6a8876.place-right {
                                margin-left: 10px;
                            }

                            .teb7e921b-8ad9-434a-a51b-12823a6a8876.place-right::before {
                                border-right: 8px solid transparent;
                            }

                            .teb7e921b-8ad9-434a-a51b-12823a6a8876.place-right::after {
                                border-top: 5px solid transparent;
                                border-bottom: 5px solid transparent;
                                left: -6px;
                                top: 50%;
                                margin-top: -4px;
                                border-right-color: #222;
                                border-right-style: solid;
                                border-right-width: 6px;
                            }
                        </style>
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
                                                        class="form-control input-element" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-field">
                                                    <input id="password" name="password" type="password"
                                                        class="form-control input-element" placeholder="Password">
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
                                    <div id="errorAlert" style="display: none;" class="alert alert-danger"></div>
                                    <button class="oauth-button mb-4" type="button">
                                        <img src="{{ asset('front_assets/images/banner/google.jpg') }}" alt="Google"
                                            style="width: 27px; height: 27px; margin-right: 8px;">Register with Google
                                    </button>
                            
                                    <form method="post" action="{{route('user.register')}}" id="registrationForm">
                                        @csrf
                                        <div class="form-group">
                                            <div class="input-field">
                                                <input id="name" name="name" type="text" class="form-control input-element" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-field">
                                                <input id="email" name="email" type="email" class="form-control input-element" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-field">
                                                <input id="password" name="password" type="password" class="form-control input-element" placeholder="Password">
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
                                                    class="form-control input-element" placeholder="Confirm Password">
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
                                        const errorAlert = document.querySelector('#errorAlert');
                            
                                        form.addEventListener('submit', function (event) {
                                            event.preventDefault(); // Prevent the form from submitting
                            
                                            // Perform your validation logic here (e.g., check if fields are filled correctly)
                                            const name = document.getElementById('name').value.trim();
                                            const email = document.getElementById('email').value.trim();
                                            const password = document.getElementById('password').value.trim();
                                            const confirmPassword = document.getElementById('confirm_password').value.trim();
                            
                                            
        
                                            if (name === '' || email === '' || password === '' || confirmPassword === '') {
                                                showError('This email is already registered');
                                                return;
                                            }
                                          
                            
                                            if (password !== confirmPassword) {
                                                showError('Passwords do not match.');
                                                return;
                                            }
                            
                                            // If all validations pass, you can submit the form
                                            form.submit();
                                        });
                            
                                        function showError(message) {
                                            errorAlert.textContent = message;
                                            errorAlert.style.display = 'block';
                                        }
                                    });
                                </script>
        
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="CompareSchools__CompareSchoolsTitleContainer-dnnmng-0 elIufT">
                        <div class="CompareSchools__CompareSchoolsTitle-dnnmng-1 hNjhla"><span
                                class="CompareSchools__IconWrapper-dnnmng-3 hqNrDB"><svg width="32"
                                    height="24" viewBox="0 0 22 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11 0L0 6L4 8.18V14.18L11 18L18 14.18V8.18L20 7.09V14H22V6L11 0ZM17.82 6L11 9.72L4.18 6L11 2.28L17.82 6ZM11 15.72L16 12.99V9.27L11 12L6 9.27V12.99L11 15.72Z"
                                        fill="#000000" data-testid="GRAD_CAP_PATH_TESTID"></path>
                                </svg></span>Compare Gym</div>
                        <div class="CompareSchools__CompareSchoolsButtonWrapper-dnnmng-2 UJZuC"><button
                                data-testid="reset-button"
                                class="IconButton__StyledIconButton-eamykg-0 dpugOF CompareSchoolsTable__ResetButton-sv3k5r-6 dnUjAH"
                                type="button" id="reset-button"><img
                                    src="front_assets/images/banner/reset.b9939db6.svg" alt="Reset Icon"
                                    height="20px" width="15px" /><span>Reset</span></button><button
                                class="IconButton__StyledIconButton-eamykg-0 dpugOF CompareSchoolsTable__ShareComparisonButton-sv3k5r-5 bUWgDL"
                                type="button" disabled="" id="share-comparison-button"><img
                                    src="front_assets/images/banner/share.e0c79743.svg" alt="Share Icon" /><span>Share
                                    Comparison</span></button></div>
                    </div>
                    <div class="CompareSchoolsTable__CompareSchoolsContainer-sv3k5r-0 hIcZPZ">
                        <div class="CompareSchoolsTable__CompareSchoolsColumnContainer-sv3k5r-1 hJdeHE">
                            <div class="CompareSchoolsTable__CompareSchoolsColumn-sv3k5r-2 ewzngw">
                                <div class="CompareSchoolsHeaderBox__SchoolGradeSquareContainer-sc-1343vgf-3 kFIlVr">
                                    <div color="averageScore" class="GradeSquare__ColoredSquare-sc-6d97x2-0 iFoOyg">
                                        3.9</div>
                                </div>
                                <div class="CompareSchoolsHeaderBox__SchoolRatingsDetails-sc-1343vgf-0 kaoisv">OVERALL
                                </div>
                                <div class="CompareSchoolsHeaderBox__SchoolRatingsDetails-sc-1343vgf-0 dNQSbv">
                                    515<!-- --> Ratings</div>
                                <a class="CompareSchoolsHeaderBox__StyledLink-sc-1343vgf-4 dxvnwm"
                                    href="{{ route('search') }}">
                                    <div class="CompareSchoolsHeaderBox__SchoolName-sc-1343vgf-1 ikJuJT">Sam Houston
                                        State Gym</div>
                                </a>
                            </div>
                            <div class="CompareSchoolsTable__CompareSchoolsColumn-sv3k5r-2 ewzngw">
                                <form role="form"
                                    class="CompareSchoolsTable__CompareSchoolSearchForm-sv3k5r-3 kcMYgy">
                                    <div
                                        class="FieldWrapper__StyledFieldWrapper-sc-1qtyg1n-0 ebCnIf FormController__StyledFormErrors-sc-17e9grp-0 jHYIoJ">
                                        <div class="FieldWrapper__StyledErrorContainer-sc-1qtyg1n-1 lbqXUp"></div>
                                    </div>
                                    <div
                                        class="CompareSchoolsHeaderBox__SchoolGradeSquareContainer-sc-1343vgf-3 cHyqMx">
                                        <div color="noScore" class="GradeSquare__ColoredSquare-sc-6d97x2-0 fsYVwi">N/A
                                        </div>
                                    </div>
                                    <div class="CompareSchoolsHeaderBox__SchoolRatingsDetails-sc-1343vgf-0 kaoisv">
                                        OVERALL</div>
                                    <div data-for="GLOBAL_TOOLTIP"
                                        class="CompareSchoolsSearch__CompareSchoolsSearchWrapper-sc-53xjdl-0 caijSw">
                                        <div class="FieldWrapper__StyledFieldWrapper-sc-1qtyg1n-0 ebCnIf">
                                            <div class="InputWrapper__StyledTextFieldWrapper-sc-1dxdzcl-0 iQTCwf">
                                                <div class="NewSearch__StyledSearchWrapper-pkxwmu-0 eJRnwy">
                                                    <div class="NewSearch__SearchIconWrapper-pkxwmu-2 irUZwm"></div>
                                                    <div
                                                        class="Search__SearchInputContainer-sc-10lefvq-0 koGnqT NewSearch__StyledSearch-pkxwmu-1 fxMegU FormSchoolSelector__FormSearch-sc-1olvn1r-0 iDmtHb">
                                                        <input type="text" value="" aria-label="search"
                                                            class="Search__DebouncedSearchInput-sc-10lefvq-1 fwqnjW" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="FieldWrapper__StyledErrorContainer-sc-1qtyg1n-1 lbqXUp"></div>
                                        </div>
                                    </div>
                                    <div class="CompareSchoolsTable__SchoolName-sv3k5r-4 laQXyb">Gym Name</div>
                                </form>
                            </div>
                        </div>
                        <div class="CompareSchoolsTableContent__CategoryRow-sc-1fxnzys-0 etSnGk">
                            <div class="CompareSchoolsTableContent__RowEnd-sc-1fxnzys-2 dKcjvC">
                                <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 emdQvc">
                                    <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 lemQpa">
                                        <div data-testid="slider-box-1"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 kyvFRI"></div>
                                        <div data-testid="slider-box-2"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-3"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-4"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-5"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 llZbqM"></div>
                                    </div>
                                    <div class="DisplaySlider__BulletPoint-sc-6etfq5-4 gAFIKl"></div>
                                    <div class="DisplaySlider__DisplayScore-sc-6etfq5-5 iKbZLM">3.9</div>
                                </div>
                            </div>
                            <div class="CompareSchoolsTableContent__RowMiddle-sc-1fxnzys-3 ivKToU">Internet</div>
                            <div class="CompareSchoolsTableContent__RowEnd-sc-1fxnzys-2 dKcjvC">
                                <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 emdQvc">
                                    <div class="DisplaySlider__DisplayScore-sc-6etfq5-5 iKbZLM"></div>
                                    <div class="DisplaySlider__BulletPoint-sc-6etfq5-4 bDZoLA"></div>
                                    <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 lemQpa">
                                        <div data-testid="slider-box-1"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fFdNVM"></div>
                                        <div data-testid="slider-box-2"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-3"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-4"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-5"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 llZbqM"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CompareSchoolsTableContent__CategoryRow-sc-1fxnzys-0 etSnGk">
                            <div class="CompareSchoolsTableContent__RowEnd-sc-1fxnzys-2 dKcjvC">
                                <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 emdQvc">
                                    <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 lemQpa">
                                        <div data-testid="slider-box-1"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 kyvFRI"></div>
                                        <div data-testid="slider-box-2"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-3"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-4"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-5"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 llZbqM"></div>
                                    </div>
                                    <div class="DisplaySlider__BulletPoint-sc-6etfq5-4 gAFIKl"></div>
                                    <div class="DisplaySlider__DisplayScore-sc-6etfq5-5 iKbZLM">4.0</div>
                                </div>
                            </div>
                            <div class="CompareSchoolsTableContent__RowMiddle-sc-1fxnzys-3 ivKToU">Safety</div>
                            <div class="CompareSchoolsTableContent__RowEnd-sc-1fxnzys-2 dKcjvC">
                                <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 emdQvc">
                                    <div class="DisplaySlider__DisplayScore-sc-6etfq5-5 iKbZLM"></div>
                                    <div class="DisplaySlider__BulletPoint-sc-6etfq5-4 bDZoLA"></div>
                                    <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 lemQpa">
                                        <div data-testid="slider-box-1"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fFdNVM"></div>
                                        <div data-testid="slider-box-2"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-3"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-4"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-5"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 llZbqM"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CompareSchoolsTableContent__CategoryRow-sc-1fxnzys-0 etSnGk">
                            <div class="CompareSchoolsTableContent__RowEnd-sc-1fxnzys-2 dKcjvC">
                                <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 emdQvc">
                                    <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 lemQpa">
                                        <div data-testid="slider-box-1"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 kyvFRI"></div>
                                        <div data-testid="slider-box-2"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-3"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-4"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-5"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 llZbqM"></div>
                                    </div>
                                    <div class="DisplaySlider__BulletPoint-sc-6etfq5-4 gAFIKl"></div>
                                    <div class="DisplaySlider__DisplayScore-sc-6etfq5-5 iKbZLM">4.2</div>
                                </div>
                            </div>
                            <div class="CompareSchoolsTableContent__RowMiddle-sc-1fxnzys-3 ivKToU">Facilities</div>
                            <div class="CompareSchoolsTableContent__RowEnd-sc-1fxnzys-2 dKcjvC">
                                <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 emdQvc">
                                    <div class="DisplaySlider__DisplayScore-sc-6etfq5-5 iKbZLM"></div>
                                    <div class="DisplaySlider__BulletPoint-sc-6etfq5-4 bDZoLA"></div>
                                    <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 lemQpa">
                                        <div data-testid="slider-box-1"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fFdNVM"></div>
                                        <div data-testid="slider-box-2"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-3"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-4"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-5"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 llZbqM"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CompareSchoolsTableContent__CategoryRow-sc-1fxnzys-0 etSnGk">
                            <div class="CompareSchoolsTableContent__RowEnd-sc-1fxnzys-2 dKcjvC">
                                <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 emdQvc">
                                    <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 lemQpa">
                                        <div data-testid="slider-box-1"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 kyvFRI"></div>
                                        <div data-testid="slider-box-2"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-3"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-4"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-5"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 llZbqM"></div>
                                    </div>
                                    <div class="DisplaySlider__BulletPoint-sc-6etfq5-4 gAFIKl"></div>
                                    <div class="DisplaySlider__DisplayScore-sc-6etfq5-5 iKbZLM">3.9</div>
                                </div>
                            </div>
                            <div class="CompareSchoolsTableContent__RowMiddle-sc-1fxnzys-3 ivKToU">Opportunities</div>
                            <div class="CompareSchoolsTableContent__RowEnd-sc-1fxnzys-2 dKcjvC">
                                <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 emdQvc">
                                    <div class="DisplaySlider__DisplayScore-sc-6etfq5-5 iKbZLM"></div>
                                    <div class="DisplaySlider__BulletPoint-sc-6etfq5-4 bDZoLA"></div>
                                    <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 lemQpa">
                                        <div data-testid="slider-box-1"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fFdNVM"></div>
                                        <div data-testid="slider-box-2"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-3"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-4"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-5"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 llZbqM"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CompareSchoolsTableContent__CategoryRow-sc-1fxnzys-0 etSnGk">
                            <div class="CompareSchoolsTableContent__RowEnd-sc-1fxnzys-2 dKcjvC">
                                <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 emdQvc">
                                    <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 lemQpa">
                                        <div data-testid="slider-box-1"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 kyvFRI"></div>
                                        <div data-testid="slider-box-2"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-3"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-4"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-5"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 llZbqM"></div>
                                    </div>
                                    <div class="DisplaySlider__BulletPoint-sc-6etfq5-4 gAFIKl"></div>
                                    <div class="DisplaySlider__DisplayScore-sc-6etfq5-5 iKbZLM">3.6</div>
                                </div>
                            </div>
                            <div class="CompareSchoolsTableContent__RowMiddle-sc-1fxnzys-3 ivKToU">Location</div>
                            <div class="CompareSchoolsTableContent__RowEnd-sc-1fxnzys-2 dKcjvC">
                                <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 emdQvc">
                                    <div class="DisplaySlider__DisplayScore-sc-6etfq5-5 iKbZLM"></div>
                                    <div class="DisplaySlider__BulletPoint-sc-6etfq5-4 bDZoLA"></div>
                                    <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 lemQpa">
                                        <div data-testid="slider-box-1"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fFdNVM"></div>
                                        <div data-testid="slider-box-2"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-3"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-4"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-5"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 llZbqM"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CompareSchoolsTableContent__CategoryRow-sc-1fxnzys-0 etSnGk">
                            <div class="CompareSchoolsTableContent__RowEnd-sc-1fxnzys-2 dKcjvC">
                                <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 emdQvc">
                                    <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 lemQpa">
                                        <div data-testid="slider-box-1"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 kyvFRI"></div>
                                        <div data-testid="slider-box-2"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-3"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-4"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-5"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 llZbqM"></div>
                                    </div>
                                    <div class="DisplaySlider__BulletPoint-sc-6etfq5-4 gAFIKl"></div>
                                    <div class="DisplaySlider__DisplayScore-sc-6etfq5-5 iKbZLM">3.6</div>
                                </div>
                            </div>
                            <div class="CompareSchoolsTableContent__RowMiddle-sc-1fxnzys-3 ivKToU">Clubs</div>
                            <div class="CompareSchoolsTableContent__RowEnd-sc-1fxnzys-2 dKcjvC">
                                <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 emdQvc">
                                    <div class="DisplaySlider__DisplayScore-sc-6etfq5-5 iKbZLM"></div>
                                    <div class="DisplaySlider__BulletPoint-sc-6etfq5-4 bDZoLA"></div>
                                    <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 lemQpa">
                                        <div data-testid="slider-box-1"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fFdNVM"></div>
                                        <div data-testid="slider-box-2"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-3"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-4"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-5"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 llZbqM"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CompareSchoolsTableContent__CategoryRow-sc-1fxnzys-0 etSnGk">
                            <div class="CompareSchoolsTableContent__RowEnd-sc-1fxnzys-2 dKcjvC">
                                <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 emdQvc">
                                    <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 lemQpa">
                                        <div data-testid="slider-box-1"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 kyvFRI"></div>
                                        <div data-testid="slider-box-2"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-3"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-4"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-5"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 llZbqM"></div>
                                    </div>
                                    <div class="DisplaySlider__BulletPoint-sc-6etfq5-4 gAFIKl"></div>
                                    <div class="DisplaySlider__DisplayScore-sc-6etfq5-5 iKbZLM">3.7</div>
                                </div>
                            </div>
                            <div class="CompareSchoolsTableContent__RowMiddle-sc-1fxnzys-3 ivKToU">Social</div>
                            <div class="CompareSchoolsTableContent__RowEnd-sc-1fxnzys-2 dKcjvC">
                                <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 emdQvc">
                                    <div class="DisplaySlider__DisplayScore-sc-6etfq5-5 iKbZLM"></div>
                                    <div class="DisplaySlider__BulletPoint-sc-6etfq5-4 bDZoLA"></div>
                                    <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 lemQpa">
                                        <div data-testid="slider-box-1"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fFdNVM"></div>
                                        <div data-testid="slider-box-2"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-3"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-4"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-5"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 llZbqM"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="CompareSchoolsTableContent__CategoryRow-sc-1fxnzys-0 etSnGk">
                            <div class="CompareSchoolsTableContent__RowEnd-sc-1fxnzys-2 dKcjvC">
                                <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 emdQvc">
                                    <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 lemQpa">
                                        <div data-testid="slider-box-1"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 kyvFRI"></div>
                                        <div data-testid="slider-box-2"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-3"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 blMqbq"></div>
                                        <div data-testid="slider-box-4"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-5"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 llZbqM"></div>
                                    </div>
                                    <div class="DisplaySlider__BulletPoint-sc-6etfq5-4 gAFIKl"></div>
                                    <div class="DisplaySlider__DisplayScore-sc-6etfq5-5 iKbZLM">3.4</div>
                                </div>
                            </div>
                            <div class="CompareSchoolsTableContent__RowMiddle-sc-1fxnzys-3 ivKToU">Food</div>
                            <div class="CompareSchoolsTableContent__RowEnd-sc-1fxnzys-2 dKcjvC">
                                <div class="DisplaySlider__DisplaySliderContainer-sc-6etfq5-0 emdQvc">
                                    <div class="DisplaySlider__DisplayScore-sc-6etfq5-5 iKbZLM"></div>
                                    <div class="DisplaySlider__BulletPoint-sc-6etfq5-4 bDZoLA"></div>
                                    <div class="DisplaySlider__SliderBoxContainer-sc-6etfq5-2 lemQpa">
                                        <div data-testid="slider-box-1"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fFdNVM"></div>
                                        <div data-testid="slider-box-2"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-3"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-4"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 fJGKXy"></div>
                                        <div data-testid="slider-box-5"
                                            class="DisplaySlider__DisplaySliderBox-sc-6etfq5-3 llZbqM"></div>
                                    </div>
                                </div>
                            </div>
                        </div><button
                            class="IconButton__StyledIconButton-eamykg-0 dpugOF CompareSchoolsTable__ShareComparisonButton-sv3k5r-5 kYpVXF"
                            type="button" disabled=""><img src="front_assets/images/banner/share.e0c79743.svg"
                                alt="Share Icon" height="20px" width="15px" /><span>Share
                                Comparison</span></button><button
                            class="IconButton__StyledIconButton-eamykg-0 dpugOF CompareSchoolsTable__ResetButton-sv3k5r-6 fOvidk"
                            type="button" id="reset-button"><img src="front_assets/images/banner/reset.b9939db6.svg"
                                alt="Reset Icon" height="20px" width="15px" /><span>Reset</span></button>
                    </div>

                </div>
@include('frontend.layouts.compare_footer')
            