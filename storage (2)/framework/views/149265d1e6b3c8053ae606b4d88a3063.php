<?php echo $__env->make('frontend.layouts.gym_rating_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    button.submit-rating {
    background: gray;
    padding: 6px 23px;
    border-color: #007bff;
    border-radius: 20px;
    color: #fff;
    border: 0px;
}


   
</style>
</head>
<div class="PageWrapper__StyledPageWrapper-sc-3p8f0h-0 lcpsHk RateSchool__StyledAddRatingSchoolPage-sc-1cq0cnj-0 HLiKN">
    <form role="form" action="<?php echo e(route('ratingstore')); ?>" method="post"
        class="RateSchool__StyledAddRatingSchoolForm-sc-1cq0cnj-1 hafHAo">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="gym_id" value="<?php echo e($gym->id); ?>">
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
                        <div class="RatingSlider__SliderBoxContainer-qmpn39-1 ihdjqt">
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 icOrwZ" id="box1"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL" id="box2"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL" id="box3"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL" id="box4"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 izVfvf" id="box5"></div>
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
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 icOrwZ" id="box1"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL" id="box2"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL" id="box3"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL" id="box4"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 izVfvf" id="box5"></div>
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
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 icOrwZ" id="box1"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL" id="box2"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL" id="box3"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL" id="box4"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 izVfvf" id="box5"></div>
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
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 icOrwZ" id="box1"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL" id="box2"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL" id="box3"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL" id="box4"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox"
                                class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 izVfvf" id="box5"></div>
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
                <!--<div class="guidelines">-->
                <!--    <strong>Guidelines</strong>-->
                <!--    <ul>-->
                <!--        <li>Your rating could be removed if you use profanity or derogatory terms.</li>-->
                <!--        <li>Refer to the rating categories to help you better elaborate your comments.</li>-->
                <!--        <li>Don’t forget to proofread!</li>-->
                <!--    </ul>-->
                <!--    <a href="<?php echo e(route('guidelines')); ?>" style="color: #000;text-decoration: underline;">View all guidelines</a>-->
                <!--</div>-->
                <style>
                .accordion-container {
                    max-width: 100%;
                    width: 100%;
                    background-color: #f7f7f7;
                    padding: 20px;
                }

        details {
          font-size: var(--title);
          margin: 0 auto;
          width: 100%;
          position: relative;
          border-bottom: 1px solid var(--border-color);
          transition: all 0.3s ease-in-out;
        }
    
        summary {
          user-select: none;
          cursor: pointer;
          list-style: none;
          display: flex;
          align-items: center;
          padding: var(--header-padding);
        }
    
        summary:hover {
          text-decoration: underline;
        }
    
        summary:hover .title,
        summary:hover .accordion-icon {
          opacity: 1;
        }
    
        .accordion-title {
          color: #151518;
          width: 90%;
          font-weight: 800;
          transition: all 250ms ease-in-out;
        }
    
        .accordion-icon {
          opacity: 0.5;
          pointer-events: none;
          position: absolute;
          right: 1rem;
          transition: all 150ms ease-out;
        }
    
        .accordion-icon svg {
          width: var(--icon-size);
          height: var(--icon-size);
          transition: transform 0.3s ease-in-out;
        }
    
        .accordion-content {
          color: #3c3e47;
          padding: var(--content-padding);
          font-size: var(--content);
          font-weight: 400;
          line-height: 1.65;
        }
    
        summary::-webkit-details-marker {
          display: none;
        }
    
        details[open] .accordion-icon svg {
          transform: rotate(180deg);
        }
    
        .contact-box {
          display: flex;
          justify-content: space-between;
          align-items: center;
          gap: 1rem;
          padding: 0.75rem 1.25rem;
          position: fixed;
          bottom: 2rem;
          left: 50%;
          background-color: #000;
          max-width: max-content;
          border-radius: 50px;
          transform: translate(-50%, 0);
          background-image: radial-gradient(
            227.71% 180.23% at 90.64% 130.38%,
            rgb(17, 20, 23) 0%,
            rgb(55, 59, 63) 100%
          ),
          radial-gradient(
            207.84% 121.69% at -5.69% 111.39%,
            rgb(17, 20, 23) 0%,
            rgb(55, 59, 63) 100%
          ),
          linear-gradient(
            206deg,
            rgba(123, 134, 151, 0.2) 0%,
            rgba(25, 27, 30, 0.2) 100%
          ),
          linear-gradient(180deg, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.2) 100%);
        }
    
        .contact-box a {
          text-decoration: none;
          color: #eeeeee;
          font-size: 1rem;
          font-weight: 500;
          transition: color 0.15s ease-in,
          transform 0.35s cubic-bezier(1, 1.13, 0, 3.11);
        }
    
        .contact-box a:hover {
          color: var(--primary-color);
          text-decoration: underline;
          transform: translateX(2px) rotate(-3deg);
        }
  </style>
