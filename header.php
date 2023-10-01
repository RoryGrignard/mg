<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michelle Grignard</title>

    <?php wp_head(); ?>

</head>
<body>



<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-nav',
                        'menu_class' => 'navbar-nav'
                    )
                );
            ?>
            </div>
      </div>
    </nav>
</header>