<html>
   <body>

     El total a pagar es <br>

     <?php

        $time = $_POST["tiempo"];
        $day =  $_POST["dia"];
        $turn =  $_POST["turno"];
        $costo= 120;

        if ($time <= 5){
            $costo= $costo + 0;
        }
        if ($time > 5 and $time <= 8){
            $costo = $costo + 50;
        }
        if ($time > 8 and $time <= 10){
            $costo = $costo + 70;
        }
        if ($time > 10){
            $costo = $costo + 80;
        }

        if ($day=="domingo")
        {
            $costo += ($costo * 3 /100) ;
        }
        elseif ($day == "lunes" or $day == "martes" or $day == "miercoles" or $day == "jueves" or $day == "viernes" or $day == "sabado" )
        {
         if ($turn=="mañana") {
            $costo += ($costo * 15 /100) ;
        }
         if ($turn=="tarde"){  
            $costo += ($costo * 10 /100)  ;
         } 
        }
         echo $costo
     ?>
     
   </body>
</html>