<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "bai 1.php";

//conect
$conn = mysqli_connect($servername,$username,$password, $dbname);
  // kết nối mysql server

   if (!$conn -> connect_error){
   die("Unable to connect to mysql: " . mysqli_error());
     // Nếu kết nối thất bại thì đưa ra thông báo lỗi
   }
   if (!mysqli_select_db($conn,$db_name))
   die ("Unable to select database: " . mysqli_error());
     // Thông báo lỗi nếu chọn csdl thất bại

    //create table
    $sql_stmt = "CREATE TABLE IF NOT EXISTS customers(
        id int(10) PRIMARY key,
        name varchar(255),
        email varchar(255),
        phone varchar(255)
    );";
    $result = mysqli_query($conn, $sql_stmt);
    // thực thi câu lệnh sql

    if(!$result)
    Die("database access failed:" . mysqli_error());
    // thông báo lỗi nếu thực thi thất bại
    else{ 
        echo "database success";
    }

    //insert 5 khách hàng
    $sql_stmt = "INSERT INTO 'customers'('id', 'name','email', 'phone')";
    $sql_stmt .= "VALUES ('1', 'Nguyen Van A', 'A@gmail.com', '123456789'),
                         ('2', 'Nguyen Van B', 'example@gmail.com', '234567891'),
                         ('3', 'Nguyen Van C'', 'C@gmail.com', '345678921'),
                         ('4', 'Nguyen Van D'', 'D@gmail.com', '456789321'),
                         ('5', 'Nguyen Van E'', 'E@gmail.com', '567894321')";
    $result = mysqli_query($conn, $sql_stmt);
       // thực thi câu lệnh sql
    if (!$result){
        Die("Adding failed:" . mysqli_error());
         // thông báo lỗi nếu thực thi câu lệnh thất bại
    } else{
        echo "Add success";
    };

    //update khách hàng có id = 1
    $sql_stmt = "UPDATE 'customers' SET phone = 123456788 WHERE id = '1'";
    $result = mysqli_query($conn, $sql_stmt);
     // thực thi câu lệnh sql
     if (!$result){
      die("Update failed:" . mysqli_error());
        // thông báo lỗi nếu thực thi thất bại
     } else{
      echo "Update success";
     };

     //delete khách hàng có id = 5
    $sql_stmt = "DELETE FROM 'customers' WHERE id = '5'";
       // câu lệnh delete sql
    $result = mysqli_query($conn, $sql_stmt);
     // thực thi câu lệnh sql
    if (!$result){
      die("delete failed:" . mysqli_error());
      // thông báo lỗi khi thực thi thất bại
    } else {
      echo "Delete success";
    }

//bài 2
// Tạo bảng KHACHHANG
$sqlCreateKHACHHANG = "CREATE TABLE KHACHHANG (
  MAKH char(4) PRIMARY KEY,
  HOTEN VARCHAR(255),
  DCHI VARCHAR(255),
  SODT VARCHAR(20),
  NGSINH DATE,
  DOANHSO DECIMAL(10, 2),
  NGDK DATE
)";

if (mysqli_query($conn, $sqlCreateKHACHHANG)) {
  echo "Tạo bảng KHACHHANG thành công<br>";
} else {
  echo "Lỗi trong quá trình tạo bảng KHACHHANG: " . mysqli_error($conn) . "<br>";
}

// Tạo bảng NHANVIEN
$sqlCreateNHANVIEN = "CREATE TABLE NHANVIEN (
  MANV char(4) PRIMARY KEY,
  HOTEN VARCHAR(255),
  NGVL DATE,
  SODT VARCHAR(20)
)";

if (mysqli_query($conn, $sqlCreateNHANVIEN)) {
  echo "Tạo bảng NHANVIEN thành công<br>";
} else {
  echo "Lỗi trong quá trình tạo bảng NHANVIEN: " . mysqli_error($conn) . "<br>";
}

// Tạo bảng SANPHAM
$sqlCreateSANPHAM = "CREATE TABLE SANPHAM (
  MASP char(4) PRIMARY KEY,
  TENSP VARCHAR(255),
  DVT VARCHAR(20),
  NUOCSX VARCHAR(255),
  GIA DECIMAL(10, 2)
)";

if (mysqli_query($conn, $sqlCreateSANPHAM)) {
  echo "Tạo bảng SANPHAM thành công<br>";
} else {
  echo "Lỗi trong quá trình tạo bảng SANPHAM: " . mysqli_error($conn) . "<br>";
}

// Tạo bảng HOADON
$sqlCreateHOADON = "CREATE TABLE HOADON (
  SOHD int PRIMARY KEY,
  NGHD DATE,
  MAKH char(4),
  MANV char(4),
  TRIGIA DECIMAL(10, 2),
  FOREIGN KEY (MAKH) REFERENCES KHACHHANG(MAKH) ON DELETE CASCADE,
  FOREIGN KEY (MANV) REFERENCES NHANVIEN(MANV) ON DELETE CASCADE
)";

if (mysqli_query($conn, $sqlCreateHOADON)) {
  echo "Tạo bảng HOADON thành công<br>";
} else {
  echo "Lỗi trong quá trình tạo bảng HOADON: " . mysqli_error($conn) . "<br>";
}

