document.addEventListener("DOMContentLoaded", function (e) {
    /* Use localStorage API to save last used from and to currency */

    // https://en.wikipedia.org/wiki/Template:Most_traded_currencies
    // https://www.trade-tariff.service.gov.uk/exchange_rates/view/2025-1
    const gbpExchangeRates = {
            "usd": 1.2707,
            "eur": 1.2106,
            "jpy": 195.2761,
            "gbp": 1,
            "cny": 9.2567,
            "aud": 2.0121,
            "cad": 1.8203,
            "chf": 1.1359,
            "hkd": 9.8746,
            "sgp": 1.7165,
            "sek": 13.9198,
            "krw": 1826.2589,
            "nok": 14.2560,
            "nzd": 2.2176,
            "inr": 107.9353,
            "mxn": 25.6033,
            "twd": 41.3379,
            "zar": 22.9334,
            "brl": 7.7852,
            "dkk": 9.0323,
            "pln": 5.1534,
            "thb": 43.4740,
            "ils": 4.5508,
            "idr": 20468.8499,
            "czk": 30.4244
    };

    const currencySymbols = {
        "usd": "$",
        "eur": "€",
        "jpy": "¥",
        "gbp": "£",
        "cny": "¥",
        "aud": "AU$",
        "cad": "CA$",
        "chf": "F",
        "hkd": "HK$",
        "sgp": "S$",
        "sek": "kr",
        "krw": "₩",
        "nok": "NKr",
        "nzd": "$",
        "inr": "₹",
        "mxn": "Mex$",
        "twd": "NT$",
        "zar": "R",
        "brl": "R$",
        "dkk": "kr.",
        "pln": "zł",
        "thb": "฿",
        "ils": "₪",
        "idr": "Rp",
        "czk": "Kč",
    }

    let output = document.getElementById("value-to");
    let converter = document.getElementById("converter");
    converter.addEventListener("submit", handleSubmission);

    function handleSubmission(e) {
        e.preventDefault();

        const formData = new FormData(e.target);
        const values = Object.fromEntries(formData);
        convertCurrency(
            values["currency-from"],
            values["currency-to"],
            values["value-from"],
        );
    }

    function convertCurrency(currencyFrom, currencyTo, valueFrom) {
        let fromExchangeRate = gbpExchangeRates[currencyFrom];
        let toExchangeRate = gbpExchangeRates[currencyTo];
        let toSymbol = currencySymbols[currencyTo];

        let exchangeResult = (toExchangeRate / fromExchangeRate) * valueFrom;
        exchangeResult = exchangeResult.toFixed(2);

        output.textContent = toSymbol + exchangeResult;
    }
});
