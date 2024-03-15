<?php
include_once 'pdo.php';
    function category_list(){
        $sql="SELECT * FROM danhmuc";
        return pdo_query($sql);
    }
    function category_add($name,$image,$status){
        $sql="INSERT INTO danhmuc(tendanhmuc,hinhanh,trangthai) VALUES (?,?,?)";
        return pdo_execute($sql,$name,$image,$status);
    }
    function category_getOne($id){
        $sql="SELECT * FROM danhmuc WHERE madanhmuc=?";
        return pdo_query_one($sql,$id);
    }
    function category_edit($name,$image,$status,$id){
        $sql="UPDATE danhmuc SET tendanhmuc=?, hinhanh=?, trangthai=? WHERE madanhmuc=?";
        return pdo_execute($sql,$name,$image,$status,$id);
    }

    function category_delete($id) {
        $sql="DELETE FROM danhmuc WHERE madanhmuc=?";
        return pdo_execute($sql,$id);
    }
    
?>