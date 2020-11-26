<?php
class Paravent {
    private $continent;
    private $mountain_altitudes = array();
    private $safe_spots;

    public function __construct() 
    {
        $this->data();
        $this->execute();
    }

    /**
     * Interact with the user to collect the necessary data to carry out the tests.
     */
    private function data() 
    {
        do {
            echo "Veuillez entrer la largeur du continent (1 <= [n] <= 100 000) : \n";
            $this->setContinent( (int)readline() );
        } while( $this->getContinent() < 1 || $this->getContinent() > 100000 );
        
            
        $negativeValue = false;
        do {
            echo "\nVeuillez renseigner les altitudes de chaque montagne (0 <= [h] <= 100 000) : \n";
            if( is_array( $this->getMountainAltitudes() ) && !empty( $this->getMountainAltitudes() ) )
            {

                if( count( $this->getMountainAltitudes() ) !== $this->getContinent() )
                {
                    echo "[Erreur] Renseignez à nouveau vos données, vous devez renseigner " . $this->getContinent() . " montagnes : \n";
                }
            }
            
            $mountains = explode( ' ', trim( readline() ) );
            $this->setMountainAltitudes( $mountains );
            
            $negativeValue = false;
            foreach( $this->getMountainAltitudes() as $height )
            {
                if( (int)$height < 0 ) {
                    $negativeValue = true;
                }
            }

            if( $negativeValue )
            {
                echo "[Erreur] Renseignez à nouveau vos données, vous avez défini une valeur négative. \n";
            }
        } while( count( $this->getMountainAltitudes() ) !== $this->getContinent() || $negativeValue !== false );
    }

    private function execute() 
    {
        $start = microtime( true );
        $maxMountainHeight = (int) $this->getMountainAltitudes()[0];
        $safeSpots = 0;

        foreach( $this->getMountainAltitudes() as $key => $altitude )
        {
            if( $maxMountainHeight > (int)$altitude ) {
                $safeSpots += 1;
            } else {
                $maxMountainHeight = $altitude;
            }
        }
        $this->setSafeSpots( $safeSpots );

        echo "Surfaces à l'abri disponibles : [ " . $this->getSafeSpots() . " ] \n";

        // Constraints on execution
        $memory_used = memory_get_usage() / 1024;
        $duration = number_format( microtime( true ) - $start, 5 );
        echo "\nMémoire utilisée : " . (int)$memory_used . " ko\n";
        echo "Temps d'exécution : " . $duration . " ms\n";
    }

    /**
     * Setters
     */
    public function setContinent( $width )
    {
        $this->continent = $width;
    }

    public function setMountainAltitudes( $mountains )
    {
        $this->mountain_altitudes = $mountains;
    }

    public function setSafeSpots( $int )
    {
        $this->safe_spots = $int;
    }

    /**
     * Getters
     */
    public function getContinent()
    {
        return $this->continent;
    }

    public function getMountainAltitudes()
    {
        return $this->mountain_altitudes;
    }

    public function getSafeSpots()
    {
        return $this->safe_spots;
    }
}

new Paravent();
