<?php
include_once 'pdo.php';
function product_list(){
    $sql = "SELECT sp.*,dm.tendanhmuc FROM sanpham sp INNER JOIN danhmuc dm ON sp.madanhmuc = dm.madanhmuc";
    return pdo_query($sql);
}

function product_add($name,$category,$price,$sale,$description,$image,$quantity,$hot,$status) {
    $sql = "INSERT INTO sanpham(tensanpham,madanhmuc,gia,giakhuyenmai,mota,hinhanh,soluong,hot,trangthai)
    VALUES (?,?,?,?,?,?,?,?,?)";
    return pdo_execute($sql,$name,$category,$price,$sale,$description,$image,$quantity,$hot,$status);
}

function product_getOne($id){
    $sql="SELECT * FROM sanpham WHERE masanpham=?";
    return pdo_query_one($sql,$id);
}

function product_edit($name,$category,$price,$sale,$description,$image,$quantity,$hot,$status,$id){
    $sql="UPDATE sanpham SET tensanpham=?, madanhmuc=?, gia=?, giakhuyenmai=?, mota=?, hinhanh=?, soluong=?, hot=?, trangthai=?  WHERE masanpham=?";
    return pdo_execute($sql,$name,$category,$price,$sale,$description,$image,$quantity,$hot,$status,$id);
}
function product_delete($id) {
    $sql="DELETE FROM sanpham WHERE masanpham=?";
    return pdo_execute($sql,$id);
}   
?>