<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CafeApp</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/style.css">
</head>

<body>
    <!-- Navigation Bar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">CafeApp</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#offer">Today's Offer</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kamsis">KAMSIS Cafes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section with Slideshow -->
    <section id="home" class="hero">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- First Slide -->
                <div class="carousel-item active">
                    <img src="assets/img/cafe1.jpg" class="d-block w-100" alt="Cafe Image">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Welcome to CafeApp</h1>
                        <p>Your campus cafes at a glance</p>
                    </div>
                </div>

                <!-- Second Slide -->
                <div class="carousel-item">
                    <img src="assets/img/kopisan.jpg" class="d-block w-100" alt="Kopisan Cafe">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Kopisan Cafe</h1>
                        <p>Cozy spots, great coffee.</p>
                    </div>
                </div>

                <!-- Third Slide -->
                <div class="carousel-item">
                    <img src="assets/img/dan.jpg" class="d-block w-100" alt="D'An Cafe">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>D'An Cafe</h1>
                        <p>A blend of taste and tradition.</p>
                    </div>
                </div>

                <!-- Fourth Slide -->
                <div class="carousel-item">
                    <img src="assets/img/jebat.jpg" class="d-block w-100" alt="Jebat Cafe">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Jebat Cafe</h1>
                        <p>Fresh flavors, every day.</p>
                    </div>
                </div>
            </div>

            <!-- Dots for navigation -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Today's Offer Section -->
    <section id="offer" class="py-5">
        <div class="container text-center">
            <h2 class="mb-5">Today's Special Offers</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="assets/img/kopisan-coffee.jpg" class="card-img-top" alt="Kopisan Cafe Offer">
                        <div class="card-body">
                            <h5 class="card-title">Kopisan Cafe</h5>
                            <p class="card-text">Buy 1 coffee, get a free cookie!</p>
                            <p class="price">RM 10</p>
                        </div>
                    </div>
                </div>

                <!-- Repeat for other offers -->
                <!-- Offer 2 -->
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="assets/img/kopisan-pastry.jpg" class="card-img-top" alt="Kopisan Cafe Pastry">
                        <div class="card-body">
                            <h5 class="card-title">Kopisan Cafe</h5>
                            <p class="card-text">20% off on all pastries.</p>
                            <p class="price">RM 8</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KAMSIS Cafes Section -->
    <section id="kamsis" class="py-5">
        <div class="container">
            <h2 class="mb-5 text-center">KAMSIS Cafes</h2>
            <!-- Tabs Navigation -->
            <ul class="nav nav-tabs justify-content-center" id="cafeTabs" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active" id="kopisan-tab" data-bs-toggle="tab" data-bs-target="#Kopisan"
                        type="button" role="tab">Kopisan Cafe</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="dan-tab" data-bs-toggle="tab" data-bs-target="#DAn" type="button"
                        role="tab">D'An Cafe</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="jebat-tab" data-bs-toggle="tab" data-bs-target="#Jebat" type="button"
                        role="tab">Jebat Cafe</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content mt-4" id="cafeTabContent">
                <div class="tab-pane fade show active" id="Kopisan" role="tabpanel">
                    <div class="row">
                        <!-- Menu Section -->
                        <div class="col-lg-6">
                            <h3>Kopisan Cafe Menu</h3>
                            <!-- Menu Tabs -->
                            <ul class="nav nav-pills mb-3" id="menuTabs" role="tablist">
                                <li class="nav-item">
                                    <button class="nav-link active" id="forYou-tab" data-bs-toggle="pill"
                                        data-bs-target="#ForYou" type="button" role="tab">For You</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="food-tab" data-bs-toggle="pill" data-bs-target="#Food"
                                        type="button" role="tab">Food</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="drink-tab" data-bs-toggle="pill" data-bs-target="#Drink"
                                        type="button" role="tab">Drink</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="dessert-tab" data-bs-toggle="pill"
                                        data-bs-target="#Dessert" type="button" role="tab">Dessert</button>
                                </li>
                            </ul>

                            <!-- Menu Tab Content -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="ForYou" role="tabpanel">
                                    <!-- Menu Item -->
                                    <div class="d-flex">
                                        <img src="assets/img/kopisan-special.jpg" class="img-fluid" alt="Special Dish"
                                            style="width: 100px;">
                                        <div class="ms-3">
                                            <h5>Wanpaku Sandwich Teriyaki Chicken</h5>
                                            <p>RM 20 <span class="badge bg-success">Most Ordered</span></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Repeat other tab content -->
                            </div>
                        </div>

                        <!-- Reviews & About Section -->
                        <div class="col-lg-6">
                            <div class="border p-3 mb-3">
                                <h4>What people say</h4>
                                <p>Rating: ★★★★☆ (4.2)</p>
                                <div class="review-item">
                                    <p>"Amazing coffee!"</p>
                                    <p>Rating: ★★★★★</p>
                                    <p><strong>By: user123</strong></p>
                                </div>
                                <button class="btn btn-primary">See more reviews</button>
                            </div>

                            <div class="border p-3">
                                <h4>About Cafe</h4>
                                <p><strong>Cafe Name:</strong> Kopisan Cafe</p>
                                <p><strong>Owner Name:</strong> John Doe</p>
                                <p><strong>Category:</strong> Western</p>
                                <p><strong>Payment Types:</strong> QR, Debit, Bank Transfer</p>
                                <p><strong>Status:</strong> Open</p>
                                <p><strong>Open Hours:</strong> 9:00 AM - 10:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeat for other cafes -->
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 CafeApp. All rights reserved.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>