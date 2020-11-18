<?php include_once("../layout/includes/head.meta.php")?>
    <div class="nl-container">
        <div class="nl-ctn-login">
            <div class="nl-head">
                <span class="nl-title">LOGIN</span>
                <img src="../public/img/icon_x_mark.svg" alt="" class="nl-close">
            </div>
            <form action="login_ok.php" method="POST">
                <div class="nl-row nl-a-center nl-mg-b-16">
                    <label for="#" class="nl-text-lbl">Username</label>
                    <input type="text" class="nl-ip" name="r_id">
                </div>
                <div class="nl-row nl-a-center">
                    <label for="#" class="nl-text-lbl">Password</label>
                    <input type="text" class="nl-ip" name="r_pw">
                </div>

                <button type="submit" class="nl-btn-login nl-max">Login</button>
            </form>
        </div>
    </div>
<?php include_once("../layout/includes/bottom.php")?>