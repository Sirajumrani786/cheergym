
<footer style="margin-top:70px;">
    <div class="footer-links">
        <!--<a href="#">Help</a> -->
        <a href="http://www.ratemycheergym.com/help">Help</a>
        <a href="{{route('guidelines')}}">Site Guidelines</a>
        <a href="{{route('terms')}}">Terms & Conditions</a>
        <a href="{{route('privacy')}}">Privacy Policy</a>
        <!--<a href="#">Copyright Compliance Policy</a>-->
        <!--<a href="#">CA Notice at Collection</a>-->
        <!--<a href="#">CA Do Not Sell or Share My Personal Information</a>-->
    </div>
    <div class="footer social-icons">
      <!--<a href="#"><i class="fab fa-instagram"></i></a>-->
      <!--<a href="#"><i class="fab fa-tiktok"></i></a>-->
      <!--<a href="#"><i class="fab fa-x"></i></a>-->
      <a href="https://www.instagram.com/ratemycheergym/"><i class="fab fa-instagram"></i></a>
      <a href="https://www.tiktok.com/@rate.my.cheer.gym"><i class="fab fa-tiktok"></i></a>
      <a href="https://x.com/ratemycheergym"><i class="fab fa-x"></i></a>
    </div>
   
    <div class="footer-copyright">
        &copy; 2024 Rate My Cheer Gym, LLC. All Rights Reserved
    </div>
  </footer>
  
  
  <script src="userassets/assets/js/script.js"></script>
      <script>
          document.addEventListener("DOMContentLoaded", function() {
              const navItems = document.querySelectorAll("nav ul li");
              const sections = document.querySelectorAll(".content-section");
  
              navItems.forEach(item => {
                  item.addEventListener("click", function() {
                      navItems.forEach(nav => nav.classList.remove("active"));
                      this.classList.add("active");
                      sections.forEach(section => section.style.display = "none");
                      const sectionId = this.textContent.toLowerCase().replace(" ", "-");
                      document.getElementById(sectionId).style.display = "block";
                  });
              });
  
              document.getElementById("profile").style.display = "block";
          });
  
          
      </script>
      </div>
  <div class="col-lg-1"></div>
  </div>
  </div>
  </body>
  
  </html>
  