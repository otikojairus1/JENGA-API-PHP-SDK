<?php

//The Real Time Gross Settlement (RTGS) web-service enables an application to send money
// intra-country to other bank accounts.

$url = "https://uat.finserve.africa/v3-apis/transaction-api/v3.0/remittance/rtgs";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer eyJhbGciOiJSUzUxMiJ9.eyJ0b2tlblR5cGUiOiJNRVJDSEFOVCIsImVudiI6IlVBVCIsImV4cCI6MTY0ODg0MzUwOSwiaWF0IjoxNjQ4ODQyNjA5LCJhY2NvdW50IjoiQjY5ODlCRDU4NDVGMDdENzdCMEM5NUQwQTAwNTJGMjNGQjU4MkNDQ0MyOEJCMURENUJGQ0ZFQjNCNjczNDdDOUUxQUYxNDMxOUYyQjgyODNDMUZFNjEyQjE0RjcyRUU1MWlESVpzSUU2V3UrcU1JbGFvaEdsQ0xTMTBqdTE0RE4vUlg2eXpPaWxOUkxXdWpSTlY0b3JXTGllNDdYSTBlWmJNSkU1bUEwN3I1d1pwaUoxQ2xLSmlZbmVBam9MWklWd2lsZHZTMnhkSEhla2JrNCswUjY3cDRlUFgvMkFwczR0MW5STWpHUlppNXFhaUsxTDM5bHc5TlpvTllNbGtJZUhUaWVqbXlxSkNMMlBnd3hoZytmOStTYi9WRVpocUVHQmNrd0NIcTY1N1diWFBxQURoUXRRL0s1cVRNL2lZWlJJMk45QjNOU2NSL2N5aEphejZlNnByajRyZmJVbmR1bjdsOExMcG41cXJHTExOc1ZYQ0JROE9HblYxMjV5V1l5ZDBldVV2N0dRSXprLytEK0xvcDVhS01hZ3ZNOUh6eWdOZFpiMGhCUmpyZDQydkNxRitkck16T3RzT3BkVjFTbFZFN0RKTy9LdHQ4RWprMXEvNGJCc290ZDlpQU5SdVlFK0x6WGFObzVBVkppSnpzQng1MlBmNU1WTmZSTldubmowbnp5U3JrOHVBMD0ifQ.iqH9H1LrcLV9NOsaIzAgiLu17ZfnRFny8JSusXZ0ov39o-zBowgrk4-oZzolazHLoPdboGRz1EWS0owe_g-B-K76oPmHZTHvtbUDtEoLSfMRLKjeg3spJd4i33e1BuY3q-EM30S3gIBCAh_mqEEoUm5EDqehTq42e5DZ59FZxvL-sJKK8MBzejHGHP337mzHNc8WPX4HKwqeaGFriJmLUowhCkgwbafUCQlmSn_q7EfjbjCdit10zBR8A9nclsyj-oUiVlAuygw_vBqppwea8F5G0O_XSK-rCast0w8-UNx1L2k-JgufstNu5jMrS9OndO3-H8ZYYwRaZl2qKuU8ig",
   "Content-Type: application/json",
   "signature: huKUSJ1mKy67ptMCDHgSADgPmN8h6Wm5ZYKfLoTJSHWDtA+i2Ra1e3Wc12Pp3Z/Nk+g2JcTGrvWPVw3BCae9QiFI8YpU+GPvezIOmOJvZupo09khePH2nz8TZGKuR6mRhcXd1RNc4dnE6UQbAeqpqPoXbJwOA+02RtfhSDJeLao9bRat4vGWTAlWe/T+mgzMvudeeIpToZLMvBtUVVlLuZFyQb0GeeW9YOghEqfgyzC+6Gpjtg9lnZfDDdAc3fFnGSZ3S0hgaalK94RZSNuF/7OCFKHm5Rv2Q+X91YSqL3Ka3YKkiDfS8kE2w0/8GsWp5WrZo/n3NUTkFonVvucb6w==",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA

{
     "source": {
          "countryCode": "KE",
          "currency": "KES",
          "name": "John Doe",
          "accountNumber": "0170199740087"
     },
     "destination": {
          "type": "bank",
          "countryCode": "KE",
          "currency": "KES",
          "name": "A N.Other",
          "bankCode": "01",
          "accountNumber": "256477685123"
     },
     "transfer": {
          "type": "RTGS",
          "amount": "1000.00",
          "currencyCode": "KES",
          "reference": "692195692798",
          "date": "2018-08-16",
          "description": "some remarks here"
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

