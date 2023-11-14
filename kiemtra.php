//Phần trắc nghiệm:
Bài 1:
Kết quả được in ra màn hình của đoạn mã trên sẽ là:

Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 9
)

Bài 2:
Đáp án: True

Bài 3:
Đáp án: Array()

Bài 4:
Đáp án: fopen()

Bài 5:
Chuyển đổi một đối tượng thành một chuỗi

//Phần tự luận
Bai 1:
<?php
function generateFibonacci($n)
{
    $fibonacciArray = array();

    if ($n >= 1) {
        $fibonacciArray[] = 0;
    }
    if ($n >= 2) {
        $fibonacciArray[] = 1;
    }

    for ($i = 2; $i < $n; $i++) {
        $fibonacciArray[] = $fibonacciArray[$i - 1] + $fibonacciArray[$i - 2];
    }

    return $fibonacciArray;
}

$n = 10;
$fibonacciSequence = generateFibonacci($n);

echo "Dãy số Fibonacci đầu tiên có $n phần tử là: ";
foreach ($fibonacciSequence as $number) {
    echo $number . " ";
}
?>

Bài 2:
<?php
// Tạo một mảng kết hợp chứa thông tin về học sinh
$students = [
    [
        'id' => 1,
        'name' => 'Lê Việt Anh',
        'age' => 20,
        'grade' => 9.2
    ],
    [
        'id' => 2,
        'name' => 'Đỗ Thị Quỳnh Anh',
        'age' => 20,
        'grade' => 8.5
    ],
    [
        'id' => 3,
        'name' => 'Nguyễn Kim Anh',
        'age' => 20,
        'grade' => 7.8
    ],
    [
        'id' => 4,
        'name' => 'Trương Thị Ngọc Anh',
        'age' => 20,
        'grade' => 9.4
    ]
];

/// Hiển thị thông tin của tất cả học sinh trong mảng
echo "Thông tin của tất cả học sinh:"."<br>";
foreach ($students as $student) {
    echo "ID: " . $student['id'] . "<br>";
    echo "Tên: " . $student['name'] . "<br>";
    echo "Tuổi: " . $student['age'] . "<br>";
    echo "Điểm: " . $student['grade'] . "<br>";
    echo "\n";
}

// Hàm tìm học sinh có điểm cao nhất (grade)
function findStudent($students) {
    $highestGrade = 0;
    $m = null;

    foreach ($students as $student) {
        if ($student['grade'] > $highestGrade) {
            $highestGrade = $student['grade'];
            $m = $student;
        }
    }

    return $m;
}

// Gọi hàm findStudent() để tìm học sinh có điểm cao nhất
$m = findStudent($students);

// Kiểm tra xem có học sinh có điểm cao nhất hay không
if ($m) {
    echo "Học sinh có điểm cao nhất:\n";
    echo "ID: " . $m['id'] . "<br>";
    echo "Tên: " . $m['name'] . "<br>";
    echo "Tuổi: " . $m['age'] . "<br>";
    echo "Điểm: " . $m['grade'] . "<br>";
} else {
    echo "Không có học sinh nào trong danh sách"."<br>";
}
?>
