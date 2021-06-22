<?php
function kelulusan($_nilai){
    if ($_nilai > 55 && $_nilai <=100 ){
        return "Mahasiswa Lulus";
    } else{
        return "Mahasiswa Tidak Lulus";
    }
}
function grade($_nilai){
    if ($_nilai >= 85 && $_nilai <= 100 ){
       return $_grade = "A";
    } elseif ($_nilai >= 70 && $_nilai <= 84){
        return $_grade = "B";
    } elseif ($_nilai >= 56 && $_nilai <= 69){
        return $_grade = "C";
    } elseif ($_nilai >= 36 && $_nilai <= 55){
        return $_grade = "D";
    } elseif ($_nilai >= 0 && $_nilai <= 35){
        return $_grade = "E";
    } else{
        return $_grade = "I";
    }
}
function predikat($_grade){
    return $_grade;
}
?>
