<?php

class DBUtil
{
  private static $instance;
  private $dbh;

  private function __construct()
  {
    $conf = parse_ini_file(dirname(__FILE__) . '/../../config.ini', true);
    $this->dbh = new PDO(sprintf('mysql:host=%s;dbname=%s', $conf['db']['host'], $conf['db']['name']),
                         $conf['db']['user'],
                         $conf['db']['pass']);
  }

  public static function getInstance()
  {
    if (!self::$instance) {
      self::$instance = new DBUtil();
    }

    return self::$instance;
  }

  public function prepare($sql)
  {
    return $this->dbh->prepare($sql);
  }
}
