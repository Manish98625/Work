@php
    use App\Models\Products;

    $products = Products::orderBy('name')->get();
@endphp
<!DOCTYPE HTML>

<html>

<head>
    <title>Wattra Technology</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

        #main {
            margin: 15px;
            background-color: #ffffff;
        }

        .mySlides {
            display: none;
            align-items: center;
        }
    </style>
</head>

<body class="index is-preload">
    <div id="page-wrapper">
        <!--header-->
        <header id="header" class="alt">
            <img class="logo" href="{{ route('profile') }}" src="storage/logo-removebg-preview (3).png">
            <nav id="nav">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link current" href="">
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
                        <a class="nav-link" href="{{ route('contact') }}">
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
                    <h2>Welcome To Wattra Technology</h2>
                </header>


            </div>

        </section>




        <!-- Main -->


        <header class="special container">
            <h2> COMPANY Profile </h2>

            <p>WATTRA TECHNOLOGY is established in 2015 Wattra Technology Pvt. Ltd is a leading supplier and
                Importer of high quality
                Indian Sand
                Media, Quartz Sand, Silica Sand, Anthracite, MNO2, Activated Carbon
                and deals in different types of water treatment plants. The company supplies various
                water treatment industries in Nepal. We are an EPC (Engineering, Procurement & Construction)
                Company providing comprehensivesolutions for Water, Wastewater & Environmental Technologies
                Business.
                Whether you are anticipating to have a New Water (and/ or) Wastewater Plant or rather Re-
                engineering/Upgrading/ Refurbishing an Existing plants, Operation & Maintenance Solutions,
                Chlorination, Spare Parts or Chemical Supplies.
            </p>


        </header>



        <!-- Three -->
        <section class="wrapper style3 container special">

            <header class="major">
                <h2>Hot Products</h2>
            </header>

            <div class="row">
                <div class="col-6 col-12-narrower">

                    <section>
                        <a href="#" class="image featured"><img
                                src="storage/granular-activated-carbon-fact-sheet-FH9R.jpg" alt="" /></a>
                        <header>
                            <h3>Activated Carbon Granular</h3>
                        </header>
                        <p>The activated carbon plays a non-fungible important role in preparation of highlypure
                            water andincreasingly significant role in purification of industrial wastewater. It is
                            also a
                            top-grade purifying material to be used in preparation of highly pure water </p>
                    </section>

                </div>
                <div class="col-6 col-12-narrower">

                    <section>
                        <a href="#" class="image featured"><img
                                src="storage/activated-carbon-pallets-500x500-IiIM.webp" alt="" width="280"
                                height="280" /></a>
                        <header>
                            <h3>Activated Carbon Pallets</h3>
                        </header>
                        <p> Pellet activated carbon including Coconut Shell, wood and coal. All forms activated
                            carbonpellets product can be used for water treatment. It also has some special
                            functions.
                            Such as removing methane, chlorine, ammonia, nitrogen, benzene, formaldehyde, SO2 and
                            CO.</p>
                    </section>

                </div>

            </div>
            <footer class="major">
                <ul class="buttons">
                    <li><a href="{{ route('right') }}" class="button">See More</a></li>
                </ul>
            </footer>


            <div class="row">
                <div class="col-6 col-12-narrower">

                    <section>
                        <a href="#" class="image featured"><img src="storage/clack-mineral-tanks.jpg"
                                alt="" width="280" height="280" /></a>
                        <header>
                            <h3>Clack Tank</h3>
                        </header>
                        <p>Pure Aqua is proud to supply our customers with quality filter tanks from one of the
                            leading industrial
                            water treatment
                            manufactures in the world. Clack corporation has been producing cutting-edge control
                            valves, reverse
                            osmosis units,
                            water softening products, mineral and brine tanks</p>
                    </section>

                </div>
                <div class="col-6 col-12-narrower">

                    <section>
                        <a href="#" class="image featured"><img
                                src="storage/clack-industrial-mineral-tanks__05653.jpg" alt="" /></a>
                        <header>
                            <h3>Clack Industrial Mineral Tanks</h3>
                        </header>
                        <p>Pure Aqua's FRP filter tanks are considered the most energy-efficient filtration systems
                            in the market
                            with low
                            maintenance required. Check out our selection of water treatment tanks to find which is
                            best suited for
                            your specific
                            needs.</p>
                    </section>

                </div>
            </div>

            <footer class="major">
                <ul class="buttons">
                    {{--  <li><a href="{{ route('left') }}" class="button">See More</a></li>  --}}
                </ul>
            </footer>

        </section>



    </div>



    </article>





    </section>

    <!-- Footer -->
    <footer class="container-fluid bg-grey py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="logo-part">
                                <h3>Wattra Technology Pvt.Ltd</h3>
                                Ware House:- Ramkot-06, Nagarjun Municipality, Kathmandu, Nepal<br>

                            </div>
                        </div>
                        <div class="col-md-6 px-4">
                            <h6> About Company</h6>
                            <p>A GLOBAL WATER TREATMENT SOLUTION COMPANY
                                Head Office: - Bafal-13, Kathmandu, Nepal<br>
                                Company Registrations No:- 132816/071/072<br>
                                Pan No:- 602478892<br></p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 px-4">
                      
                            <div class="row ">
                                <div class="col-md-6">
                                    <ul>
                                        <li> <a href="#"> Home</a> </li>
                                        <li> <a href="#"> About</a> </li>
                                       <li> <a href="#"> Contact</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <h6> Newsletter</h6>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                            <form class="form-footer my-3">
                                <input type="text" placeholder="search here...." name="search">
                                <input type="button" value="Go">
                            </form>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>

</body>

</html>
