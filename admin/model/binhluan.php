<?php
function insert_binhluan($noidung, $iduser,$nameuser, $idpro, $ngaybinhluan)
{
    $sql = "INSERT INTO binhluan(noidung,iduser,nameuser,idpro,ngaybinhluan) VALUES('$noidung','$iduser','$nameuser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro)
{
    $sql = "SELECT * FROM binhluan where 1";
    if ($idpro > 0)
        $sql .= " AND idpro='" . $idpro . "'";
    $sql .= " ORDER BY id DESC";

    $listbl = pdo_query($sql);
    return  $listbl;
}
function  delete_binhluan($id)
{
    $sql = "delete from binhluan where id=" . $id;
    pdo_execute($sql);
}
