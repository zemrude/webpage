<?php include("header.html");?>
   
<div class="expanded row">
 
<div class="small-12 large-12 columns">

     <div class="profile-card">
        <div class="small-12 large-2 columns">
           <a><img src="img/kevin.jpg" alt="profile image"></a> 
        </div>
        <div class="small-12 large-10 columns">
           <h4>Kevin Meagher <span>PostDoc</span></h4>
             <p><i class="fa fa-building"></i><span> Office 0G-113</span></p>
             <p><i class="fa fa-phone"></i><span> +32 2 629 32 26</span></p>
             <p><i class="fa fa-envelope"></i><span> kmeagher@ulb.ac.be</span></p>
        </div>
      </div>
      <div class="profile-card">
        <div class="small-12 large-2 columns">
           <a><img src="img/isabelle.jpg" alt="profile image"></a> 
        </div>
        <div class="small-12 large-10 columns">
           <h4>Isabelle Ansseau <span>Assistant d'enseignement, PhD student</span></h4>
             <p><i class="fa fa-building"></i><span> Office 0G-111</span></p>
             <p><i class="fa fa-phone"></i><span> +32 2 629 32 20</span></p>
             <p><i class="fa fa-envelope"></i><span> isabelle.ansseau@ulb.ac.be</span></p>             
        </div>
      </div>
      <div class="profile-card">
        <div class="small-12 large-2 columns">
           <a><img src="" alt="profile image"></a> 
        </div>
        <div class="small-12 large-10 columns">
           <h4>Giovanni Renzi <span>PhD Student</span></h4>
             <p><i class="fa fa-building"></i><span> Office 0G-104</span></p>
             <p><i class="fa fa-phone"></i><span> +32 2 629 32 22</span></p>
             <p><i class="fa fa-envelope"></i><span> grenzi@icecube.wisc.edu</span></p>
        </div>
      </div>
      <div class="profile-card">
        <div class="small-12 large-2 columns">
           <a><img src="img/chris.jpg" alt="profile image"></a> 
        </div>
        <div class="small-12 large-10 columns">
           <h4>Christoph Raab <span>PhD Student</span></h4>
             <p><i class="fa fa-building"></i><span> Office 0G-104</span></p>
             <p><i class="fa fa-phone"></i><span> +32 2 629 32 22</span></p>
             <p><i class="fa fa-envelope"></i><span> christoph@raab.io</span></p>
        </div>
      </div>
      <div class="profile-card">
        <div class="small-12 large-2 columns">
           <a><img src="" alt="profile image"></a> 
        </div>
        <div class="small-12 large-10 columns">
           <h4>Nadège Iovine <span>PhD Student</span></h4>
             <p><i class="fa fa-building"></i><span> Office 0G-111</span></p>
             <p><i class="fa fa-phone"></i><span> +32 2 629 32 20</span></p>
             <p><i class="fa fa-envelope"></i><span>nadege.iovine@ulb.ac.be</span></p>
        </div>
      </div>

                 
</div>  
    </div>


<?php include("footer.html");?>
    <script src="owl-carousel/owl.carousel.js"></script>


    <!-- Demo -->

    <style>
  
    .profile-card {
      padding-top: 15px;
      padding-bottom: 0px;
      border-radius: 5px;
      overflow: hidden;
    }

    .profile-card h4 {
      font-family: "Proxima Nova","proxima-nova","Helvetica Neue",Helvetica,Arial,sans-serif;
      font-weight: 300;
      color: #2B2937;
      font-size: 20px;
      line-height: 26px;
    }

    .profile-card h4 span {
      font-size: 18px;
      font-weight: 100;
      color: #8C91A7;
      display: block;
    }

    .profile-card img {
      border-radius: 50%;
      width: 90%;
      overflow: hidden;
      margin: 0px 0 70px 30px;
      border: 2px solid #69708C;
    }

    .profile-card .button-group {
      width: 101%;
    }

    .profile-card .button-group .button {
      margin-bottom: 0;
      border-top: none;
      border-left: none;
      border-right: 2px solid #2B2937;
      border-bottom: none;
      background-color: #394165;
      height: 80px;
      padding-top: 15px;
      margin-top: 20px;
      font-weight: 200;
      font-size: 16px;
      line-height: 26px;
      color: #8C91A7;
      box-shadow: none;
    }

    .profile-card .button-group .button span {
      display: block;
      font-size: 24px;
      font-weight: 600;
       color: #fff;
    }

    .profile-card p {
      font-size: 16px;
      margin-bottom: 0;
      color: #8C91A7;
    }
    
    .profile-card i {
      font-size: 26px;
      vertical-align: middle;
      padding-right: 5px;
      color: #394165;
    }

  @media only screen and (max-width: 767px) {

    .profile-card img {
      margin-left: auto;
      margin-right: auto;
      width: 20%;
    }

    .profile-card h4, .profile-card p {
      text-align: center;
    }

    .profile-card .button-group .button {
      font-size: 14px;
    }

    .profile-card .button-group .button span {
      font-size: 20px;
    }

  }
  </style>
    
    <script>
      $(document).foundation();
    </script>

    <script>
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({

          navigation : true,
          slideSpeed : 800,
          paginationSpeed : 800,
          singleItem : true,
          autoPlay: 5000,
          navigation: false,
          // "singleItem:true" is a shortcut for:
          // items : 1, 
          // itemsDesktop : false,
          // itemsDesktopSmall : false,
          // itemsTablet: false,
          // itemsMobile : false
        });
      });
    </script>

    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>

    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/application.js"></script>

  </body>
</html>
