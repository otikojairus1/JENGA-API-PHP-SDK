<!-- This web service enables an application or service retrieve the current and available
 balance of an account -->

<!-- We currently support statements from Equity Bank (KE, SS, TZ, UG, DRC RW). One Web Service to rule 
access them all :muscle:. More banks, Card associations & Mobile wallets will be coming soon -->

<?php

$url = "https://uat.finserve.africa/v3-apis/account-api/v3.0/accounts/balances/KE/0170199740087";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer eyJhbGciOiJSUzUxMiJ9.eyJ0b2tlblR5cGUiOiJNRVJDSEFOVCIsImVudiI6IlVBVCIsImV4cCI6MTY0ODg1MTMwOSwiaWF0IjoxNjQ4ODUwNDA5LCJhY2NvdW50IjoiMkI1Qzc0OTM5QUQxOTE5NTY5MzVDRDRGM0E1NzlEMTIwMEM2NUE0RDBFNzI2NDA0MTlFNDBCRUIyRkEzREE3MTdFMEVFNEJGNjEzQ0Y4MEM4N0ExRjcyQTc2MkM4RTU5RXpQbU55bFUvMjZDeXpudmF6ZEFMRVFGVzBSdURITXJxNWRuZlJyUi9iTmFKYkhnTlh0K3Z3VnlQTkg4VzdxSlFIZVpPRU9FQ1E1UXlDcmIrRlVkSEM4Z1NOcHJkTG5mUWtvVmFYU3B1RlJtcDVpc2NjV01DZmtyQk13ZzQvNGNCQlBTeVRYZklyMXZrNm1wTk1oeGxvVVI0WVhxQ1EvWkVPNjhLUTdnMjl3dzJnam1vVUhwNkpoazZYN1VnUWJOa0djZmk2c3h0Mm9BbzhQQWFIR0dwd1dQZDNPWmE1K1BQakgvN1VaNVVzSkxHaDFnMEtlSWtLR3dwTFQ0ekRleDJxYUtmOTNvaHRRYzdjY3ZMSVVSY2dpN0tibVlhZlZkOGlaVHEwTEhocDJlTTR1OTUyUEo1bzdWZUVVZUtVZmtqMVhpRm1hWjdKMSs0VXRYT3M5MGVBNWZNTFhqMFlRbUl4eExSZEcybHY4Und5QkFFNXhrUGlvc1BCbHFEVUxRblpaeTdkTkpBZEhEMFpJZTQzUE4waTlnYzVoNWtxdkI2RndaNFFsK3lFYz0ifQ.CTnxpYiuvxr1jSINtD2EHw8nYQdeJltx53z-MUQCsR4KQGHyj-aEdmME05Ptp7QkreOSIl-F0kTMNxlTrNTqe3Yp1I_0leLDhx0HgMFHoe3v-oT1joYJpOHKHrqq8SG2u94xSA5LseqigGTbbxc6xRMduZU6AzplvX-j3_gaXySv1ISe9L9CPNjoovQC6YN8347gGjf4wn4Pst8htgl1mkiNj6KK2cq-ouikLzEFAQnl44ukh0BHclx7Tf9pM0pWAYgq-Urqg-GNfWHX1N2stY1c68euejCcBrB02JMD26UBc8epS3aOPSntsACnna2gkb1IUJa8-_76iVE9CwGYBA",
   "signature: huKUSJ1mKy67ptMCDHgSADgPmN8h6Wm5ZYKfLoTJSHWDtA+i2Ra1e3Wc12Pp3Z/Nk+g2JcTGrvWPVw3BCae9QiFI8YpU+GPvezIOmOJvZupo09khePH2nz8TZGKuR6mRhcXd1RNc4dnE6UQbAeqpqPoXbJwOA+02RtfhSDJeLao9bRat4vGWTAlWe/T+mgzMvudeeIpToZLMvBtUVVlLuZFyQb0GeeW9YOghEqfgyzC+6Gpjtg9lnZfDDdAc3fFnGSZ3S0hgaalK94RZSNuF/7OCFKHm5Rv2Q+X91YSqL3Ka3YKkiDfS8kE2w0/8GsWp5WrZo/n3NUTkFonVvucb6w==",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>



<!-- response -->

<!-- {
    "currency": "KES",
    "balances": [
        {
            "amount": "997382.57",
            "type": "Current"
        },
        {
            "amount": "997382.57",
            "type": "Available"
        }
    ]
} -->