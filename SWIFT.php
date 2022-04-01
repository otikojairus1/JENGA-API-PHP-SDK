<?php

//The swift web-service enables your application to send cross-border remittances ::.

$url = "https://uat.finserve.africa/v3-apis/transaction-api/v3.0/remittance/swift";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer eyJhbGciOiJSUzUxMiJ9.eyJ0b2tlblR5cGUiOiJNRVJDSEFOVCIsImVudiI6IlVBVCIsImV4cCI6MTY0ODg0NDQ1NywiaWF0IjoxNjQ4ODQzNTU3LCJhY2NvdW50IjoiQURGOUY1NDlGNDExNDE3RDA4NjREODAxQjQ0NzEwNTFCQzM1QTBFNEFGMEJDRjY1RjE2NkZCNTU4Njg1RTY3QTc2OTI0QzVDNjI4NENERTc4QjJGREExMUM1QURCNjgwajhxY2pHeS84azRTa29FUWpEKzcrMVpaemkrNmRFMm9SVXVzTGkwQVZYQ3pkRkdmR0sreXFxQ2gwK1k2eW1tUmNML1NpN3I4cm16SUg1cS9iTWJkVU5HcG92VmZUOEZGeGRtWnAxT1dCUHBZc2lIbUZKTlZlcTlUUFZNQlFTOEJUQkFxTlM1S05tbSswR2I1cVNqYTIzZTRWNHU5aFpSZE1GeUIrWEcwVjVWcnd0NkszcExqOC9qRXpGZ2ZubGZTYmdJZnNkM3B0QWFlNW1TcGJJYmZRUEw4YVNIMjlISXNXWU1vT0E1bXhVek0vYXdDL1Mra3ZJb3l5ek81ZlFkdmtXbFkzb1oxeGo5ZEdQWjlYYk9ZOG5RK3lGbjZrMXlxUVlOeENWbmFMRFY1azJpZU5QeEZMRDVxOS9NcEd3MGo5c2xvNDZqUFAraGhtK1BMM1h4WmNZYllnWmVxZXdWMHdlQ0dhZG52TE5RQXpDU0swazYwWFlKTmZXV3R1VUxUUklJWnhHRS9GN3loR09tUEF5S0RLVzNkSFJqU1NsYW1sVUhpdTZRQlE5WT0ifQ.BaysRFJjPYxILOT-rg-j7QCPEAQ3xGqN5LuE-j2sNM4wIXcIhOVD3k4lsUbOYmab4f0dU26dC_65zBAg0G8jGnJ9j_tukPALoi7R5JdS6JTUFIU2jrK1Qiros-8F2C06xm1mUgby2dNSI2QfnEimPTXg4yNRl7Lj3XC3DriNdWmpoCvVAH9kHSSVsR9Usoh0qRwjo1K2_5NFEb55ki8oMRKM2YVIjnjAYv4-Ii56AkRfBM4V0yxKuJveaB4VdZa4k2iCYJbTabgsxuVJ6H6-z4p-hi9R7ZrtKStXzJ_3DBTvHaim3LPMGIvHe_tFFS3K3IJ4wO2NxNqWMiKQozdnww",
   "Content-Type: application/json",
   "signature: huKUSJ1mKy67ptMCDHgSADgPmN8h6Wm5ZYKfLoTJSHWDtA+i2Ra1e3Wc12Pp3Z/Nk+g2JcTGrvWPVw3BCae9QiFI8YpU+GPvezIOmOJvZupo09khePH2nz8TZGKuR6mRhcXd1RNc4dnE6UQbAeqpqPoXbJwOA+02RtfhSDJeLao9bRat4vGWTAlWe/T+mgzMvudeeIpToZLMvBtUVVlLuZFyQb0GeeW9YOghEqfgyzC+6Gpjtg9lnZfDDdAc3fFnGSZ3S0hgaalK94RZSNuF/7OCFKHm5Rv2Q+X91YSqL3Ka3YKkiDfS8kE2w0/8GsWp5WrZo/n3NUTkFonVvucb6w==",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA

{
     "source": {
          "countryCode": "KE",
          "name": "John Doe",
          "accountNumber": "0170199740087",
          "sourceCurrency":"KES"
     },
     "destination": {
          "type": "bank",
          "countryCode": "KE",
          "name": "A N.Other",
          "bankBic": "BOTKJPJTXXX",
          "accountNumber": "12365489",
          "addressline1": "Post Box 56",
          "currencyCode":"USD",
          "currency":"USD"
     },
     "transfer": {
          "type": "SWIFT",
          "amount": "10000.00",
          "currencyCode": "USD",
          "reference": "699198970798",
          "date": "2018-08-16",
          "description": "some description here",
          "chargeOption": "SELF"
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

