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
            require_once '../php/menu.manager.php';
            $menuManager = MenuManager::getInstance();
            $menuManager->getMenus();
          ?>
                          
          </div>

        </div>  
      
      </div>

    </div>
    
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</html>
