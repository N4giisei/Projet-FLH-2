<?php

class Airbnb
{
    // Attributs
    private $IdAirbnb;
    private $Airbnb;
    private $nbPersonne;
    private $nbChambre;
    private $nbLit;
    private $LitBebe;
    private $Exterieur;

    // Méthodes
    public function __construct()
    {
        // Initialisation des attributs
        $this->IdAirbnb = null;
        $this->Airbnb = null;
        $this->nbPersonne = null;
        $this->nbChambre = null;
        $this->nbLit = null;
        $this->LitBebe = null;
        $this->Exterieur = null;
    }

    // Getters et setters
    public function getMatricule()
    {
        return $this->IdAirbnb;
    }

    public function setIdAirbnb($IdAirbnb)
    {
        $this->IdAirbnb = $IdAirbnb;
    }

    public function getAirbnb()
    {
        return $this->Airbnb;
    }

    public function setAirbnb($Airbnb)
    {
        $this->Airbnb = $Airbnb;
    }

    public function getNbPersonne()
    {
        return $this->nbPersonne;
    }

    public function setnbPersonne($nbPersonne)
    {
        $this->nbPersonne = $nbPersonne;
    }

    public function getNbChambre()
    {
        return $this->nbChambre;
    }

    public function setnbChambre($nbChambre)
    {
        $this->nbChambre = $nbChambre;
    }

    public function getNbLit()
    {
        return $this->nbLit;
    }

    public function setnbLit($nbLit)
    {
        $this->nbLit = $nbLit;
    }

    public function getLitBebe()
    {
        return $this->LitBebe;
    }

    public function setlitBebe($litBebe)
    {
        $this->litBebe = $litBebe;
    }

    public function getExterieur()
    {
        return $this->Exterieur;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }


    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                echo "<br>";
                var_dump($method);
                $this->$method($value);
            }
        }
    }
}

?>