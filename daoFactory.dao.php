<?php
require_once 'menu.jdbc.php';

class DaoFactory{

    public static function getMenuDao(){
        return new MenuJdbc();
    }
}


?>
