    <?php require_once 'templates/head.php'; ?>
    <style>
        #loader {
            position: fixed;
            display: block;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            text-align: center;
            background-color: #000000;
            z-index: 10;
        }

        .preloader-visible #loader {
            display: block;
        }

        #content {
            visibility: hidden;
        }
    </style>
</head>
<body id="front-page" class="preloader-visible">
    <div id="loader"></div>
    <?php require_once 'templates/navigation-index.php'; ?>
    <header id="fp-header" class="header">
        <div class="header-image"></div>
        <div class="header-overlay"></div>
        <div class="header-inner layout-square-large">
            <h1>MagSonics</h1>
        </div>
    </header>
    <main id="content">
        <div class="content-wrapper layout-square-medium">
            <ul id="fp-social-links">
                <li><a href="https://open.spotify.com/artist/1CsEuORI0eHF2pNULlWTzM" target="_blank">Spotify</a></li>
                <li><a href="https://soundcloud.com/magsonics" target="_blank">SoundCloud</a></li>
                <li><a href="https://youtube.com/magsonics" target="_blank">YouTube</a></li>
            </ul>
        </div>
    </main>
    <?php require_once 'templates/footer.php'; ?>