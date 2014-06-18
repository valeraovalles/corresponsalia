<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mergeSort
 *
 * @author ecastro
 */
class sortFunctions {
    
    function mergesort($data) {
        
        if(count($data)>1) {

            $data_middle = round(count($data)/2, 0, PHP_ROUND_HALF_DOWN);
            $data_left = mergesort(array_slice($data, 0, $data_middle));
            $data_rigth = mergesort(array_slice($data, $data_middle, count($data)));
            $counter1 = 0;
            $counter2 = 0;
            // iterate over all pieces of the currently processed array, compare size & reassemble
            for ($i=0; $i<count($data); $i++) {
                // if we're done processing one half, take the rest from the 2nd half
                if($counter1 == count($data_left)) {
                    $data[$i] = $data_rigth[$counter2];
                    ++$counter2;
                // if we're done with the 2nd half as well or as long as pieces in the first half are still smaller than the 2nd half
                } elseif (($counter2 == count($data_rigth)) or ($data_left[$counter1] < $data_rigth[$counter2])) {
                    $data[$i] = $data_left[$counter1];
                    ++$counter1;
                } else {
                    $data[$i] = $data_rigth[$counter2];
                    ++$counter2;
                }
            }
        }
        return $data;
    }
    
}
