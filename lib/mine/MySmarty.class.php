<?php

require_once dirname(__FILE__) . '/../oss/smarty/Smarty.class.php';

class MySmarty extends Smarty
{
  public function __construct ()
  {
    $this->template_dir = dirname(__FILE__) . '/../../templates';
    $this->compile_dir = dirname(__FILE__) . '/../../templates_c';

    parent::Smarty();
  }
}
