  <!---->
  <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">View cart</li>
    </ol>
    <!---->
    <section class="ab-info-main py-5">
        <div class="container py-3">
            <h3 class="tittle text-center">View Cart</h3>
            <div class="row contact-main-info mt-5">
                <div class="col-md-6 contact-right-content">
                    <?php

                    if((isset($_SESSION['giohang']) && count($_SESSION['giohang'])>0)){
                    echo '
                    <table>
                    <tr>
                      <th>STT</th>
                      <th>TÊN SP</th>
                      <th>HÌNH</th>
                      <th>ĐƠN GIÁ </th>
                      <th>SỐ LƯỢNG </th>
                      <th>THÀNH TIỀN </th>
                      <th>HÀNH ĐỘNG </th>
                    </tr>
                        
                    
                    ';
                    $i=0;
                    $tong=0;
                    foreach ($_SESSION['giohang'] as $item ) {
                        echo $item[2];
                        $tt = $item[3] *$item[4];
                        $tong = $tong+$tt;
                        echo'
                         <tr>
                            <td>'.($i+1).'</td>
                            <td>'.$item[1].'</td>
                            <td><img src='.$item[2].' alt="" width="80px"></td>
                            <td>'.$item[3].'</td>
                            <td>'.$item[4].'</td>
                            <td>'.$tt.'</td>
                            <td><a href="index.php?act=dellcart&i='.$i.'">xóa </a></td>
                        </tr>';
                        $i++;
                    }
                    echo '<tr>

                    <td colspan="5"> </td>
                    <td> '.$tong.'</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    </tr>';
                    echo  '</table>
                    
                    '
                    
                    
                    ;
                    
                    }
                    echo var_dump($_SESSION['giohang'])
                    
                    ?>
                    <br>
                   <a href="index.php"> tiep tuc mua hang</a>| <a href="">thanh toán </a> |<a href="index.php?act=dellcart">xóa giỏ hàng</a>
                    <!-- left -->
                </div>
                <div class="col-md-6 contact-left-content">
                    <h3> thông tin mua hàng </h3>
                    <form action="index.php?act=thanhtoan" method="post">
                    <input type="hidden" name="tongdonhang" value="<?=$tong?>">

                    <table>
                        <tr>
                            <td>
                                <input type="text" name="hoten" placeholder="nhap ho ten">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="address" placeholder="nhập địa chỉ ">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="email" placeholder="nhập email">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="tell" placeholder="nhập số điện thoại ">
                            </td>
                        </tr>
                        <tr>
                            <td>phương thức thanh toán </td>
                            <input type="radio" name="pttt" value="1"> thanh toán khi nhận hàng <br>
                            <input type="radio" name="pttt" value="2"> thanh toán chuyển khoản  <br>
                            <input type="radio" name="pttt" value="3"> thanh toán ví momo <br>
                            <input type="radio" name="pttt" value="4"> thanh toán ONLINE <br>
                        </tr>
                        <tr>
                            <td><input type="submit" value="thanhtoan" name="thanhtoan"> </td>
                        </tr>

                    </table>

                    </form>

                </div>

            </div>
        </div>
    </section>