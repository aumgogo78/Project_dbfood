<style>
    .bg-nav {
        background-color: rgba(112, 64, 0, 1);
    }

    .navbar-brand, .nav-link {
        color: rgba(255, 255, 255, 1);
        transition: ease 0.2s;
    }

    .navbar-brand:hover, .nav-link:hover {
        color: rgba(165, 165, 165, 1);
    }

</style>

<header>
    <nav class="navbar navbar-expand-lg bg-nav p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu.php" class="nav-link">Menu List</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Setting</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>