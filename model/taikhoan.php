<?php
    function loadall_taikhoan(){
        $sql = "select * from taikhoan order by id desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;    
    }
    function insert_taikhoan($email, $user, $pass){
        $sql = "insert into taikhoan(email, name, pass) values('.$email.', '.$user.', '.$pass.')";
        pdo_execute($sql);
    }
    function checkuser($user, $pass){
        $sql = "select * from taikhoan where name='". $user."'AND pass='".$pass."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function check_email($email){
        $sql = "select * from taikhoan where email='". $email."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($id, $user,$pass, $email, $address, $tel){
        $sql = "update taikhoan set name='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."' where id=".$id;
        pdo_execute($sql);
    }
    function delete_taikhoan($id){
        $sql = "delete from taikhoan where id=". $id;
        pdo_query($sql);
    }
?>