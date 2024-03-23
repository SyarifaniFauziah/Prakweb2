<?php

// menangkap velue form berdasarkan unique name
$nim = $_POST ["nim"];
$nama = $_POST ["nama"];
$jk = $_POST ["jk"];
$prodi = $_POST ["prodi"];
$skill = $_POST ["skill"];
$domisili = $_POST ["domisili"];
$email = $_POST ["email"];

$nilai = 0;
foreach ($skill as $data) {
    switch ($data) {
        case 'html':
            $nilai += 10;
            break;
        case 'css': 
            $nilai += 10;
            break;
        case 'js':
            $nilai += 20;
            break;
        case 'rwd':
            $nilai += 20;
            break;
        case 'php':
            $nilai += 30;
            break;
        case 'python':
            $nilai += 30;
            break;
        case 'java':
            $nilai += 50;
            break;
                    
        default:
            
            break;
    }
}

echo "<h4>Informasi yang di kirim: </h4>";
echo "NIM : $nim";
echo "<br>Nama : $nama";
echo "<br>Jenis Kelamin : $jk";
echo "<br>Program Studi : $prodi";
echo "<br>Skill : ";
foreach ($skill as $data) {
    echo $data. ", ";
}
echo "<br>Domisili : $domisili";
echo "<br>Email : $email";
echo "<br>Skor Skill : $nilai";

if ($nilai >= 0 && $nilai <= 40) {
    echo "<br>Keterampilan: Kurang.";
} elseif ($nilai > 40 && $nilai <= 60) {
    echo "<br>Keterampilan: Cukup.";
} elseif ($nilai > 60 && $nilai < 100) {
    echo "<br>Keterampilan: Baik.";
} elseif ($nilai >= 100 && $nilai <= 150) {
    echo "<br>Keterampilan: Sangat Baik.";
} else {
    echo "<br>Skor tidak valid.";
}


?>