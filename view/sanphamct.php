<div class=" tong2">
<div class="row mb trai ">
<div class=" ">
        <?php
        include "danhmuc.php";
        ?>
    </div>
    <div class="boxleft mr">
        <div class="row ">
            <?php
            extract($onesp);
            ?>
            <div class="title">
                <?= $name ?>
                <?= $price ?>

            </div>
            <div class="row content">
                <?php

                $img = $img_path.$img;
               
                echo '<div class="row mb spct"><img src="' . $img . '">
                <form action="index.php?act=addcart" method="post">
                    <input type="number" value="1" min="1" max="50" required name="sl">
                    <input type="submit" value="đặt hàng" name="addtocart">
                    <input type="hidden" value="'.$id.'" name="id">
                    <input type="hidden" value="'.$name.'" name="tensp">
                    <input type="hidden" value="'.$img.'" name="img">
                    <input type="hidden" value="'.$price.'" name="gia">

                </form>
                
                </div>';
                echo $mota;
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {               
                $("#binhluan").load("view/binhluan/binhluanform.php", { idpro: <?=$id?>});
            });
        </script>
        <div class="row" id="binhluan">
           
        </div>
        <div class="row mb">
            <div class="title">Sản Phẩm Cùng Loại</div>
            <div class="row content">
                <?php
                foreach ($sp_cung_loai as $sp_cung_loai) {
                    extract($sp_cung_loai);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
                }
                ?>
            </div>
        </div>
    </div>
   
   
</div>
<div class="phai">
        
<?php include "topsp.php" ?>
</div>
</div>

      