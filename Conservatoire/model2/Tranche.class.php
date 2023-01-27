<?php
class Tranche
{
    private $idTranche;

    public function getIdTranche()
    {
        return $this->idTranche;
    }

    public function setIdTranche($idTranche)
    {
        $this->idTranche = $idTranche;
        return $this;
    }
}
