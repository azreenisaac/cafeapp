<nav class="navbar navbar-expand-lg second-navbar">
    <div class="container">
        <!-- Left side: CafeApp logo -->
        <a class="navbar-brand" href="<?= base_url() ?>">KAMSIS CafeAPP</a>
        <!-- Right side: Menu items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link <?= isset($title) && $title == 'Home' ? 'active' : '' ?>" href="<?= base_url() ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= isset($title) && $title == 'Today\'s Offer' ? 'active' : '' ?>" href="<?= base_url() ?>today-offer">Today's Offer</a></li>
                <li class="nav-item"><a class="nav-link <?= isset($title) && $title == 'Contact Us' ? 'active' : '' ?>" href="<?= base_url() ?>contact-us">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>