<?php
date_default_timezone_set('Asia/Jakarta');
 
// Buat RSA Key 1024 bit atau 2048 bit di Linux/FreeBSD 
// $ openssl genrsa 1024
// $ openssl genrsa 2048
$key = "MIICWwIBAAKBgQC52jSzsOH6HkyXv10vH0NNvG5zUMgx2S95cJ0zuglxzBscq+34
9ri0TQ+w8oqMszSB0VFYZq8kkzMdtqXl5Zkncw2cn3rJ2MNiah4FjagS1/KpzK/p
8QpX1mF1II0EV9Tqq5AWHlXgKLRdcGJK1tvW/8nzrfcdAgXDCqjAb2HMuwIDAQAB
AoGAawkwsQx+GP66PesIT8tBh9OuCNvNcGgU32vsHY5XQiK6upiKRYhSeASptM76
3G2ZH+rdXnxFAluEZOh8QxsoSIR2Xso0GINQsDfj+eMnISgiAavjpUjQt9EncaWe
5LjZ+cQoZpKmteHojENMmks0s4TycmoowCuM79LZAX8R4YECQQDlnukG4d+MsaP4
d0qJbeRtzAmTslOKKuoX7Dfqdf0Wo8IhatxtWM7ce9uv8BnHj4XfpBTe2O5K6wdr
UfbV5ByXAkEAzzQUESTjaPtdXk5h+zaSJmmgBRTpVechHaKwsnNq7rmo0tboxMH5
eSis3NF9MC/I3ejwvOtTJiP9D9Cgal7BfQJAf72e75g60D+G89QRYFEFUlu/PC5p
sSTcpEBifwnyqWSivAqB5EcSlbBF8CPHg7CBjn/uqGbQclc8AmVPx4AmswJAdIZd
IqcUHN3/zCFYiOZPmrqb+z+fWWf5/6iWpkSyRj6y6p9hmAVePvzY+fX16Tt2QxXV
DOlqgXCLyHETRb60IQJAWx88kJvd+IxHGfUmlLPbWwdH6pEQAhlSeF8QnLcPCshh
N0NQYgh75Ae/SG1+4ANQxnQguiJDGHF2Zvg83RpC+g==";
$issued_at = time();
$expiration_time = $issued_at+(60*60); // valid selama 1 jam
$issuer = "RestApiAuthJWT";
?>