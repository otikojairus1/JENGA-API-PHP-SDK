<?php

// This web service enables your application to query the various registrar of persons in the various 
//countries in East Africa. Currently available for Kenya and Rwanda only.

$url = "https://uat.finserve.africa/v3-apis/v3.0/validate/identity";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer eyJhbGciOiJSUzUxMiJ9.eyJ0b2tlblR5cGUiOiJNRVJDSEFOVCIsImVudiI6IlVBVCIsImV4cCI6MTY0ODg0OTA0NSwiaWF0IjoxNjQ4ODQ4MTQ1LCJhY2NvdW50IjoiM0MzN0NFRkIyODZCNTk5MEU0QzUxMTQ5Q0ExM0IyQjAyNDlGRjExMzlFNDVGMzYwRjJFRjJBOTE5OUZBRjUwNjk2NEJFRUExOUQwNTg2OEU5Q0MxRDUwRDgwNzM3ODIzRnFvMXFsdVZpQ3dQMWV3QnlGWkNXOWpOQXNWSHA1M0lDYVI2SUNqOXN0REtIZ3FlQjE2MzFnTnl1bDVUcG9RNCtmaFEzSm4vZjNJSHdWZUEwZTF2YWdxcmRMNWFXRTJFaVdpRlcyelJQeWhkdWhweE4wQWsyNUpNMmF0QXZsWGJhZGJhWXdaUlQwbDJzS2dTWXlmVXdXNlYzUFlZdlFKbWNvTll0K0VpUy9DTTFBMlJJVDlDd0gwT1Y5cUtyUDIrcnFrWTA0U0lCWDVmZ3gwSStpOXlYTXhRazV6RjBDelNtMmh2Skg1aHpOZGdwZWFPRmtEdmFIdVRtSUM0cENKQnBZa1R1ODcwNzN4b1ppQlltc2xDQlc2ckNIYzY3Njh5VmJHd3JMWlZuTjlMelFhTnVBd0s1c201Z0c3MlRZMENidVhUSENYbGxyYWUzWFVrejA2VnVUaUVTVDA2M3JieWVjL3hyZE1kYWh1Yk90VmxGdFdlSG92OGZXdnZHUWtzWEJhRnAyc2NhODFnbVZ3MVpJMkpTM21ySEZzeWl3NllDenVVVFluMzhwQT0ifQ.oZNkvYsb4Y43IPTKq2i9WkDRRzRRPDz49JHg65A6_GI4Ce2788NcdjwPzMcJqzgyKN8xoMM08X7v72O7NYWiatyp-CNfDlH4awRq5Hvd8gZAEIZz2qsPNaIOrvrQ9YP7UrBvSUn558NewAQI0in9vtv22JFKPznQuEqNqO2F7NEUEzRrGlqMpyE9ektR5-RmjG4Ew4g0oZnK-xXiSwAjG8FFfdDoE1iqJz31v91Ag4ggQfhtajUxO9gTrXD60iH1-Is6iABC6uWLVEOlHpTIXRFOKxzKSbX7iVpvkcsLF5boIIahy_U5xfHqkSMY4ukfUyGaPsPnAObBMVxoAXdoXg",
   "Content-Type: application/json",
   "signature: huKUSJ1mKy67ptMCDHgSADgPmN8h6Wm5ZYKfLoTJSHWDtA+i2Ra1e3Wc12Pp3Z/Nk+g2JcTGrvWPVw3BCae9QiFI8YpU+GPvezIOmOJvZupo09khePH2nz8TZGKuR6mRhcXd1RNc4dnE6UQbAeqpqPoXbJwOA+02RtfhSDJeLao9bRat4vGWTAlWe/T+mgzMvudeeIpToZLMvBtUVVlLuZFyQb0GeeW9YOghEqfgyzC+6Gpjtg9lnZfDDdAc3fFnGSZ3S0hgaalK94RZSNuF/7OCFKHm5Rv2Q+X91YSqL3Ka3YKkiDfS8kE2w0/8GsWp5WrZo/n3NUTkFonVvucb6w==",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA

{
     "identity": {
          "documentType": "12365478",
          "documentNumber": "25632548",
          "countryCode": "KE",
          "firstName": "Jairus",
          "lastName": "Otiko",
          "dateOfBirth": "2000-05-01"
     }
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



<!-- response -->

<!-- 

{
    "identity": {
        "customer": {
            "fullName": "John Doe ",
            "firstName": "John",
            "middlename": "",
            "lastName": "Doe",
            "ShortName": "John",
            "birthDate": "1900-01-01T00:00:00",
            "birthCityName": "",
            "deathDate": "",
            "gender": "",
            "faceImage": "/9j/4AAQSkZJRgABAAEAYABgA+H8qr6n4e1O71SGFbV/sEOF3O6/N/eb71d/FGkaBVXaq9KfRRRRRUMsKSIdyr0r/9k=",
            "occupation": "",
            "nationality": "Refugee"
        },
        "documentType": "ALIEN ID",
        "documentNumber": "654321",
        "documentSerialNumber": "100500425",
        "documentIssueDate": "2002-11-29T12:00:00",
        "documentExpirationDate": "2004-11-28T12:00:00",
        "IssuedBy": "REPUBLIC OF KENYA",
        "additionalIdentityDetails": [
            {
                "documentNumber": "",
                "documentType": "",
                "issuedBy": ""
            }
        ],
        "address": {
            "provinceName": " ",
            "districtName": "",
            "locationName": "",
            "subLocationName": "",
            "villageName": ""
        }
    }
}

 -->