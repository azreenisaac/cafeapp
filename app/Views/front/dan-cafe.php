<?= $this->extend('front/_layouts/template') ?>
<?= $this->section('content') ?>

<!-- Hero Section with Background Image -->
<section id="home" class="hero">
    <div class="hero-image" style="background-image: url('assets/img/kopisan.jpg');">
        <div class="hero-content">
            <h1>Kopisan Cafe</h1>
            <p>Cozy spots, great coffee.</p>
        </div>
    </div>
</section>


<!-- KAMSIS Cafes Section -->
<section id="kamsis" class="py-5">
    <div class="container">

        <!-- Menu Section -->
        <div class="row">
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
                    <!-- For You Section -->
                    <div class="tab-pane fade show active" id="ForYou" role="tabpanel">
                        <!-- Today's Offer -->
                        <h4>Today's Offer</h4>
                        <div class="menu-item">
                            <div class="d-flex align-items-center">
                                <img src="assets/img/nasi-goreng-usa.jpg" class="img-fluid" alt="Nasi Goreng USA" style="width: 100px;">
                                <div class="ms-3">
                                    <h5>Nasi Goreng USA</h5>
                                    <p>
                                        <span class="price-slash">RM10.00</span>
                                        <span class="price">RM5.00</span>
                                        <span class="badge bg-danger discount-badge">50% OFF</span>
                                    </p>
                                    <p class="menu-description">Nasi Goreng, Udang, Sotong, Ayam</p>
                                </div>
                            </div>
                        </div>



                        <!-- For You -->
                        <h4>For You</h4>
                        <div class="menu-item">
                            <div class="d-flex align-items-center">
                                <img src="assets/img/nasi-ayam.jpg" class="img-fluid" alt="Nasi Goreng USA" style="width: 100px;">
                                <div class="ms-3">
                                    <h5>Nasi Ayam</h5>
                                    <p>
                                        <!-- <span class="price-slash"></span> -->
                                        <span class="price">RM6.00</span>
                                        <!-- <span class="badge bg-danger discount-badge">50% OFF</span> -->
                                    </p>
                                    <p class="menu-description">Rice, Steamed Chicken, Soup</p>
                                </div>
                            </div>
                        </div>

                        <!-- Most Ordered -->
                        <h4>Most Ordered</h4>
                        <div class="menu-item">
                            <div class="d-flex align-items-center">
                                <img src="assets/img/kopisan-special.jpg" class="img-fluid" alt="Nasi Goreng USA" style="width: 100px;">
                                <div class="ms-3">
                                    <h5>Wanpaku Sandwich Teriyaki Chicken</h5>
                                    <p>
                                        <!-- <span class="price-slash"></span> -->
                                        <span class="price">RM6.00</span>
                                        <span class="badge bg-success">Most Ordered</span>
                                        <!-- <span class="badge bg-danger discount-badge">50% OFF</span> -->
                                    </p>
                                    <p class="menu-description">Delicious sandwich with teriyaki chicken, fresh vegetables, and special sauce.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Food Section -->
                    <div class="tab-pane fade" id="Food" role="tabpanel">
                        <h4>Food</h4>
                        <div class="menu-item border rounded p-3 mb-3">
                            <div class="d-flex align-items-center">
                                <img src="assets/img/food-dish.jpg" class="img-fluid" alt="Spaghetti Aglio Olio" style="width: 100px;">
                                <div class="ms-3">
                                    <h5>Spaghetti Aglio Olio</h5>
                                    <p>RM 25</p>
                                </div>
                            </div>
                        </div>
                        <!-- Add other food items here -->
                    </div>

                    <!-- Other sections (Drink, Dessert) can follow the same pattern -->
                </div>
            </div>


            <!-- Reviews & About Section -->
            <div class="col-lg-6">
                <div class="border p-3 mb-3 reviews-section">
                    <div class="header-row">
                        <h4>What people say<span class="total-reviews">(10 reviews)</span></h4>
                        <p class="rating">Rating: ★★★★☆ (4.2)</p>
                    </div>
                    <div class="review-item">
                        <p class="review-text">"Amazing coffee!"</p>
                        <p class="review-rating">Rating: ★★★★★</p>
                        <div class="review-meta">
                            <p class="review-author"><strong>By: user123</strong></p>
                            <p class="review-date">Oct 05, 2024 - 10:30 AM</p>
                        </div>
                    </div>
                    <div class="review-item">
                        <p class="review-text">"The atmosphere is wonderful!"</p>
                        <p class="review-rating">Rating: ★★★★☆</p>
                        <div class="review-meta">
                            <p class="review-author"><strong>By: user456</strong></p>
                            <p class="review-date">Oct 04, 2024 - 08:15 AM</p>
                        </div>
                    </div>
                    <div class="review-item">
                        <p class="review-text">"Best sandwiches in town!"</p>
                        <p class="review-rating">Rating: ★★★★★</p>
                        <div class="review-meta">
                            <p class="review-author"><strong>By: user789</strong></p>
                            <p class="review-date">Oct 03, 2024 - 05:20 PM</p>
                        </div>
                    </div>
                    <a href="#" class="see-more-link">See more reviews</a>
                </div>




                <div class="border rounded p-3 about-cafe">
                    <h4>About Cafe</h4>
                    <p><strong>Cafe Name:</strong> Kopisan Cafe</p>
                    <div class="border-bottom my-2"></div>
                    <p><strong>Owner Name:</strong> John Doe</p>
                    <div class="border-bottom my-2"></div>
                    <p><strong>Category:</strong> Western</p>
                    <div class="border-bottom my-2"></div>
                    <p><strong>Payment Types:</strong> QR, Debit, Bank Transfer</p>
                    <div class="border-bottom my-2"></div>

                    <!-- Cafe Status -->
                    <p><strong>Status:</strong>
                        <span class="badge bg-success">Open</span>
                    </p>
                    <div class="border-bottom my-2"></div>

                    <!-- Open Days and Hours -->
                    <p><strong>Open Days & Hours:</strong></p>
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between">
                            <span>Monday</span><span>9:00 AM - 10:00 PM</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Tuesday</span><span>9:00 AM - 10:00 PM</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Wednesday</span><span>9:00 AM - 10:00 PM</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Thursday</span><span>9:00 AM - 10:00 PM</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Friday</span><span>9:00 AM - 10:00 PM</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Saturday</span><span>9:00 AM - 10:00 PM</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span>Sunday</span><span>Closed</span>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- Review Section -->