</head>
<body>
  <div class="accordion-container">
    <details>
      <summary>
            <span class="" style="margin-right: 5px;
    margin-top: 2px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-alert-triangle">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 9v2m0 4v.01" />
            <path d="M10 4h4l8 14h-20z" />
          </svg>
        </span>
        <span class="accordion-title">Guidelines</span>
        <span class="accordion-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6 9l6 6l6 -6" />
          </svg>
        </span>
      </summary>
      <div class="accordion-content">
        <ul style="list-style: disc; padding: 10px 20px;">
          <li>Your rating could be removed if you use profanity or derogatory terms.</li>
          <li>Refer to the rating categories to help you better elaborate your comments.</li>
          <li>Don’t forget to proofread!</li>
        </ul>
        <a href="<?php echo e(route('guidelines')); ?>" style="color: #000;text-decoration: underline; font-weight: 600;">View all guidelines</a>
      </div>
    </details>
  </div>

  <!--<div class="contact-box">-->
  <!--  <a href="#">Contact Us</a>-->
  <!--</div>-->

  <script>
    class Accordion {
      constructor(el) {
        this.el = el;
        this.summary = el.querySelector("summary");
        this.content = el.querySelector(".accordion-content");
        this.expandIcon = this.summary.querySelector(".accordion-icon svg");
        this.animation = null;
        this.isClosing = false;
        this.isExpanding = false;
        this.summary.addEventListener("click", (e) => this.onClick(e));
      }

      onClick(e) {
        e.preventDefault();
        this.el.style.overflow = "hidden";

        if (this.isClosing || !this.el.open) {
          this.open();
        } else if (this.isExpanding || this.el.open) {
          this.shrink();
        }
      }

      shrink() {
        this.isClosing = true;

        const startHeight = `${this.el.offsetHeight}px`;
        const endHeight = `${this.summary.offsetHeight}px`;

        if (this.animation) {
          this.animation.cancel();
        }

        this.animation = this.el.animate(
          {
            height: [startHeight, endHeight]
          },
          {
            duration: 400,
            easing: "ease-out"
          }
        );

        this.animation.onfinish = () => {
          return this.onAnimationFinish(false);
        };

        this.animation.oncancel = () => {
          return (this.isClosing = false);
        };
      }

      open() {
        this.el.style.height = `${this.el.offsetHeight}px`;
        this.el.open = true;
        window.requestAnimationFrame(() => this.expand());
      }

      expand() {
        this.isExpanding = true;

        const startHeight = `${this.el.offsetHeight}px`;
        const endHeight = `${this.summary.offsetHeight + this.content.offsetHeight}px`;

        if (this.animation) {
          this.animation.cancel();
        }

        this.animation = this.el.animate(
          {
            height: [startHeight, endHeight]
          },
          {
            duration: 350,
            easing: "ease-out"
          }
        );

        this.animation.onfinish = () => {
          return this.onAnimationFinish(true);
        };

        this.animation.oncancel = () => {
          return (this.isExpanding = false);
        };
      }

      onAnimationFinish(open) {
        this.el.open = open;
        this.animation = null;
        this.isClosing = false;
        this.isExpanding = false;
        this.el.style.height = this.el.style.overflow = "";
      }
    }

    document.querySelectorAll("details").forEach((el) => {
      new Accordion(el);
    });
  </script>
                <textarea name="feedback" id="feedback" cols="30" rows="10" class="form-control mt-3"
                    placeholder="Discuss your personal experience on this school. What’s great about it? What could use improvement?"></textarea>
                <p>By clicking the "Submit" button, I acknowledge that I have read and agreed to the Rate My Cheer Gym's <a href="<?php echo e(route('guidelines')); ?>">Site Guidelines</a>, <a href="<?php echo e(route('terms')); ?>">Terms of Use</a>, and <a href="<?php echo e(route('privacy')); ?>">Privacy Policy</a>. Submitted data becomes the property of Rate My Cheer Gym, LLC.</p>
                <div class="buttonsubmit" style="justify-content: center;display: flex;">
                    <button class="submit-rating" id="submit-rating" style="border: 1px solid #007bff;" onclick="submitReview()">Submit Rating</button>
                </div>
            </div>
        </div>


    
        <div id="response-message" class="response-message" style="display:none;">
            Thank you for your review!
        </div>
    
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const feedbackTextarea = document.getElementById('feedback');
                const submitButton = document.getElementById('submit-rating');
            
                function toggleSubmitButton() {
                    if (feedbackTextarea.value.trim() === "") {
                        submitButton.disabled = true;
                        submitButton.style.cursor = 'not-allowed';
                    } else {
                        submitButton.disabled = false;
                        submitButton.style.cursor = 'pointer';
                    }
                }
            
                // Initial check
                toggleSubmitButton();
            
                // Add event listener to textarea
                feedbackTextarea.addEventListener('input', toggleSubmitButton);
            });

        </script>
        <script src="script.js"></script>
        
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

<?php echo $__env->make('frontend.layouts.gym_rating_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\Softwe\laragon\www\gym website code\gym-Website\resources\views/frontend/gym_rating.blade.php ENDPATH**/ ?>