<?php
// Em nộp bài ạ!
//1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function test($n){
    if($n % 2 == 0){
        echo "$n là số chẵn ";
    }
    else {
        echo "$n là số lẻ ";
    }
}
test(369);

echo "<br>";
//2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function sum($n){
    $tong = 0;
    for($i = 1; $i <= $n; $i++){
        $tong = $tong + $i;
    }
    return $tong;
}
$n = 10;
echo sum($n);

echo "<br>";
//3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
//Bảng cửu chương 1 - bảng cửu chương 10
function bcc(){
    for($i = 1; $i <= 10; $i++) {
        echo "Bảng cửu chương $i: <br>";
        for($j = 1; $j <= 10; $j++) {
            echo "$i * $j = " . $i * $j . "<br>";
        }
        echo "<br>";
    }
}
bcc();
//1 bảng cửu chương x từ 1 - 10
function bangCC($n){
    echo "Bảng cửu chương $n: <br>";
    for($i = 1; $i <= 10; $i++){
        echo "$n * $i =" . $n*$i . "<br>"; 
    }
}
bangCC(6);

echo "<br>";
//4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function timtu($chuoi, $tu){
    if(strpos($chuoi, $tu) !== false) {
        echo "Yes";
    } else {
        echo "No";
    }
}
timtu("Đây là bài số 4. Còn 26 bài nữa cơ!!!","26");

echo "<br>";
//5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
//C1
function tim_max_min($values) {
    $max = max($values);
    $min = min($values); 
    echo "Giá trị lớn nhất là: $max, <br>";
    echo "Giá trị nhỏ nhất là: $min.";
}
$values = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
tim_max_min($values);

echo "<br>";
//C2
function tim_maxmin($values) {
    $max = $values[0];
    $min = $values[0];
    foreach ($values as $giaTri) {
        if ($giaTri > $max) {
            $max = $giaTri;
        } elseif ($giaTri < $min) {
            $min = $giaTri;
        }
    }
    return array('max' => $max, 'min' => $min);
}
$result = tim_maxmin($values);
echo "Giá trị lớn nhất là: " . $result['max'] . "<br>";
echo "Giá trị nhỏ nhất là: " . $result['min'];

echo "<br>";
//6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function sapXepTangDan($mang) {
    sort($mang);
    return $mang;
}
$mang = array(5, 3, 9, 1, 7);
$kqSapXep = sapXepTangDan($mang);
print_r($kqSapXep);

echo "<br>";
//7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function tinhGiaiThua($n){
    if ($n < 0) {
        return "Không thể tính giai thừa cho số âm.";
    } elseif ($n == 0 || $n == 1) {
        return 1;
    } else {
        $giaiThua = 1;
        for ($i = 2; $i <= $n; $i++) {
            $giaiThua = $i*$giaiThua;
        }
        return $giaiThua;
    } 
}
echo tinhGiaiThua(9);

echo "<br>";
//8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function timSoNgto($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
function timTrongKhoang($a, $b){
    for ($i = $a; $i <= $b; $i++){
        if(timSoNgto($i))
            echo $i, '<br>';
    }
}
timTrongKhoang(3, 60);

echo "<br>";
//9. Viết chương trình PHP để tính tổng của các số trong một mảng.
function tongMang($mang) {
    $tong = 0;
    foreach ($mang as $so) {
        $tong += $so;
    }
    return $tong;
}
$mang = array(1,2,3,4,5,6,7,8);
echo "Tổng của mảng là: " . tongMang($mang);

echo "<br>";
//10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function fibonacci($start, $end) {
    $fibonacciNumbers = array();
    $a = 0;
    $b = 1;

    while ($a <= $end) {
        if ($a >= $start) {
            $fibonacciNumbers[] = $a;
        }

        $next = $a + $b;
        $a = $b;
        $b = $next;
    }

    return $fibonacciNumbers;
}

$start = 0;
$end = 50;

$dayFibonacci = fibonacci($start, $end);

echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
print_r($dayFibonacci);

echo "<br>";
//11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không
function kiemTraSoArmstrong($number) {
    $sum = 0;
    $temp = $number;

    while ($temp > 0) {
        $digit = $temp % 10; // Lấy chữ số cuối cùng
        $sum += $digit ** 3; // Tính lũy thừa và cộng vào tổng
        $temp = (int)($temp / 10); // Loại bỏ chữ số cuối cùng
    }

    // Kiểm tra nếu tổng bằng số ban đầu, thì là số Armstrong
    if ($sum == $number) {
        echo $number . " là số Armstrong.";
    } else {
        echo $number . " không phải là số Armstrong.";
}
}

