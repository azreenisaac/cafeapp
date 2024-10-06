<?= $this->extend('front/_layouts/template') ?>
<?= $this->section('content') ?>
<section id="todays-offer" class="py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Today's Offers</h2>

        <!-- Cafe 1 Offers -->
        <div class="cafe-offers mb-5">
            <h3 class="text-primary">Kopisan Cafe</h3>
            <div class="row">
                <!-- Offer Card 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="assets/img/nasi-goreng-usa.jpg" class="card-img-top" alt="Nasi Goreng USA">
                        <div class="card-body">
                            <h5 class="card-title">Nasi Goreng USA</h5>
                            <p class="card-text text-muted"><del>RM 10.00</del> <span class="text-success">RM 5.00</span></p>
                            <span class="badge bg-warning text-dark">50% OFF</span>
                            <p class="card-text">Description: Nasi Goreng, Udang, Sotong, Ayam.</p>
                        </div>
                    </div>
                </div>

                <!-- Offer Card 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="assets/img/kopisan-special.jpg" class="card-img-top" alt="Kopisan Special">
                        <div class="card-body">
                            <h5 class="card-title">Kopisan Special</h5>
                            <p class="card-text text-muted"><del>RM 15.00</del> <span class="text-success">RM 10.00</span></p>
                            <span class="badge bg-warning text-dark">33% OFF</span>
                            <p class="card-text">Description: Special coffee blend with delicious pastries.</p>
                        </div>
                    </div>
                </div>

                <!-- Add more offer cards similarly -->
            </div>
        </div>

        <!-- Cafe 2 Offers -->
        <div class="cafe-offers mb-5">
            <h3 class="text-primary">D'An Cafe</h3>
            <div class="row">
                <!-- Offer Card 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="assets/img/offer3.jpg" class="card-img-top" alt="Pasta Aglio Olio">
                        <div class="card-body">
                            <h5 class="card-title">Pasta Aglio Olio</h5>
                            <p class="card-text text-muted"><del>RM 18.00</del> <span class="text-success">RM 12.00</span></p>
                            <span class="badge bg-warning text-dark">33% OFF</span>
                            <p class="card-text">Description: Classic Italian pasta with garlic and olive oil.</p>
                        </div>
                    </div>
                </div>

                <!-- Offer Card 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="assets/img/offer5.jpg" class="card-img-top" alt="Cheesy Burger">
                        <div class="card-body">
                            <h5 class="card-title">Cheesy Burger</h5>
                            <p class="card-text text-muted"><del>RM 20.00</del> <span class="text-success">RM 15.00</span></p>
                            <span class="badge bg-warning text-dark">25% OFF</span>
                            <p class="card-text">Description: Juicy burger with melted cheese and toppings.</p>
                        </div>
                    </div>
                </div>

                <!-- Add more offer cards similarly -->
            </div>
        </div>

        <!-- Repeat for more cafes as needed -->
    </div>
</section>

<?= $this->endsection() ?>