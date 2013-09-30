<?php
   $ventas= array (120.25, 85.05, 90.36, 98.95, 102.51,
                  79.17, 89.55, 80.69, 86.77, 115.85,
                  124.25, 92.24, 94.97, 112.73, 127.85,
                  100.05, 105.42, 91.12, 99.51, 95.63
                );
   $total = 0;
   for ($i=0; $i<=count($ventas)-1; $i++) {
       $total += $ventas[$i];
   }
 
    $promedio = $total / count($ventas);
 
    echo 'El promedio de ventas es: '.$promedio;
?>



    