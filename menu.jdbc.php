<?php
require_once 'connection.class.php';
require_once 'menuDao.dao.php';

class MenuJdbc implements MenuDao{

    public function getMenus(){

        $db = Connection::connect();
        $statement = $db->query('SELECT
                                 * 
                                 from menu 
                                 join burger on burger.id=menu.id_burger
                                 join boisson on boisson.id=menu.id_boisson
                                 join accompagnement on accompagnement.id=menu.id_accompagnement');
    
        $tabMenu=$statement->fetchAll(); 
    
        foreach ($tabMenu as $menu) {
          echo'<div class="col-sm-6 col-md-4">
    
                <div class="card" style="width: 18rem;">
                    <img src="../images/'.$menu['photo'].'" class="card-img-top" alt="menu '.$menu['0'].'">
                    <div><strong>'.$menu['2'].' €</strong></div>
                    <div class="card-body">
                        <h5 class="card-title">'.$menu['1'].'</h5>
                        <p class="card-text">'.$menu['8'].' - '.$menu['12'].' - '.$menu['15'].'</p>
                        <a href="#" class="btn btn-primary">commander</a>
                    </div>
                </div>
    
              </div>';
        }


    }


}


?>
