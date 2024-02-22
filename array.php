<?php

$animals = ['kucing', 'ayam', 'banteng', 'ikan'];
echo 'Ini hewan dengan index ke 1 : ' .$animals[1];
echo '<br>';
echo 'Ini hewan dengan index ke 3 : ' .$animals[3];
echo '<br>';
// mencetak seluruh data array menggunakan looping
foreach ($animals as $animal) {
    echo '<li>' .$animal. '</li>';
}