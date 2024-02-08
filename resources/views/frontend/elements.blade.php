<!DOCTYPE HTML>

<html>

<head>
    <title>Wattra Technology</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            background-image: url('storage/drops-of-water.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-color: #f0f0f0;
        }
    </style>
</head>

<body class="index is-preload">
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
                            <li class="sub-menu"><a href="{{ route('right') }}">
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

        <!-- Banner -->
        <section id="banner">

            <!--.inner" is set up as an inline-block so it automatically expands
      in both directions to fit whatever's inside it. This means it won't
      automatically wrap lines, so be sure to use line breaks where
      appropriate (<br />).-->

            <div class="inner">

                <header>

                    <h2>About Us</h2>
                </header>
            </div>

        </section>

        <!-- Main -->
        <article id="main">

            <h2 style="text-align:center;"> Wattra Technelogy</h2><br>
            <p style="text-align:center;">
                Wattra Technelogy is a Global Water Treatment Solution CompanyEstablished in 2015 Wattra Technology Pvt.
                Ltd is a leading supplier and Importer of high quality
                Indian Sand
                Media, Quartz Sand, Silica Sand, Anthracite, MNO2, Activated Carbon
                and deals in different types of water treatment plants. The company supplies various
                water treatment industries in Nepal. We are an EPC (Engineering, Procurement & Construction)
                Company providing comprehensivesolutions for Water, Wastewater & Environmental Technologies
                Business.<br>
                <br>
                <br>


            </p>

            <h3 class="mission">Our Mission & Vision</h3>
            <p class="mission-paragraph">The mission of Irvine Ranch Water District, a public agency, is
                to
                provide high quality water and sewer services in an efficient, cost effective, and
                environmentally sensitive manner which produces a high level of customer satisfaction.The Irvine Ranch
                Water District's vision is to achieve greater
                customer
                and employee satisfaction, increased reliability and resource conservation, and
                excellent external relationships with suppliers and others.
            </p>
    </div>



    </article>

    <section id="director">
        @foreach ($directors as $director)
        <div class="content">
            <header>
                <p>Our direc{{ $director->discription }}</p>
            </header>

            <div class="thumbnail">
                <a href="#" class="pic"><img src="{{ 'storage/' . $director->image }}" height="300" width="300"></a>

            </div>

        </div>
        @endforeach
    </section>

    <!--One-->
    <section class="wrapper style2 container special-alt">
        <header>
            <h2 style="text-align: center;"> ❖OUR PRODUCTS: - </h2>
        </header>
        <h5>➢ ACTIVATED CARBON – COAL, WOOD, COCONUT, AND BAMBOO BASED GRANULAR,
            PALLETS, POWDER AND SPHERES IN ALL SIZES.<br>
            ➢ MNO2, BIRM MEDIA – IRON REMOVAL MEDIA<br>
            ➢ACTIVATED ALUMINA – PHLOURIDE REMOVAL MEDIA<br>
            ➢ TREATED ZEOLITE, FERRIC HYDROXIDE – ARSENIC REMOVAL MEDIA<br>
            ➢ SILEX MEDIA<br>
            ➢ CORE SANDS, GRAVELS, PEBBLES<br>
            ➢ ANTHRACITE<br>
            ➢ GREEN SAND<br>
            ➢ TREATED BLACK SAND<br>
            ➢SODIUM HYPOCHLORITE<br></h5>
        <img class="img-thumbnial" src="storage/granular-activated-carbon-fact-sheet-FH9R.jpg" width="140" height="140"
            style="float: right; margin-bottom: auto; margin-left: 20px;;">
        <img class="img-thumbnial" src="storage/clack-industrial-mineral-tanks__05653.jpg" width="140" height="140"
            style="float: right; margin-bottom: auto; margin-left: 20px;;">
        <img class="img-thumbnial" src="storage/Aquaosmo-Undersink.jpeg" width="140" height="140"
            style="float: right; margin-bottom: auto; margin-left: 20px;;">
    </section>

    <!-- Two -->
    <section class="wrapper style1 container special">
        <header>
            <h2>❖Clients SATISFACTION </h2>
        </header>
        <h3>We are consistently serving our customers for more than four decades. Due to our exceptional product
            quality and customer service, we have gained high credibility and extensive customer approach over
            years
            of experience. Our client feedback system has helped us to understand the needs of our clientele.
            We have always tried to achieve the highest level of customer satisfaction and are committed to
            continue with the same spirit.
            We are promising and genuine supplier of ourproducts.
            Being the respectful, careful products are delivered on the basis of buyer’s requirements.
            With continual improvement in our products and services we assist our clients in getting maximum
            satisfaction in dealings.
            Our sincere efforts have helped us to clinch many high profile clients from Nepal.
            Today, we are Supplying in Star Hospital, Ashwin Medical College, Madan Bhandari University of
            Science
            and Technology, Bardibas Municipality .<br></h3>
        <div class="container">
            <header>
                <h2>❖Packaging</h2>
            </header>
            <h3>We provide our customers best packaging services such as pouches, bags, carboys and drums, as
                well
                as
                cartons; to ensure the preservation of quality in all our products. All our packagings are
                world-class -
                appealing as well as sturdy at the same time.</h3>
        </div>
        <div class="container">
            <header>
                <h2>❖Warehouse</h2>
            </header>
            <h3>We have well-built and large warehouses, well suited to the storage needs of our specialised
                formulations. They are clean and hygienic; apart from being meticulously organised. Our team
                ensures
                timely service with minimal chances of errors.</h3>
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






    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>