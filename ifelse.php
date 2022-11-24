<?php

$nilai = 59; 
echo "Nilai: {$nilai} <br>";

if($nilai >=90){
    echo "Predikat A+";

}
 else if ($nilai >=80){
    echo "Predikat A";

}
else if($nilai >=70){
    echo "Predikat B+";

}
else if($nilai >=60){
    echo "Predikat B";

}
else if($nilai >=50){
    echo "Predikat C+";

}
else if($nilai >=40){
    echo "Predikat C";

}
else if($nilai >30){
    echo "Predikat D";
}
else{
    echo "Predikat E";
}
?>