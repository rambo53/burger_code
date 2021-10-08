<?php
require_once 'connection.class.php';

class MenuManager{

    private static MenuManager $instance;

    public static function getInstance() {
        if(isset($instance)) {
            return MenuManager::$instance;  
        }
        else{
            return MenuManager::$instance=new MenuManager(); 
        }

        }

    public function getMenus(){      
        $db = Connection::connect();
            $statement = $db->query('SELECT
                                     * 
                                     from menu 
                                     join burger on burger.id=menu.id_burger
                                     join boisson on boisson.id=menu.id_boisson
                                     join accompagnement on accompagnement.id=menu.id_accompagnement');

            $tabMenu=$statement->fetchAll(); 

            foreach ($tabMenu as $menu => $value) {
              echo'<div class="col-sm-6 col-md-4">

                    <div class="card" style="width: 18rem;">
                        <img src="../images/'.$tabMenu[$menu]['photo'].'" class="card-img-top" alt="menu '.$tabMenu[$menu]['0'].'">
                        <div><strong>'.$tabMenu[$menu]['2'].' €</strong></div>
                        <div class="card-body">
                            <h5 class="card-title">'.$tabMenu[$menu]['1'].'</h5>
                            <p class="card-text">'.$tabMenu[$menu]['8'].' - '.$tabMenu[$menu]['12'].' - '.$tabMenu[$menu]['15'].'</p>
                            <a href="#" class="btn btn-primary">commander</a>
                        </div>
                    </div>

                  </div>';
            }
    }

}

?>