kiemTraSoArmstrong(153);

echo "<br>";
//12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function chenPhanTuVaoMang($mang, $giaTri, $viTri) {
    // Kiểm tra xem vị trí có hợp lệ không
    if ($viTri < 0 || $viTri > count($mang)) {
        echo "Vị trí không hợp lệ";
        return $mang;
    }

    // Chia mảng thành hai phần: trước và sau vị trí chèn
    $mangTruoc = array_slice($mang, 0, $viTri);
    $mangSau = array_slice($mang, $viTri);

    // Chèn giá trị vào mảng
    $mangTruoc[] = $giaTri;

    // Kết hợp hai phần lại để tạo mảng mới đã chèn
    $mangMoi = array_merge($mangTruoc, $mangSau);

    return $mangMoi;
}
$mang = array(2,4,5,6,7,8,1);
print_r (chenPhanTuVaoMang($mang, 3, 1));

echo "<br>";
//13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function check_lap($arr) {
    // Sử dụng hàm array_unique để loại bỏ các phần tử trùng lặp
    $uniqueArray = array_unique($arr);
    return $uniqueArray;
}
$arr = array(2,4,1,5,7,9,2);
check_lap($arr);
print_r(check_lap($arr));

echo "<br>";
//14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function timViTriPhanTu($mang, $giaTri) {
    // Sử dụng hàm array_search để tìm vị trí của phần tử trong mảng
    $viTri = array_search($giaTri, $mang);

    // Kiểm tra nếu phần tử được tìm thấy
    if ($viTri !== false) {
        echo "Phần tử '$giaTri' được tìm thấy tại vị trí $viTri trong mảng.";
    } else {
        echo "Phần tử '$giaTri' không có trong mảng.";
    }
}
$mang = array(1, 2, 3, 4, 5, 6);
timViTriPhanTu($mang, 3);

echo "<br>";
//15. Viết chương trình PHP để đảo ngược một chuỗi.
function daoNguoc($chuoi){
    $daoNguoc = strrev($chuoi);
    echo $daoNguoc;
}
$chuoi = "I'm Nguyen Thi Hien";
daoNguoc($chuoi);

echo "<br>";
//16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function tinhSoLuongPhanTu($mang) {
    // Sử dụng hàm count để đếm số lượng phần tử trong mảng
    $soLuong = count($mang);
    echo "Số lượng phần tử trong mảng là: $soLuong";
}
$mang = array(1, 2, 3, 4, 5, 6);
tinhSoLuongPhanTu($mang);

echo "<br>";
//17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function Palindrome($bien) {
    // So sánh chuỗi với phiên bản đảo ngược của nó
    $dao = strrev($bien);

if ($dao == $bien) {
    echo "$bien là chuỗi Palindrome";
} else {
    echo "$bien không phải là chuỗi Palindrome";
}
}

$bien = "MOM";
Palindrome($bien);

echo "<br>";
//18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function demSoLanXuatHien($mang, $phaneTuCanDem) {
    $dem = 0;
    foreach ($mang as $phaneTu) {
        if ($phaneTu == $phaneTuCanDem) {
            $dem++;
        }
    }

    return $dem;
}
$mangVd = array(1, 2, 3, 4, 2, 5, 2, 6, 2);
echo demSoLanXuatHien($mangVd, 2);

echo "<br>";
//19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sapXepGiamDan($mang) {
    rsort($mang);
    return $mang;
}
$mang = array(5, 3, 9, 1, 7);
$kqSapXep = sapXepGiamDan($mang);
print_r($kqSapXep);

echo "<br>";
//20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function chenCuoi($chuoi, $giaTri){
//STR_PAD_RIGHT– Đệm ở phía bên phải. Giá trị mặc định.
echo str_pad($chuoi, 24, $giaTri);
}

function chenDau($chuoi, $giaTri){
//STR_PAD_LEFT– Đệm ở phía bên trái.
echo str_pad($chuoi, 24, $giaTri, STR_PAD_LEFT);
}

