<?php
// Hàm insert dữ liệu vào table
function db_insert($table, $data = array())
{
    // Hai biến danh sách fields và values
    $fields = '';
    $values = '';
     
    // Lặp mảng dữ liệu để nối chuỗi
    foreach ($data as $field => $value){
        $fields .= $field .',';
        $values .= "'".addslashes($value)."',";
    }
     
    // Xóa ký từ , ở cuối chuỗi
    $fields = trim($fields, ',');
    $values = trim($values, ',');
     
    // Tạo câu SQL
    $sql = "INSERT INTO {$table}($fields) VALUES ({$values})";
     
    // Thực hiện INSERT
    return db_execute($sql);
}

?>