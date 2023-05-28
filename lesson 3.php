<?php
//1. Viết chương trình PHP để kiểm tra xem một số có phải là số hiện tại hay không.
    Function iseven($number){
        If($number % 2==0){
        Return true;
    }
    else {
        Return false;
    }
    }
    $number=9;
    If(iseven($number)){
        Echo"$number this is even";
    }else{
        Echo"$number this is not even";
    }
//2. Viết chương trình PHP để tính tổng các số từ 1 đến n.
    function sumnumber($n){
        $sum=0;
        for($i=1;$i<=$n;$i++){
            $sum+=$i;
        }
        return $sum;
    }
    $n=10;
    $sum=sumnumber($n);
    Echo"<br>";
    echo"sum 1 between $n is: $sum";
//3. Viết chương trình PHP để ra bảng chương trình dài từ 1 đến 10.
function printTable() {
    for ($i = 1; $i <= 10; $i++) {
        echo "Bảng cửu chương " . $i . "<br>";
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo $i . " x " . $j . " = " . $result . "<br>";
        }
    }
}
printTable();
//4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function checkString($string){ 
    return strrchr($string);  
}
if (strrchr ("Hello world","hello")) { 
echo "true"; 
} 
else { 
echo "false"; 
} 
echo "<br>";
//5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function findMinMax($array) {
    $min = $array[0]; 
    $max = $array[0];

    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value; 
        }
        if ($value > $max) {
            $max = $value; 
        }
    }

    echo "Giá trị nhỏ nhất: $min\n";
    echo "Giá trị lớn nhất: $max\n";
}
$array = [4, 2, 9, 7, 5, 1];
findMinMax($array);

//6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
$subject = [1,4,20,25];
function sortArray($subject){
    sort($subject, SORT_NUMERIC);
    foreach ($subject as $key => $val) {
    echo "subject[" . $key . "] = " . $val . "<br />";
    }
}
echo sortArray($subject);

//7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function factorial($n) {
    if ($n == 0) {
    return 1;
    } else {
    return $n * factorial($n - 1);
    }
    }
// Sử dụng hàm để tính giai thừa của số 5
    echo factorial(5);

//8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function isPrime($number) {
    if ($number <= 1) {
        return false; 
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false; 
        }
    }

    return true; 
}

function findPrimesInRange($start, $end) {
    echo "Các số nguyên tố trong khoảng từ $start đến $end là:\n";

    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
}

 echo findPrimesInRange(5,20);
 
 //9. Viết chương trình PHP để tính tổng của các số trong một mảng
 function sumOfNumbersInArray($array){
    $sum = 0;
    foreach($array as $number){
        $sum = $sum + $number;
    }
    return $sum;
 }
 $array = array (5,6,7,8,9);
 echo sumOfNumbersInArray($array);

 //10.Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
 function inFibonacciInRange($start, $end)
{
    $arrayFibo = [];
    $arrayFibo[0] = 0;
    $arrayFibo[1] = 1;
    $i = 2;
    while (true) {
        $arrayFibo[$i] = $arrayFibo[$i - 1] + $arrayFibo[$i - 2];
        if ($arrayFibo[$i] > $end) {
            break;
        }
        if ($arrayFibo[$i] >= $start) {
            echo $arrayFibo[$i] . " ";
        }
        $i++;
    }
}

// Khoảng số Fibonacci cần in
$start = 0;
$end = 100;

// In các số Fibonacci trong khoảng
echo "Các số Fibonacci trong khoảng $start đến $end là: ";
inFibonacciInRange($start, $end);

//11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function checkArmstrong($number){
    if (preg_match('/^[1-9][0-9]*$/', $number)){//Chỉ cho nhập số và số bắt đầu không được là số 0
           $sum = 0;
           $number1 = $number;
       while ($number > 0){
           $val = $number % 10;
           $sum += pow($val, strlen($number1));
           $number = $number / 10;
       }
       if ($number == $sum){
           echo "Đây là số Armstrong";
       }else{
           echo"Đây không phải số Armstrong";
       }
   }else{
       echo 'Đây không phải là số Armstrong';
   }
}
checkArmstrong(153,85);

//12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ
function insert_Element_Into_Array($arr, $element, $location) {
   array_splice($arr, $location, 0, $element);
   return $arr;
}
$arr = array(3,4,5,6,7,8,9,10);
$element = 200;
$location = 5;
print_r(insert_Element_Into_Array($arr, $element, $location));
//13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng
function removeDuplicateElement($array){
    return $array;
}
    $array=[1,2,3,3,4]; 
    $result = array_unique($array);
    print_r($result);
    echo "<br>";

//14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function find_Element_Position($arr, $element) {
   $location = [];
   foreach ($arr as $key => $value) {
       if ($value === $element) {
           $location[] = $key;
       }
   }
   return $location;
}
$arr = array( 3,4,5,4,6,4,7,8);
$element = 4;
$result =find_Element_Position($arr, $element);
echo "Các vị trí của phần tử $element trong mảng là: " . implode(", ", $result);

//15. Viết chương trình PHP để đảo ngược một chuỗi.
function reverse_String($string){
   return $reversedString = strrev($string);
}
$string ='olleH';
$result = reverse_String($string);
echo 'Chuỗi đảo ngược là:  ' . $result;
//16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countElements($array)
{
    $count = count($array);
    return $count;
}
$originalArray = array(1, 2, 3, 4, 5);
$elementCount = countElements($originalArray);
echo "Số lượng phần tử trong mảng là: " . $elementCount;

