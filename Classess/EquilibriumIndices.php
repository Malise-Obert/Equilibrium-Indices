<?php

namespace Classes;

class EquilibriumIndices
{
    public static function getEquilibriumIndices($a)
    {
        $totalRight = 0;

        for ($x = 0; $x < count($a); $x++) {
            $totalRight +=  $a[$x];
        }

        $totalLeft = 0;
        for ($p = 0; $p < count($a); $p++) {
            $totalLeft += $p - 1 < 0 ? 0: $a[$p-1];
            $totalRight -= $a[$p];
            if ($totalLeft == $totalRight)
            {
                 return $p;
            }
        }

        return -1;
    }
}
