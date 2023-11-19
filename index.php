<!DOCTYPE html>
<html lang="en">

<head>
    <title>Plates</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
            integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="icon" type="image/png" href="resources/logo-transparent.png">
</head>

<body>
    <div class="section navbar navbar-maximized" id="navbar">
        <div class="navbar-section" id="nav-anchors">
            <a href="#main" id="logo">
                <img src="resources/logo-transparent.png" alt="logo">
            </a>
            <a class="active" href="#main">Home</a>
            <a href="#about">About us</a>
            <a href="#menu">Menu</a>
            <a href="#gallery">Gallery</a>
            <a href="#reservation">Reservation</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="navbar-section mobile">
            <div class="mobile-menu" onclick="toggleMobileMenu()">
                <i class="fa fa-bars"></i>
            </div>
        </div>
        <div class="navbar-section" id="navbar-contact">
            <a href="tel:+48 111 222 333"><i class="fa fa-phone"></i></a>
            <a href="#" target="_blank">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="#" target="_blank">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
    </div>
    <div class="mobile-menu-content">
        <a class="active" href="#main" onclick="toggleMobileMenu()">Główna</a>
        <a href="#about" onclick="toggleMobileMenu()">O Nas</a>
        <a href="#menu" onclick="toggleMobileMenu()">Menu</a>
        <a href="#gallery" onclick="toggleMobileMenu()">Galeria</a>
        <a href="#reservation" onclick="toggleMobileMenu()">Rezerwacja</a>
        <a href="#contact" onclick="toggleMobileMenu()">Kontakt</a>
    </div>
    <div class="section main" id="main">
        <h1 class="title">Plates</h1>
        <h5 class="subtitle">
            <span style="color: #63a96f;">Kitchen. </span>
            <span style="color: #fe750b;">Coffee. </span>
            <span style="color: #ffadcb;">People.</span>
        </h5>
    </div>
    <div class="section about" id="about">
        <div class="about-item">
            <div class="about-item-text">
                <h4>Culinary</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non nibh non erat porta varius.
                    Cras
                    sagittis consectetur varius. Quisque blandit neque nec risus fermentum, id hendrerit erat
                    aliquam.
                    Nullam bibendum ipsum vitae nunc cursus, eget suscipit odio condimentum. Etiam ac purus
                    venenatis</p>
            </div>
            <div class="about-item-image">
                <img src="resources/culinary.jpg" alt="about">
            </div>
        </div>
        <div class="about-item">
            <div class="about-item-text">
                <h4>Restaurant</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non nibh non erat porta varius.
                    Cras
                    sagittis consectetur varius. Quisque blandit neque nec risus fermentum, id hendrerit erat
                    aliquam.
                    Nullam bibendum ipsum vitae nunc cursus, eget suscipit odio condimentum. Etiam ac purus
                    venenatis</p>
            </div>
            <div class="about-item-image">
                <img src="resources/restaurant.jpg" alt="about">
            </div>
        </div>
        <div class="about-item">
            <div class="about-item-image">
                <img src="resources/event.jpg" alt="about">
            </div>
            <div class="about-item-text">
                <h4>Events</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non nibh non erat porta varius.
                    Cras
                    sagittis consectetur varius. Quisque blandit neque nec risus fermentum, id hendrerit erat
                    aliquam.
                    Nullam bibendum ipsum vitae nunc cursus, eget suscipit odio condimentum. Etiam ac purus
                    venenatis</p>
            </div>
        </div>
        <div class="about-item">
            <div class="about-item-image">
                <img src="resources/team.jpg" alt="about">
            </div>
            <div class="about-item-text">
                <h4>Team</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non nibh non erat porta varius.
                    Cras
                    sagittis consectetur varius. Quisque blandit neque nec risus fermentum, id hendrerit erat
                    aliquam.
                    Nullam bibendum ipsum vitae nunc cursus, eget suscipit odio condimentum. Etiam ac purus
                    venenatis</p>
            </div>
        </div>
    </div>
    <div class="section menu" id="menu">
        <div class="menu-item">
            <img src="resources/12.jpg" alt="menu item">
            <div class="info-box">
                <p>Dish name 1</p>
            </div>
        </div>
        <div class="menu-item">
            <img src="resources/7.jpg" alt="menu item">
            <div class="info-box">
                <p>Dish name 2</p>
            </div>
        </div>
        <div class="menu-item">
            <img src="resources/16.jpg" alt="menu item">
            <div class="info-box">
                <p>Dish name 3</p>
            </div>
        </div>
        <div class="menu-item">
            <img src="resources/17.jpg" alt="menu item">
            <div class="info-box">
                <p>Dish name 4</p>
            </div>
        </div>
        <div class="menu-item">
            <img src="resources/10.jpg" alt="menu item">
            <div class="info-box">
                <p>Dish name 5</p>
            </div>
        </div>
        <div class="menu-item">
            <img src="resources/11.jpg" alt="menu item">
            <div class="info-box">
                <p>Dish name 6</p>
            </div>
        </div>
        <div class="menu-item">
            <img src="resources/19.jpg" alt="menu item">
            <div class="info-box">
                <p>Dish name 7</p>
            </div>
        </div>
        <div class="menu-item">
            <img src="resources/18.jpg" alt="menu item">
            <div class="info-box">
                <p>Dish name 8</p>
            </div>
        </div>
        <div class="menu-item">
            <img src="resources/21.jpg" alt="menu item">
            <div class="info-box">
                <p>Dish name 9</p>
            </div>
        </div>
        <div class="menu-item">
            <img src="resources/20.jpg" alt="menu item">
            <div class="info-box">
                <p>Dish name 10</p>
            </div>
        </div>
    </div>
    <div class="section gallery" id="gallery">
        <ul>
            <li><img src="resources/gallery1.jpg" alt="image one" /></li>
            <li><img src="resources/gallery2.jpg" alt="image two" /></li>
            <li><img src="resources/gallery3.jpg" alt="image three" /></li>
            <li><img src="resources/gallery4.jpg" alt="image four" /></li>
        </ul>
    </div>
    <div class="section reservation">
        <div class="reservation-left" id="reservation">
            <h2>Book a Table</h2>
            <p>
                To make a reservation, please <b>fill in the form</b> or call: +48 111 222 333
            </p>
        </div>
        <div class="reservation-right">
            <form action="#" method="POST">
                <div class="form-first">
                    <div class="form-item">
                        <label for="date">Which day?</label>
                        <input type="date" name="date" id="date" value="<?= date('Y-m-d'); ?>">
                    </div>
                    <div class="form-item">
                        <label for="people-amnt">For how many people?</label>
                        <input type="number" name="people-amnt" id="people-amnt" min=1 max=6 step=1>
                    </div>
                    <div class="form-item">
                        <label>Available hours:</label>
                        <div class="hours">
                            <div class="hour">8.30</div>
                            <div class="hour">9.00</div>
                            <div class="hour">9.30</div>
                            <div class="hour">10.00</div>
                            <div class="hour">10.30</div>
                            <div class="hour">11.00</div>
                            <div class="hour">11.30</div>
                            <div class="hour">12.00</div>
                            <div class="hour">12.30</div>
                            <div class="hour">13.00</div>
                            <div class="hour">13.30</div>
                            <div class="hour">14.00</div>
                            <div class="hour">14.30</div>
                            <div class="hour">15.00</div>
                            <div class="hour">15.30</div>
                            <div class="hour">16.00</div>
                            <div class="hour">16.30</div>
                            <div class="hour">17.00</div>
                            <div class="hour">17.30</div>
                            <div class="hour">18.00</div>
                            <div class="hour">18.30</div>
                            <div class="hour">19.00</div>
                            <div class="hour">19.30</div>
                            <div class="hour">20.00</div>
                            <div class="hour">20.30</div>
                            <div class="hour">21.00</div>
                            <div class="hour">21.30</div>
                        </div>
                    </div>
                    <div class="form-item">
                        <button class="form-next">Book</button>
                    </div>
                </div>
                <div class="form-second">
                    <div class="form-item"></div>
                    <div class="form-item"></div>
                    <div class="form-item"></div>
                </div>
            </form>
        </div>
    </div>
    <div class="section map" id="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58611.722808800405!2d-90.06695795810407!3d29.932509635605374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8620a7b2f147e64b%3A0x3e8e39f9ccfce0cb!2sPlates%20Restaurant%20%26%20Bar!5e0!3m2!1spl!2spl!4v1700416627498!5m2!1spl!2spl"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="section contact" target="_blank" id="contact">
        <a href="tel:+48 111 222 333" class="contact-item">
            <i class="fa fa-phone"></i>
            <p>+48 111 222 333</p>
        </a>
        <a href="mailto:mail@mail.com" target="_blank" class="contact-item">
            <i class="fa fa-envelope"></i>
            <p>mail@mail.com</p>
        </a>
        <a href="#" target="_blank" class="contact-item">
            <i class="fa-brands fa-facebook"></i>
            <p>/plates</p>
        </a>
        <a href="#" target="_blank" class="contact-item">
            <i class="fa-brands fa-instagram"></i>
            <p>@plates</p>
        </a>
    </div>
    <div class="section footer">
        <div class="footer-section-wrapper">
            <div class="footer-section">
                <h4>Opening hours</h4>.
                <p>Mon: 8:30 am - 10:00 pm</p>
                <p>Tue: 8:30 am - 10:00 pm</p>
                <p>Wed: 8:30 am - 10:00 pm</p>
                <p>Thu: 8:30 am - 10:00 pm</p>
                <p>Fri: 8:30 am - 10:00 pm</p>
                <p>Sat: 8:30 am - 10:00 pm</p>
                <p>Sun: 8:30 am - 10:00 pm</p>
            </div>
            <div class="footer-section">
                <h4>Navigation</h4>
                <a href="#main">
                    <p>Home</p>
                </a>
                <a href="#about">
                    <p>About us</p>
                </a>
                <a href="#menu">
                    <p>Menu</p>
                </a>
                <a href="#gallery">
                    <p>Gallery</p>
                </a>
                <a href="#reservation">
                    <p>Reservation</p>
                </a>
                <a href="#contact">
                    <p>Contact</p>
                </a>
            </div>
            <div class="footer-section">
                <h4>Legal</h4>
                <a href="#">
                    <p>Privacy policy</p>
                </a>
                <a href="#">
                    <p>Tos</p>
                </a>
                <a href="#">
                    <p>Cookies</p>
                </a>
            </div>
            <div class="footer-section">
                <h4>Plates</h4>
                <p>4655 American Drive, 32-340 Florida</p>
                <p>NIP: 11122233344</p>
                <p>REGON: 111222333</p>
            </div>
        </div>
        <p class="footer-credits">Copyright Plates ©️ <?php echo date("Y")?></p>
    </div>
    <script src="scripts/menu.js"></script>
    <script src="scripts/anchor.js"></script>
    <script src="scripts/toggleMobileMenu.js"></script>
    <script src="scripts/setActive.js"></script>
    <script src="scripts/slider.js"></script>
</body>

</html>