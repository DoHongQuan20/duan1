<?php
function insert_taikhoan($name,$user,$email,$pass,$tel,$address){
    $sql = "INSERT INTO taikhoan (name,user,pass,email,address,tel) values ('$name','$user','$pass','$email','$address','$tel')";
    pdo_execute($sql);
}

function checkuser($user,$pass)
{
    $sql = "SELECT * FROM taikhoan where user='".$user."'AND pass='".$pass."'";
    $check = pdo_query_one($sql);
    return $check;
}
function checkmail($email)
{
    $sql = "SELECT * FROM taikhoan where email='".$email."'";
    $check = pdo_query_one($sql);
    return $check;
}
function checktel($tel)
{
    $sql = "SELECT * FROM taikhoan where tel='".$tel."'";
    $check = pdo_query_one($sql);
    return $check;
}
function update_pass($id,$pass)
{
    $sql = "UPDATE taikhoan SET pass= '$pass' where id ='$id'";
    pdo_execute($sql);
}
function update_taikhoan($id, $user,$name, $email, $address, $tel)
{
    $sql = "UPDATE taikhoan SET user ='$user',name='$name',email = '$email',address='$address',tel='$tel' where id ='$id'";
    pdo_execute($sql);
}


function checkemail($user,$email)
{
    $sql = "SELECT * FROM taikhoan where  user='".$user."'AND email='".$email."'";
    $check = pdo_query_one($sql);
    return $check;
}

function loadall_taikhoan(){
    $sql = "SELECT * FROM taikhoan order by id";
    $listtk = pdo_query($sql);
    return $listtk;
}

function  delete_taikhoan($id)
{
    $sql = "delete from taikhoan where id=" . $id;
    pdo_execute($sql);
}

