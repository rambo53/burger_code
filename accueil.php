<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>accueil</title>
</head>
<body>


    <div class="container site">
    <?php
      require_once'navbar.php';

      getNavbar();
    ?>
      
      <div class="tab-content mt-2">

        <div class="tab-pane active mb-2"">
                        
          <div class="row">

          <?php
            require_once '../php/connection.php';

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

          ?>
          </div>

        </div>  
      
      </div>

    </div>
    
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</html>
