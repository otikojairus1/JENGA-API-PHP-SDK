<?php
// use this code to pay a merchant who has an equity till
$url = "https://uat.finserve.africa/v3-apis/transaction-api/v3.0/tills/pay";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer eyJhbGciOiJSUzUxMiJ9.eyJ0b2tlblR5cGUiOiJNRVJDSEFOVCIsImVudiI6IlVBVCIsImV4cCI6MTY0ODg0NTQwNCwiaWF0IjoxNjQ4ODQ0NTA0LCJhY2NvdW50IjoiNDQ2OUY0RTdBQzRCRkEzMjM3QjY1Q0FFQjJENzI0N0VENEIxNkJERkU5NkJEMjM3RkM1REMwQzQ3OUFCMkNGNTgyNUNGNjFGMTNDMjk3NjQxRTdBQ0M0OUM5NTRDRENCRFdJRmZWZkl2VCs0U3ZibTdEeGRxUDA1MlRwdUh6MGdKKzY4OU5WOTVUK01aYTNKOFd1c0NuZUg5aThpQlB0T2VzMHZLdDV1eC91OHFoem5TbjFUb3BsWGtkZDduSGlrRHY2eU1MUEprbFZRSlduTFpqTGx4N3RTc2ZXcm5UYkVaL2c1dEVmMzM2bjMwSHMwMXVjQkpWVVo1SEh5QnlDRXBQV2RuQTE0VlNjcmJoMHR5KzVWZ1l4UllMOTlUUkpXeEJvUHRSbTBZZHlnWGMxVGkwU2xqY1ZmVDI0bU9BUlNGS21tZUxQNHMza3Y2RkFWTVl4NmErUnE0MTJUdWtSaGNXdjJ2WFlhbE5wNDJqTjNuVFZUQVBVSFFnMmJLN0pwVklRMENrbU9ra1VOVCtDWHRmYWhhTWY4ZXFHNkcxSmsvdzZNZElnT0NXeExraVhHemtBVytVUXp3SE9DOHUramwzNG9ObHFDajRFSGpuY1BLYTE1TjYwc3JIVDk2WllDc3daM0ZoYWc3bGVBZGlCVFhWc0pUYU9PdXBkdVRBMmlzdDZEUnRUVmp6QT0ifQ.JfepMAELwz2d7derbVLJiBkyR8kk6oRkQczYGcJMwJI-PnAz-ywzXr4Z2NNSxwLvUSQRteKrTyheIK_rdDv7MKUP24PzuJPRAyWIlC4irieKsApH8P5HGqLljMzQ53Ze1kdX3Hm8uudYVXIESjZdCQiau9uqKa4r8xWvi3al4OewMo0xaGwswfh2KEyAGlboxokgBMeIKs3eaHXtE7uoBfUHEwulzLdmffmtpSHBd9Zrt6X7IFwcH28PzwqTjiL9IbQAIZR3ECRsLAjqWTYDSZAbmBu_rhMZsY4FpeF9NVX6UL9nfu2QlUPhTk_bp9J7pRYt2nYwP1BD6AKbCOkw2g",
   "signature: e967CLKebZyLfa73/YYltjW5M4cHoyWeHi/5VDKJ64gOwKBvzHJRqJJrBBc34v2m4jyKkDMBtfRJeFlxbNisMAeBtkw0TRcD2LThFK27EOqLM3m8rQYa+7CJ2FhPhK+iOa4RUY+vTfkRX5JXuqOW7a3GHds8qyPaPe19cKUY33eAJL3upXnGnA3/PEhzjhb0pqk2zCI7aRzvjjVUGwUdT6LO73NVhDSWvGpLEsP0dH/stC5BoTPNNt9nY8yvGUPV7fmaPSIFn68W4L04WgePQdYkmD1UPApGcrl+L2ALY3lPaRfI6/N+0Y3NIWQyLgix+69k7V4EGolqejWdion+9A==",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
   "merchant": {
      "till": "0760000000"
   },
   "payment": {
      "ref": "123509599123",
      "amount": "1000.00",
      "currency": "KES"
   },
   "partner": {
      "id": "0170199740087",
      "ref": "987646321"
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


<!-- expected response include -->


