<?php

// Buat function askName
// parameternya $nama
// askName("Reyhan"); // Namamu adalah Reyhan


function askName($name)
{
    $format_name=ucwords(strtolower($name));
    echo "Namamu adalah $name";
}
askName("Reyhan");
