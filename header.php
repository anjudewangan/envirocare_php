<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content = "IE=edge">
    <meta name="description" content="Envirocare Foundation is a dynamic initiative led by four young, nature-loving
    green ambassadors who are determined to inspire a global movement for sustainable
    living.">
    <meta name="keywords" content="Envirocare, Envirocare Foundation, Envirocare Delhi, Envirocare India, Sustainable Behaviour, Behavioral Changes, Sustainable Future. E-Waste Management, Keep Track of Your Carbon Footprints, Cognitive Behavior Analysis">
    <meta property="og:image" content="<?= $path; ?>./assets/images/logo/logo.png">
    <meta property="og:title" content="Envirocare Foundation | Join our green community today">
    <meta property="og:description" content="Envirocare Foundation is a dynamic initiative led by four young, nature-loving green ambassadors who are determined to inspire a global movement for sustainable
    living.">
    <meta property="og:url" content="https://www.envirocarefoundation.com/">
    <meta property="og:site_name" content="Envirocare Foundation">
    <meta property="og:type" content="website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envirocare Foundation | <?php echo getHeadTitle($page) ?></title>

    <!-- CSS FILES -->
    <link rel="shortcut icon" href="<?= $path; ?>./assets/images/logo/logo.png" type="image/x-icon">
    <link rel="canonical" href="https://www.envirocarefoundation.com/" />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <?php if ($page == 'enviro-now') { ?>
        <link rel="stylesheet" href="<?= $path; ?>./assets/css/blog.css">
        <link rel="stylesheet" href="<?= $path; ?>./assets/css/owl.carousel.css">
    <?php } else { ?>
        <link href="<?= $path; ?>./assets/css/style.css" rel="stylesheet">
    <?php } ?>
</head>

<body <?php if ($page == 'index' || $page == 'sitemap' || $page == 'privacy-policy') {
            echo 'class="home-body"';
}elseif ($page == 'enviro-connect') {
    echo 'class="contact-body"';
        } ?>>
    <div id="preloader"></div>
    <div id="tap-top"></div>
    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid"><a class="navbar-brand" href="./"><img src="<?= $path; ?>./assets/images/logo/logo.png" alt="Envirocare Foundation Logo" srcset="" height="60px"></a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" maria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto">
                        <li class="nav-item"><a href="?page=enviro-intro" class="nav-link">Enviro Explore</a>
                            <ul class="submenu">
                                <li><a href="?page=enviro-intro">Enviro Intro</a></li>
                                <li><a href="?page=enviro-ambassadors">Enviro Ambassadors</a></li>
                                <li><a href="?page=enviro-album">Enviro Album</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="?page=manage-e-waste" class="nav-link">Enviro Zones</a>
                            <ul class="submenu">
                                <li><a href="?page=manage-e-waste">Manage E-Waste</a></li>
                                <li><a href="?page=track-carbon-footprint">Track Carbon Footprints</a></li>
                                <li><a href="?page=conserve-nature">Conserve Nature</a></li>
                                <li><a href="?page=sustainable-lifestyle">Sustainable Lifestyle</a></li>
                                <li><a href="?page=unraveling-cognitive-behavior">Unraveling Cognitive Behavior</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="?page=enviro-now" class="nav-link">Enviro Now</a>
                            <ul class="submenu">
                                <li><a href="?page=enviro-now#enviro-bloopers">Enviro Bloopers</a></li>
                                <li><a href="?page=enviro-now#enviro-bloomers">Enviro Bloomers</a></li>
                                <li><a href="?page=enviro-now#enviro-blogs">Enviro Blogs</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="?page=enviro-connect">Enviro Connect</a></li>
                        <li class="nav-item"><a class="nav-link" href="?page=take-action">Take Action</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </main>
