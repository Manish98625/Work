<!DOCTYPE HTML>

<html>

<head>
  <title>Enquiry</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <noscript>
    <link rel="stylesheet" href="assets/css/noscript.css" />
  </noscript>
  <link rel="stylesheet" href="assets/css/footer.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/contact.css" />
  <style>
    .wrapper {
      overflow: hidden;
      /* Clear the float */
    }

    .content {
      float: left;
      /* Float the content to the left */
      width: 70%;
      /* Adjust the width as needed */
    }

    .img-thumbnail {
      display: block;
      /* Make the image a block element */
      margin: 10px auto;
      /* Adjust margin as needed */
    }

    #banner {
      background-image: url("storage/drops-of-water.webp");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      background-color: #f0f0f0;
    }
  </style>
</head>

<body class="right-sidebar is-preload">
  <div id="page-wrapper">

    <!-- Header -->
    <div id="page-wrapper">
      <!--header-->
      <header id="header" class="alt">
        <img class="logo" src="storage/logo-removebg-preview (3).png" href="{{ route('profile') }}">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
          </ul>
        </div>
        <nav id="nav">
          <ul>
            <li class="nav-item">
              <a class="nav-link current" href="{{ route('profile') }}">
                Home<span class="sr-only"></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('aboutus') }}">
                Company Profile
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" class="current" href="">
                Products
              </a>
              <ul>
                <li class="sub-menu"> <a href="left-sidebar.html">
                    Left Sidebar
                  </a></li>
                <li class="sub-menu"><a href="right-sidebar.html">
                    Right Sidebar
                  </a></li>
              </ul>
            <li class="nav-item">
              <a class="nav-link" href="Contact.b">
                Contact Us
              </a>
            </li>
        </nav>

      </header>
      <section id="banner">

        <!--.inner" is set up as an inline-block so it automatically expands
      in both directions to fit whatever's inside it. This means it won't
      automatically wrap lines, so be sure to use line breaks where
      appropriate (<br />).-->

        <div class="inner">

          <header>
            <h2>Enquiry</h2>
          </header>
          <p>Communicate with us for more information on our products and services</p>
        </div>

      </section>


      <article id="main">


        <p>Communicate with us for more information on our products and services</p>
      </article>
    </div>

    </section>

    <!-- Footer -->
    <footer>
      <div class="footer">


        <ul class="socials">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a
              href="https://api.whatsapp.com/send?phone=9779863598857&amp;text=Hi,%20I%20am%20interested%20in%20your%20products."><i
                class="fab fa-whatsapp"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
        <div class="col">
          <h2>Address </h2>

          <h3>Ramkot-06, Nagarjun Municipality, Kathmandu, Nepal</h3>

        </div>

        <p>copyright &copy;2022 </p>
      </div>
    </footer>

  </div>



  </div>

  <!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.dropotron.min.js"></script>
  <script src="assets/js/jquery.scrolly.min.js"></script>
  <script src="assets/js/jquery.scrollgress.min.js"></script>
  <script src="assets/js/jquery.scrollex.min.js"></script>
  <script src="assets/js/browser.min.js"></script>
  <script src="assets/js/breakpoints.min.js"></script>
  <script src="assets/js/util.js"></script>
  <script src="assets/js/main.js"></script>