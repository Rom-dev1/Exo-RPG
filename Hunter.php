<?php

class Hunter extends Character

{

    public function rangeAttack($target)
    {   
        $target->pv -= $this->strenght*2;
        return parent::rangeAttack($target);
    }

}

?>