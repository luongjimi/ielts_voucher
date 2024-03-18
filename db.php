<?php 
    date_default_timezone_set("Asia/Ho_Chi_Minh");
        
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iv";

    // Tạo kết nối
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, "utf8");

    // Kiểm tra kết nối
    if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
    }
    
?>
