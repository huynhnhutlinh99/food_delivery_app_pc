
<?php
session_start();
include_once './includes/head.meta.php';
include_once('../lib/commom.php');
$r_no = sql_fetch("SELECT r_no,r_restaurant_name from restaurant where r_id =".$_SESSION['r_id']);
$order = sql_query("
SELECT o.order_id, o.regtime,o.cancel_after_shop_accept,o.cancel_before_shop_accept,o.cancel_after_shop_delivery ,o.total_price_order, m.mb_name, c.count_quantity, c.option_name, c.option_add_name, c.unit_price,o.cancel_yn,o.status
        FROM orders AS o 
        LEFT JOIN (SELECT COUNT(order_id) AS count_quantity, order_id, r_no, option_name, option_add_name, unit_price
          FROM cart WHERE ordered = 'y' GROUP BY order_id) as c 
        ON c.order_id = o.order_id 
        LEFT JOIN member AS m 
        ON m.mb_no = o.mb_no 
        WHERE r_no = '{$r_no['r_no']}' and o.show_yn = 'y'
");
?>

<div class="nl-container">
    <div class="nl-header-main nl-row">
        <div class="nl-left-part">유형유형유형</div>
        <div class="nl-right-part">
            <div class="nl-row">
                <button class="nl-btn-zoom-down"></button>
                <button class="nl-btn-zoom-up"></button>
                <button class="nl-btn-x"></button>
            </div>
        </div>
    </div>
    <div class="nl-row nl-h-100">
        <div class="nl-menu">
            <ul id="menu" class="nl-list">
                <li id="tab1" class="nl-item active">
                    <a href="#" class="nl-text">메뉴 1</a>
                </li>
                <li id="tab2" class="nl-item">
                    <a href="#" class="nl-text">메뉴 2</a>
                </li>
                <li id="tab3" class="nl-item">
                    <a href="#" class="nl-text">메뉴 3</a>
                </li>
            </ul>
        </div>
        <!-- content 1 -->
        <div id="ctn-1" class="nl-ctn-1 nl-ctn-part tab1 active">
  
            <?php foreach($order as $show){ ?>
            <div class="nl-item-order-list">
                <div class="nl-row">
                    <div class="nl-col-1">
                        <div class="nl-line-1">
                            <div class="nl-row nl-j-between nl-a-center">
                                <div>
                                    <div class="nl-row nl-a-center">
                                        <span class="nl-text-time"><?=date('H:i',strtotime($show['regtime']))?></span>
                                        <span class="nl-order-num">ORDER: #<?=$show['order_id']?></span>
                                    </div>
                                </div>
                                <span class="nl-text-type green">유형</span>
                            </div>
                            
                            
                        </div>
                        <div class="nl-line-2 nl-row nl-a-center">
                            <span class="nl-text-price"><?=number_format($show['total_price_order'])?>을</span>
                            <span class="nl-text-total-order">유형유형 1유형</span>
                            <?php if($show['cancel_yn'] == 'y' && 
                                ($show['cancel_before_shop_accept']=='y' || $show['cancel_after_shop_accept']=='y' || $show['cancel_after_shop_delivery']=='y') ){ ?>
                                    <span class="nl-pay-status">전을</span>
                                <?php } else if($show['status'] == 'complete'){ ?>
                                    <span class="nl-pay-status">전을</span>
                                <?php } else if($show['status'] == 'delivery'){?>
                                    <span class="nl-pay-status">전을</span>
                                <?php } ?>
                        </div>
                        <div>
                                <?php
                                    $item = '';
                                    $sql_cart = "select c.*, c.rf_name from cart c left join restaurant_food rf on c.rf_no = rf.rf_no where c.order_id =".$show['order_id'];
                                    $result = sql_query($sql_cart);
                                    while($row = sql_fetch_array($result)){
                                ?>
                                <?php if($row['rf_name']) 
                                        $item .= $row['rf_name'] . ' x ' . $row['quantity'] . ", ";
                                        else 
                                        $item .= '';
                                        ?>
                                <?php
                                }  
                                ?>
                            <span class="nl-text-1"><?= rtrim($item,', ')?> </span>
                        </div>
                        
                        <div class="nl-line-4 nl-row nl-j-between">
                            <span class="nl-text-2"><?=$r_no['r_restaurant_name']?></span>
                            <button class="nl-btn-send-mes">위하여</button>
                        </div>
                    </div>
                    <div class="nl-col-2">
                        <div class="nl-row nl-a-center">
                            <button type="button" class="nl-btn-print">발전발을</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- content 2 -->
        <div id="ctn-2" class="nl-ctn-2 nl-ctn-part tab2">
            <div class="nl-row">
                <div class="nl-col-1 nl-mg-b-16">
                    <div class="nl-ip-part nl-max one-btn">
                        <div class="nl-info-part">
                            <input type="text" class="nl-ip nl-max" placeholder="발전을발전을">
                            <div class="nl-text-info">Stop Working</div>
                        </div>
                        <button class="nl-btn-setup">발전을</button>
                    </div>
                </div>
                <div class="nl-col-2 nl-mg-b-16">
                    <div class="nl-ip-part nl-max one-btn">
                        <div class="nl-info-part">
                            <input type="text" class="nl-ip nl-max" placeholder="발전을발전을">
                            <div class="nl-text-info">Holly day</div>
                        </div>
                        <button class="nl-btn-setup">발전을</button>
                    </div>
                </div>
                <div class="nl-col-1 nl-mg-b-16">
                    <div class="nl-ip-part nl-max one-btn">
                        <div class="nl-info-part">
                            <input type="text" class="nl-ip nl-max" placeholder="발전을발전을">
                            <div class="nl-text-info">발전을 발전을</div>
                        </div>
                        <button class="nl-btn-setup">발전을</button>
                    </div>
                </div>
                <div class="nl-col-2 nl-mg-b-16">
                    <div class="nl-ip-part nl-max two-btn">
                        <div class="nl-info-part">
                            <input type="text" class="nl-ip nl-max" placeholder="발전을발전을">
                            <div class="nl-text-info">Post setup</div>
                        </div>
                        <button class="nl-btn-setup">발전을</button>
                        <button class="nl-btn-setup">발전을</button>
                    </div>
                </div>
                <div class="nl-col-1 nl-mg-b-16">
                    <div class="nl-ip-part nl-max one-btn">
                        <div class="nl-info-part">
                            <input type="text" class="nl-ip nl-max" placeholder="발전을발전을">
                            <div class="nl-text-info">Alerm</div>
                        </div>
                        <button class="nl-btn-setup">발전을</button>
                    </div>
                </div>
                <div class="nl-col-2 nl-mg-b-16">
                    <div class="nl-ip-part nl-max one-btn">
                        <div class="nl-info-part">
                            <input type="text" class="nl-ip nl-max" placeholder="발전을발전을">
                            <div class="nl-text-info">
                                Help
                                <span class="nl-text-grey">발전을발전을발전을</span>
                            </div>
                        </div>
                        <button class="nl-btn-setup">발전을</button>
                    </div>
                </div>
                <div class="nl-col-1 nl-mg-b-16">
                    <div class="nl-ip-part nl-max one-btn">
                        <div class="nl-info-part">
                            <input type="text" class="nl-ip nl-max" placeholder="발전을발전을">
                            <div class="nl-text-info">
                                Version 
                                <span class="nl-text-grey">발전을발전을발전을</span>
                            </div>
                        </div>
                        <button class="nl-btn-setup">발전을</button>
                    </div>
                </div>
                <div class="nl-col-2 nl-mg-b-16">
                    <!-- <div class="nl-ip-part nl-max one-btn">
                        <div class="nl-info-part">
                            <input type="text" class="nl-ip nl-max" placeholder="발전을발전을">
                            <div class="nl-info-part">발전을 발전을</div>
                        </div>
                        <button class="nl-btn-setup">발전을</button>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- content 3 -->
        <div id="ctn-3" class="nl-ctn-3  nl-ctn-part tab3"></div>
    </div>
    <div class="nl-pu nl-hidden">
        <div class="nl-pu-ctn">
            <div class="nl-head">
                <img src="../public/img/icon4.svg" alt="" class="nl-back">
                <span class="nl-title">발전을</span>
                <img src="../public/img/icon1.svg" alt="" class="nl-close">
            </div>
            <div class="nl-ctn">
                <p class="nl-text-ms">취소 이유 선택.</p>
                <div class="nl-list-reason">
                    <div class="nl-row">
                        <div class="nl-col">
                            <label class="nl-reason-item">
                                <input type="radio" name="reason" id="" class="nl-hidden">
                                <div class="nl-box">취소 이유</div>
                            </label>
                        </div>
                        <div class="nl-col">
                            <label class="nl-reason-item">
                                <input type="radio" name="reason" id="" class="nl-hidden">
                                <div class="nl-box">취소 이유</div>
                            </label>
                        </div>
                        <div class="nl-col">
                            <label class="nl-reason-item">
                                <input type="radio" name="reason" id="" class="nl-hidden">
                                <div class="nl-box">취소 이유</div>
                            </label>
                        </div>
                        <div class="nl-col">
                            <label class="nl-reason-item">
                                <input type="radio" name="reason" id="" class="nl-hidden">
                                <div class="nl-box">취소 이유</div>
                            </label>
                        </div>
                        <div class="nl-col">
                            <label class="nl-reason-item">
                                <input type="radio" name="reason" id="" class="nl-hidden">
                                <div class="nl-box">취소 이유</div>
                            </label>
                        </div>
                        <div class="nl-col">
                            <label class="nl-reason-item">
                                <input type="radio" name="reason" id="" class="nl-hidden">
                                <div class="nl-box">취소 이유</div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<?php include_once './includes/bottom.php'?>