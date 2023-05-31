<link rel="stylesheet" href="../assets/styles/header.css">

<header>
    <a href="<?php if ($_SERVER['REQUEST_URI'] != '/'): echo '../'; else: echo './'; endif; ?>">
        На главную
    </a>
    <nav>
        <a href="">Товары</a>
    </nav>
    <a href="<?php if (!empty($_SESSION['user_id'])): echo './pages/profile.php'; else: echo './pages/auth.php'; endif;?>">
        П
    </a>
</header>