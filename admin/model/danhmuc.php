<?php
function insert_danhmuc($tendm){
    $sql = "INSERT INTO danhmuc (tendm) values ('$tendm')";
    pdo_execute($sql);
}

function delete_danhmuc($madm){
    $sql = "DELETE FROM danhmuc WHERE madm=".$madm;
    $listdm = pdo_query($sql);
    return $listdm;
}

function loadall_danhmuc(){
    $sql = "SELECT * FROM danhmuc order by madm";
    $listdm = pdo_query($sql);
    return $listdm;
}

function loadone_danhmuc($madm){
    $sql = "SELECT * FROM danhmuc where madm=".$madm;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc ($madm,$tendm){
    $sql = "UPDATE danhmuc SET tendm = '$tendm' where madm ='$madm'";
    pdo_execute($sql);
}

