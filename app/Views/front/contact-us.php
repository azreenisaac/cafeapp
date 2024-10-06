<?= $this->extend('front/_layouts/template') ?>
<?= $this->section('content') ?>
<section id="contact-us" class="py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Contact Us</h2>
        <div class="row">
            <!-- Left Column: Contact Information -->
            <div class="col-lg-6 mb-4">
                <h5><i class="fas fa-map-marker-alt"></i> Address</h5>
                <p>
                    <i class="fas fa-building"></i> Politeknik Ungku Omar (PUO)<br>
                    Jalan Raja Musa Mahadi,<br>
                    31400 Ipoh, Perak<br>
                    Malaysia
                </p>
                <h5><i class="fas fa-envelope"></i> Email</h5>
                <p>
                    <a href="mailto:webmaster@puo.edu.my">webmaster@puo.edu.my</a>
                </p>
                <h5><i class="fas fa-phone"></i> Phone</h5>
                <p>
                    Tel: 1-300-88-1969 / 05-545 7622<br>
                    <i class="fas fa-fax"></i> Fax: 05-547 1162
                </p>
            </div>

            <!-- Right Column: Cafe Information -->
            <div class="col-lg-6 mb-4">
                <div class="row">
                    <!-- Cafe Card 1 -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Kopisan Cafe</h5>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> Jalan Ria, 1, 31400 Ipoh, Perak</p>
                                <p class="card-text"><i class="fas fa-envelope"></i> <a href="mailto:kopisan.cafe@example.com">kopisan.cafe@example.com</a></p>
                                <p class="card-text"><i class="fas fa-phone"></i> 05-545 0001</p>
                            </div>
                        </div>
                    </div>

                    <!-- Cafe Card 2 -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">D'An Cafe</h5>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> Jalan D'An, 2, 31400 Ipoh, Perak</p>
                                <p class="card-text"><i class="fas fa-envelope"></i> <a href="mailto:dan.cafe@example.com">dan.cafe@example.com</a></p>
                                <p class="card-text"><i class="fas fa-phone"></i> 05-545 0002</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Cafe Card 3 -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Jebat Cafe</h5>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> Jalan Jebat, 3, 31400 Ipoh, Perak</p>
                                <p class="card-text"><i class="fas fa-envelope"></i> <a href="mailto:jebat.cafe@example.com">jebat.cafe@example.com</a></p>
                                <p class="card-text"><i class="fas fa-phone"></i> 05-545 0003</p>
                            </div>
                        </div>
                    </div>

                    <!-- Cafe Card 4 -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cafe Alpha</h5>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> Jalan Alpha, 4, 31400 Ipoh, Perak</p>
                                <p class="card-text"><i class="fas fa-envelope"></i> <a href="mailto:alpha.cafe@example.com">alpha.cafe@example.com</a></p>
                                <p class="card-text"><i class="fas fa-phone"></i> 05-545 0004</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Complaint Section -->
        <div class="row mt-5">
            <div class="col text-center">
                <h5>If you have any complaints, raise a ticket here:</h5>
                <a href="/raise-ticket" class="btn btn-primary">Raise a Ticket</a>
            </div>
        </div>
    </div>
</section>



<?= $this->endsection() ?>