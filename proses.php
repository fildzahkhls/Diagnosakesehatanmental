<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Input data untuk gejala
$A = true;
$A1 = true;
$AS1 = true;
$B1 = true;
$B1_1 = true;
$B1_2 = true;
$B1_3 = true;
$B1_4 = true;
$B2 = false;
$B2_1 = false;
$B2_2 = false;
$B2_3 = false;
$AS2 = false;
$R1 = false;
$R1_1 = false;
$R1_2 = false;
$R1_3 = false;
$R1_4 = false;
$R2 = false;
$R2_1 = false;
$R2_2 = false;
$R2_3 = false;
$R2_4 = false;
$S1 = true;
$S1_1 = true;
$S1_2 = true;
$S1_3 = false;
$S1_4 = false;
$S2 = true;
$S2_1 = false;
$S2_2 = true;
$S2_3 = true;
$S3 = true;
$S3_1 = true;
$S3_2 = true;
$S3_3 = false;
$S4 = true;
$S4_1 = true;
$S4_2 = true;
$S4_3 = false;
$S5 = true;
$S5_1 = true;
$S5_2 = true;

// Define the rules and corresponding results
$rules = array(
    'P10' => $A && $A1 && $AS1 && ($B1 || $B1_1 || $B1_2 || $B1_3 || $B1_4),
    'P09' => $A && $A1 && $AS1 && ($B2 || $B2_1 || $B2_2 || $B2_3),
    'P08' => $A && $AS1 && ($S1 || $S1_1 || $S1_2 || $S1_3 || $S1_4),
    'P07' => $A && $AS1 && ($S2 || $S2_1 || $S2_2 || $S2_3),
    'P06' => $A && $AS1 && ($S3 || $S3_1 || $S3_2 || $S3_3),
    'P05' => $A && $AS1 && ($S4 || $S4_1 || $S4_2 || $S4_3),
    'P04' => $A && $AS1 && ($S5 || $S5_1 || $S5_2),
    'P03' => $A && $AS2 && ($R1 || $R1_1 || $R1_2 || $R1_3 || $R1_4),
    'P02' => $A && $AS2 && ($R2 || $R2_1 || $R2_2 || $R2_3 || $R2_4),
    'P01' => $A && $AS2 && ($R3 || $R3_1 || $R3_2 || $R3_3),
);

$result = 'Tidak ada aturan yang cocok';

// Check which rule applies
foreach ($rules as $rule => $condition) {
    if ($condition) {
        $result = $rule;
        break;
    }
}

echo "Hasil: $result";
?>

</body>
</html>