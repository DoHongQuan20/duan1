<?php
// Hàm để thiết lập và trả về kết nối PDO tới cơ sở dữ liệu
function pdo_get_connection()
{
    $dburl = "mysql:host=localhost;dbname=duan1;charset=utf8"; 
    $username = 'root'; 
    $password = '';
    $conn = new PDO($dburl, $username, $password); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    return $conn; 
}

// Hàm để thực thi truy vấn SQL mà không trả về giá trị
function pdo_execute($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection(); 
        $stmt = $conn->prepare($sql); 
        $stmt->execute($sql_args); 
    } catch (PDOException $e) {
        throw $e; 
    } finally {
        unset($conn);
    }
}

// Hàm để thực thi truy vấn SQL và trả về ID cuối cùng được chèn vào cơ sở dữ liệu
function pdo_execute_return_lastInsertId($sql)
{
    $sql_args = array_slice(func_get_args(), 1); 
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql); 
        $stmt->execute($sql_args); 
        return $conn->lastInsertId(); // Trả về ID cuối cùng được chèn vào cơ sở dữ liệu
    } catch (PDOException $e) {
        throw $e; 
    } finally {
        unset($conn); 
    }
}

// Hàm để thực thi truy vấn SQL và trả về tất cả các hàng dữ liệu từ kết quả trong một mảng
function pdo_query($sql)
{
    $sql_args = array_slice(func_get_args(), 1); 
    try {
        $conn = pdo_get_connection(); 
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args); 
        $rows = $stmt->fetchAll(); 
        return $rows; 
    } catch (PDOException $e) {
        throw $e; 
    } finally {
        unset($conn);
    }
}

// Hàm để thực thi truy vấn SQL và trả về một hàng dữ liệu đầu tiên từ kết quả
function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1); 
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args); 
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 
        return $row; 
    } catch (PDOException $e) {
        throw $e; 
    } finally {
        unset($conn); 
    }
}

// Hàm để thực thi truy vấn SQL và trả về giá trị đầu tiên từ hàng đầu tiên của kết quả truy vấn
function pdo_query_value($sql)
{
    $sql_args = array_slice(func_get_args(), 1); 
    try {
        $conn = pdo_get_connection(); 
        $stmt = $conn->prepare($sql); 
        $stmt->execute($sql_args); 
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0]; 
    } catch (PDOException $e) {
        throw $e; 
    } finally {
        unset($conn); 
    }
}
?>
