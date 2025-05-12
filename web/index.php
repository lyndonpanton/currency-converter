<?php
    include("config.php");
?>

<!DOCTYPE HTML>
<html lang="en-GB">
<head>
    <meta charset="UTF-8" />
    <meta name="application-name" content="Currency Converter" />
    <meta name="author" content="Lyndon Mykal Panton" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
            user-scalable=true, minimum-scale=0.25, maximum-scale=4.0" />

    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
    <title>Currency Converter</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Jost:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <script src=<?php echo "https://kit.fontawesome.com/" . API_KEY_FONTAWESOME . ".js"; ?> crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <link rel="stylesheet" type="text/css" href="./css/laptop.css" />
    <link rel="stylesheet" type="text/css" href="./css/tablet.css" />
    <link rel="stylesheet" type="text/css" href="./css/mobile.css" />
    <script type="text/javascript" src="./js/script.js"></script>
</head>
<body>
    <header>
        <h1>Currency Converter</h1>
        <!-- Add light/dark mode toggle -->
    </header>

    <main>
        <section id="description">
            <p id="description-main">
                Free conversions using the top currencies across the globe
            </p>
            <p id="description-sub">
                Convert using USD, EUR, JPY, GBP, and more!
            </p>
        </section>
        <section id="converter">
            <form action="#" id="converter-form">
                <fieldset id="converter-input">
                    <input type="number" name="value-from" id="value-from" min="0" step="0.01" placeholder="Amount"/>

                    <select name="currency-from" id="currency-from">
                        <option value="usd">USD</option>
                        <option value="eur">EUR</option>
                        <option value="jpy">JPY</option>
                        <option value="gbp">GBP</option>
                        <option value="cny">CNY</option>
                        <option value="aud">AUD</option>
                        <option value="cad">CAD</option>
                        <option value="chf">CHF</option>
                        <option value="hkd">HKD</option>
                        <option value="sgp">SGD</option>
                        <option value="sek">SEK</option>
                        <option value="krw">KRW</option>
                        <option value="nok">NOK</option>
                        <option value="nzd">NZD</option>
                        <option value="inr">INR</option>
                        <option value="mxn">MXN</option>
                        <option value="twd">TWD</option>
                        <option value="zar">ZAR</option>
                        <option value="brl">BRL</option>
                        <option value="dkk">DKK</option>
                        <option value="pln">PLN</option>
                        <option value="thb">THB</option>
                        <option value="ils">ILS</option>
                        <option value="idr">IDR</option>
                        <option value="czk">CZK</option>
                    </select>

                    <select name="currency-to" id="currency-to">
                        <option value="usd">USD</option>
                        <option value="eur">EUR</option>
                        <option value="jpy">JPY</option>
                        <option value="gbp">GBP</option>
                        <option value="cny">CNY</option>
                        <option value="aud">AUD</option>
                        <option value="cad">CAD</option>
                        <option value="chf">CHF</option>
                        <option value="hkd">HKD</option>
                        <option value="sgp">SGD</option>
                        <option value="sek">SEK</option>
                        <option value="krw">KRW</option>
                        <option value="nok">NOK</option>
                        <option value="nzd">NZD</option>
                        <option value="inr">INR</option>
                        <option value="mxn">MXN</option>
                        <option value="twd">TWD</option>
                        <option value="zar">ZAR</option>
                        <option value="brl">BRL</option>
                        <option value="dkk">DKK</option>
                        <option value="pln">PLN</option>
                        <option value="thb">THB</option>
                        <option value="ils">ILS</option>
                        <option value="idr">IDR</option>
                        <option value="czk">CZK</option>
                    </select>
                </fieldset>

                <input type="submit" value="Convert" id="convert-button" />
            </form>

            <p id="value-to">---</p>
        </section>
    </main>

    <footer>
        <section id="project">
            <ul class="project-list">
                <li class="project-list-item project-list-heading">
                    Developer Information
                </li>
                <li class="project-list-item">
                    <a href="https://www.linkedin.com/in/lyndonpanton/" target="_blank">LinkedIn</a>
                </li>
                <li class="project-list-item">
                    <a href="https://github.com/lyndonpanton" target="_blank">GitHub</a>
                </li>
                <li class="project-list-item">
                    <a href="https://lyndonpanton.co.uk/" target="_blank">Website</a>
                </li>
            </ul>
            <ul class="project-list">
                <li class="project-list-item project-list-heading">
                    Languages and Frameworks
                </li>
                <li class="project-list-item">
                    <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank">HTML</a>
                </li>
                <li class="project-list-item">
                    <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank">CSS</a>
                </li>
                <li class="project-list-item">
                    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">JavaScript</a>
                </li>
                <li class="project-list-item">
                    <a href="https://www.php.net/" target="_blank">PHP</a>
                </li>
            </ul>
            <ul class="project-list">
                <li class="project-list-item project-list-heading">
                    Packages and Libraries
                </li>
                <li class="project-list-item">
                    <a href="https://fontawesome.com/" target="_blank">Fontawesome</a>
                </li>
                <li class="project-list-item">
                    <a href="https://fonts.google.com/" target="_blank">Google Fonts<a>
                </li>
            </ul>
            <ul class="project-list">
                <li class="project-list-item project-list-heading">
                    More Projects
                </li>
                <li class="project-list-item">
                    <a href="https://github.com/lyndonpanton/portfolio" target="_blank">Portfolio</a>
                </li>
                <li class="project-list-item">
                    <a href="https://github.com/lyndonpanton/task-list" target="_blank">Task List</a>
                </li>
                <li class="project-list-item">
                    <a href="https://github.com/lyndonpanton/word-counter" target="_blank">Word Counter</a>
                </li>
                <li class="project-list-item">
                    <a href="https://github.com/lyndonpanton/currency-converter" target="_blank">Currency Converter</a>
                </li>
            </ul>
        </section>

        <section id="data">
            <ul id="data-legal">
                <li><a href="#" target="_blank">Privacy Policy</a></li>
                <li><a href="#" target="_blank">Terms and Conditions</a></li>
                <li><a href="#" target="_blank">Cookies</a></li>
            </ul>

            <ul id="data-social">
                <li><a href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </section>
        
        <p id="copyright">
            &copy; <?php echo date("Y"); ?> Lyndon Mykal Panton
            | All Rights Reserved
        </p>
    </footer>
</body>
</html>
