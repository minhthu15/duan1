<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=dstk" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ TK</th>
                        <th>TÊN ĐĂNG NHẬP</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>ĐIỆN THOẠI</th>
                        <th>VAI TRÒ</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $xoatk = "index.php?act=xoatk&id=" . $id;
                        echo '<tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>' . $id . '</td>
                                            <td>' . $name . '</td>
                                            <td>' . $pass . '</td>
                                            <td>' . $email . '</td>
                                            <td>' . $address . '</td>
                                            <td>' . $tel . '</td>
                                            <td>' . $role . '</td>
                                            <td>
                                                <a href="' . $xoatk . '"> <input type="button" value="Xóa"> </a> 
                                            </td>
                                         </tr>';
                    }
                    ?>


                </table>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
            </div>
        </form>
    </div>
</div>