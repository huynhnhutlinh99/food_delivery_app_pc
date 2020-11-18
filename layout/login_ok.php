<?php
include_once('../lib/commom.php');
session_start();

$r_id = $_REQUEST['r_id'];

//        set_session('ss_admin', $r_id);
//        set_session('ss_partner', $r_id);

$r_pw = get_encrypt_string($_REQUEST['r_pw']);



$sql_check_account = sql_fetch("select count(*) cnt from restaurant where r_id = '$r_id' and r_pw = '$r_pw'")['cnt'];
echo $sql_check_account;
if($sql_check_account > 0){
?>
	<script>location.href='order_list.php'</script>
<?php
    set_session('r_id', $r_id);
} else {
?>
	<script>alert('아이디 혹은 비밀번호가 일치하지 않습니다.');location.href='login.php'</script>
<?php
}

?>
