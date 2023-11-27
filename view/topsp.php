<div class="row top">
    <div class="title">Top 6 Yêu Thích</div>
    <div class="row content">
        <?php
        foreach ($dstop6 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $img;
            echo '<div class="row mb mb10 top6">
                   <a href="' . $linksp . '"> <img src="' . $img . '" alt=""></a>
                   <a href="' . $linksp . '">' . $name . '</a>
               </div>';
        }
        ?>
        <!-- <div class="row mb10 top6">
                    <img src="view/image/nb1.jpg" alt="">
                    <a href="#">Tai Nghe Airpod Pro</a>
                </div>
                <div class="row mb10 top6">
                    <img src="view/image/nb2.jpg" alt="">
                    <a href="#">Đồng hồ thông minh</a>
                </div>
                <div class="row mb10 top6">
                    <img src="view/image/nb3.jpg" alt="">
                    <a href="#">Iphone 15 Promax</a>
                </div>
                <div class="row mb10 top6">
                    <img src="view/image/nb4.jpg" alt="">
                    <a href="#">Củ xạc nhanh 25W</a>
                </div>
                <div class="row mb10 top6">
                    <img src="view/image/nb5.jpg" alt="">
                    <a href="#">Dây xạc đa năng</a>
                </div>
                <div class="row mb10 top6">
                    <img src="view/image/nb6.jpg" alt="">
                    <a href="#">Dell xps 15</a>
                </div> -->
    </div>
</div>