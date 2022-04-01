<!-- This gives an application the ability to purchase airtime from any 
telco :iphone: in East and Central Africa. -->

<?php

$url = "https://uat.finserve.africa/v3-apis/transaction-api/v3.0/airtime";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer eyJhbGciOiJSUzUxMiJ9.eyJ0b2tlblR5cGUiOiJNRVJDSEFOVCIsImVudiI6IlVBVCIsImV4cCI6MTY0ODg0OTk2MiwiaWF0IjoxNjQ4ODQ5MDYyLCJhY2NvdW50IjoiRTY1QzMyNTQ2ODU1QzJBMUZEM0RCMzExQ0Q3QkNFMzZCOEREN0ZCMTQxRTM2QzQ1NjE3OEYyQUI3NDdGOTQwMzg1Qzk5RURDNUM2QUMyMEVBQjdERjAyQUZFRDA4Njg4UE9aS01WVHhzUzdvTG5iLzhHNUlSRlkwZkMxblUwWXo1UW4vVnFzb2R4R3hyNmUvcThPdnY1UkIvNzdSTXAwNGNNaGxBYytTN0tVRE1TUjd0NS8rYXZ0K2ZPUTByenpNR2ZPVTlnb1JrZUNLaWtSOXl5UXdzMlowclU2b2pyOFNVVFE4bHRNMGYwWEs2d0x1bVZJVmk1dTVlU0tKOC83ViszNnZ6Sjh5ZU5oWVk4Z0VnWEhndCtqcVRPSHhLcG03bWxQdnJaeWtKZEpRaSt2ZkdHMk44c0ZVcmVQQ3kvVTJGekVPdnJ5VzQybjBSUWFaOEJ1a3FiWlZLVlNETFlVNmNWZk4wS3NIc1Jsc3NwMHBxeVF3U3UvREEreFhyUysrWWNUcEhEL043UlNtektWWGgvdXpMQVdydW9BaWdqWjVUZnQwZXN1TUVtNEpMVmtkMzU3YkJydkxNWTB1b29UOEZOWUcvUkhDVkZvN0VQNGhtNDZUTjRSZ1YzQWF3U1pqN3JUUWNROXQyT0txbEhmUGdLSVZlQ0d1dmlBM3ExZFdhWlJteEZEMERKdz0ifQ.i5xABXzhC6xWwS9PrKbu24exB50GEpY8mAtzj2cozNRphS0EpkX8QQFjfoUSejDMyLLZTL3H7gX_fdt8hTAYb7RgPQnbKEaTXuX7JYChyC9s21j2Y5MfAosm8V0Stkd0wHZlxsmUoyAHc3Y-xyGt-NcmDQjrecSrjHNqHdch9F1OhE6dI9rL_QIco7UokRrUpVK0NxVnnBa-4wkZt7s3JKElNFvUNwIk0_Re0QQ7NE_UDCX6b_C7vFWVl-YkEs0UPwCplGDIlkyHM8ho1xwwO_lsUMgcYANcQZn1Vs5RsL4G5VlJrZH1aQIcoEnXB6SEwVS_SGmbOpaQCrxunQKV7A",
   "Content-Type: application/json",
   "signature: huKUSJ1mKy67ptMCDHgSADgPmN8h6Wm5ZYKfLoTJSHWDtA+i2Ra1e3Wc12Pp3Z/Nk+g2JcTGrvWPVw3BCae9QiFI8YpU+GPvezIOmOJvZupo09khePH2nz8TZGKuR6mRhcXd1RNc4dnE6UQbAeqpqPoXbJwOA+02RtfhSDJeLao9bRat4vGWTAlWe/T+mgzMvudeeIpToZLMvBtUVVlLuZFyQb0GeeW9YOghEqfgyzC+6Gpjtg9lnZfDDdAc3fFnGSZ3S0hgaalK94RZSNuF/7OCFKHm5Rv2Q+X91YSqL3Ka3YKkiDfS8kE2w0/8GsWp5WrZo/n3NUTkFonVvucb6w==",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA

{
     "customer": {
          "countryCode": "KE",
          "mobileNumber": "0722753364"
     },
     "airtime": {
          "amount": 100,
          "reference": "692194626708",
          "telco": "Safaricom"
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
<!-- {
    "referenceNumber": "4568899373748",
    "status": "SUCCESS"
} -->