// Tạo bảng CTHD
$sqlCreateCTHD = "CREATE TABLE CTHD (
  SOHD int,
  MASP char(4),
  SL int,
  PRIMARY KEY (SOHD, MASP),
  FOREIGN KEY (SOHD) REFERENCES HOADON(SOHD) ON DELETE CASCADE,
  FOREIGN KEY (MASP) REFERENCES SANPHAM(MASP) ON DELETE CASCADE
)";

if (mysqli_query($conn, $sqlCreateCTHD)) {
  echo "Tạo bảng CTHD thành công<br>";
} else {
  echo "Lỗi trong quá trình tạo bảng CTHD: " . mysqli_error($conn) . "<br>";
}

// Câu lệnh INSERT vào bảng KHACHHANG
$sqlInsertKhachHang = "INSERT INTO `KHACHHANG`(`MAKH`, `HOTEN`, `DCHI`, `SODT`, `NGSINH`, `DOANHSO`, `NGDK`) VALUES
                            ('KH01','Nguyen Van A','731 Tran Hung Dao, Q5, TpHCM','08823451','1960-10-22','13,060,000','2006-07-22'),
                            ('KH02','Tran Ngoc Han','23/5 Nguyen Trai, Q5, TpHCM','0908256478','1974-04-03','280,000','2006-07-30'),
                            ('KH03','Tran Ngoc Linh','45 Nguyen Canh Chan, Q1, TpHCM','0938776266','1980-06-12','3,860,000','2006-08-05'),
                            ('KH04','Tran Minh Long','50/34 Le Dai Thanh, Q10, TpHCM','0917325476','1965-03-09','250,000','2006-10-20'),
                            ('KH05','Le Nhat Minh','30 Truong Dinh, Q3, TpHCM','08246108','1950-03-10','21,000','2006-10-28'),
                            ('KH06','Le Hoai Thuong','227 Nguyen Van Cu, Q5, TpHCM','08631738','1981-12-31','915,000','2006-11-24'),
                            ('KH07','Nguyen Van Tam','32/3 Tran Binh Trong, Q5, TpHCM','0916783565','1971-06-04','12,500','2006-06-01'),
                            ('KH08','Nguyen Van Ba','123 Nguyen Hue, Q1, TpHCM','0938435756','1972-01-10','450,000','2006-12-01'),
                            ('KH09','Tran Van Hai','456 Nguyen Trai, Q5, TpHCM','0938435757','1973-02-11','650,000','2007-01-01'),
                            ('KH10','Le Van Hung','789 Nguyen Canh Chan, Q1, TpHCM','0938435758','1974-03-12','850,000','2007-01-02');";

if (mysqli_query($conn, $sqlInsertKhachHang)) {
    echo "Thêm dữ liệu vào bảng KHACHHANG thành công<br>";
} else {
    echo "Lỗi khi thêm dữ liệu vào bảng KHACHHANG: " . mysqli_error($conn) . "<br>";
}

// Câu lệnh INSERT vào bảng NHANVIEN
$sqlInsertNhanVien = "INSERT INTO NHANVIEN (MANV, HOTEN, NGVL, SODT) VALUES
                            ('NV01', 'Nguyen Nhu Nhut', '2006-04-13', '0927345678'),
                            ('NV02', 'Le Thi Phi Yen', '2006-04-21', '0987567390'),
                            ('NV03', 'Nguyen Van B', '2006-04-27', '0997047382'),
                            ('NV04', 'Ngo Thanh Tuan', '2006-04-24', '0913758498'),
                            ('NV05', 'Nguyen Thi Truc Thanh', '2006-07-20', '0918590387');";

if (mysqli_query($conn, $sqlInsertNhanVien)) {
    echo "Thêm dữ liệu vào bảng NHANVIEN thành công<br>";
} else {
    echo "Lỗi khi thêm dữ liệu vào bảng NHANVIEN: " . mysqli_error($conn) . "<br>";
}

// Câu lệnh INSERT vào bảng SANPHAM
$sqlInsertSanPham = "INSERT INTO SANPHAM (MASP,TENSP, DVT, NUOCSX, GIA) VALUES
                        ('SP01','But chi', 'cay', 'Viet Nam', '5,000'),
                        ('SP02','But chi', 'hop', 'Viet Nam', '30,000'),
                        ('SP03','But bi', 'cay', 'Viet Nam', '5,000'),
                        ('SP04','But bi', 'hop', 'Trung Quoc', '7,000'),
                        ('SP05','Tap 100 giay mong', 'quyen', 'Trung Quoc', '2,500'),
                        ('SP06','Tap 200 giay mong', 'quyen', 'Trung Quoc', '4,500'),
                        ('SP07','Tap 100 giay mong', 'quyen', 'Viet Nam', '3,000'),
                        ('SP08','Tap 200 giay mong', 'quyen', 'Viet Nam', '5,500'),
                        ('SP09','Tap 100 giay mong', 'chuc', 'Viet Nam', '23,000'),
                        ('SP10','Tap 200 giay mong', 'chuc', 'Viet Nam', '53,000');";

