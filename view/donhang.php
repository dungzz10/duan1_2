  <!---->
  <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Đơn hàng </li>
    </ol>
    <!---->
    <section class="ab-info-main py-5">
        <div class="container py-3">
            <h3> ID đơn hàng  <?=$iddh?></h3>
            <h3 class="tittle text-center">View Cart</h3>
            <div class="row contact-main-info mt-5">
                <div class="col-md-6 contact-right-content">
                    <?php
                    if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)){
                    
                    
                    
                    $getshowcart=  getshowcart($iddh);
                  

                    if((isset($getshowcart ) && count( $getshowcart )>0)){
                    echo '
                    <table>
                    <tr>
                      <th>STT</th>
                      <th>TÊN SP</th>
                      <th>HÌNH</th>
                      <th>ĐƠN GIÁ </th>
                      <th>SỐ LƯỢNG </th>
                      <th>THÀNH TIỀN </th>
                     
                    </tr>
                        
                    
                    ';
                    $i=0;
                    $tong=0;
                    foreach ($getshowcart as $item ) {
                       
                        $tt = $item['soluong'] *$item['dongia'];
                        $tong = $tong+$tt;
                        echo'
                         <tr>
                            <td>'.($i+1).'</td>
                            <td>'.$item['tensp'].'</td>
                            <td><img src='.$item['img'].' alt="" width="80px"></td>
                           
                            <td>'.$item['dongia'].'</td>
                            <td>'.$item['soluong'].'</td>
                            <td>'.$tt.'</td>
                            
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
                }else{
                echo "gio hang rong";
                }
                    
                    ?>
                   
                    <!-- left -->
                </div>
                <div class="col-md-6 contact-left-content">
                    <?php  if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)){
                        $getorderinfor=getorderinfor($_SESSION['iddh']);
                        if(count($getorderinfor)>0){
                        
                        ?>
                    <h3> thông tin dat hang </h3>
                    

                    <table>
                        <tr>
                            <td>
                                tên người nhận : <?= $getorderinfor[0]['hoten']?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                dịa chỉ giao hàng : <?= $getorderinfor[0]['address']?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                đụa chỉ người nhận  <?= $getorderinfor[0]['email']?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                email người nhận  <?= $getorderinfor[0]['tell']?>
                            </td>
                        </tr>
                       
                      

                    </table>
                        <?php 
                        }
                    
                    
                    } ?>
                   

                </div>

            </div>
        </div>
    </section>