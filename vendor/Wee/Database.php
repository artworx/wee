<?php

namespace Wee;

class Database extends \PDO {

    static private $instance = null;

    public function __construct() {
        parent::__construct(sprintf("%s:host=%s;dbname=%s", DB_TYPE, DB_HOST, DB_NAME), DB_USER, DB_PASS);
    }

    public static function sharedInstance() {

        if (is_null(self::$instance)) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    function exec($statement) {
        throw new Exception('Permission denied');
    }
}