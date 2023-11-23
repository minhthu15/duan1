<div class="row2">
      <div class="row2 font_title">
        <h1>THÊM MỚI THỂ LOẠI SÁCH</h1>
      </div>
      <div class="row2 form_content ">
        <form action="index.php?act=addtl" method="POST">
          <div class="row2 mb10 form_content_container">
            <label> Mã truyện: </label> <br>
            <input type="text" name="matruyentl" placeholder="nhập vào mã sách">
          </div>
          <div class="row2 mb10">
            <label>Tên truyện: </label> <br>
            <input type="text" name="tentruyentl" placeholder="nhập vào tên sách">
          </div>
          <div class="row mb10 ">
            <input class="mr20" type="submit" value="THÊM MỚI" name="themmoi">
            <input class="mr20" type="reset" value="NHẬP LẠI">

            <a href="index.php?act=listtl"><input class="mr20" type="button" value="DANH SÁCH"></a>
          </div>
          <?php
            if(isset($thongbao)&&($thongbao != "")) echo $thongbao;
          ?>
        </form>
      </div>
    </div>