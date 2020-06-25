<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Explore</title>
    <meta name="description" content="Search fast for amazing hotels width the best deals on Exploore.">
    <meta name="keywords" content="hotel bookingssite vacantion">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <meta name="theme-color" content="#fafafa">
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <div id="container">
        <!-- start header -->
        <header>
            <section id="start_adventure">
                <!--  start header-top -->
                <div id="headerTop">
                    <div id="contact">
                        <div id="header_phone"><img src="img/phone.png" alt="phone"> +123 4567 8900</div>
                        <div id="header_mail"><img src="img/mail.jpg" alt="mail"> free@psdfreebies.com
                        </div>
                        <div id="contacts"><i class="fab fa-facebook-f yellow"></i><i class="fab fa-google-plus-g  yellow"></i><i class="fab fa-vk  yellow"></i><i class="fab fa-youtube  yellow"></i>
                            <div id="sign_up" class="floatRight">
                                <img src="img/signup_header.png" alt="key"> Sign Up
                            </div>
                            <div id="login" class="floatRight">
                                <img src="img/login_header.png" alt="login"> Login
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end header-top -->
                <!-- start header-bottom -->
                <div id="headerBottom">
                    <div id="logo">
                        <nav>
                            <ul>
                                <li><a href="#start_adventure" title="home">HOME</a></li>
                                <li><a href="#find-hotels" title="destination">DESTINATION</a></li>
                                <li><a href="#" title="discount">DISCOUNT</a></li>
                                <li><a href="#" title="about">ABOUT</a></li>
                                <li><a href="#" title="blog">BLOG</a></li>
                                <li><a href="#" title="contact">CONTACT</a></li>
                            </ul>
                        </nav>
                        <img src="img/Exploore.png" id="Exploore" alt="exploore"> <br>
                        <img src="img/creative tagline here.png" id="tagline" alt="tagline">

                    </div>

                </div>
                <div id="adventure">
                    <h1>Start Your Greatest</h1>
                    <h3>ADVENTURE WITH US!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quae reprehenderit dolorem,
                        <br> incidunt repudiandae dolorum totam rerum impedit vitae doloremque.</p>
                    <button class="btn">Click Here</button>
                </div>

            </section>
            <!-- end header-bottom -->

        </header>
        <!-- end header -->
        <main>
            <!-- header background  -->
            <article id="startPhoto"></article>
            <article id="find-hotels" style="height: auto;">
                <h1>Bookings</h1>
                <?php
                $conn = new mysqli("localhost", "root", "", "bookings");
                $sql = "SELECT * FROM `hotel` INNER JOIN booking on booking.hotel_id = hotel.id GROUP by company";
                $results = $conn->query($sql);

                while ($row = $results->fetch_assoc()) {
                ?>
                    <table style="margin: 0 auto;">
                        <thead>
                            <tr>
                                <th>hotel <?php echo $row['company'] ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    check-in datum
                                </th>
                                <th>
                                    check-out datum
                                </th>
                                <th>
                                    aantal volw
                                </th>
                                <th>
                                    aantal kinderen
                                </th>
                            </tr>
                            <?php
                            $sql2 = 'SELECT  check_in,check_out, adults, children, hotel.id, company, booking.id, booking.hotel_id FROM `hotel` INNER JOIN booking on booking.hotel_id = hotel.id WHERE company = "'. $row['company'] . '"';
                            $results2 = $conn->query($sql2);
                            while ($row2 = $results2->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $row2['check_in'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row2['check_out'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row2['adults'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row2['children'] ?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>

                    </table>
                <?php } ?>
                        <?php echo $row['bestellingen']?>
            </article>
            <article id="about">
                <div class="floatRight">
                    <h1>Trusted Since 2001 <br> We are Exploore</h1>
                    <div style="margin-bottom: 46px;">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. In deleniti <br> obcaecati corporis distinctio odit debitis similique amet modi blanditiis
                    </div>
                    <div class="about">
                        <div><img src="img/chechmark.png" alt="check"></div>
                        <div><img src="img/chechmark.png" alt="check"></div>
                        <div><img src="img/chechmark.png" alt="check"></div>
                    </div>
                    <div class="about">
                        <div class="trustedCheck">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do
                        </div>
                        <div class="trustedCheck">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do
                        </div>
                        <div class="trustedCheck">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do
                        </div>
                    </div>
                </div>

            </article>
            <article id="services">
                <h1 style="text-align: center;">Our Best Services <br> We are Travel Agent</h1>
                <div id="col-left">
                    <div class="services">
                        <div><img src="img/plane.png" alt="plane"></div>
                        <div><img src="img/buidling.png" alt="buidling"></div>
                        <div><img src="img/eating.png" alt="eating"></div>
                    </div>
                    <div class="services">
                        <div>
                            <h4>Lorem Ipsum Dolor Sit</h4> <br> Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod.
                        </div>
                        <div>
                            <h4>Lorem Ipsum Dolor Sit</h4> <br> Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod.
                        </div>
                        <div>
                            <h4>Lorem Ipsum Dolor Sit</h4> <br> Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod.
                        </div>
                    </div>
                </div>
                <div id="col-right">
                    <div class="services">
                        <div><img src="img/trein.png" alt="plane"></div>
                        <div><img src="img/fiets.png" alt="buidling"></div>
                        <div><img src="img/oog.png" alt="eating"></div>
                    </div>
                    <div class="services">
                        <div>
                            <h4>Lorem Ipsum Dolor Sit</h4> <br> Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod.
                        </div>
                        <div>
                            <h4>Lorem Ipsum Dolor Sit</h4> <br> Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod.
                        </div>
                        <div>
                            <h4>Lorem Ipsum Dolor Sit</h4> <br> Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod.
                        </div>
                    </div>
                </div>
            </article>
            <article id="budget_package">
                <div id="packages" style="padding: 80px;">
                    <h1 style="text-align: center; padding-bottom: 57px ;">Trusted Since 2001 <br> We are Travel Agent
                    </h1>
                    <ul>
                        <li id="high_budget" class="col-trip trip budgettrip">
                            <img src="img/auto.png" alt="auto">
                            <h3>Low Budget Trip</h3>
                            <p>&#36;500</p>
                            <div class="budget_trip">
                                <div class="budget_trip_margin"><img src="img/chechmark.png" alt="check"></div>
                                <div class="budget_trip_margin"><img src="img/chechmark.png" alt="check"></div>
                                <div class="budget_trip_margin"><img src="img/chechmark.png" alt="check"></div>
                            </div>
                            <div class="budget_trip">
                                <div class="budget_trip_margin">Lorem ipsum dolor
                                </div>
                                <div class="budget_trip_margin">Sit amet consectetur
                                </div>
                                <div class="budget_trip_margin">Psum dolor
                                </div>
                            </div>
                        </li>
                        <li id="mid_budget" class="col-trip trip budgettrip" style="padding-top: 19px;">
                            <img src="img/treinzwart.png" alt="trein">
                            <h3>Mid Budget Trip</h3>
                            <p>&#36;800</p>
                            <div class="budget_trip">
                                <div class="budget_trip_margin"><img src="img/chechmark.png" alt="check"></div>
                                <div class="budget_trip_margin"><img src="img/chechmark.png" alt="check"></div>
                                <div class="budget_trip_margin"><img src="img/chechmark.png" alt="check"></div>
                            </div>
                            <div class="budget_trip">
                                <div class="budget_trip_margin">Lorem ipsum dolor
                                </div>
                                <div class="budget_trip_margin">Sit amet consectetur
                                </div>
                                <div class="budget_trip_margin">Psum dolor
                                </div>
                            </div>
                        </li>
                        <li id="low_budget" class="col-trip trip budgettrip">
                            <img src="img/vliegtuig.png" alt="vliegtuig">
                            <h3>High Budget Trip</h3>
                            <p>&#36;1000</p>
                            <div class="budget_trip">
                                <div class="budget_trip_margin"><img src="img/chechmark.png" alt="check"></div>
                                <div class="budget_trip_margin"><img src="img/chechmark.png" alt="check"></div>
                                <div class="budget_trip_margin"><img src="img/chechmark.png" alt="check"></div>
                            </div>
                            <div class="budget_trip">
                                <div class="budget_trip_margin">Lorem ipsum dolor
                                </div>
                                <div class="budget_trip_margin">Sit amet consectetur
                                </div>
                                <div class="budget_trip_margin">Psum dolor
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </article>
            <!-- flight cab hotel (surf foto) -->
            <article id="tour_status">
                <div id="side_image">
                    <img src="img/tour_status_img.png" alt="wind_surfing">
                </div>
                <div id="tour_status_main_content">
                    <div id="tour_status_content">
                        <div id="tour_status_heading">
                            <h3>Trusted Since 2001 <br> We Are Travel Agent</h3>
                            <img src="img/tour_status_status.png" alt="tour status">
                        </div>
                        <div id="tour_status_text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ipsam aliquid <br> doloremque cum vero eligendi dicta libero eveniet, <br> ratione vitae eius incidunt odit? Asperiores assumenda possimus aut voluptate, tempore iste.</p>
                            <button class="btn">CLICK HERE</button>
                        </div>
                    </div>
                </div>
            </article>
        </main>
        <section id="pack_and_go">
            <h2>Pack and Go <br> Awesome Tours</h2>
            <ul>
                <li>
                    <img src="img/pack_and_go1.png" alt="beach_hotel">
                    <span>7 Day + 6 Night</span>
                    <span class="cities">New York + Paris</span>
                    <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
                    <span class="price">&dollar;600</span>
                    <a href="" class="btn" title="Book Now">Book Now</a>
                </li>
                <li>
                    <div>
                        <img src="img/pack_and_go1.png" alt="beach_hotel">
                        <span>7 Day + 6 Night</span>
                        <span class="cities">New York + Paris</span>
                        <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
                        <span class="price">&dollar;600</span>
                        <a href="" class="btn" title="Book Now">Book Now</a>
                    </div>
                </li>
                <li><img src="img/pack_and_go1.png" alt="beach_hotel">
                    <span>7 Day + 6 Night</span>
                    <span class="cities">New York + Paris</span>
                    <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
                    <span class="price">&dollar;600</span>
                    <a href="" class="btn" title="Book Now">Book Now</a></li>
            </ul>
        </section>
        <section id="go_exploore" style="text-align: center;">
            <div>
                <h3>Trusted Since 2001 <br> GO EXPLOORE </h3>
            </div>
            <div>
                <ul>
                    <li class="col-trip go_explore">
                        <div>
                            <img src="img/trainred.png" alt="">
                            <button class="btn margin-top">CLICK HERE</button>
                            <h4>Lorem Ipsum Dolor</h4>
                            <p>Lorem ipsum dolor sit amet, <br> consectetur adipiscing <br> elit. Lorem ipsum dolor sit
                                <br> amet, consectetur adipiscing</p>
                        </div>
                    </li>
                    <li class="col-trip go_explore"><img src="img/busje.png" alt="">
                        <button class="btn margin-top">CLICK HERE</button>
                        <h4>Lorem Ipsum Dolor</h4>
                        <p>Lorem ipsum dolor sit amet, <br> consectetur adipiscing <br> elit. Lorem ipsum dolor sit <br> amet, consectetur adipiscing</p>
                    </li>
                    <li class="col-trip go_explore"><img src="img/monk.png" alt="">
                        <button class="btn margin-top">CLICK HERE</button>
                        <h4>Lorem Ipsum Dolor</h4>
                        <p>Lorem ipsum dolor sit amet, <br> consectetur adipiscing <br> elit. Lorem ipsum dolor sit <br> amet, consectetur adipiscing</p>
                    </li>
                </ul>
            </div>
        </section>
        <section id="package">
            <div id="parent">
                <div id='newYorkparis'>
                    <h2>New York + Paris</h2>
                    <h5>7 Day + 6 Night</h5>
                    <div>
                        <img src="./img/plane.png" alt="plane">
                        <p>Flight</p>
                    </div>
                    <div>
                        <img src="./img/buidling.png" alt="buidling">
                        <p>Hotel</p>
                    </div>
                    <div>
                        <img src="./img/blue_car.png" alt="car">
                        <p>Transport</p>
                    </div>
                    <div>
                        <p style="margin-top: 20px;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nobis consectetur alias eaque
                        </p>
                        <h1 style="margin-top: 0px;">&#36;1000</h1> <button class="btn" style="margin-left: 53px;">BOOK
                            NOW</button>
                    </div>
                </div>
                <div>
                    <img src="img/hotel.png" alt="hotel">
                </div>
            </div>
        </section>
        <section id="costumer_reviews">
            <div>
                <h1>Customer Reviews <br> We are Travel Agent</h1>
                <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptatum ipsa neque ipsam rem nam labore rerum, vero expedita blanditiis, aliquid beatae perspiciatis saepe illum reprehenderit voluptas veniam necessitatibus ipsum!"</p>
                <img src="./img/star.png" alt="stars">
                <div>
                    <br> <br>
                    <img src="./img/user_review_img.png" id="user_img" alt="user_img">
                    <span id="user">
                        <div>John Smith </div>
                        <div style="font-size: 10px;"> Solo Traveler</div>
                    </span>
                </div>
            </div>
        </section>
        <div id="test">
            <h3>Start Your Journey <br> Contact us</h3>
            <img src="./img/marker.png" alt="marker" id="marker">
        </div>
        <section id="socials">
            <!-- wijzig naar ul en li voor een beter result -->
            <div id="info">
                <div id="email">
                    <img src="img/email.jpg" alt="email">
                    <div class="floatRight">
                        EMAIL <br> free@psdfreebies.com <br> free@psdfreebies.com
                    </div>
                </div>
                <div id="call_us">
                    <img src="img/phone.jpg" alt="phone">
                    <div class="floatRight">
                        CALL US ! <br> +123 456 7890 <br> +123 456 7890
                    </div>
                </div>
                <div id="address">
                    <img src="img/adress.jpg" alt="adress">
                    <div class="floatRight">
                        ADDRESS <br> 123, Main Road, New City, <br> My Country 123456

                    </div>
                </div>
            </div>
            <ul>
                <li><i class="fab fa-facebook-f"></i></li>
                <li><i class="fab fa-google-plus-g"></i></li>
                <li><i class="fab fa-vk"></i></li>
                <li><i class="fab fa-youtube"></i></li>
                <li><i class="fab fa-linkedin-in"></i></li>
                <li><i class="fab fa-digg"></i></li>
                <li><i class="fab fa-deviantart"></i></li>
            </ul>
        </section>
        <footer>
            Copyright 2019, All Rights Reserved
        </footer>
    </div>

    </div>


    <!-- Add your site or application content here -->

    <script src="https://kit.fontawesome.com/22b5156360.js" crossorigin="anonymous"></script>
    <script src="js/vendor/modernizr-3.8.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/typeahead.js/0.9.3/typeahead.min.js"></script>

    <script>
        $(document).ready(function() {
            $("input.query").typeahead({
                name: "query",
                remote: 'query.php?query=%QUERY%',
                valueKey: 'value'
            }).on('typeahead:selected', function(event, selection) {
                $("#hidden_field").val(selection.hotel_id);
            });
        });
    </script>


</body>

</html>