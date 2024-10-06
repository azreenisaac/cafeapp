<nav class="navbar navbar-expand-lg first-navbar">
    <div class="container">
        <!-- Left side: Cafe names -->
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link <?= isset($title) && $title == 'Kopisan Cafe' ? 'active' : '' ?>" href="<?= base_url() ?>kopisan-cafe">Kopisan Cafe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= isset($title) && $title == 'D\'An Cafe' ? 'active' : '' ?>" href="<?= base_url() ?>dan-cafe">D'An Cafe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= isset($title) && $title == 'Jebat Cafe' ? 'active' : '' ?>" href="<?= base_url() ?>jebat-cafe">Jebat Cafe</a>
            </li>
        </ul>
        <!-- Right side: Login icon -->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link login-link" href="<?= base_url() ?>login"><i class="fas fa-user-circle"></i> LOGIN</a>
            </li>
        </ul>
    </div>
</nav>