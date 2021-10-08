<?php
require_once 'daoFactory.dao.php';
require_once 'menuDao.dao.php';


class MenuManager{

    private static MenuManager $instance;
    private MenuDao $menuDAO;


    public static function getInstance() {
        if(isset($instance)) {
            return MenuManager::$instance;  
        }
        else{
            return MenuManager::$instance=new MenuManager(); 
        }

        }

    public function getMenus(){   
        
        $this->menuDAO=DaoFactory::getMenuDao();
        $this->menuDAO->getMenus();

    }

}

?>
