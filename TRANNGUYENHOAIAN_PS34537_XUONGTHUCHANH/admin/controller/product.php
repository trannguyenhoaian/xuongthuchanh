<?php
    include_once '../model_DAO/product.php';
    include_once '../model_DAO/category.php';
    extract($_REQUEST);
    if (isset($act)) {
        switch ($act) {
            case 'list':
                $dssp = product_list();
                // print_r($dssp);
                include_once 'view/template_header.php';
                include_once 'view/page_product_list.php';
                include_once 'view/template_footer.php';
                break;
            case 'add':
                $dsdm=category_list();
                // print_r($dssp);
                if (isset($addProduct_submit)) {
                    product_add($name,$category,$price,$sale,$description,$_FILES['image']['name']
                    ,$quantity,$hot,$status);
                    move_uploaded_file($_FILES['image']['tmp_name'],'../content/img/'.$_FILES['image']['name']);
                    header('location: ?mod=product&act=list');
                }
                include_once 'view/template_header.php';
                include_once 'view/page_product_add.php';
                include_once 'view/template_footer.php';
                break;
            case 'edit':
                $dsdm=category_list();
                $sp=product_getOne($id);
                // print_r($dssp);
                if (isset($editProduct_submit)) {
                    product_edit($name,$category,$price,$sale,$description,$_FILES['image']['name']
                    ,$quantity,$hot,$status,$id);
                    move_uploaded_file($_FILES['image']['tmp_name'],'../content/img/'.$_FILES['image']['name']);
                    header('location: ?mod=product&act=list'); 
                }
                include_once 'view/template_header.php';
                include_once 'view/page_product_edit.php';
                include_once 'view/template_footer.php';
                break;
            case 'delete':
                product_delete($id);
                header('location: ?mod=product&act=list'); 
                break;
        }   
    }
?>