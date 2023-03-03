<?php

class Magus extends Character
{
    public function castSpell($target)
    {
        $target->pv -= $this->mana;
        return parent::castSpell($target);
    }
}

?>