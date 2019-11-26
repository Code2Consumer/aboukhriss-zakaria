<!DOCTYPE HTML SYSTEM>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Aboukhriss Zakaria - Portfolio, Compétences et Réalisations.</title>
    <meta charset="utf-8">

    <link rel="icon" type="image/png" href="../../../../../Users/abouk/Documents/Dev/old-ab/images/logo.png"/>
    <link href="../../../../../Users/abouk/Documents/Dev/old-ab/images/logo.png" rel="image_src"/>

    <meta property="og:image" content="images/logo.png"/>
    <meta name="robots" content="index,nofollow">
    <meta property="og:site_name" content="Aboukhriss Zakaria - Portfolio"/>

    <meta name="description"
          content="Porte feuille de compétences & journal de bord d'Aboukhriss Zakaria : Développeur web en freelance. Passionné de développement et de contenues innovant dans le domaine du web et du logiciel."
          lang="fr"/>
    <meta name="keywords" content="Aboukhriss, Zakaria, Portfolio, Développeur Web, Freelance," lang="fr"/>


    <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/app.js')}}"></script>

    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

<div id="app"></div>
<div id="top-bar" class="pointer">
    <div id="top-left" class="pointer">
        <span id="arrow-contact" class="pointer glyphicon glyphicon-chevron-left"></span>
        <label style="position: relative; bottom: 12px;" class='pointer'>Contact</label></div>
    <div id="top-center" class="pointer"> Home</div>
    <div id="top-right" class="pointer"><p>Aboukhriss Zakaria</p>
        <p id="subtitle"> D&eacute;veloppeur Web</p>
        <p id="subtitle"> Freelance </p>
    </div>
</div>
<div id="home">
    <div id="logo">
        <div id="logo-container">
            <span class="newpolice"> AZ</span>
        </div>
    </div>

    <div id="menu">
        <ul>
            <li class="pointer button-page" data-target-id="parcour"><span
                        class="glyphicon glyphicon-book icons"></span> <br> Mon Parcours
            </li>
            <li class="pointer button-page" data-target-id="realisation"><span
                        class="glyphicon glyphicon-folder-open icons"></span> <br> Mes R&eacute;alisations
            </li>
            <li class="pointer button-page" data-target-id="outil"><span
                        class="glyphicon glyphicon-wrench icons"></span> <br> Outils Utilis&eacute;
            </li>
        </ul>
    </div>
    <footer>
        <div id="bottom_right">
            <a href="../../../../../Users/abouk/Documents/Dev/old-ab/en/en.html">
                <img src="../../../../../Users/abouk/Documents/Dev/old-ab/images/d_angleterre.png">
            </a>
        </div>
    </footer>
</div>

</div>
<div id="contact" data-url="{{ route('blade_template.show', 'contact') }}"></div>
<div id="parcour" class="page-container" data-url="{{ route('blade_template.show', 'parcour') }}"></div>
<div id="realisation" class="page-container" data-url="{{ route('blade_template.show', 'realisations') }}"></div>
<div id="outil" class="page-container" data-url="{{ route('blade_template.show', 'outils') }}"></div>
<script>
    (function (h, o, t, j, a, r) {
        h.hj = h.hj || function () {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {hjid: 688669, hjsv: 6};
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
</script>

</body>
</html>