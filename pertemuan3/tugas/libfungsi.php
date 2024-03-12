<?php

function kelulusan($rata){
    if ($rata > 55) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
    
}
function predikat($grde){
    switch ($grde) {
        case 'A':
            return "Sangat Memuaskan";
        case 'B':
            return "Memuaskan";
        case 'C':
            return "Cukup";
        case 'D':
            return "Kurang";
        case 'E':
            return "Sangat Kurang";
        default:
            return "Tidak Ada";
    }
}


function grde($rata) {
    if ($rata <= 100 && $rata >= 85) {
        return "A";
    } elseif ($rata <= 84 && $rata >= 70) {
        return "B";
    } elseif ($rata <= 69 && $rata >= 56) {
        return "C";
    } elseif ($rata <= 55 && $rata >= 36) {
        return "D";
    } elseif ($rata <= 35 && $rata >= 0) {
        return "E";
    } else {
        return "I";
    }
}


?>