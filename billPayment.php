<?php

// This API Provides Partners the Capability To Initiate Utility Bill Payments For Goods And Services

$url = "https://uat.finserve.africa/v3-apis/transaction-api/v3.0/bills/pay";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer eyJhbGciOiJSUzUxMiJ9.eyJ0b2tlblR5cGUiOiJNRVJDSEFOVCIsImVudiI6IlVBVCIsImV4cCI6MTY0ODgyNjM5MSwiaWF0IjoxNjQ4ODI1NDkxLCJhY2NvdW50IjoiNzUyRUJBMzM2OTZGOEE1QTNENThFMUU2QjhDQTM4MkVDREQ1N0I0NTA1N0NBMTY5MDE4MUUwQzQ0QUI5OUIyOTQ0QzIzODBCNTk1N0QxODA5QUM1NUI4Mzg4MzA4QTdGek1ocGJ2eUV0VFRDQnA2eHpqc0tCWjlOT0FHcjZJMFI0NExqVzJUblplU2FrV0U4cUhyNVUzSllyV1NxdFN2NlFvblA1MkFEdHR0U2o2S1JFUTJ3anJkRE5rL2N1bytZMnNnaTA1RGd3YTVMd2I1ZE92WGkyNDBnaDAxNUxhNXg1NjJ0WFk3L2wzZURhLzg5UjF2NWFib2tPemFscXp2c0VPb3NQVVEzOENGdDBPY0hINktEYW5vNHlIWkptVDNwSk9oZW1CUHd2N3JPTGtDcmtyUkNKbmdLN3QyMDkxeGpwVTVuakF3SVNoSlV2eGhvRElhVW1ENXdEMitUWGcrQ3kxSERETFNtTDlsdjJxbXVnNFlWT29NWEgrMit1eW9GNHk0TVFBdm8wc3dXTGNHV2RDTmFpaEVMbUR4KzVqeHhYL1F0djBDNWNwS0VXQndXMGh0ZlJ2eUJDd0xkNW92MWJvTjBjVmNIV3I0UmRMb1hGUWVoNGxyZVpFZXBrTEtQRmI2eWo2YzNSaDZxeEV0d3A1bU9nQXJMSE0xKzZpbW9DTlB3SkEwMEc3bz0ifQ.R98SGa2TKN642l1aOMt1ozqHiREc3h7h7FpVRlvWLk5UB5a_KWSCeZtOilUsxD2lzn-cNh8b_Uviv3KMyuoy-__89uPZdFTxuTTyncYXaX2pS063nza3WUBJqJRLsJY1EMIitc7251X3BiHJCjUR-LwbmbtjDf0EoibdkMnyd_kkQdIK2rBstcky3lvphGYG3OwE0-QWxLq4HoYbMyFAZW9EQ4Z7CIv8gnPZJ44jb22Ecku0HYtsdSjIo93l6BQBgI3ro8tTpFlcP5RWv7NoolhQ7q6c68dpwJJvA5oAKqCVxLRxPoW6O-_zg1YWBEq1z7Q6baeLGMht25DdPcJ-tQ",
   "Content-Type: application/json",
   "signature: huKUSJ1mKy67ptMCDHgSADgPmN8h6Wm5ZYKfLoTJSHWDtA+i2Ra1e3Wc12Pp3Z/Nk+g2JcTGrvWPVw3BCae9QiFI8YpU+GPvezIOmOJvZupo09khePH2nz8TZGKuR6mRhcXd1RNc4dnE6UQbAeqpqPoXbJwOA+02RtfhSDJeLao9bRat4vGWTAlWe/T+mgzMvudeeIpToZLMvBtUVVlLuZFyQb0GeeW9YOghEqfgyzC+6Gpjtg9lnZfDDdAc3fFnGSZ3S0hgaalK94RZSNuF/7OCFKHm5Rv2Q+X91YSqL3Ka3YKkiDfS8kE2w0/8GsWp5WrZo/n3NUTkFonVvucb6w==",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA

{
     "biller": {
          "billerCode": "320320",
          "countryCode": "KE"
     },
     "bill": {
          "reference": "1112522",
          "amount": "100.00",
          "currency": "KES"
     },
     "payer": {
          "name": "A N.Other",
          "account": "111222",
          "reference": "1846829473618",
          "mobileNumber": "0763000000"
     },
     "partnerId": "0170199740087",
     "remarks": "paid"
    
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

<!-- expected response body -->

<!-- {
    "transactionId": "123456729123",
    "status": "SUCCESS"
} -->

