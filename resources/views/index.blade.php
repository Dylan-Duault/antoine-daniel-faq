<!doctype html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Antoine Daniel - FAQ</title>
    <link rel="icon" type="image/png" href="assets/img/logos/AntoineDanielLogo.png" />

    <!-- Google Tag Manager -->
    <script>
        ;
        (function(w, d, s, l, i) {
            w[l] = w[l] || []
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            })
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : ''
            j.async = true
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl
            f.parentNode.insertBefore(j, f)
        })(window, document, 'script', 'dataLayer', 'GTM-WNC4LFQ2')
    </script>
    <!-- End Google Tag Manager -->

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/app.css" />
    <link id="theme-sheet" rel="stylesheet" href="assets/css/core.css" />
</head>

<body class="is-theme-core">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNC4LFQ2" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>

    <!-- Hero and nav -->
    <div class="hero is-theme-primary">

        <!-- Help center title -->
        <div id="main-hero" class="hero-body">
            <div class="container">
                <div class="columns is-vcentered pt-40">
                    <div class="column"></div>
                    <div class="column is-9">
                        <div class="help-header">
                            <img src="assets/img/logos/AntoineDanielLogo.png" alt="Antoine Daniel Logo" />
                            <h1 class="title is-4">Antoine Daniel - FAQ</h1>
                        </div>
                        <div class="help-subheader">
                            <h2 class="title is-3">Antoine Daniel a répondu au peuple</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Help categories list -->
    <div class="section help-section">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column"></div>
                <div class="column is-9">
                    @foreach($faqItems as $faqItem)   
                        <!-- Category card -->
                        <div class="flex-card category-card light-bordered">
                            <div class="card-body">
                                <a href="#">
                                    <!-- Content -->
                                    <div class="inner-content">
                                        <h2 class="title is-4">{{$faqItem->question}}</h2>
                                        <div class="inner-text">
                                        {!! $faqItem->answer !!}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="column"></div>
            </div>
        </div>
    </div>

    <footer class="footer-light-medium">
        <div class="container">
            <div class="footer-copyright has-text-centered">
            <span class="moto">Développé par <a href="https://dylan-duault.com" class="has-text-primary">Dylan Duault</a> et Ethan</span>
            </div>
        </div>
    </footer>

    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/core.js"></script>
</body>

</html>