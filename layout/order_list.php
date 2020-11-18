<?php include_once './includes/head.meta.php'?>
<?php
session_start();
echo 'id: '.$_SESSION['r_id']; ?>
<div class="nl-container">
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
        <div class="nl-item-order-list">
            <div class="nl-row">
                <div class="nl-col-1">
                    <div class="nl-row nl-flex-col">
                        <span class="nl-text-time">07:00</span>
                        <span class="nl-text-type green">유형</span>
                    </div>
                </div>
                <div class="nl-col-2">
                    <div>
                        <span class="nl-text-price">20,000을</span>
                        <span class="nl-pay-status type-1 ">전을</span>
                    </div>
                    <div>
                        <span class="nl-text-1">국민경제의 SET 1을</span>
                    </div>
                    <div>
                        <span class="nl-text-2">국민경: 112</span>
                    </div>
                    <div class="nl-row">
                        <span class="nl-text-3">응하 위하여</span>
                        <span class="nl-text-4">응하기 위하여</span>
                    </div>
                </div>
                <div class="nl-col-3">
                    <button type="button" class="nl-btn-print">발전을</button>
                </div>
            </div>
        </div>
    </div>
    <!-- content 2 -->
    <div id="ctn-2" class="nl-ctn-2 nl-ctn-part tab2">
        <div class="nl-row">
            <div class="nl-col-1 nl-mg-b-16">
                <div class="nl-ip-part nl-max one-btn">
                    <input type="text" class="nl-ip nl-max" placeholder="발전을발전을">
                    <button class="nl-btn-setup">발전을</button>
                </div>
            </div>
            <div class="nl-col-2 nl-mg-b-16">
                <div class="nl-ip-part nl-max one-btn">
                    <input type="text" class="nl-ip nl-max" placeholder="발전을발전을">
                    <button class="nl-btn-setup">발전을</button>
                </div>
            </div>
            <div class="nl-col-1 nl-mg-b-16">
                <div class="nl-ip-part nl-max one-btn">
                    <input type="text" class="nl-ip nl-max" placeholder="발전을발전을">
                    <button class="nl-btn-setup">발전을</button>
                </div>
            </div>
            <div class="nl-col-2 nl-mg-b-16">
                <div class="nl-ip-part nl-max one-btn">
                    <input type="text" class="nl-ip nl-max" placeholder="발전을발전을">
                    <button class="nl-btn-setup">발전을</button>
                </div>
            </div>
            <div class="nl-col-1 nl-mg-b-16">
                <div class="nl-ip-part nl-max one-btn">
                    <input type="text" class="nl-ip nl-max" placeholder="발전을발전을">
                    <button class="nl-btn-setup">발전을</button>
                </div>
            </div>
            <div class="nl-col-2 nl-mg-b-16">
                <div class="nl-ip-part nl-max two-btn">
                    <input type="text" class="nl-ip nl-max" placeholder="발전을발전을">
                    <button class="nl-btn-setup">발전을</button>
                    <button class="nl-btn-setup">발전을</button>
                </div>
            </div>
            <div class="nl-max nl-mg-b-16">
                <div class="nl-ip-part nl-max two-btn">
                    <input type="text" class="nl-ip nl-max" placeholder="발전을발전을">
                    <button class="nl-btn-setup">발전을</button>
                    <button class="nl-btn-setup">발전을</button>
                </div>
            </div>
            <div class="nl-max">
                <div class="nl-ip-part nl-max one-btn">
                    <input type="text" class="nl-ip nl-max" placeholder="발전을발전을">
                    <button class="nl-btn-setup">발전을</button>
                </div>
            </div>
        </div>
    </div>
    <!-- content 3 -->
    <div id="ctn-3" class="nl-ctn-3  nl-ctn-part tab3"></div>

    <div class="nl-pu nl-hidden">
        <div class="nl-pu-ctn">
            <div class="nl-head">
                <img src="../public/img/ico_back_pu.svg" alt="" class="nl-back">
                <span class="nl-title">발전을</span>
                <img src="../public/img/icon_x_mark.svg" alt="" class="nl-close">
            </div>
            <div class="nl-ctn">
                <span class="nl-text-ms">취소 이유 선택.</span>
                <table class="nl-list-reason">
                    <tr>
                        <td>
                            <label class="nl-reason-item">
                                <input type="radio" name="reason" id="" class="nl-hidden">
                                <div class="nl-box">취소 이유</div>
                            </label>
                        </td>
                        <td>
                            <label class="nl-reason-item">
                                <input type="radio" name="reason" id="" class="nl-hidden">
                                <div class="nl-box">취소 이유</div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="nl-reason-item">
                                <input type="radio" name="reason" id="" class="nl-hidden">
                                <div class="nl-box">취소 이유</div>
                            </label>
                        </td>
                        <td>
                            <label class="nl-reason-item">
                                <input type="radio" name="reason" id="" class="nl-hidden">
                                <div class="nl-box">취소 이유</div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="nl-reason-item">
                                <input type="radio" name="reason" id="" class="nl-hidden">
                                <div class="nl-box">취소 이유</div>
                            </label>
                        </td>
                        <td>
                            <label class="nl-reason-item">
                                <input type="radio" name="reason" id="" class="nl-hidden">
                                <div class="nl-box">취소 이유</div>
                            </label>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    </div>

</div>
<?php include_once './includes/bottom.php'?>