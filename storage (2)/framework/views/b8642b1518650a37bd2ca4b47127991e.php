

<footer
    style="background-image: url('front_assets/img/banner_one.png');background-size: cover;background-position: center;background-repeat: no-repeat;height: auto;">
    <div class="container footer_container">
        <div class="footer_row row">
            <div class="footer_div_one col-lg-4 col-sm-4 col-md-4 col-12 mt-4">
                <img src="front_assets/img/logo.png" class="w-100">
            </div>
            <div class="footer_div_two col-lg-7 col-sm-7 col-md-7 col-12 mt-5">
                <a href="<?php echo e(route('help')); ?>" class="footer_link">Help</a>
                <a href="<?php echo e(route('guidelines')); ?>" class="footer_link">Site Guidelines</a>
                <a href="<?php echo e(route('privacy')); ?>l" class="footer_link">Privacy Policy</a>
                <a href="<?php echo e(route('terms')); ?>" class="footer_link">Terms & Conditions</a>
                <div class="marginfor">
                    <a href="#" class="footer_link">Review</a>
                    <a href="<?php echo e(route('blog')); ?>" class="footer_link ">Blog</a>
                </div>
            </div>

            <div class="footer_div_three col-lg-1  col-sm-1 col-md-1 col-y mt-5">
                <ul class="ul_footer">
                    <li class="li_footer1"> <a href="https://www.instagram.com/ratemycheergym/" class="instagram1"><i
                                class="bi bi-instagram iconnns"></i></a></li>
                    <li class="li_footer2"><a href="https://x.com/ratemycheergym" class="twiter2"><i
                                class="bi bi-x iconnns"></i></a></li>
                    <li class="li_footer3"><a href="https://www.tiktok.com/@rate.my.cheer.gym" class="tiktok3"><i
                                class="bi bi-tiktok iconnns"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-12 copyrightdiv">
                <p class="footer_pragraphy">© 2024 Rate My Cheer Gym,
                    LLC. All Rights Reserved</p>
            </div>

        </div>
    </div>
</footer>
<script src="front_assets/js/style.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
var modal = document.getElementById("login-modal");
var loginBtn = document.getElementById("login-link");
var signupNavbarBtn = document.getElementById("signup-link-navbar");
var span = document.getElementsByClassName("close-button")[0];
var modalContent = document.getElementById("modal-content");

var loginFormHTML = `
<h2>Sign In</h2>
<form id="login-form" action="<?php echo e(route('user.login')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="input-group">
        <input type="text" name="email" placeholder="Enter Email" class="form-control" required>
    </div>
    <div class="input-group">
        <input type="password" name="password" placeholder="Password" required>
        <button type="button" class="show-password"></button>
    </div>
    <div class="actions">
        <a href="#" class="signup" id="signup-link">Click <span>here</span> to Sign Up</a>
        <a href="#" class="forgot-password" id="forgot-password-link">Forgot Password ?</a>
    </div>
    <button type="submit" class="sign-btn">Sign</button>
</form>
<div class="social-login">
    <p>Or continue</p>
    <div class="social-icons">
        <button class="google-btn"><img src="front_assets/img/google.png"></button>
        <button class="apple-btn"><img src="front_assets/img/apple.png"></button>
        <button class="facebook-btn"><img src="front_assets/img/facebook.png"></button>
    </div>
</div>
`;

var signupFormHTML = `
<h2>Sign Up</h2>
<form id="signup-form"method="post" action="<?php echo e(route('user.register')); ?>">
     <?php echo csrf_field(); ?>
    <div class="input-group">
        <input type="text" name="name" placeholder="Full Name" class="form-control" required>
    </div>
    <div class="input-group">
        <input type="text" name="email" placeholder="Enter Email" class="form-control" required>
    </div>
    <div class="input-group">
        <input ttype="text" name="password" placeholder="Password" class="form-control" required>
        <button type="button" class="show-password"></button>
    </div>
    <div class="input-group">
        <input type="text" name="password_confirmation"  placeholder="Confirm Password" class="form-control" required>
    </div>
    <div class="actions">
          <a href="#" class="signup" id="signin-link">Click <span>here</span> to Sign In</a>
    </div>
    <button type="submit" class="sign-btn">Sign Up</button>
</form>
<div class="social-login">
    <p>Or continue</p>
    <div class="social-icons">
        <button class="google-btn"><img src="front_assets/img/google.png"></button>
        <button class="apple-btn"><img src="front_assets/img/apple.png"></button>
        <button class="facebook-btn"><img src="front_assets/img/facebook.png"></button>
    </div>
</div>
`;

var forgotPasswordFormHTML = `
<h2>Forgot Password</h2>
<form id="forgot-password-form">
    <div class="input-group">
        <input type="email" placeholder="Enter Email" required>
    </div>
    <div class="actions">
        <a href="#" class="signup" id="signin-link">Click <span>here</span> to Sign In</a>
    </div>
    <button type="submit" class="sign-btn">Reset Password</button>
</form>
`;

var resetPasswordFormHTML = `
<h2>Reset Password</h2>
<form id="reset-password-form">
    <div class="input-group">
        <input type="password" placeholder="New Password" required>
    </div>
    <div class="input-group">
        <input type="password" placeholder="Confirm New Password" required>
    </div>
    <div class="actions">
     <a href="#" class="signup" id="signin-link">Click <span>here</span> to Sign In</a>
    </div>
    <button type="submit" class="sign-btn">Reset Password</button>
</form>
`;

loginBtn.onclick = function() {
modal.style.display = "block";
modalContent.innerHTML = loginFormHTML;
addToggleEventListeners();
}

signupNavbarBtn.onclick = function() {
modal.style.display = "block";
modalContent.innerHTML = signupFormHTML;
addToggleEventListeners();
}

span.onclick = function() {
modal.style.display = "none";
}

window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
}
}

function addToggleEventListeners() {
var signupLink = document.getElementById("signup-link");
var signinLink = document.getElementById("signin-link");
var forgotPasswordLink = document.getElementById("forgot-password-link");

if (signupLink) {
    signupLink.onclick = function(event) {
        event.preventDefault();
        modalContent.innerHTML = signupFormHTML;
        addToggleEventListeners();
    }
}

if (signinLink) {
    signinLink.onclick = function(event) {
        event.preventDefault();
        modalContent.innerHTML = loginFormHTML;
        addToggleEventListeners();
    }
}

if (forgotPasswordLink) {
    forgotPasswordLink.onclick = function(event) {
        event.preventDefault();
        modalContent.innerHTML = forgotPasswordFormHTML;
        addToggleEventListeners();
    }
}

var forgotPasswordForm = document.getElementById("forgot-password-form");
if (forgotPasswordForm) {
    forgotPasswordForm.onsubmit = function(event) {
        event.preventDefault();
        modalContent.innerHTML = resetPasswordFormHTML;
        addToggleEventListeners();
    }
}
}
});

</script>


</body>

</html>
<?php /**PATH D:\Softwe\laragon\www\gym website code\gym-Website\resources\views/frontend/layouts/footer.blade.php ENDPATH**/ ?>