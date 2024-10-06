<?= $this->extend('front/_layouts/template') ?>
<?= $this->section('content') ?>

<!-- Hero Section with Slideshow and Today's Offers -->
<section id="home" class="hero">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- First Slide -->
            <div class="carousel-item active">
                <img src="assets/img/cafe1.jpg" class="d-block w-100" alt="Cafe Image">
                <div class="carousel-caption d-flex align-items-center justify-content-between">
                    <div class="left-content">
                        <h1>Welcome to CafeApp</h1>
                        <p>Your campus cafes at a glance</p>
                    </div>
                    <div class="offers d-flex flex-column align-items-end">
                        <h2 class="special-offer-title">Today's Special Offers</h2>
                        <div class="d-flex">
                            <div class="offer-card mx-2">
                                <img src="assets/img/kopisan-coffee.jpg" alt="Kopisan Cafe Offer" class="offer-image">
                                <h5 class="card-title">Kopisan Cafe</h5>
                                <p class="card-text">Buy 1 coffee, get a free cookie!</p>
                                <p class="price">RM 10</p>
                            </div>
                            <div class="offer-card mx-2">
                                <img src="assets/img/kopisan-pastry.jpg" alt="Kopisan Cafe Pastry" class="offer-image">
                                <h5 class="card-title">Kopisan Cafe</h5>
                                <p class="card-text">20% off on all pastries.</p>
                                <p class="price">RM 8</p>
                            </div>
                            <div class="offer-card mx-2">
                                <img src="assets/img/kopisan-special.jpg" alt="Kopisan Cafe Sandwich" class="offer-image">
                                <h5 class="card-title">Kopisan Cafe</h5>
                                <p class="card-text">Free drink with any sandwich!</p>
                                <p class="price">RM 12</p>
                            </div>
                        </div>
                        <a href="#offer" class="btn btn-view-more">View More</a>
                    </div>
                </div>
            </div>

            <!-- Repeat for other slides -->
            <!-- Second Slide -->
            <div class="carousel-item">
                <img src="assets/img/kopisan.jpg" class="d-block w-100" alt="Kopisan Cafe">
                <div class="carousel-caption d-flex align-items-center justify-content-between">
                    <div class="left-content">
                        <h1>Kopisan Cafe</h1>
                        <p>Cozy spots, great coffee.</p>
                    </div>
                    <div class="offers d-flex flex-column align-items-end">
                        <h2 class="special-offer-title">Today's Special Offers</h2>
                        <div class="d-flex">
                            <div class="offer-card mx-2">
                                <img src="assets/img/kopisan-coffee.jpg" alt="Kopisan Cafe Offer" class="offer-image">
                                <h5 class="card-title">Kopisan Cafe</h5>
                                <p class="card-text">Buy 1 coffee, get a free cookie!</p>
                                <p class="price">RM 10</p>
                            </div>
                            <div class="offer-card mx-2">
                                <img src="assets/img/kopisan-pastry.jpg" alt="Kopisan Cafe Pastry" class="offer-image">
                                <h5 class="card-title">Kopisan Cafe</h5>
                                <p class="card-text">20% off on all pastries.</p>
                                <p class="price">RM 8</p>
                            </div>
                            <div class="offer-card mx-2">
                                <img src="assets/img/kopisan-special.jpg" alt="Kopisan Cafe Sandwich" class="offer-image">
                                <h5 class="card-title">Kopisan Cafe</h5>
                                <p class="card-text">Free drink with any sandwich!</p>
                                <p class="price">RM 12</p>
                            </div>
                        </div>
                        <a href="#offer" class="btn btn-view-more">View More</a>
                    </div>
                </div>
            </div>

            <!-- Add additional slides as needed... -->
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

<?= $this->endsection() ?>