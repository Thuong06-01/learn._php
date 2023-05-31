<?php
//1. Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
function checknumber($number){
If ($number % 2 == 0){
    return "Số $number là số chẵn";
} else{
    return "Số $number là số lẽ";
}
}
 $number = 10;
 echo "bài 1:" ;
 echo checknumber($number);

//2. Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.

//3. Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
function checkyear(){
    $year = date('Y');

    if ($year % 2 == 0){
        return "Năm $year là năm chẵn";
    } else{
        return "Năm $year là năm lẽ";
    }
}

echo "bài 3:";
Echo checkyear();
//4. Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
function printnumber($number){
    for($i = 1; $i <= 100; $i++) {
        echo ($i." ");
    }
}
echo "bài 4:";
echo printnumber($number);
//5. Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %.
function hienthidayso($number){
    for($i=1; $i<=100; $i++){
        if ($i % 2 == 0) {
            echo "<b>" . $i . "</b> ";
        } else {
        echo($i. " ");
    }
}
}
echo "bài 5:";
echo hienthidayso($number);
//6. Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
function printyear($nam){
    foreach($nam as $nam_hien_tai){
        echo $nam_hien_tai . " ";
    }
}

$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
echo "bài 6:";
echo printyear($nam);
?>