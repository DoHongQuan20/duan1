<?php

function  delete_bill_sechqua($id){
$sql="DELETE FROM `bill` WHERE id=".$id;
    pdo_execute($sql);
}  
function loadone_bill_quasech($id){
    $sql="SELECT * FROM bill WHERE id=$id";
    $bill_ratsech  =pdo_query_one($sql); 
    return $bill_ratsech;
}
function update_bill($id,$status){
    $sql = "update bill set bill_status='".$status."' where id=".$id;
    pdo_execute($sql);
}
?>