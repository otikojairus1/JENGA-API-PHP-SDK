<!-- This API (first of its kind) aggregates all the Credit Reference Bureaus 
in East Africa as well as Equity Bank's own internal scoring to give a response on the 
credit worthiness (or not) of an individual. No need to perform countless integrations. 
This web service does it for you. -->

<?php

$url = "https://uat.finserve.africa/v3-apis/v3.0/validate/crb";

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
     "crbIdentity": {
          "nationalId": "37101932",
          "reportType": "Bank",
          "countryCode": "KE",
          "reference": "abc05RGTY64E1",
          "customerID": "37101932",
          "firstName": "Jairus",
          "lastName": "Anjere",
          "reportReason": "checking",
          "creditBureauCode":"2344"
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
    "Person": {
        "PersonName": {},
        "IdentityDocument": {
            "IdentityDocumentID": "1234568",
            "IdentityDocumentType": "National ID"
        }
    },
    "CreditAccountsSummary": [
        {
            "AccountIdentifier": {
                "AccountID": "0011547896523",
                "AccountCurrency": {}
            },
            "AccountType": "36",
            "AccountOpenDate": "17012014",
            "AccountOwnership": "true",
            "Balance": "0.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "65000.00000",
                "65000.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "5000.00000",
            "LastPaymentReceivedDate": "20062014",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "30062014",
            "AccountStatus": "F",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        },
        {
            "AccountIdentifier": {
                "AccountID": "0011547896523",
                "AccountCurrency": {}
            },
            "AccountType": "09",
            "AccountOpenDate": "09062011",
            "AccountOwnership": "true",
            "Balance": "106458.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "200000.00000",
                "200000.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "1667.00000",
            "LastPaymentReceivedDate": "15062018",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "30062018",
            "AccountStatus": "W",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        },
        {
            "AccountIdentifier": {
                "AccountID": "0011547896523",
                "AccountCurrency": {}
            },
            "AccountType": "36",
            "AccountOpenDate": "14052014",
            "AccountOwnership": "true",
            "Balance": "0.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "80000.00000",
                "80000.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "6960.00000",
            "LastPaymentReceivedDate": "15122014",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "31122014",
            "AccountStatus": "F",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        },
        {
            "AccountIdentifier": {
                "AccountID": "0011547896523",
                "AccountCurrency": {}
            },
            "AccountType": "36",
            "AccountOpenDate": "22092014",
            "AccountOwnership": "true",
            "Balance": "0.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "1000.00000",
                "1000.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "1000.00000",
            "LastPaymentReceivedDate": "15102014",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "31102014",
            "AccountStatus": "F",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        },
        {
            "AccountIdentifier": {
                "AccountID": "0011547896523",
                "AccountCurrency": {}
            },
            "AccountType": "36",
            "AccountOpenDate": "29122014",
            "AccountOwnership": "true",
            "Balance": "0.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "80000.00000",
                "80000.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "6666.67000",
            "LastPaymentReceivedDate": "16032015",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "31032015",
            "AccountStatus": "F",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        },
        {
            "AccountIdentifier": {
                "AccountID": "0011547896523",
                "AccountCurrency": {}
            },
            "AccountType": "36",
            "AccountOpenDate": "20032015",
            "AccountOwnership": "true",
            "Balance": "0.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "80000.00000",
                "80000.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "6666.67000",
            "LastPaymentReceivedDate": "16012016",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "31012016",
            "AccountStatus": "F",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        },
        {
            "AccountIdentifier": {
                "AccountID": "N:000019:01:2015",
                "AccountCurrency": {}
            },
            "AccountType": "23",
            "AccountOpenDate": "06012015",
            "AccountOwnership": "false",
            "Balance": "0.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "300000.00000",
                "300000.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "20562.00000",
            "LastPaymentReceivedDate": "27102017",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "31122017",
            "AccountStatus": "F",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        },
        {
            "AccountIdentifier": {
                "AccountID": "068-P-12365478",
                "AccountCurrency": {}
            },
            "AccountType": "04",
            "AccountOpenDate": "13102011",
            "AccountOwnership": "true",
            "Balance": "39844.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "40000.00000",
                "40000.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "2500.00000",
            "LastPaymentReceivedDate": "16072018",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "31072018",
            "AccountStatus": "W",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        },
        {
            "AccountIdentifier": {
                "AccountID": "068-P-25417854",
                "AccountCurrency": {}
            },
            "AccountType": "04",
            "AccountOpenDate": "19082015",
            "AccountOwnership": "true",
            "Balance": "0.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "50000.00000",
                "50000.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "2500.00000",
            "LastPaymentReceivedDate": "13022018",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "31072018",
            "AccountStatus": "F",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        },
        {
            "AccountIdentifier": {
                "AccountID": "0011547896523",
                "AccountCurrency": {}
            },
            "AccountType": "23",
            "AccountOpenDate": "02022016",
            "AccountOwnership": "true",
            "Balance": "0.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "80000.00000",
                "80000.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "6666.67000",
            "LastPaymentReceivedDate": "16122016",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "31012017",
            "AccountStatus": "F",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        },
        {
            "AccountIdentifier": {
                "AccountID": "2569774",
                "AccountCurrency": {}
            },
            "AccountType": "12",
            "AccountOpenDate": "02062016",
            "AccountOwnership": "false",
            "Balance": "0.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "3000.00000",
                "3000.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "3726.00000",
            "LastPaymentReceivedDate": "26122016",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "30062018",
            "AccountStatus": "F",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        },
        {
            "AccountIdentifier": {
                "AccountID": "11110571749286",
                "AccountCurrency": {}
            },
            "AccountType": "23",
            "AccountOpenDate": "14022017",
            "AccountOwnership": "true",
            "Balance": "0.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "120000.00000",
                "120000.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "10000.00000",
            "LastPaymentReceivedDate": "15112017",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "31122017",
            "AccountStatus": "F",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        },
        {
            "AccountIdentifier": {
                "AccountID": "JKCBDL1724301111",
                "AccountCurrency": {}
            },
            "AccountType": "12",
            "AccountOpenDate": "30082017",
            "AccountOwnership": "false",
            "Balance": "0.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "5400.00000",
                "5400.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "None",
            "LastPaymentReceivedDate": "None",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "13122017",
            "AccountStatus": "A",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        },
        {
            "AccountIdentifier": {
                "AccountID": "BCKMLD1802229762",
                "AccountCurrency": {}
            },
            "AccountType": "12",
            "AccountOpenDate": "08042018",
            "AccountOwnership": "false",
            "Balance": "0.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "5400.00000",
                "5400.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "None",
            "LastPaymentReceivedDate": "11062018",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "21062018",
            "AccountStatus": "A",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        },
        {
            "AccountIdentifier": {
                "AccountID": "MKDLCB1814647289",
                "AccountCurrency": {}
            },
            "AccountType": "12",
            "AccountOpenDate": "26052018",
            "AccountOwnership": "false",
            "Balance": "5400.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "5400.00000",
                "5400.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "5400.00000",
            "LastPaymentReceivedDate": "26052018",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "31052018",
            "AccountStatus": "W",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        },
        {
            "AccountIdentifier": {
                "AccountID": "MKCDLB1818039369",
                "AccountCurrency": {}
            },
            "AccountType": "12",
            "AccountOpenDate": "29062018",
            "AccountOwnership": "false",
            "Balance": "2150.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "2150.00000",
                "2150.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "2150.00000",
            "LastPaymentReceivedDate": "29062018",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "30062018",
            "AccountStatus": "W",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        },
        {
            "AccountIdentifier": {
                "AccountID": "MDLBBCK1821123688",
                "AccountCurrency": {}
            },
            "AccountType": "12",
            "AccountOpenDate": "29072018",
            "AccountOwnership": "false",
            "Balance": "2150.00000",
            "DelinquencyStatus": "No delinquency",
            "Original_Amount": [
                "2150.00000",
                "2150.00000"
            ],
            "PastDueAmount": "0.00000",
            "LastPaymentAmount": "2150.00000",
            "LastPaymentReceivedDate": "30072018",
            "NoofDelayed_Payments": "0",
            "PostedDateTime": "31072018",
            "AccountStatus": "W",
            "LoanAccount": {
                "PastDueDate": {},
                "LoanHighestDaysInArrears": {}
            }
        }
    ],
    "CreditBureau": {
        "score": "772",
        "creditApplications90Days": "0",
        "creditApplications180Days": "0",
        "creditApplications365Days": "0",
        "crbEnqiry90Days": "0",
        "crbEnqiry180Days": "0",
        "crbEnqiry365Days": "0",
        "BouncedCheques90Days": "0",
        "BouncedCheques180Days": "0",
        "BouncedCheques365Days": "0",
        "AcctNonPerformingCurrent": "0",
        "AcctNonPerformingHisto": "0",
        "AcctPerformingCurrent": "15",
        "AcctPerformingHisto": "NaN",
        "IsFraud": "false",
        "isGuarantor": "false",
        "delinquency_code": "No delinquency"
    }
} -->