$chuoi = " I'm Nguyen Thi Hien ";
$giaTri = "Hi";
chenCuoi($chuoi, $giaTri);
echo "<br>";
chenDau($chuoi, $giaTri);

echo "<br>";
//21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function timSoLonThuHai($mang) {
    // Sắp xếp mảng theo thứ tự giảm dần
    rsort($mang);

    // Lấy phần tử thứ hai trong mảng
    $soLonThuHai = $mang[1];

    return $soLonThuHai;
}
$mangSo = [10, 5, 8, 3, 7];
$ketQua = timSoLonThuHai($mangSo);

echo "Số lớn thứ hai trong mảng là: " . $ketQua;

echo "<br>";
//22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function timUCLN($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function timBCNN($a, $b) {
    return ($a * $b) / timUCLN($a, $b);
}

$so1 = 12;
$so2 = 18;

$ucln = timUCLN($so1, $so2);
$bcnn = timBCNN($so1, $so2);

echo "Ước số chung lớn nhất của $so1 và $so2 là: $ucln<br>";
echo "Bội số chung nhỏ nhất của $so1 và $so2 là: $bcnn";

echo "<br>";
//23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function soHH($a){
    if ($a <=0 ) {
        return false;
    }
    $sum = 0;
    for ($i = 1; $i <= $a/2; $i++){
        if($a % $i ==0){
            $sum += $i;
        }
    }
    if ($sum == $a){
        echo "$a là số hoàn hảo";
    } else {
        echo "$a không là số hoàn hảo";
    }
}

soHH (28);

echo "<br>";
//24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function soLemax($mang){
    $mang1 = array();
    foreach($mang as $i){
        if($i % 2 !=0 ){
            $mang1[] = $i;
        }
    }
    rsort($mang1);
    echo "Số lẻ lớn nhất là $mang1[0]";
}

$mang = array(2,4,5,6,7,8,1);
soLemax($mang);

echo "<br>";
//25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function SoNgTo($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            echo "$n không là số nguyên tố";
            return;
        } 
    }
    echo "$n là số nguyên tố";
}

echo SoNgTo(3);

echo "<br>";
//26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function soDuongmax($mang){
    $mangDuong = array();
    foreach($mang as $i){
        if( $i > 0){
            $mangDuong[]=$i;
        }
    }
    rsort($mangDuong);
    echo "Số dương lớn nhất là : $mangDuong[0]";
}
$mang = array(-1, -2, 3, 4,5,2, -20, -10, 90);
soDuongmax($mang);

echo "<br>";
//27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function soAmmax($mang){
    $mangAm = array();
    foreach($mang as $i){
        if( $i < 0){
            $mangAm[]=$i;
        }
    }
    rsort($mangAm);
    echo "Số âm lớn nhất $mangAm[0]";
}
soAmmax($mang);

echo "<br>";
//28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.   
function sumLe($n){
    $sum = 0;
    for ($i = 1; $i<=$n;$i++){
        if ($i % 2 !=0){
            $sum +=$i;
        }
    }
    echo "Tổng số lẻ từ 1 đến $n là $sum";
    return $sum;
}
sumLe(10);

echo "<br>";
//29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
//Kiểm tra xem có phải số chính phương hay ko 
function soChinhPhuong($num) {
    $sqrt = sqrt($num);
    return ($sqrt * $sqrt == $num);
}
//Kiểm tra số chính phương trong khoảng cho trước
function testSCP($start, $end) {
    $result = array();

    for ($i = $start; $i <= $end; $i++) {
        if (soChinhPhuong($i)) {
            $result[] = $i;
        }
    }

    return $result;
}

$start = 1;
$end = 30;

$test = testSCP($start, $end);

echo "Các số chính phương trong khoảng từ $start đến $end là: " . implode(', ', $test);

echo "<br>";
//30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function timChuoiCon($chuoiGoc, $chuoiCon) {
    $viTri = strpos($chuoiGoc, $chuoiCon);
    if ($viTri === false) {
        echo "Chuỗi con không được tìm thấy";
    } else {
        echo "Chuỗi con được tìm thấy tại vị trí: " . $viTri;
    }
    echo "<br>";
}
$chuoiGoc="Hi. I'm Nguyen Thi Hien";
$chuoiCon="Hi";
timChuoiCon($chuoiGoc, $chuoiCon); 
?>
