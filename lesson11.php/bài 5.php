<?php

abstract class Database{
    abstract public function connect();
    abstract public function query();
    abstract public function disconnect();
}

class MySQLDatabase extends Database{
   public function connect(){
       echo "------MySQLDatabase--------" . "<br>";
       return "Câu lệnh kết nối: conn = mysqli_connect(servername, username, password, database);";
   }
   public function query(){
       return "Câu lệnh truy vấn: SELECT * FROM <tên bảng>";
   }
   public function disconnect(){
       return "Câu lệnh ngắt kết nối: mysqli_close(conn);";
   }
}

class PostgreSQLDatabase extends Database{
   public function connect(){
       echo "------PostgreSQLDatabase--------" . "<br>";
       return "Câu lệnh kết nối: conn = new PDO(pgsql:host=host;dbname=dbname, username, password)";
   }
   public function query(){
       return "Câu lệnh truy vấn: SELECT * FROM <tên bảng>";
   }
   public function disconnect(){
       return "Câu lệnh ngắt kết nối: conn = null";
   }
}


$Databases = [ new MySQLDatabase, new PostgreSQLDatabase];
foreach ($Databases as $Database){
   echo $Database-> connect() . "<br />";
   echo $Database -> query() . "<br />";
   echo $Database-> disconnect() . "<br />";
}
