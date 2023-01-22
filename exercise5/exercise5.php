<?php

// 5. Parašykite programą, kuri Jūsų susigalvotus duomenis paimtų iš failo ir atspausdintų terminale. (1.5 balas)

$data = "data.txt";
$print = file_get_contents($data);
echo $print;