if (mysqli_query($conn, $sqlInsertSanPham)) {
    echo "Thêm dữ liệu vào bảng SANPHAM thành công<br>";
} else {
    echo "Lỗi khi thêm dữ liệu vào bảng SANPHAM: " . mysqli_error($conn) . "<br>";
}

// Câu lệnh INSERT vào bảng HOADON
$sqlInsertHoaDon = "INSERT INTO HOADON (SOHD, NGHD, MAKH, MANV, TRIGIA) VALUES
                        (1, '2023-06-15', 'KH01', 'NV01', 100000),
                        (2, '2023-06-16', 'KH02', 'NV02', 200000),
                        (3, '2023-06-17', 'KH03', 'NV03', 300000),
                        (4, '2023-06-18', 'KH04', 'NV04', 400000),
                        (5, '2023-06-19', 'KH05', 'NV04', 500000),
                        (6, '2023-06-20', 'KH06', 'NV03', 600000),
                        (7, '2023-06-21', 'KH07', 'NV02', 700000),
                        (8, '2023-06-22', 'KH08', 'NV01', 800000);";

if (mysqli_query($conn, $sqlInsertHoaDon)) {
    echo "Thêm dữ liệu vào bảng HOADON thành công<br>";
} else {
    echo "Lỗi khi thêm dữ liệu vào bảng HOADON: " . mysqli_error($conn) . "<br>";
}

// Câu lệnh INSERT vào bảng CTHD
$sqlInsertCTHD = "INSERT INTO CTHD (SOHD, MASP, SL) VALUES
                    (1,'SP01', 1),
                    (1,'SP02', 2),
                    (2,'SP03', 3),
                    (2,'SP04', 4),
                    (3,'SP01', 5),
                    (3,'SP03', 6),
                    (4,'SP03', 7),
                    (4,'SP01', 8),
                    (5,'SP02', 9),
                    (5,'SP04', 10),
                    (6,'SP010', 11),
                    (6,'SP08', 12),
                    (7,'SP09', 13),
                    (7,'SP07', 14),
                    (8,'SP06', 15),
                    (8,'SP05', 16);";

if (mysqli_query($conn, $sqlInsertCTHD)) {
    echo "Thêm dữ liệu vào bảng CTHD thành công<br>";
} else {
    echo "Lỗi khi thêm dữ liệu vào bảng CTHD: " . mysqli_error($conn) . "<br>";
}
// Thêm thuộc tính GHICHU vào quan hệ SANPHAM
$sqlAddColumnGHICHU = "ALTER TABLE SANPHAM ADD COLUMN GHICHU VARCHAR(20)";

if (mysqli_query($conn, $sqlAddColumnGHICHU)) {
    echo "Thêm thuộc tính GHICHU cho quan hệ SANPHAM thành công<br>";
} else {
    echo "Lỗi trong quá trình thêm thuộc tính GHICHU cho quan hệ SANPHAM: " . mysqli_error($conn) . "<br>";
}

// Thêm thuộc tính LOAIKH vào quan hệ KHACHHANG
$sqlAddColumnLOAIKH = "ALTER TABLE KHACHHANG ADD COLUMN LOAIKH TINYINT";

if (mysqli_query($conn, $sqlAddColumnLOAIKH)) {
    echo "Thêm thuộc tính LOAIKH cho quan hệ KHACHHANG thành công<br>";
} else {
    echo "Lỗi trong quá trình thêm thuộc tính LOAIKH cho quan hệ KHACHHANG: " . mysqli_error($conn) . "<br>";
}

// Cập nhật tên "Nguyễn Văn B" cho dữ liệu Khách Hàng có mã là KH01
$sqlUpdateKH01 = "UPDATE KHACHHANG SET HOTEN = 'Nguyễn Văn B' WHERE MAKH = 'KH01'";

if (mysqli_query($conn, $sqlUpdateKH01)) {
    echo "Cập nhật tên 'Nguyễn Văn B' cho dữ liệu Khách Hàng có mã là KH01 thành công<br>";
} else {
    echo "Lỗi trong quá trình cập nhật tên 'Nguyễn Văn B' cho dữ liệu Khách Hàng có mã là KH01: " . mysqli_error($conn) . "<br>";
}

// Cập nhật tên "Nguyễn Văn Hoan" cho dữ liệu Khách Hàng có mã là KH09 và năm đăng ký là 2007
$sqlUpdateKH09 = "UPDATE KHACHHANG SET HOTEN = 'Nguyễn Văn Hoan' WHERE MAKH = 'KH09' AND YEAR(NGDK) = 2007";

if (mysqli_query($conn, $sqlUpdateKH09)) {
    echo "Cập nhật tên 'Nguyễn Văn Hoan' cho dữ liệu Khách Hàng có mã là KH09 và năm đăng ký là 2007 thành công<br>";
} else {
    echo "Lỗi trong quá trình cập nhật tên 'Nguyễn Văn Hoan' cho dữ liệu Khách Hàng có mã là KH09 và năm đăng ký là 2007: " . mysqli_error($conn) . "<br>";
}

?>

                         