//17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function isPalindrome($str)
{
    $cleanStr = preg_replace("/[^A-Za-z]/", '', strtolower($str));
    return $cleanStr === strrev($cleanStr);
}
$originalString = "Heloo";
if (isPalindrome($originalString)) {
    echo "Chuỗi \"" . $originalString . "\" là chuỗi Palindrome.";
} else {
    echo "Chuỗi \"" . $originalString . "\" không là chuỗi Palindrome.";
}
//18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccurrences($array, $element)
{
    $count = 0;
    foreach ($array as $value) {
        if ($value === $element) {
            $count++;
        }
    }
    return $count;
}
$originalArray = array(1, 2, 3, 2, 3, 2,);
$elementToCount = 2;
$occurrences = countOccurrences($originalArray, $elementToCount);
echo "Số lần xuất hiện của phần tử " . $elementToCount . " trong mảng là: " . $occurrences;

//19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sortDescending($arr)
{
    rsort($arr);
    return $arr;
}
$myArray = array(3, 1, 4, 5, 9, 2, 5, 3, 5);
$myArray = sortDescending($myArray);
print_r($myArray);

//20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addElement($arr, $element, $position)
{
 if ($position == "start") {
        array_unshift($arr, $element);
    } else {
        array_push($arr, $element);
    }
    return $arr;
}
$myArray = array("Hello world");
$newElement = "!";
$myArray = addElement($myArray, $newElement, "end");
$myArray = addElement($myArray, $newElement, "start");
print_r($myArray);
//21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findSecondLargest($arr)
{
    rsort($arr);
    return $arr[1];
}
$myArray = array(3, 1, 4, 1, 5, 9, 2, 8, 3,);
$secondLargest = findSecondLargest($myArray);
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
//22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function commonDivisorAndCommonMultiple($number, $number1){
    $array = [];
    for ($i = $number; $i > 1; $i--){
        if ($number % $i ==0 and $number1 % $i==0){
            $array[] = $i;
            break;
        }
    }
    for ($j = $number1; ;$j++){
        if($j % $number == 0 and $j % $number1 == 0){
            $array[] = $j;
            break;
        }
    }
    return $array;
}
$number = 10;
$number1 = 50;
$result = commonDivisorAndCommonMultiple($number, $number1);
echo'Ước chung lớn nhất là:'.$result[0];
echo "<br>";
echo'Bội chung nhỏ nhất là:'.$result[1];
//23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function isPerfectNumber($num)
{
    $sum = 0;
    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }
    if ($sum == $num) {
        return true;
    } else {
        return false;
    }
}
$num = 28;
if (isPerfectNumber($num)) {
    echo $num . " là số hoàn hảo";
} else {
    echo $num . " không phải là số hoàn hảo";
}
//24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOdd($arr)
{
    $largestOdd = null;
    foreach ($arr as $num) {
        if ($num % 2 != 0 && ($largestOdd == null || $num > $largestOdd)) {
            $largestOdd = $num;
        }
    }
    return $largestOdd;
}
$myArray = array(2, 4, 6, 10, 9, 3, 5, 7);
$largestOdd = findLargestOdd($myArray);
echo "Số lẻ lớn nhất trong mảng là: " . $largestOdd;

//25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrimeNumber($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
$num = 18;
if (isPrimeNumber($num)) {
    echo $num . " là số nguyên tố";
} else {
    echo $num . " không phải là số nguyên tố";
}
//26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findLargestPositive($arr)
{
    $largestPositive = null;
    foreach ($arr as $num) {
        if ($num > 0 && ($largestPositive == null || $num > $largestPositive)) {
            $largestPositive = $num;
        }
    }
    return $largestPositive;
}
$myArray = array(-2, 4, 6, -8, 9, 3, 7);
$largestPositive = findLargestPositive($myArray);
echo "Số dương lớn nhất trong mảng là: " . $largestPositive;

//27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegative($arr)
{
    $largestNegative = null;
    foreach ($arr as $num) {
        if ($num < 0 && ($largestNegative == null || $num > $largestNegative)) {
            $largestNegative = $num;
        }
    }
    return $largestNegative;
}
$myArray = array(2, -4, 6, -8, -9, 3, 7);
$largestNegative = findLargestNegative($myArray);
echo "Số âm lớn nhất trong mảng là: " . $largestNegative;

//28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOddNumbers($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) {

            $sum += $i;
        }
    }
    return $sum;
}
$n = 10;
$sum = sumOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến " . $n . " là: " . $sum;

//29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findPerfectSquares($start, $end)
{

    $perfectSquares = array();
    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == floor(sqrt($i))) {
            array_push($perfectSquares, $i);
        }
    }
    return $perfectSquares;
}
$start = 1;
$end = 100;
$perfectSquares = findPerfectSquares($start, $end);
echo "Các số chính phương trong khoảng từ " . $start . " đến " . $end . " là: ";
foreach ($perfectSquares as $num) {
    echo $num . " ";
}
//30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function isSubstring($string, $substring)
{
    if (strpos($string, $substring) !== false) {
        return true;
    } else {
        return false;
    }
}
$string = "Hello world";
$substring = "world";
if (isSubstring($string, $substring)) {
    echo "Chuỗi '" . $substring . "' là chuỗi con của chuỗi '" . $string . "'";
} else {
    echo "Chuỗi '" . $substring . "' không phải là chuỗi con của chuỗi '" . $string . "'";
}
?>


