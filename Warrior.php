<?php

class Warrior extends Character
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function attack($target)
    {
        $target->pv -= $this->strenght ;
        return parent::attack($target);
    }
}

?>