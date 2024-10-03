<?php
function reorder(array $addresses): array{
    $addresses2 = array();
    for ($i = 1; $i <= count($addresses); $i++) {
        foreach ($addresses as $address) {

            if (is_array($address)) {
                if (count($address) == 2 && $i == 1) {
                    $addresses2[] = $address;
                } elseif (count($address) > 2 && $i == 2) {
                    $addresses2[] = $address;
                }
            } elseif (is_numeric($address) && $i == 3) {
                $addresses2[] = $address;
            } elseif (is_null($address) && $i == 4) {
                $addresses2[] = $address;
            } elseif (is_object($address) && $i == 5){
                $addresses2[] = $address;
            }
        }
    }


    return $addresses2;
}