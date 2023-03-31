<?php


class Personnage
{
    private $pseudo; 
    private $lvl;
    private $xp;

    public function __construct($pseudo)
    {
        $this->setPseudo($pseudo);
        $this->setLvl(1);
        $this->setXp(0);
    }

    public function setLvl(int $lvl)
    {
        $this->lvl = $lvl;
    }
    public function setXp(int $xp)
    {
        $this->xp = $xp;
    }
    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function getXp()
    {
        return $this->xp;
    }
    public function getLvl()
    {
        return $this->lvl;
    }
    public function increaseXp()
    {
        $increaseValue = $this->xp + 20;
        if ($increaseValue >= 100) {
            $this->xp = $increaseValue - 100;
            $this->lvl += 1;
        } else {
            $this->xp = $increaseValue;
        }
    }
}

$character1 = new Personnage("Thomas");
$character1->increaseXp();

$character2 = new Personnage("Robert");
$character2->increaseXp();
$character2->increaseXp();
$character2->increaseXp();
$character2->increaseXp();
$character2->increaseXp();
$character2->increaseXp();
$character2->increaseXp();

echo "<pre>";
var_dump($character1);
var_dump($character2);
echo "</pre>";

echo "Bonjour " . $character1->getPseudo();
