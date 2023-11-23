<?php

function insert_sanpham($tensp, $price, $hinh, $mota, $iddm){
    $sql = "insert into truyen(name, price, img, mota, id_the_loai) values('$tensp', '$price', '$hinh', '$mota', '$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql = "delete from truyen where id=". $id;
    pdo_query($sql);
}
function loadall_sanpham_top10(){
    $sql="select * from truyen where 1 order by view desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;    
}
function loadall_sanpham_home(){
    $sql="select * from truyen where 1 order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;    
}
function loadall_sanpham($kyw, $iddm=0){
    $sql="select * from truyen where 1";
    if ($kyw !="") {
        $sql.=" and name like '%".$kyw."%'";
    }
    if ($iddm>0) {
        $sql.=" and id_the_loai = '".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;    
}

function load_ten_dm($iddm){
    if ($iddm > 0) {
        $sql = "select * from danhmuc where id=". $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}
function loadone_sanpham($id){
    $sql = "select * from truyen where id=". $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id, $iddm){
    $sql = "select * from truyen where id_the_loai= ".$iddm." AND id <> ". $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;  
}
function update_sanpham($id, $iddm ,$tensp, $price, $hinh, $mota){
    if($hinh != ""){
        $sql = "update truyen set id_the_loai='".$iddm."',name='".$tensp."',price='".$price."',mota='".$mota."',img='".$hinh."' WHERE id=".$id;
    }else{
        $sql = "update truyen set id_the_loai='".$iddm."', name='".$tensp."', price='".$price."', mota='".$mota."' where id=".$id;
    }
    pdo_execute($sql);
}

?>