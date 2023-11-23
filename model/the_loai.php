<?php

function insert_the_loai($tentruyentl){
    $sql = "INSERT INTO `theloai`(`name`) VALUES ('.$tentruyentl.')";
    pdo_query($sql);
}
function delete_the_loai($id){
    $sql = "delete from theloai where id=". $id;
    pdo_query($sql);
}
function loadall_the_loai(){
    $sql = "select * from theloai order by id desc";
    $listtheloai = pdo_query($sql);
    return $listtheloai;    
}
function loadone_the_loai($id){
    $sql = "select * from theloai where id=". $id;
    $tl = pdo_query_one($sql);
    return $tl;
}
function update_the_loai($id, $tentruyen){
    $sql = "update theloai set name='".$tentruyen."' where id=".$id;
    pdo_execute($sql);
}

?>