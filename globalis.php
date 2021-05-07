<?php
set_time_limit(0.5);
ini_set('memory_limit', 2000);
function survivalArea(array $heights)
    {
        if(empty($heights)) {
            echo 'Les Prolosaures vont avoir du mal à s\'abriter sans aucune montagne...';
        } elseif(max($heights) === 0 ){
            echo 'Une montagne est par définition au-dessus du niveau de la mer !';
        } else {
            if(count($heights) < 100000 && max($heights) < 100000) {
                $safeZones = [];
                $maxHeight = $heights[0];

                for ($i = 1 ; $i < count($heights); $i++) {
                    if(is_numeric($heights[$i])){
                        if($maxHeight > $heights[$i]){
                            array_push($safeZones, $heights[$i]);
                        } else  $maxHeight = $heights[$i];
                    } else {
                        echo 'Euh... C\'est quel type de montagne ça ?';
                        break ;
                    }
                } if(count($safeZones) >= 1) {
                    echo 'Les Prolosaures auront à disposition '.count($safeZones).' unités de surface protégée par les montagnes après le passage de l\'ouragan.';
                } else echo 'Les Prolosaures sont tous condamnés.';
            } else echo 'Ce territoire est beaucoup trop vaste pour le comptabiliser.';
        }
    }
//survivalArea([30,27,17,42,29,12,14,41,42,42]);
//survivalArea([25,'eee',30,27,17,42,29,12,14,41]);
//survivalArea([0, 96]);
//survivalArea([]);



