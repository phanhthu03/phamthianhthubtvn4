<?php
//câu 1.Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
echo "câu 1: ";
    function checkNumber($number) {
        if ($number % 2 == 0) {
            echo "$number là số chẵn.";
        } else {
            echo "$number là số lẻ.";
        }
    }
    
    // Sử dụng hàm để kiểm tra số 5
echo checkNumber(5);
    
    // Sử dụng hàm để kiểm tra số 6
echo checkNumber(6);
echo "<br>";

//câu 2: Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
//Công thức tính điểm trung bình = (điểm giữa kỳ * 30%) + (điểm cuối kỳ * 70%)
//Điểm trung bình >= 9.0 in ra là hạng "Xuất sắc".
//Điểm trung bình >= 7.0 và < 9.0 in ra là hạng "Giỏi"
//Điểm trung bình >= 5.0 và < 7.0 in ra là hạng "Khá"
//Điểm trung bình < 5.0 in ra là hạng "Trung bình - Yếu"
echo "câu 2: ";
function academicRanking($midterm, $end) {
    $medium = ($midterm * 0.3) + ($end * 0.7);
    
        if ($medium >= 9.0) {
            echo "Hạng: Xuất sắc";
        } elseif ($medium >= 7.0) {
            echo "Hạng: Giỏi";
        } elseif ($medium >= 5.0) {
            echo "Hạng: Khá";
        } else {
            echo "Hạng: Trung bình - Yếu";
        }
    }
$result = academicRanking(9,7);
echo "<br>";


//câu 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
echo "câu 3: ";
function checkYear() {
    $year = date("Y"); // Lấy năm hiện tại
    if ($year % 2 == 0) {
        echo $year . " là năm chẵn.";
    } else {
        echo $year . " là năm lẻ.";
    }
}

//Sử dụng hàm để kiểm tra năm chẵn lẻ
checkYear();
echo "<br>";

//câu 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
echo "câu 4: ";
    function printNumbers() {
        for ($i = 1; $i <= 100; $i++) {
            echo $i . " ";
        }
    }
    
    printNumbers();
    echo "<br>";
    
//câu 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %.
echo "câu 5: ";
  function printNumber() {
    for ($i = 1; $i <= 100; $i++) {
      if ($i % 2 == 0) {
        echo "<b>" . $i . "</b> "; 
      } else {
        echo $i . " "; 
      }
    }
  }
  printNumber();
echo "<br>";


//câu 6: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
echo "câu 6: ";
  function printYears() {
    $nam = array(1990, 1991, 1992, 1993, 1994, 1995);
        foreach ($nam as $year) {
            echo $year . " ";
        }
    }
    
    printYears();
echo "<br>";

    