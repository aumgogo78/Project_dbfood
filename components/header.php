<style>
.bg-nav {
    background-color: rgba(112, 64, 0, 1);
    width: 100%;
    box-shadow: 2px 4px 7px rgba(0, 0, 0, 0.4);
}

.navbar-brand,
.nav-link {
    color: rgba(255, 255, 255, 1);
    transition: ease 0.2s;
}

.navbar-brand:hover,
.nav-link:hover {
    color: rgba(165, 165, 165, 1);
}

.navbar-center {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}

.navbar-right {
    position: absolute;
    left: 96%;
    transform: translateX(-50%);
}
</style>

<header>
    <nav class="navbar navbar-expand-lg bg-nav p-3 position-fixed z-3">
        <div class="container-fluid d-flex justify-content-between align-items-center">

            <a class="navbar-brand" href="../index.php">LOGO</a>

            <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="d-none d-lg-flex mx-auto navbar-center" id="navbarNav">
                <ul class="navbar-nav flex-row gap-3">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu.php" class="nav-link">Menu List</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About us.</a>
                    </li>
                </ul>
            </div>

            <div class="d-none d-lg-block navbar-right">
                <a href="#" class="nav-link">Setting</a>
            </div>

            <div class="collapse navbar-collapse d-lg-none px-3" id="mainNavbar">
                <ul class="navbar-nav mb-2 me-auto mb-lg-0 d-lg-none">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu.php" class="nav-link">Menu List</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Setting</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>