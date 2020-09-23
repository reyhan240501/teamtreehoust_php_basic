<?php

$tanya=readline("pilih mana (yes/no) ?");

if($tanya=="yes")
{
    echo "kamu memilih yes";
}elseif($tanya=="no")
{
    echo "kamu memilih no";
}else // jika tidak memilih pada pilihan yang sudah tersedia
{
    echo "kamu tidak memilih pilihan yang tersedia !!!";
}

$menu=1;

switch($menu)
{
    case 1:
        echo "anda memilih angka 1";
        break;
    default:
        echo "Anda tidak memilih pada pilihan yang tersedia";    
}
