<div class="boxleft mr">
        <div class="row mb">
            <div class="title">
                Sản Phẩm <strong><?=$tendm?></strong>
            </div>
            <div class="row content">
                     <?php
                                            // Biến không được khởi tạo từ trước
                            if(!isset($dssp)){
                                $dssp = [];
                            }
                            
                            
                    $i=0;
                    foreach ($dssp as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $hinh=$img_path.$img;
                        if(($i==2)||($i==5)||($i==8)||($i==11)){
                            $mr="";
                        }else{
                            $mr="mr";
                        }
                        echo '<div class="sp '.$mr.'">
                                <div class="row img">
                                <a href="'.$linksp.'"> <img src="'.$hinh.'" alt=""></a>
                                </div>
                                <p>$'.$price.'</p>
                                <a href="'.$linksp.'">'.$name.'</a>
                              </div>';
                        $i+=1;      
                    }
                ?>
            </div>
        </div>

        <div class=" ">
       
    </div>
        </div>