<!-- Review Section -->
<section id="user-reviews" class="py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Leave a Review</h2>
        <div class="alert alert-info" role="alert">
            You must <a href="#" class="alert-link">login</a> to leave a review.
        </div>

        <!-- Rating Tabs -->
        <ul class="nav nav-tabs mb-4" id="ratingTabs" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab">ALL</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="five-star-tab" data-bs-toggle="tab" data-bs-target="#five-star" type="button" role="tab">
                    <i class="fas fa-star"></i> 5
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="four-star-tab" data-bs-toggle="tab" data-bs-target="#four-star" type="button" role="tab">
                    <i class="fas fa-star"></i> 4
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="three-star-tab" data-bs-toggle="tab" data-bs-target="#three-star" type="button" role="tab">
                    <i class="fas fa-star"></i> 3
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="two-star-tab" data-bs-toggle="tab" data-bs-target="#two-star" type="button" role="tab">
                    <i class="fas fa-star"></i> 2
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="one-star-tab" data-bs-toggle="tab" data-bs-target="#one-star" type="button" role="tab">
                    <i class="fas fa-star"></i> 1
                </button>
            </li>
        </ul>

        <!-- Review Tab Content -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="all" role="tabpanel">
                <!-- Example Review Item -->
                <div class="review-item border rounded p-3 mb-3">
                    <div class="d-flex align-items-start">
                        <img src="assets/img/user1.jpg" class="rounded-circle me-3" alt="User" style="width: 50px;">
                        <div>
                            <h6>Username <small class="text-muted">- 2024-10-05 10:30 AM</small></h6>
                            <p>Rating: <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i></p>
                            <p>"Great cafe, loved the coffee!"</p>
                            <div class="d-flex">
                                <button class="btn btn-link pe-2"><i class="fas fa-thumbs-up"></i> 12</button>
                                <button class="btn btn-link"><i class="fas fa-thumbs-down"></i> 1</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeat review items here -->
            </div>
            <!-- Repeat for other rating tabs similarly -->
        </div>
    </div>
</section>






<?= $this->endsection() ?>