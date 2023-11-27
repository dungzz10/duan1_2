<div class="row mb ">
    <div class="title">Danh Mục</div>
    <div class="content2 menudoc">
        <ul class="ul_class">
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<li>
                                   <a href="' . $linkdm . '">' . $name . '</a>
                              </li>';
            }
            ?>
            <!-- <li>
                        <a href="#">Đồng hồ</a>
                    </li>
                    <li>
                        <a href="#">Điện thoại</a>
                    </li>
                    <li>
                        <a href="#">Laptop</a>
                    </li>
                    <li>
                        <a href="#">Tai Nghe</a>
                    </li>
                    <li>
                        <a href="#">Củ Xạc</a>
                    </li>
                    <li>
                        <a href="#">Dây Xạc</a>
                    </li> -->
        </ul>
    </div>
   
</div>