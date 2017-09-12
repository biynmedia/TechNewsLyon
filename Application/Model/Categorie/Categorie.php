<?php
namespace Application\Model\Categorie;

class Categorie
{
    private $IDCATEGORIE,
            $LIBELLECATEGORIE,
            $ROUTECATEGORIE;
    
    /**
     * @return the $IDCATEGORIE
     */
    public function getIDCATEGORIE()
    {
        return $this->IDCATEGORIE;
    }

    /**
     * @return the $LIBELLECATEGORIE
     */
    public function getLIBELLECATEGORIE()
    {
        return $this->LIBELLECATEGORIE;
    }

    /**
     * @return the $ROUTECATEGORIE
     */
    public function getROUTECATEGORIE()
    {
        return $this->ROUTECATEGORIE;
    }

    
    
}

