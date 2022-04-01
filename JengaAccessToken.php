<?php

$url = "https://uat.finserve.africa/authentication/api/v3/authenticate/merchant";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Api-Key: 1BVq+W1kGu+q1VraldOUjXJqVwlSde7EQGzcmTz8+GAAV0wKPHkI0uhVMJERexNNZ3f493FNOEfmVSq8qjyvbw==",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
"merchantCode": "1835512942",
"consumerSecret": "KE7hBy8Ok4I1v1h1pe1nQO289pCSqB"
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

<!-- returns the jengaHQ access token,,, example shown below -->

<!-- {
    "accessToken": "eyJhbGciOiJSUzUxMiJ9.eyJ0b2tlblR5cGUiOiJNRVJDSEFOVCIsImVudiI6IlVBVCIsImV4cCI6MTY0ODg0Njk2MSwiaWF0IjoxNjQ4ODQ2MDYxLCJhY2NvdW50IjoiRDI3MzA1OUU0OERGQjZFMzVBNkRDQUMwOEQxODU2QUY0QzRFMEVCQkI2NzQ1QUZCQUE2MDA1RUY1MEIzMURBMkZGQ0Y1MzgyNzNCOTYxN0I3MEY3NDQxNTcyMzI0MEY1NzQrVGdGaEZjV1paS2hlTkkwTUJrdmNqdFA4czBJOUtCSkRlM0lyaDBQaGNGc1NSWndoWnJLdHJaOE1vbjNpR21naWZLUmpNUWpQS3V5ZDRhdVdiT1ZEelA5NEtQVnJ1RTNja29aTElEL1RONTU1ZkJKTzBvbFpEY3Y4NzhoN0IzU0NVOVFKMEM3cGxaSTgxeG1oT3R5QWdrTGtybkltR3J0TndqenpVanc5OEFMQ1FNMnZRV0pWYnV5VGd1TnUrUzFPVDNSRzRCRDRxclNaeXoxWUlSOVByTXhZR1lXakZ4RWh0Wk1aZjBUM3R0VTF1WE82Vks4eUtEUHdOVUpwMktWRGZldjZERUZMd3FFU2VDb1hlV3JWRUozQnM2VDlXUlo1aVNVYWxKVVpyNmx1aTdHZVlUcE82QnpKeThlUHhNeHRiVTg2L1NvMGJWaGE2ZUxuR25LY3c5VUJZbUFSY2o4VXczMzhnaXBYNXNHbmx4N1JaZHZnazNqS2E2MXpOS3IvN3UxWGpYelJjdVdOMmtQUng3V05ibHljMlROaHBkS0dDTW9UWXllbz0ifQ.T_ksaXuOlWZp8rNmBn3QgBGQRBww0RIgNANudEIttCTu9Ty4D7gAUbo7OzmTcOmF1LSOuLrRETMomxhZdmX6b8Hp7icQh341kup3-OkIroMz4UsbDCtpzVNC3SEw_pZnp0ldzK_YevOUXzu1OkL_4Kf5ty5lJ45GtLm5uND6TfKtfdeic-0CB8AHi40eefO6tWaqWi59hw9_rrXMg0GDcs0DEo0rzmWW7oGm1kJ9UqyadriBJdvoOiYaSTp2SPJZ5cEO1FXSa7hRqScL_-Ec8YaDbBacusUYQSu8dC4Agb8dLSJ2RnMxO-1QAOtlatPua8_co4ktMAJ_8rOrP7TgKg",
    "refreshToken": "BwHIb+YMr/J24Vo5zHUC6h22fSYylxaXiFy3pi42NuSVqSagVgSDkQPhmUD+pvRIBDLkjgGXwRhBrQLMqhkH0Q==",
    "expiresIn": "2022-04-01T21:02:41Z",
    "issuedAt": "2022-04-01T20:47:41Z",
    "tokenType": "Bearer"
} -->