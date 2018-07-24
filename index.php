<?php

use Classes\EquilibriumIndices;
require 'vendor/autoload.php';

$a = [-1, 3, -4, 5, 1, -6, 2, 1];

print_r(EquilibriumIndices::getEquilibriumIndices($a));
