<?php

class Burger extends Aliment{

    private $composition;

    public function __construct($id, $nom, $prix, $composition)
    {
        parent::__construct($id, $nom, $prix);
        $this->composition=$composition;
    }

    ////////////////////////////////////////////////////////////////////

    function getComposition() {
        return $this->composition;
    }

    function setComposition($composition) {
        $this->composition = $composition;
        return $this;
    }  
}


?>
