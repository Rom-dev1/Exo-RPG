<?php

class Character
{
    protected $name;
    protected $pv;
    protected $strenght;
    protected $mana;

    function __construct(string $name, $pv = 100, $strenght = 10, $mana = 10)
    {
        $this->name = ucfirst($name);
        $this->pv = $pv;
        $this->strenght = $strenght;
        $this->mana = $mana; 

    }
    public function attack($target)
    {
        $target->pv -= $this->strenght ;
        var_dump($this->pv);
        return $this->name.' attaque au corps '.$target->name.', il lui reste '.$target->pv.' pv';
    }
    public function rangeAttack($target)
    {
        $target->pv -= $this->strenght;
        return $this->name.' attaque à distance '.$target->name.', il lui reste '.$target->pv.' pv';
    }

    public function castSpell($target)
    {
        $target->pv -= $this->mana;
        return $this->name.' lance un sort à '.$target->name.', il lui reste '.$target->pv.' pv';
    
    }
}

?>