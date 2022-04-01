<?php

// This webservice returns all EazzyPay merchants .

$url = "https://uat.finserve.africa/v3-apis/transaction-api/v3.0/merchants?page=2&per_page=10";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer eyJhbGciOiJSUzUxMiJ9.eyJ0b2tlblR5cGUiOiJNRVJDSEFOVCIsImVudiI6IlVBVCIsImV4cCI6MTY0ODg0Njk2MSwiaWF0IjoxNjQ4ODQ2MDYxLCJhY2NvdW50IjoiRDI3MzA1OUU0OERGQjZFMzVBNkRDQUMwOEQxODU2QUY0QzRFMEVCQkI2NzQ1QUZCQUE2MDA1RUY1MEIzMURBMkZGQ0Y1MzgyNzNCOTYxN0I3MEY3NDQxNTcyMzI0MEY1NzQrVGdGaEZjV1paS2hlTkkwTUJrdmNqdFA4czBJOUtCSkRlM0lyaDBQaGNGc1NSWndoWnJLdHJaOE1vbjNpR21naWZLUmpNUWpQS3V5ZDRhdVdiT1ZEelA5NEtQVnJ1RTNja29aTElEL1RONTU1ZkJKTzBvbFpEY3Y4NzhoN0IzU0NVOVFKMEM3cGxaSTgxeG1oT3R5QWdrTGtybkltR3J0TndqenpVanc5OEFMQ1FNMnZRV0pWYnV5VGd1TnUrUzFPVDNSRzRCRDRxclNaeXoxWUlSOVByTXhZR1lXakZ4RWh0Wk1aZjBUM3R0VTF1WE82Vks4eUtEUHdOVUpwMktWRGZldjZERUZMd3FFU2VDb1hlV3JWRUozQnM2VDlXUlo1aVNVYWxKVVpyNmx1aTdHZVlUcE82QnpKeThlUHhNeHRiVTg2L1NvMGJWaGE2ZUxuR25LY3c5VUJZbUFSY2o4VXczMzhnaXBYNXNHbmx4N1JaZHZnazNqS2E2MXpOS3IvN3UxWGpYelJjdVdOMmtQUng3V05ibHljMlROaHBkS0dDTW9UWXllbz0ifQ.T_ksaXuOlWZp8rNmBn3QgBGQRBww0RIgNANudEIttCTu9Ty4D7gAUbo7OzmTcOmF1LSOuLrRETMomxhZdmX6b8Hp7icQh341kup3-OkIroMz4UsbDCtpzVNC3SEw_pZnp0ldzK_YevOUXzu1OkL_4Kf5ty5lJ45GtLm5uND6TfKtfdeic-0CB8AHi40eefO6tWaqWi59hw9_rrXMg0GDcs0DEo0rzmWW7oGm1kJ9UqyadriBJdvoOiYaSTp2SPJZ5cEO1FXSa7hRqScL_-Ec8YaDbBacusUYQSu8dC4Agb8dLSJ2RnMxO-1QAOtlatPua8_co4ktMAJ_8rOrP7TgKg",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>

<!-- response from equity should look like this -->

<!-- 
{
  "status": true,
  "code": 0,
  "message": "success",
  "data": {
    "merchants": [
      {
        "name": "PATSAM PRESTIGE TYRES LIMITED",
        "tillNumber": "254766788066"
      },
      {
        "name": "HELLEN WANGARE MWANGI",
        "tillNumber": "254766224946"
      },
      {
        "name": "ANTONY  KIOKO MUNYAO",
        "tillNumber": "254766921730"
      },
      {
        "name": "NIKKI INVESTMENTS",
        "tillNumber": "254766700125"
      },
      {
        "name": "SAMUEL NDEGWA KANGARA",
        "tillNumber": "254766692729"
      },
      {
        "name": "SPRINGS GENERAL PLUMBERS",
        "tillNumber": "254766922120"
      },
      {
        "name": "MAHANGA VILLAGE YOUTH BUNGE",
        "tillNumber": "254766692469"
      },
      {
        "name": "JOY STEEL STRUCTURE AND AUTO SPARE",
        "tillNumber": "254766923211"
      },
      {
        "name": "ELIZABETH NYAGUTHII MAINA",
        "tillNumber": "254766910042"
      },
      {
        "name": "SHERRY MWENDE NZUVI",
        "tillNumber": "254766921496"
      }
    ]
  }
} -->
