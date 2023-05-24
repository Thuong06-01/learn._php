<?php
//1.Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
function countLength($string){
    return strlen($string);
}
echo countLength("Hello");

//2.Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
function coutWord($string){
    return str_word_count($string);
}
echo coutWord("Hello world");

//3.Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
function reverseString($string){
    return strrev($string);

}
echo reverseString("Hello world");

//4.Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
function  searchSubstring ($world, $world1){
    return strpos($world, $world1);

}
echo searchSubstring("Hello world!", "world");

//5.Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
function replaceSubstring ($world, $world1, $world2){
    return str_replace($world, $world1, $world2);

}
echo replaceSubstring("world", "Dolly", "Hello world");

//6.Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
$str = 'abcd';
$strCheck = 'abcded adc';
$poisition = Strpos($strCheck, $str);
var_dump($poisition);

//7.Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
function convertString($string){
    return strtoupper($string);
}
echo convertString("hello world");

//8.Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
function convertString1($string1){
    return strtolower($string1);
}
echo convertString1("HELLO WORLD");

//9.Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
function convertString2($string2){
    return ucwords($string2);
}
echo convertString2("Hello world");

//10.Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
function removeWhitespace($string){
    return trim($string);
}
echo removeWhitespace("  Hello world  ");

//11.Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
function removeThefirstCharacter($string){
    return ltrim($string, "H");
}
echo removeThefirstCharacter("Hello world");

//12.Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
function removeThelastCharacter($string){
    return rtrim($string, "d");
}
echo removeThelastCharacter("Hello world");

//13.Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
function splitString($string){
      return explode(" ", $string);
}
print_r(splitString("Hello world")) ;#print_r dùng để in giá trị của mảng trong php

//14.Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
function joinElementsTogether($string= [ ]){
    return implode(" ", $string);
}
echo joinElementsTogether(['Hello', 'world']);

//15.Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
function addString($string1, $string2){
    return str_pad($string1, 25, $string2, STR_PAD_LEFT);
}
echo addString('Hello world', '_');

//16.Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
function checkString($string1, $string2){
    if(strrchr($string1, $string2) == false)
     {
        echo 'No';
     }
    else{
        echo 'Yes';} 
}
echo checkString('Hello world','world');

//17.Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
function checkForExistence($string, $string1){
    if(strstr($string, $string1) === false)
    { echo'No';}
    else { echo'Yes';}
}
echo checkForExistence('Hello world','Hi');

//18.Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
function replaceCharacters($string, $string1, $string2){
    return preg_replace($string, $string1, $string2);
}
echo replaceCharacters('/[^\w]/','_', 'Hello world');

//19.Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
function integerCheck($number){
    if(is_int($number)){
        echo 'Yes';
    }else{
        echo 'No';
    }
}
echo integerCheck(15);

//20.Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().

function emailCheck($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Yes';
    }else{
        echo'No';
    }
}
echo emailCheck('thuongnguyen190601@gmail.com');

?>

