<?php

require_once dirname(__FILE__) . '/../lib/mine/MySmarty.class.php';
require_once dirname(__FILE__) . '/../lib/mine/DBUtil.class.php';

$tpl_name = 'start.tpl';

$smarty = new MySmarty();
$smarty->assign('foo', 'bar');

if ($_POST) {
  if (isset($_POST['user']) && isset($_POST['pass']) &&
      '' !== $_POST['user'] && '' !== $_POST['pass']) {
    $dbutil = DBUtil::getInstance();
    $sth = $dbutil->prepare('INSERT INTO users (user, pass) VALUES ("foo", "bar")');
    $sth->execute();
  }
  $tpl_name = 'start_proc.tpl';
}

$smarty->display($tpl_name);
