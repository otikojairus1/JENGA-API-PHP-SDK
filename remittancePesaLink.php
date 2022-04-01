<?php

// This API Provides Partners the Capability To Initiate Utility Bill Payments For Goods And Services

$url = "https://uat.finserve.africa/v3-apis/transaction-api/v3.0/remittance/pesalinkacc";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer eyJhbGciOiJSUzUxMiJ9.eyJ0b2tlblR5cGUiOiJNRVJDSEFOVCIsImVudiI6IlVBVCIsImV4cCI6MTY0ODg0Nzk2NCwiaWF0IjoxNjQ4ODQ3MDY0LCJhY2NvdW50IjoiNTQwNTlDQkFEMzIyMzUwQUMwRDNEREMyMTRCRDc0N0EzQkZCQTJDQ0E3RkZCMEUzMkVBQjZCRkQxRDE0OTVEMzg2RTYwOEEyRjI1MTBFREY2NUQ2RTZFMDlGNjk5OTQ1WmR6QndTSWpyemg0UGdmQlB0RDlOdGN1REIweGNBRHhjMVdCRHl2U2hOWk5QdkNsS1JqdmJRV0JCbVd2aitLU0RYYkdSb2NEOFg3SzVxdEU2am13SXBCVFVKZEJZOFdBT2V3L28xcUFmemE5SURNRitFa05acTNSZENhTkpVVGExM2FtVlpKbXFQdVFtUCtwZlRhZlp2SGVpWTJZb3pYcDE4eU9XSUk5bDNSWlNqQzVtaUx1Z2NoMHFxVldVU0pxNHZVczByKzJCQ1drM24vL2pqREEvUytvNXhMeEFGeThNdzNjb0FVZnltckUzOTd2TUdiVHhNa2ZoZUtXN3FYdGpKU1AwdU9mcVl1akdDdXloZFhWWlBFVllCRk5BVFo3dE91b1RaY0l6d2hpbEdyaGJwWFdwcmFJOFFwc2ZITTBsWEpBcHRPeitMUTAzMTUwQ21pMzEwVWpsckFXZjFaSys0T2tkSk1MYTVxL3JlZTM0SmpmTHBEdTl0dloycnYrMEdyV2VCdU5vQ0VvVFJnMVJ2REFlN0l4MjlGbjJxR1BjbldLcGF5bUFEdz0ifQ.B1YsL4-cGpZ4K53n0DNym7QdKK6xrxlutome4R6Zkxi7FxnwHobMv-QfhlP5kSKDabGCs22e2ndc4M5JBgZF8AWlz5Z5pO4HWvTWYSOpSUSWEkODVmrz1XB8hPMok4JE-D00mp4RIZ0Z3wkLAs6lvjAvpEqaR6RHavGETvCAEkQ6MoG-n7DkSWkpBqzk3YvkM9Rx_sTo8t3VlQ5lQacsLXwF494DAGq6pyFOhDCJci4O5lUyWRrRvmIyZ-vCH_mcU-hfatpu7EIa7tVlZqViKFyziKJ-vA2B7k9DqIn8NxRbUZ0IHUbcimyzORe73-v60z8Ix4n-sLICc4L8su584A",
   "Content-Type: application/json",
   "signature: huKUSJ1mKy67ptMCDHgSADgPmN8h6Wm5ZYKfLoTJSHWDtA+i2Ra1e3Wc12Pp3Z/Nk+g2JcTGrvWPVw3BCae9QiFI8YpU+GPvezIOmOJvZupo09khePH2nz8TZGKuR6mRhcXd1RNc4dnE6UQbAeqpqPoXbJwOA+02RtfhSDJeLao9bRat4vGWTAlWe/T+mgzMvudeeIpToZLMvBtUVVlLuZFyQb0GeeW9YOghEqfgyzC+6Gpjtg9lnZfDDdAc3fFnGSZ3S0hgaalK94RZSNuF/7OCFKHm5Rv2Q+X91YSqL3Ka3YKkiDfS8kE2w0/8GsWp5WrZo/n3NUTkFonVvucb6w==",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA

{
     "source": {
          "countryCode": "KE",
          "name": "John Doe",
          "accountNumber": "0170199740087"
     },
     "destination": {
          "type": "bank",
          "countryCode": "KE",
          "name": "A N.Other",
          "mobileNumber": "0722000000",
          "bankCode": "01",
          "accountNumber": "0170199740087"
     },
     "transfer": {
          "type": "PesaLink",
          "amount": "2000",
          "currencyCode": "KE",
          "reference": "692194423798",
          "date": "2018-08-18",
          "description": "some description"
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

