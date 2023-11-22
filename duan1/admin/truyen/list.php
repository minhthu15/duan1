<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=listsp" method="POST">
            <div class="row2 mb10 formds_loai">
                
                <input type="text" name="kyw">
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listtheloai as $theloai) {
                        extract($theloai);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
                <input type="submit" value="GO" name="listok">

                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>HÌNH</th>
                        <th>GIÁ</th>
                        <th>MÔ TẢ</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id=" . $id;
                        $xoasp = "index.php?act=xoasp&id=" . $id;
                        $hinhpath = "../upload/" . $img;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src='" . $hinhpath . "' height='80'>";
                        } else {
                            $hinh = "Không có hình upload";
                        }

                        echo '<tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>' . $id . '</td>
                                            <td>' . $name . '</td>
                                            <td>' . $hinh . '</td>
                                            <td>' . $price . '</td>
                                            <td>' . $mota . '</td>
                                            <td>
                                                <a href="' . $suasp . '"> <input type="button" value="Sửa"> </a> 
                                                <a href="' . $xoasp . '"> <input type="button" value="Xóa"> </a> 
                                            </td>
                                         </tr>';
                    }
                    ?>

                </table>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=addsp"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>