<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>About Us - Kilau Kata</title>
    @include('includes.style')
    <link rel="stylesheet" href="{{ url('styles/About-Us/About-Us.css') }}" media="screen">
    @include('includes.script')
    <meta name="generator" content="">
    <link rel="stylesheet" href="{{ url('styles/About-Us.css') }}">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "url": "https://",
            "logo": "{{ url('images/logo.png') }}"
        }

    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="About Us">
    <meta property="og:type" content="website">

</head>

<body class="u-body u-xl-mode" data-lang="en">
    @include('includes.navbar')

    <section class="u-clearfix u-section-2" id="sec-43fd">
        <div class="u-clearfix u-sheet u-sheet-1">
            <img class="u-image u-image-default u-image-1" src="{{ url('images/logo.png') }}" alt=""
                data-image-width="315" data-image-height="78">
            <div class="u-border-1 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-1"></div>
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-size-24 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <img class="u-align-center u-image u-image-default u-preserve-proportions u-image-2"
                                    src="{{ url('images/AboutUs.png') }}" alt="" data-image-width="510"
                                    data-image-height="435">
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-36 u-layout-cell-2">
                            <div class="u-container-layout u-valign-top u-container-layout-2">
                                <p class="u-custom-font u-text u-text-1"> Kilau Kata adalah sebuah unit usaha baru dari
                                    Troya Digital
                                    yang bergerak dibidang kreatif, penerbitan dan pendistribusian konten
                                    digital.&nbsp;Kilau Kata
                                    menciptakan sebuah ekosistem mutualisme untuk para creator untuk saling
                                    berelaborasi. Membangun sebuah
                                    komunitas creator yang terdiri dari penulis, desainer, illustrator, animator, game
                                    developer, serta
                                    semua terlibat dalam pembuatan karya. Kilau Kata juga percaya bahwa setiap karya
                                    memuat pesan dari
                                    setiap creator yang butuh dipublikasikan. Oleh karena itu, Kilau Kata menjembatani
                                    pembuat karya
                                    dengan audience untuk menikmati karya. Sebuah wadah yang sebagai tempat apresiasi
                                    dan komersialisasi
                                    setiap karya milik para creator.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')
</body>

</html>
