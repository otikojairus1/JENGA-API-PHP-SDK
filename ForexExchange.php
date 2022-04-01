<?php

// The Foreign Exchange Rates API Provides Easy Access To The Equity Bank Daily 
//Currency Conversion Rate For Major Currencies

$url = "https://uat.finserve.africa/v3-apis/transaction-api/v3.0/foreignexchangerates";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer eyJhbGciOiJSUzUxMiJ9.eyJ0b2tlblR5cGUiOiJNRVJDSEFOVCIsImVudiI6IlVBVCIsImV4cCI6MTY0ODg0OTA0NSwiaWF0IjoxNjQ4ODQ4MTQ1LCJhY2NvdW50IjoiM0MzN0NFRkIyODZCNTk5MEU0QzUxMTQ5Q0ExM0IyQjAyNDlGRjExMzlFNDVGMzYwRjJFRjJBOTE5OUZBRjUwNjk2NEJFRUExOUQwNTg2OEU5Q0MxRDUwRDgwNzM3ODIzRnFvMXFsdVZpQ3dQMWV3QnlGWkNXOWpOQXNWSHA1M0lDYVI2SUNqOXN0REtIZ3FlQjE2MzFnTnl1bDVUcG9RNCtmaFEzSm4vZjNJSHdWZUEwZTF2YWdxcmRMNWFXRTJFaVdpRlcyelJQeWhkdWhweE4wQWsyNUpNMmF0QXZsWGJhZGJhWXdaUlQwbDJzS2dTWXlmVXdXNlYzUFlZdlFKbWNvTll0K0VpUy9DTTFBMlJJVDlDd0gwT1Y5cUtyUDIrcnFrWTA0U0lCWDVmZ3gwSStpOXlYTXhRazV6RjBDelNtMmh2Skg1aHpOZGdwZWFPRmtEdmFIdVRtSUM0cENKQnBZa1R1ODcwNzN4b1ppQlltc2xDQlc2ckNIYzY3Njh5VmJHd3JMWlZuTjlMelFhTnVBd0s1c201Z0c3MlRZMENidVhUSENYbGxyYWUzWFVrejA2VnVUaUVTVDA2M3JieWVjL3hyZE1kYWh1Yk90VmxGdFdlSG92OGZXdnZHUWtzWEJhRnAyc2NhODFnbVZ3MVpJMkpTM21ySEZzeWl3NllDenVVVFluMzhwQT0ifQ.oZNkvYsb4Y43IPTKq2i9WkDRRzRRPDz49JHg65A6_GI4Ce2788NcdjwPzMcJqzgyKN8xoMM08X7v72O7NYWiatyp-CNfDlH4awRq5Hvd8gZAEIZz2qsPNaIOrvrQ9YP7UrBvSUn558NewAQI0in9vtv22JFKPznQuEqNqO2F7NEUEzRrGlqMpyE9ektR5-RmjG4Ew4g0oZnK-xXiSwAjG8FFfdDoE1iqJz31v91Ag4ggQfhtajUxO9gTrXD60iH1-Is6iABC6uWLVEOlHpTIXRFOKxzKSbX7iVpvkcsLF5boIIahy_U5xfHqkSMY4ukfUyGaPsPnAObBMVxoAXdoXg",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA

{
     "countryCode": "KE",
     "currencyCode": "USD",
     "amount": 1000,
     "toCurrency": "KES",
     "accountNumber": "0170199740087"
}

DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>

