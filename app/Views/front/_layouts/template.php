<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CafeApp</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Circular+Std:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600&display=swap">
    <!-- Add this to the <head> section of your HTML -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?= base_url() ?>assets/style.css">
</head>

<body>

    <header>
        <!-- First Navigation Bar -->
        <?= $this->include('front/_layouts/smallbar') ?>
        <!-- Second Navigation Bar -->
        <?= $this->include('front/_layouts/bigbar') ?>
    </header>

    <?= $this->renderSection('content') ?>

    <!-- Footer Section -->
    <footer class="bg-dark text-light pt-5 pb-5">
        <div class="container">
            <div class="row">
                <!-- Column 1 -->
                <div class="col-md-4 mb-3">
                    <h5 class="footer-title">MENU</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Home</a></li>
                        <li><a href="#" class="footer-link">Today's Offer</a></li>
                        <li><a href="#" class="footer-link">Contact Us</a></li>
                    </ul>
                </div>
                <!-- Column 2 -->
                <div class="col-md-4 mb-3">
                    <h5 class="footer-title">KAMSIS CAFES</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Kopisan Cafe</a></li>
                        <li><a href="#" class="footer-link">D'An Cafe</a></li>
                        <li><a href="#" class="footer-link">Jebat Cafe</a></li>
                    </ul>
                </div>
                <!-- Column 3 -->
                <div class="col-md-4 mb-3">
                    <p>© 2024 CafeApp. All rights reserved.</p>
                    <p>Politeknik Ungku Omar (PUO)<br>
                        Jalan Raja Musa Mahadi,<br>
                        31400 Ipoh, Perak<br>
                        Malaysia</p>
                    <p>webmaster@puo.edu.my<br>
                        Tel: 1-300-88-1969 / 05-545 7622<br>
                        Fax: 05-547 1162</p>

                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook footer-icon"></i></a>
                        <a href="#"><i class="fab fa-instagram footer-icon"></i></a>
                        <a href="#"><i class="fab fa-twitter footer-icon"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>