<?php

class Query extends Database {
    public static function run($sql) {
        return parent::getInstance()->getConnection()->query($sql);
    }
}
?>

