@include('frontend.layouts.editreviewheader')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    .RatingSliderBox__StyledRatingSliderBox-skwa8i-0 {
        width: 50px;
        height: 50px;
        margin: 5px;
        background-color: gray;
        /* Default color */
    }

    #box1:hover {
        background-color: yellow;
        /* Hover color for the first box */
    }

    /* Default clicked colors */
    .clicked-1 {
        background-color: red;
    }

    .clicked-2 {
        background-color: blue;
    }

    .clicked-3 {
        background-color: green;
    }

    .clicked-4 {
        background-color: purple;
    }

    .clicked-5 {
        background-color: orange;
    }
</style>
</head>
<div class="PageWrapper__StyledPageWrapper-sc-3p8f0h-0 lcpsHk RateSchool__StyledAddRatingSchoolPage-sc-1cq0cnj-0 HLiKN">
    <form role="form" action="{{ route('freview.update', ['review' => $review->id]) }}" method="post"
        class="RateSchool__StyledAddRatingSchoolForm-sc-1cq0cnj-1 hafHAo">
        @csrf

        <div
            class="FieldWrapper__StyledFieldWrapper-sc-1qtyg1n-0 ebCnIf FormController__StyledFormErrors-sc-17e9grp-0 jHYIoJ">
            <div class="FieldWrapper__StyledErrorContainer-sc-1qtyg1n-1 lbqXUp"></div>
        </div>
        <div class="FormCard__FormCardContainer-sc-16ra1la-0 kStJld">
            <div data-testid="FORMCARD_TESTID" class="FormCard__StyledFormCard-sc-16ra1la-1 bUsHOg">
                <div class="FormCard__StyledFormCardTitle-sc-16ra1la-2 bNqnap">Facilities Rating<span>*</span></div>
                <div class="FormCard__StyledFormCardContent-sc-16ra1la-4 jFzfvl">
                    <div class="RatingSlider__StyledRatingSlider-qmpn39-0 cUTwSH">
                        <div
                            class="FieldWrapper__StyledFieldWrapper-sc-1qtyg1n-0 ebCnIf RatingSlider__HiddenFormSlider-qmpn39-2 jCArVA">
                            <div
                                class="InputWrapper__StyledTextFieldWrapper-sc-1dxdzcl-0 hDuiTy RatingSlider__HiddenFormSlider-qmpn39-2 jCArVA">
                                <label for="facilities_rating"
                                    class="InputWrapper__StaticLabel-sc-1dxdzcl-2 jAbYuF">Facilities Rating</label>
                                <input type="range" name="facilities_rating" id="facilities_rating" value="0"
                                    aria-valuemin="0" aria-valuemax="5" />
                            </div>
                            <div class="FieldWrapper__StyledErrorContainer-sc-1qtyg1n-1 lbqXUp"></div>
                        </div>
                        <style>
                           

                            .newbackgroundadded{
                                background-color: red;
                            }

                            .newbackgroundadded-2 {
                                background-color: blue;
                            }

                            .newbackgroundadded-3 {
                                background-color: green;
                            }

                            .newbackgroundadded-4{
                                background-color: purple;
                            }

                            .newbackgroundadded-5 {
                                background-color: orange;
                            }
                        </style>
                        <div class="RatingSlider__SliderBoxContainer-qmpn39-1 ihdjqt">

                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 icOrwZ @if ($review->facilities_rating > 0) newbackgroundadded @endif"
                                id="box1"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL @if ($review->facilities_rating > 1) newbackgroundadded-2 @endif"
                                id="box2"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL @if ($review->facilities_rating > 2) newbackgroundadded-3 @endif"
                                id="box3"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL @if ($review->facilities_rating > 3) newbackgroundadded-4 @endif"
                                id="box4"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 izVfvf @if ($review->facilities_rating > 4) newbackgroundadded-5 @endif"
                                id="box5"></div>
                        </div>
                        <div class="RatingSliderStatus__SliderStatusContainer-sc-1yt2y2p-0 eXbWmE">
                            <div order="1" width="113px"
                                class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 ogdTl">1 - Awful</div>
                            <div order="2" width="278px"
                                class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 bbGXHf"></div>
                            <div order="3" width="113px"
                                class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 bTRLUV">5 - Awesome</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="FormCard__FormCardContainer-sc-16ra1la-0 kStJld">
            <div data-testid="FORMCARD_TESTID" class="FormCard__StyledFormCard-sc-16ra1la-1 bUsHOg">
                <div class="FormCard__StyledFormCardTitle-sc-16ra1la-2 bNqnap">Coaching Rating<span>*</span></div>
                <div class="FormCard__StyledFormCardContent-sc-16ra1la-4 jFzfvl">
                    <div class="RatingSlider__StyledRatingSlider-qmpn39-0 cUTwSH">
                        <div
                            class="FieldWrapper__StyledFieldWrapper-sc-1qtyg1n-0 ebCnIf RatingSlider__HiddenFormSlider-qmpn39-2 jCArVA">
                            <div
                                class="InputWrapper__StyledTextFieldWrapper-sc-1dxdzcl-0 hDuiTy RatingSlider__HiddenFormSlider-qmpn39-2 jCArVA">
                                <label for="coaching_rating"
                                    class="InputWrapper__StaticLabel-sc-1dxdzcl-2 jAbYuF">Coaching Rating</label>
                                <input type="range" name="coaching_rating" id="coaching_rating" value="0"
                                    aria-valuemin="0" aria-valuemax="5" />
                            </div>
                            <div class="FieldWrapper__StyledErrorContainer-sc-1qtyg1n-1 lbqXUp"></div>
                        </div>
                        <div class="RatingSlider__SliderBoxContainer-qmpn39-1 ihdjqt">
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 icOrwZ  @if ($review->coaching_rating > 0) newbackgroundadded @endif" id="box1"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL @if ($review->coaching_rating > 1) newbackgroundadded-2 @endif" id="box2"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL @if ($review->coaching_rating > 2) newbackgroundadded-3 @endif" id="box3"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL @if ($review->coaching_rating > 3) newbackgroundadded-4 @endif" id="box4"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 izVfvf @if ($review->coaching_rating > 4) newbackgroundadded-5 @endif" id="box5"></div>
                        </div>
                        <div class="RatingSliderStatus__SliderStatusContainer-sc-1yt2y2p-0 eXbWmE">
                            <div order="1" width="113px"
                                class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 ogdTl">1 - Awful</div>
                            <div order="2" width="278px"
                                class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 bbGXHf"></div>
                            <div order="3" width="113px"
                                class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 bTRLUV">5 - Awesome</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="FormCard__FormCardContainer-sc-16ra1la-0 kStJld">
            <div data-testid="FORMCARD_TESTID" class="FormCard__StyledFormCard-sc-16ra1la-1 bUsHOg">
                <div class="FormCard__StyledFormCardTitle-sc-16ra1la-2 bNqnap">Atmosphere Rating<span>*</span></div>
                <div class="FormCard__StyledFormCardContent-sc-16ra1la-4 jFzfvl">
                    <div class="RatingSlider__StyledRatingSlider-qmpn39-0 cUTwSH">
                        <div
                            class="FieldWrapper__StyledFieldWrapper-sc-1qtyg1n-0 ebCnIf RatingSlider__HiddenFormSlider-qmpn39-2 jCArVA">
                            <div
                                class="InputWrapper__StyledTextFieldWrapper-sc-1dxdzcl-0 hDuiTy RatingSlider__HiddenFormSlider-qmpn39-2 jCArVA">
                                <label for="atmosphere_rating"
                                    class="InputWrapper__StaticLabel-sc-1dxdzcl-2 jAbYuF">Atmosphere Rating</label>
                                <input type="range" name="atmosphere_rating" id="atmosphere_rating" value="0"
                                    aria-valuemin="0" aria-valuemax="5" />
                            </div>
                            <div class="FieldWrapper__StyledErrorContainer-sc-1qtyg1n-1 lbqXUp"></div>
                        </div>
                        <div class="RatingSlider__SliderBoxContainer-qmpn39-1 ihdjqt">
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 icOrwZ  @if ($review->atmosphere_rating > 0) newbackgroundadded @endif" id="box1"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL  @if ($review->atmosphere_rating > 1) newbackgroundadded-2 @endif" id="box2"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL  @if ($review->atmosphere_rating > 2) newbackgroundadded-3 @endif" id="box3"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL  @if ($review->atmosphere_rating > 3) newbackgroundadded-4 @endif" id="box4"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 izVfvf  @if ($review->atmosphere_rating > 4) newbackgroundadded-5 @endif" id="box5"></div>
                        </div>
                        <div class="RatingSliderStatus__SliderStatusContainer-sc-1yt2y2p-0 eXbWmE">
                            <div order="1" width="113px"
                                class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 ogdTl">1 - Awful</div>
                            <div order="2" width="278px"
                                class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 bbGXHf"></div>
                            <div order="3" width="113px"
                                class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 bTRLUV">5 - Awesome</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="FormCard__FormCardContainer-sc-16ra1la-0 kStJld">
            <div data-testid="FORMCARD_TESTID" class="FormCard__StyledFormCard-sc-16ra1la-1 bUsHOg">
                <div class="FormCard__StyledFormCardTitle-sc-16ra1la-2 bNqnap">Overall Rating<span>*</span></div>
                <div class="FormCard__StyledFormCardContent-sc-16ra1la-4 jFzfvl">
                    <div class="RatingSlider__StyledRatingSlider-qmpn39-0 cUTwSH">
                        <div
                            class="FieldWrapper__StyledFieldWrapper-sc-1qtyg1n-0 ebCnIf RatingSlider__HiddenFormSlider-qmpn39-2 jCArVA">
                            <div
                                class="InputWrapper__StyledTextFieldWrapper-sc-1dxdzcl-0 hDuiTy RatingSlider__HiddenFormSlider-qmpn39-2 jCArVA">
                                <label for="overall_rating"
                                    class="InputWrapper__StaticLabel-sc-1dxdzcl-2 jAbYuF">Overall Rating</label>
                                <input type="range" name="overall_rating" id="overall_rating" value="0"
                                    aria-valuemin="0" aria-valuemax="5" />
                            </div>
                            <div class="FieldWrapper__StyledErrorContainer-sc-1qtyg1n-1 lbqXUp"></div>
                        </div>
                        <div class="RatingSlider__SliderBoxContainer-qmpn39-1 ihdjqt">
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 icOrwZ  @if ($review->overall_rating > 0) newbackgroundadded @endif" id="box1"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL  @if ($review->overall_rating > 1) newbackgroundadded-2 @endif" id="box2"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL  @if ($review->overall_rating > 2) newbackgroundadded-3 @endif" id="box3"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL  @if ($review->overall_rating > 3) newbackgroundadded-4 @endif" id="box4"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 izVfvf  @if ($review->overall_rating > 5) newbackgroundadded-5 @endif" id="box5"></div>
                        </div>
                        <div class="RatingSliderStatus__SliderStatusContainer-sc-1yt2y2p-0 eXbWmE">
                            <div order="1" width="113px"
                                class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 ogdTl">1 - Awful</div>
                            <div order="2" width="278px"
                                class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 bbGXHf"></div>
                            <div order="3" width="113px"
                                class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 bTRLUV">5 - Awesome</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Repeat similar blocks for other sections like Location, Opportunities, etc. -->
        <div class="FormCard__FormCardContainer-sc-16ra1la-0 kStJld">
            <div data-testid="FORMCARD_TESTID" class="FormCard__StyledFormCard-sc-16ra1la-1 bUsHOg">
                <div class="FormCard__StyledFormCardTitle-sc-16ra1la-2 bNqnap">Write a Review<span>*</span></div>
                <textarea name="feedback"  id="feedback" cols="30" rows="10" class="form-control"
                    placeholder="What do you want other gyms to know about this gym">{{ $review->feedback }}</textarea>
                <input type="hidden" name="gym_id">
                <input type="submit" name="" id="" class="btn btn-dark mt-3 float-right">
            </div>
        </div>
    </form>
</div>
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

@include('frontend.layouts.gym_rating_footer')
