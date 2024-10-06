<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CafeApp</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/style.css">
</head>

<body>
    <!-- Navigation Bar -->
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#offer">Today's Offer</a></li>
                <li><a href="#kamsis">KAMSIS Cafes</a></li>
                <li><a href="#login">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section with Slideshow -->
    <section id="home" class="hero">
        <div class="slideshow-container">

            <!-- First Slide -->
            <div class="mySlides fade">
                <div class="text">
                    <h1>Welcome to CafeApp</h1>
                    <p>Your campus cafes at a glance</p>
                </div>
                <img src="<?= base_url() ?>assets/img/cafe1.jpg" alt="Cafes Image">
            </div>

            <!-- Second Slide -->
            <div class="mySlides fade">
                <div class="text">
                    <h1>Kopisan Cafe</h1>
                    <p>Cozy spots, great coffee.</p>
                </div>
                <img src="<?= base_url() ?>assets/img/kopisan.jpg" alt="Kopisan Cafe">
            </div>

            <!-- Third Slide -->
            <div class="mySlides fade">
                <div class="text">
                    <h1>D'An Cafe</h1>
                    <p>A blend of taste and tradition.</p>
                </div>
                <img src="<?= base_url() ?>assets/img/dan.jpg" alt="D'An Cafe">
            </div>

            <!-- Fourth Slide -->
            <div class="mySlides fade">
                <div class="text">
                    <h1>Jebat Cafe</h1>
                    <p>Fresh flavors, every day.</p>
                </div>
                <img src="<?= base_url() ?>assets/img/jebat.jpg" alt="Jebat Cafe">
            </div>

            <!-- Dots for navigation -->
            <div class="dots">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
        </div>
    </section>


    <!-- Today's Offer Section -->
    <section id="offer" class="offer">
        <h2>Today's Special Offers</h2>
        <div class="offer-container">
            <!-- Offer 1 -->
            <div class="offer-item">
                <img src="<?= base_url() ?>assets/img/kopisan-coffee.jpg" alt="Kopisan Cafe Offer">
                <h3>Kopisan Cafe</h3>
                <p>Buy 1 coffee, get a free cookie!</p>
                <p class="price">RM 10</p>
            </div>

            <!-- Offer 2 -->
            <div class="offer-item">
                <img src="<?= base_url() ?>assets/img/kopisan-pastry.jpg" alt="Kopisan Cafe Pastry">
                <h3>Kopisan Cafe</h3>
                <p>20% off on all pastries.</p>
                <p class="price">RM 8</p>
            </div>

            <!-- Offer 3 -->
            <div class="offer-item">
                <img src="<?= base_url() ?>assets/img/dan-cafe-meal.jpg" alt="D'An Cafe Meal">
                <h3>D'An Cafe</h3>
                <p>Free drink with every meal order.</p>
                <p class="price">RM 15</p>
            </div>

            <!-- Offer 4 -->
            <div class="offer-item">
                <img src="<?= base_url() ?>assets/img/dan-cafe-dessert.jpg" alt="D'An Cafe Dessert">
                <h3>D'An Cafe</h3>
                <p>50% off on desserts today.</p>
                <p class="price">RM 12</p>
            </div>

        </div>
    </section>

    <!-- KAMSIS Cafes Section -->
    <section id="kamsis-cafes" class="cafes">
        <h2>KAMSIS Cafes</h2>

        <!-- Tabs Navigation -->
        <div class="tabs">
            <button class="tablinks active" onclick="openCafe(event, 'Kopisan')">Kopisan Cafe</button>
            <button class="tablinks" onclick="openCafe(event, 'DAn')">D'An Cafe</button>
            <button class="tablinks" onclick="openCafe(event, 'Jebat')">Jebat Cafe</button>
        </div>

        <!-- Tab Content for Kopisan Cafe (Default) -->
        <div id="Kopisan" class="tabcontent" style="display: block;">
            <div class="cafe-layout">
                <!-- Left Side: Menu Section -->
                <div class="menu-section">
                    <h3>Kopisan Cafe</h3>
                    <h4>Menu</h4>
                    <div class="menu-tabs">
                        <button class="tablink active" onclick="openTab(event, 'ForYou')">For You</button>
                        <button class="tablink" onclick="openTab(event, 'Food')">Food</button>
                        <button class="tablink" onclick="openTab(event, 'Drink')">Drink</button>
                        <button class="tablink" onclick="openTab(event, 'Dessert')">Dessert</button>
                    </div>

                    <!-- Tab Content: For You -->
                    <div id="ForYou" class="tab-content active">
                        <div class="menu-container">
                            <div class="menu-item">
                                <img src="<?= base_url() ?>assets/img/kopisan-special.jpg" alt="Special Dish">
                                <div class="menu-details">
                                    <p class="menu-name">Wanpaku Sandwich Teriyaki Chicken</p>
                                    <p class="menu-price">RM 20</p>
                                    <span class="tag">Most Ordered</span>
                                </div>
                            </div>
                            <!-- Repeat for more "For You" items -->
                        </div>
                    </div>

                    <!-- Tab Content: Food -->
                    <div id="Food" class="tab-content">
                        <div class="menu-category">
                            <div class="category-item">
                                <img src="food1.jpg" alt="Food Dish">
                                <div class="category-details">
                                    <p class="category-name">Delicious Dish</p>
                                    <p class="category-price">RM 15</p>
                                </div>
                            </div>
                            <!-- Repeat for more food items -->
                        </div>
                    </div>

                    <!-- Tab Content: Drink -->
                    <div id="Drink" class="tab-content">
                        <div class="menu-category">
                            <div class="category-item">
                                <img src="drink1.jpg" alt="Drink">
                                <div class="category-details">
                                    <p class="category-name">Refreshing Drink</p>
                                    <p class="category-price">RM 8</p>
                                </div>
                            </div>
                            <!-- Repeat for more drink items -->
                        </div>
                    </div>

                    <!-- Tab Content: Dessert -->
                    <div id="Dessert" class="tab-content">
                        <div class="menu-category">
                            <div class="category-item">
                                <img src="dessert1.jpg" alt="Dessert">
                                <div class="category-details">
                                    <p class="category-name">Sweet Dessert</p>
                                    <p class="category-price">RM 10</p>
                                </div>
                            </div>
                            <!-- Repeat for more dessert items -->
                        </div>
                    </div>

                </div>


                <!-- Right Side: Reviews and About Section -->
                <div class="review-about-section">
                    <!-- Reviews Section -->
                    <div class="reviews bordered-section">
                        <h4>What people say</h4>
                        <p>Rating: ★★★★☆ (4.2)</p>

                        <div class="review-item">
                            <p>"Amazing coffee!"</p>
                            <p>Rating: ★★★★★</p>
                            <p><strong>By: user123</strong></p>
                        </div>

                        <div class="review-item">
                            <p>"Great atmosphere, love the pastries."</p>
                            <p>Rating: ★★★★☆</p>
                            <p><strong>By: foodie4life</strong></p>
                        </div>

                        <div class="review-item">
                            <p>"My favorite spot on campus!"</p>
                            <p>Rating: ★★★★★</p>
                            <p><strong>By: student567</strong></p>
                        </div>

                        <button class="see-more">See more reviews</button>
                    </div>

                    <!-- About Cafe Section -->
                    <div class="about-cafe bordered-section">
                        <h4>About Kopisan Cafe</h4>
                        <p><strong>Name:</strong> Kopisan Cafe</p>
                        <p><strong>Owner:</strong> John Doe</p>
                        <p><strong>Category:</strong> Coffee, Pastries</p>
                        <p><strong>Payment Types:</strong> QR, Debit, Bank Transfer</p>
                        <p><strong>Status:</strong> Open</p>
                        <p><strong>Open Hours:</strong> 8:00 AM - 10:00 PM</p>
                    </div>
                </div>



            </div>
        </div>

        <!-- Tab Content for D'An Cafe (Hidden by Default) -->
        <div id="DAn" class="tabcontent">
            <!-- Similar structure as Kopisan Cafe with specific content for D'An Cafe -->
        </div>

        <!-- Tab Content for Jebat Cafe (Hidden by Default) -->
        <div id="Jebat" class="tabcontent">
            <!-- Similar structure as Kopisan Cafe with specific content for Jebat Cafe -->
        </div>
    </section>






    <!-- Login Section -->
    <section id="login" class="login">
        <h2>Login</h2>
        <form action="#" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Login</button>
        </form>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 CafeApp | Contact: info@cafeapp.com</p>
        <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Twitter</a></li>
        </ul>
    </footer>

    <script src="<?= base_url() ?>assets/script.js"></script>
</body>

</html>