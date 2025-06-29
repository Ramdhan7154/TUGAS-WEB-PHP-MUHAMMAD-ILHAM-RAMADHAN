<?php
$mahasiswa = [
    "001" => "mimin",
    "002" => "iam",
    "003" => "dimas",
    "004" => "raden",
    "005" => "luthfi"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Associative</title>
</head>
<body>

<ul>
    <?php foreach ($mahasiswa as $nrp => $nama) : ?>
        <li><?php echo "$nrp : $nama"; ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>