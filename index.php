<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- title icon -->
  <link rel="icon" href="https://electronics.sony.com/assets/icons/Favicon_144x144.png" type="image/x-icon" />
  <!-- title icon -->


  <!--name of candidate: Poulomi Bhattacharya -->

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap"
    rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
    rel="stylesheet" />
  <!-- google fonts -->

  <!-- all lunked css -->
  <link rel="stylesheet" href="styles/universal.css" />
  <link rel="stylesheet" href="styles/header-section.css" />
  <link rel="stylesheet" href="styles/home-section.css" />
  <link rel="stylesheet" href="styles/shop-the-best-section.css" />
  <link rel="stylesheet" href="styles/home-content-section.css" />
  <link rel="stylesheet" href="styles/footer-section.css" />
  <link rel="stylesheet" href="styles/on-hover-content.css" />
  <!-- all lunked css -->

  <title>
    Sony Electronics - Televisions, Audio, Cameras, Mobile, Video Cameras
  </title>
</head>

<body>
  <!-- header-section starts -->
  <section class="header-section">
    <div class="header-nav-1">
      <div class="sony-logo">
        <img src="./assets/images/sony-logo-200.png" alt="" />
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search" />
        <i class="fa-solid fa-magnifying-glass" style="color: #bababa"></i>
      </div>
      <div class="nav-items support">
        <p>Support</p>
        <i id="down-arrow" class="fa-solid fa-caret-down" style="color: #ffffff"></i>
      </div>
      <div class="nav-items account">
        <p>Account</p>
        <i id="down-arrow-account" class="fa-solid fa-caret-down" style="color: #ffffff"></i>
      </div>
      <i class="fa-solid fa-cart-shopping" style="color: #ffffff"></i>

      <?php
      session_start();
      if (isset($_SESSION['email'])) {
        echo '<p id="afterLoginOptions" style="cursor:pointer; color:#fff">' . htmlspecialchars($_SESSION['username']) . '</p> ';

      } else {
        echo '<a id="login-register-button" style="
            color: #0098e1;
            text-decoration: none;
            border-bottom: 1px solid #0098e1;
          ">Become a My Sony Member</a>';
      }
      ?>


    </div>

    <div class="header-nav-2">
      <div class="nav-2-items">
        <p>TV and Home Theater</p>
        <i class="fa-solid fa-caret-down" style="color: #ffffff"></i>
      </div>
      <div class="nav-2-items">
        <p>Imaging</p>
        <i class="fa-solid fa-caret-down" style="color: #ffffff"></i>
      </div>
      <div class="nav-2-items">
        <p>Audio</p>
        <i class="fa-solid fa-caret-down" style="color: #ffffff"></i>
      </div>
      <div class="nav-2-items">
        <p>Mobile</p>
        <i class="fa-solid fa-caret-down" style="color: #ffffff"></i>
      </div>
      <div class="nav-2-items">
        <p>Gaming Gear</p>
        <i class="fa-solid fa-caret-down" style="color: #ffffff"></i>
      </div>
      <div class="nav-2-items">
        <p>aibo</p>
        <i class="fa-solid fa-caret-down" style="color: #ffffff"></i>
      </div>
      <div class="nav-2-items">
        <p>More</p>
        <i class="fa-solid fa-caret-down" style="color: #ffffff"></i>
      </div>
      <a style="color: #fff">Sale</a>
    </div>

    <div class="header-nav-3">
      <p>
        2% BACK IN POINTS FOR MY SONY MEMBERS
        <span style="color: #000" span>DETAILS</span>
      </p>
    </div>
  </section>

  <!-- header-section ends -->

  <!-- header-section on-hover-content starts -->

  <!-- support starts -->
  <div class="on-hover-support">
    <div class="items">
      <i class="fa-solid fa-tag" style="color: #2f353d"></i>
      <p>Sony Store Support</p>
    </div>
    <div class="items">
      <i class="fa-solid fa-cube"></i>
      <p>Electronics Product Support</p>
    </div>
    <div class="items">
      <i class="fa-brands fa-playstation"></i>
      <p>PlayStation Support</p>
    </div>
    <div class="items">
      <i class="fa-solid fa-phone"></i>
      <p>Contact Support</p>
    </div>
  </div>
  <!-- support ends -->

  <!-- account starts -->
  <div class="on-hover-support on-hover-account">
    <div class="items">
      <button>
        <a style="color: #fff; font-size: 13px"
          href="https://acm.account.sony.com/input_id?client_id=37351a12-3e6a-4544-87ff-1eaea0846de2&scope=openid%20users&redirect_uri=https%3A%2F%2Felectronics.sony.com%3FauthRedirect%3Dtrue&state=fcc72b7a-a317-4cc9-b230-42f92ec39236&nonce=379a1503-ab4b-4cb8-b7e2-29fdd8f56b9a#page-top">Sign
          In / Register</a>
      </button>
    </div>
    <div class="items">
      <i class="fa-solid fa-crosshairs"></i>
      <p>Track my order</p>
    </div>
    <div class="items">
      <i class="fa-solid fa-gift"></i>
      <p>Sony store credit</p>
    </div>
    <div class="items">
      <i class="fa-solid fa-rotate-left"></i>
      <p>Returns</p>
    </div>
    <div class="items">
      <i class="fa-solid fa-book"></i>
      <p>Register a new Product</p>
    </div>
    <div class="items">
      <i class="fa-solid fa-cart-plus"></i>
      <p>My Products</p>
    </div>
  </div>
  <!-- account ends -->

  <!-- login-register form starts -->
  <div class="login-register">
    <div class="form-title">
      <div class="sony-logo">
        <img src="./assets/images/sony-logo-black.png" alt="" />
      </div>
      <h2>Sign In / Register</h2>
      <i id="close-login-register" class="fa-solid fa-rectangle-xmark"></i>
    </div>
    <div class="forms">
      <form class="login-form" action="php/login.php" method="post">
        <label for="username">Username</label>
        <input type="text" placeholder="Username/Email" name="username" />
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" />
        <button type="submit">Sign In</button>
      </form>
      <form class="login-form register-form" action="php/register.php" method="post">
        <input type="text" placeholder="Name" name="name" />
        <input type="text" placeholder="Email" name="email" />
        <input type="password" placeholder="Password" name="password" />
        <input type="password" placeholder="Confirm Password" name="confPassword" />
        <button type="submit">Sign Up</button>
      </form>
    </div>
  </div>
  <!-- login-register form ends -->

  <!-- after login on hover username options starts -->
  <ul id="userDropdown">
    <li><a href="">My Profile</a></li>
    <li><a href="php/logout.php">Logout</a></li>
  </ul>
  <!-- after login on hover username options ends -->

  <!-- chat bot icon starts -->
  <div class="chat-bot-icon">
    <img src="./assets/icons/chat-bot-icon.png" alt="">
  </div>
  <!-- chat bot icon ends -->
  <!-- header-section on-hover-content ends -->

  <!-- home-section starts -->
  <section class="home-section">
    <div class="home-section-content">
      <div class="headline">
        <h2>Beautifully designed with picture in mind</h2>
      </div>
      <div class="sub-line">
        <p>
          Take a break from the heat this summer and enjoy your favorite
          movies
        </p>
      </div>
      <button>Shop now</button>
    </div>
    <video _ngcontent-serverapp-c591446493="" class="vjs-tech" id="vjs_video_3_html5_api" tabindex="-1"
      role="application" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay=""
      src="https://d1ncau8tqf99kp.cloudfront.net/HOMEPAGE/2024/7-8/desktop/hero_0708_d.mp4"></video>
  </section>
  <!-- home-section ends -->

  <!-- shop-the-best-section section starts  -->
  <section class="shop-the-best-section">
    <p class="heading">Shop the best tech</p>
    <div class="item-list">
      <div class="items">
        <img src="./assets/images/shop-the-best-section/headphones.jpg" alt="" />
        <p>Headphones & Earbuds</p>
      </div>
      <div class="items">
        <img src="./assets/images/shop-the-best-section/cameras.jpg" alt="" />
        <p>Cameras</p>
      </div>
      <div class="items">
        <img src="./assets/images/shop-the-best-section/lenses.jpg" alt="" />
        <p>Lenses</p>
      </div>
      <div class="items">
        <img src="./assets/images/shop-the-best-section/TVs.jpg" alt="" />
        <p>TVs</p>
      </div>
      <div class="items">
        <img src="./assets/images/shop-the-best-section/soundbars.jpg" alt="" />
        <p>Soundbars</p>
      </div>
      <div class="items">
        <img src="./assets/images/shop-the-best-section/mobile-phones.jpg" alt="" />
        <p>Mobile Phones</p>
      </div>
    </div>
  </section>
  <!-- shop-the-best-section section ends  -->

  <!-- home-content-section starts -->
  <section class="home-content-section">
    <!-- membership starts -->
    <div class="membership">
      <div class="membership-picture">
        <img src="./assets/images/home-content-section/membership-picture.jpg" alt="" />
      </div>
      <div class="membership-pass">
        <div class="h2" style="text-align: center">
          <h2>High-tech.</h2>
          <h2>High reward.</h2>
          <h2><span>My Sony</span></h2>
          <h2>Membership.</h2>
        </div>
        <div class="p" style="text-align: center">
          <p>Earn points while you shop and explore</p>
          <p>exclusive rewards tailored just for you</p>
        </div>
        <button>Join now</button>
      </div>
    </div>
    <!-- membership ends -->

    <!-- camera-ad starts -->
    <div class="camera-ad">
      <div class="img">
        <img src="./assets/images/home-content-section/new-camera-zv-series.jpg" alt="" />
      </div>
      <div class="content">
        <h2>Coming soon</h2>
      </div>
    </div>
    <!-- camera-ad ends -->

    <!-- easy-shopping starts -->
    <div class="easy-shopping">
      <h2>Sony makes shopping easy</h2>
      <div class="elements">
        <div class="items">
          <img src="./assets/images/easy-shopping/Fast_free_shipping_Icon.svg" alt="" />
          <div class="content">
            <p>Fast free shipping</p>
            <img src="./assets/icons/down-arrow.png" alt="" />
          </div>
        </div>
        <div class="items">
          <img src="./assets/images/easy-shopping/Extended_returns_Icon.svg" alt="" />
          <div class="content">
            <p>30-day returns</p>
            <img src="./assets/icons/down-arrow.png" alt="" />
          </div>
        </div>
        <div class="items">
          <img src="./assets/images/easy-shopping/expert_consultations_Icon.svg" alt="" />
          <div class="content">
            <p>1:1 expert consultations</p>
            <img src="./assets/icons/down-arrow.png" alt="" />
          </div>
        </div>
        <div class="items">
          <img src="./assets/images/easy-shopping/Affirm_Icon.svg" alt="" />
          <div class="content">
            <p>As low as 0% APR</p>
            <img src="./assets/icons/down-arrow.png" alt="" />
          </div>
        </div>
        <div class="items">
          <img src="./assets/images/easy-shopping/dollor.svg" alt="" />
          <div class="content">
            <p>Earn 2% back in My Sony points</p>
            <img src="./assets/icons/down-arrow.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- easy-shopping ends -->

    <!-- soundbar-ad starts -->
    <div class="soundbar-ad">
      <div class="soundbar-ad-content">
        <div class="content">
          <h2>Taking sound above and beyond</h2>
          <p>
            Our top-of-the-range BRAVIA Theater Bar 9 soundbar will keep your
            summer packed with amazing sound
          </p>
          <button>Shop now</button>
        </div>
      </div>
      <div class="soundbar-ad-video">
        <video _ngcontent-serverapp-c591446493="" class="vjs-tech" id="vjs_video_431_html5_api" tabindex="-1"
          role="application" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay=""
          src="https://d1ncau8tqf99kp.cloudfront.net/HOMEPAGE/2024/7-8/desktop/bar9_sub.mp4"></video>
      </div>
    </div>
    <!-- soundbar-ad ends -->

    <!-- poster starts -->
    <div class="poster">
      <img src="./assets/images/poster.jpg" alt="" />
    </div>
    <!-- poster ends -->

    <!-- mobile-ad starts -->
    <div class="mobile-ad">
      <div class="mobile-ad-video">
        <video _ngcontent-serverapp-c591446493="" class="vjs-tech" id="vjs_video_848_html5_api" tabindex="-1"
          role="application" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay=""
          src="https://d1ncau8tqf99kp.cloudfront.net/HOMEPAGE/2024/7-8/desktop/mocopi_sub.mp4"></video>
      </div>

      <div class="mobile-ad-content">
        <div class="content">
          <h2>Get outdoors with mobile motion capture</h2>
          <p>
            With mocopi, you can capture your full-body motion anywhere you
            want this summer
          </p>
          <button>Shop now</button>
        </div>
      </div>
    </div>
    <!-- mobile-ad ends -->
  </section>
  <!-- home-content-section ends -->

  <!-- footer-section starts -->
  <section class="footer-section">
    <div class="all-links">
      <div class="links">
        <p>News & Info</p>
        <ul>
          <li>
            <a href="https://www.sony.com/en_us/SCA/company-news/press-releases.html">Press Releases</a>
          </li>
          <li>
            <a
              href="https://www.sony.com/en_us/SCA/social-responsibility/accessibility-usability.html">Accessibility</a>
          </li>
          <li>
            <a href="https://www.sony.com/en/">Sony Group Information</a>
          </li>
          <li>
            <a href="https://cloud.email.sel.sony.com/OptIn">Electronics Newsletter</a>
          </li>
          <li>
            <a href="https://electronics.sony.com/influencerguidelines">Influencer & Endorsement
            </a>
          </li>
          <li>
            <a href="https://electronics.sony.com/influencerguidelines">Guidelines</a>
          </li>
        </ul>
      </div>
      <div class="links">
        <p>Other Sites</p>
        <ul>
          <li>
            <a href="https://www.playstation.com/en-us/">Play Station</a>
          </li>
          <li>
            <a href="https://www.playstation.com/en-us/">Sony Pictures</a>
          </li>
          <li><a href="https://www.sonymusic.com/">Sony Music</a></li>
          <li>
            <a href="https://pro.sony/ue_US/home?cmp=gwt-footer">Sony Professional Website</a>
          </li>
          <li>
            <a href="https://electronics.sony.com/retailers">See Authorized Retailers</a>
          </li>
        </ul>
      </div>
      <div class="links">
        <p>My Sony</p>
        <ul>
          <li>
            <a href="https://electronics.sony.com/mysonyterms">Member Terms</a>
          </li>
          <li>
            <a href="https://electronics.sony.com/MySonyFAQ"> My Sony FAQs</a>
          </li>
          <li>
            <a href="https://electronics.sony.com/mysony">Learn More</a>
          </li>
          <li>
            <a href="https://electronics.sony.com/financialnotice">Financial Incentive</a>
          </li>
        </ul>
      </div>
      <div class="links">
        <p>Sony Store Support</p>
        <ul>
          <li>
            <a
              href="https://acm.account.sony.com/input_id?client_id=37351a12-3e6a-4544-87ff-1eaea0846de2&scope=openid%20users&redirect_uri=https://electronics.sony.com?authRedirect=true&state=fcc72b7a-a317-4cc9-b230-42f92ec39236&nonce=379a1503-ab4b-4cb8-b7e2-29fdd8f56b9a#page-top">Sign
              in or Create Account</a>
          </li>
          <li>
            <a href="https://electronics.sony.com/track-myorder">Track my order</a>
          </li>
          <li>
            <a href="https://electronics.sony.com/FAQ#returns">Returns / Exchanges</a>
          </li>
          <li>
            <a href="https://electronics.sony.com/returns">Return a Gift</a>
          </li>
          <li>
            <a href="https://electronics.sony.com/giftcard-balance">Check Store Credit Balance</a>
          </li>
          <li><a href="https://electronics.sony.com/FAQ">FAQs</a></li>
          <li>
            <a href="https://electronics.sony.com/contactus">Contact Sony Store</a>
          </li>
        </ul>
      </div>
      <div class="links">
        <p>Sony Product Support</p>
        <ul>
          <li>
            <a href="https://www.sony.com/electronics/support?cpint=spt-d2c_footer_supportsite">Product Support</a>
          </li>
          <li>
            <a href="https://productregistration.sony.com/">Electronics Registration</a>
          </li>
          <li>
            <a href="https://www.sony.com/electronics/support/manuals?cpint=spt-d2c_footer_manuals">Product Manuals &
              Warranty</a>
          </li>
          <li>
            <a href="https://us.esupport.sony.com/support/s/service?language=en_US&cpint=spt-d2c_footer_repair">Product
              Repair & Parts</a>
          </li>
          <li>
            <a href="https://us.esupport.sony.com/support/s/service?language=en_US&cpint=spt-d2c_footer_repair">
              Contact Product Support</a>
          </li>
        </ul>
      </div>
      <div class="links">
        <p>Offers</p>
        <ul>
          <li>
            <a href="https://electronics.sony.com/group-offers">Group Discount</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="elements">
      <div class="country-language">
        <div class="country">
          <img src="./assets/images/flag-united-states-of-america.png" alt="" />
          <p>
            <a href="https://www.sony.com/locale-selector">United States</a>
          </p>
        </div>
        <div class="language">
          <p>EN</p>
        </div>
      </div>
      <div class="symbols">
        <div class="links">
          <ul>
            <li>
              <a href="https://electronics.sony.com/eco/sustainable-development">Environment</a>
            </li>
            <li>
              <a href="https://www.sony.com/en_us/SCA/index.html">Company Info</a>
            </li>
            <li>
              <a href="https://www.sony.com/electronics/support/articles/S1F0377">Voluntary Recall</a>
            </li>
            <li>
              <a href="https://www.sony.com/en_us/SCA/careers/overview.html">Careers</a>
            </li>
            <li>
              <a href="https://www.sony.com/en_us/SCA/contacts/overview.html">Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="icons">
          <div class="facebook">
            <i class="fa-brands fa-facebook-f" style="color: #ffffff"></i>
          </div>
          <div class="twitter-x">
            <i class="fa-brands fa-x-twitter" style="color: #ffffff"></i>
          </div>
          <div class="instagram">
            <i class="fa-brands fa-instagram" style="color: #ffffff"></i>
          </div>
          <div class="youtube">
            <i class="fa-brands fa-youtube" style="color: #ffffff"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="line"></div>

    <div class="bottom-links">
      <ul>
        <li>
          <a href="https://electronics.sony.com/terms-conditions">Terms & Conditions</a>
        </li>
        <li>
          <a href="https://electronics.sony.com/terms-conditions#accessibility">Website Accessibility</a>
        </li>
        <li>
          <a href="https://electronics.sony.com/terms-of-use">Website Terms</a>
        </li>
        <li>
          <a href="https://electronics.sony.com/privacy-policy">SEL Privacy Policy</a>
        </li>
        <li>
          <a href="https://electronics.sony.com/privacy-policy#DataPractices">CA Privacy Notice</a>
        </li>
        <li>
          <a href="https://electronics.sony.com/health-privacy-policy">Health Data Privacy Policy</a>
        </li>
        <li>
          <a
            href="https://sony-privacyportal.my.onetrust.com/webform/ae4501a4-318f-4210-bddc-9a8bc984c5a6/16010103-f66a-449d-8516-7795cfca9c3e">Your
            Privacy Choices</a>
        </li>
        <li><a href="">Manage Cookies</a></li>
      </ul>
      <p>
        Affirm Offer: Rates from 0-36% APR. For example, a $1899.99 purchase
        might cost $121/mo over 24 months at 0% APR. Payment options through
        Affirm are subject to an eligibility check and are provided by these
        lending partners: affirm.com/lenders. Options depend on your purchase
        amount, and a down payment may be required. See affirm.com/licenses
        for important info on state licenses and notifications
        <a href="https://electronics.sony.com/affirm">Learn more</a>
      </p>
      <p style="text-align: left; color: #878792">
        © 2023 SONY ELECTRONICS INC. (SEL)
      </p>
    </div>
  </section>
  <!-- footer-section ends -->
</body>



<!--name of candidate: Poulomi Bhattacharya -->



<!-- font awasome -->
<script src="https://kit.fontawesome.com/cf9f264ee5.js" crossorigin="anonymous"></script>
<!-- font awasome -->

<!-- all linked scripts -->
<script src="scripts/header-section.js"></script>
<script src="scripts/on-hover-content/on-hover-content.js"></script>

</html>