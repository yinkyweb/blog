<?php

require_once dirname(__FILE__) . '/../lib/mine/MySmarty.class.php';
require_once dirname(__FILE__) . '/../lib/mine/DBUtil.class.php';

$tpl_name = 'login.tpl';
$smarty = new MySmarty();

if ($_POST) {
  if (isset($_POST['user']) && isset($_POST['pass']) &&
      '' !== $_POST['user'] && '' !== $_POST['pass']) {
    $dbutil = DBUtil::getInstance();
    $sth = $dbutil->prepare('SELECT * FROM users WHERE user = :user AND pass = :pass');
    $sth->bindParam(':user', $_POST['user'], PDO::PARAM_STR);
    $sth->bindParam(':pass', $_POST['pass'], PDO::PARAM_STR);
    $sth->execute();

    $login_info = $sth->fetch(PDO::FETCH_ASSOC);
    // session
    $smarty->assign('login_info', $login_info);
  }
  $tpl_name = 'login_proc.tpl';
}
$smarty->display($tpl_name);
