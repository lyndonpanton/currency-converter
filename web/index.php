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

    <!-- <link rel="icon" type="image/x-icon" href="" />/ -->
    <title>Currency Converter</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Jost:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <!-- icon library -->
    
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <script type="text/javascript" src="./js/script.js"></script>
</head>
<body>
    <header>
        <h1>Currency Converter</h1>
    </header>

    <main>
        <form action="#" id="converter">
            <select name="currency-from" id="currency-from">
                
            </select>

            <input type="number" name="value-from" id="value-from" min="0" step="0.01"/>

            <select name="currency-to" id="currency-to">

            </select>

            <input type="submit" value="Convert" />
        </form>

        <p id="value-to"></p>
    </main>

    <footer>

    </footer>
</body>
</html>
