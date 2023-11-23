
<div class="row2">
    <div class="row2 font_title">
        <h1>THỂ LOẠI SÁCH</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ SÁCH</th>
                        <th>TÊN SÁCH</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listtl as $theloai) {
                        extract($theloai);
                        $suatl = "index.php?act=suatl&id=" . $id;
                        $xoatl = "index.php?act=xoatl&id=" . $id;
                        echo '<tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>' . $id . '</td>
                                            <td>' . $name . '</td>
                                            <td>
                                                <a href="' . $suatl . '"> <input type="button" value="Sửa"> </a> 
                                                <a href="' . $xoatl . '"> <input type="button" value="Xóa"> </a> 
                                            </td>
                                         </tr>';
                    }
                    ?>


                </table>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=addtl"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>