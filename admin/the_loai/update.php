
<?php

if (is_array($tl)) {
    extract($tl);
}
?>

<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT THỂ LOẠI SÁCH</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatetl" method="POST">
            <div class="row2 mb10 form_content_container">
                <label> Mã truyện: </label> <br>
                <input type="text" name="matruyen" placeholder="nhập vào mã sách">
            </div>
            <div class="row2 mb10">
                <label>Tên truyện: </label> <br>
                <input type="text" name="tentruyen" placeholder="nhập vào tên sách" value="<?php if (isset($name) && $name != "") echo $name; ?>">
            </div>
            <div class="row mb10 ">
                <input type="hidden" value="<?php if (isset($id)&&($id>0)) echo $id; ?>" name="id">
                <input class="mr20" type="submit" value="Cập nhật" name="capnhat">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=listtl"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>

