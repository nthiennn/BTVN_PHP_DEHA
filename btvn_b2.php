<?php
// 1. Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
$ten = "Nguyen Thi Hien";
$dem = strlen($ten);
echo $dem;

// 2. Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
$sotu = str_word_count($ten);
echo $sotu;

// 3. Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
$daonguoc = strrev($ten);
echo $daonguoc;

// 4. Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
$timchuoicon =strpos($ten,"Hien");
echo $timchuoicon;

// 5. Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
echo str_replace("Hien"," Hienn","Nguyen Thi Hien");

// 6. Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
echo strncmp("Nguyen Thi Hien","Nguyen",5);

// 7. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
echo strtoupper($ten);

// 8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
echo strtolower($ten);

// 9. Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
echo ucwords("nguyen thi hien");

// 10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
echo trim(" Nguyen Thi Hien ");

// 11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
echo ltrim(" Nguyen Thi Hien");

// 12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
echo rtrim("Nguyen Thi Hien ");
echo "hoc PHP";

// 13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
$data = explode('o', "Toidicode.com");
print_r($data);
//output: Array ( [0] => T [1] => idic [2] => de.c [3] => m )
$data = explode('o', "Toidicode.com", 2);
print_r($data);
//output: Array ( [0] => T [1] => idicode.com )

// 14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
$chuoi = ["Nguyen","Thi","Hien"];
echo implode ($chuoi);

echo implode('_', $chuoi);

// 15. Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
//STR_PAD_RIGHT– Đệm dây ở phía bên phải. Giá trị mặc định.
echo str_pad("Nguyen Thi Hien", 20, "hi");

//STR_PAD_LEFT– Đệm dây ở phía bên trái.
echo str_pad("Nguyen Thi Hien", 20, "hi", STR_PAD_LEFT);

//STR_PAD_BOTH– Đệm dây ở cả hai bên. Nếu lượng đệm không thể chia đều cho mỗi bên, thì bên phải sẽ có thêm đệm.
echo str_pad("Nguyen Thi Hien", 20, "hi", STR_PAD_BOTH);

// 16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
echo strrchr($ten, " H");

//17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
/*Cú pháp: strstr( $str, $char, $type);

Trong đó:

$str là chuỗi gốc cần xử lý.
$char là kí tự hoặc chuỗi cần xác định vị trí.
$type là tham số không bắt buộc quy định kết quả trả về của hàm:
Nếu $type = TRUE chuỗi trả về sẽ lấy từ đầu chuỗi gốc đến vị trí xuất hiện đầu tiên của $char trong chuỗi gốc và không bao gồm $char.*/
echo strstr($ten, "H", TRUE);
/*Nếu $type = FALSE chuỗi trả về sẽ lấy từ vị trí đầu tiên xuất hiện của $char trong chuỗi gốc đến cuối chuỗi gốc và lấy luôn cả $char.*/
echo strstr ($ten, "H");

//18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
    // echo preg_replace("/[0-9]!@#/","PHPne","Hienhoccode1234!@#");
    // vd tren ra kqua ảo vải 
   $copy_date = "Copyright 2015";
   $copy_date = preg_replace("([0-9]+)", "2016", $copy_date);
   
   print $copy_date;

// 19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
$bien = 14 ;
echo is_int($bien);
if (is_int($bien)) {
    echo 'biến thuộc kiểu số nguyên';
}else{
    echo 'biến không thuộc kiểu số nguyên';
}

// 20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
$email = "hiennguyen@gmail.com";
$filtered_email = filter_var($email, FILTER_VALIDATE_EMAIL);
if ($filtered_email) {
    echo "Địa chỉ email hợp lệ: $filtered_email";
} else {
    echo "Địa chỉ email không hợp lệ";
}
?>