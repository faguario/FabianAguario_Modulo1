<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla Naval</title>
</head>
<body>
    <h1>Batalla Naval</h1>
    <?php
        $filas=10;
        $celdas=$filas;
        $i=0;
        $j=0;
        $k=0;
        $a=0;
        $b=0;
        $casillas=[ ["A1", "B1", "C1", "D1", "E1", "F1", "G1", "H1", "I1", "J1"],
                    ["A2", "B2", "C2", "D2", "E2", "F2", "G2", "H2", "I2", "J2"],
                    ["A3", "B3", "C3", "D3", "E3", "F3", "G3", "H3", "I3", "J3"],
                    ["A4", "B4", "C4", "D4", "E4", "F4", "G4", "H4", "I4", "J4"],
                    ["A5", "B5", "C5", "D5", "E5", "F5", "G5", "H5", "I5", "J5"],
                    ["A6", "B6", "C6", "D6", "E6", "F6", "G6", "H6", "I6", "J6"],
                    ["A7", "B7", "C7", "D7", "E7", "F7", "G7", "H7", "I7", "J7"],
                    ["A8", "B8", "C8", "D8", "E8", "F8", "G8", "H8", "I8", "J8"],
                    ["A9", "B9", "C9", "D9", "E9", "F9", "G9", "H9", "I9", "J9"],
                    ["A10", "B10", "C10", "D10", "E10", "F10", "G10", "H10", "I10", "J10"],];
        $cordenadax=$_POST["x"];
        $cordenaday=$_POST["y"];
        $ataque="$cordenadax$cordenaday";
        $vidas=8;

       if(isset($_POST["Cordenadas"]))
            {$historial=$_POST["Cordenadas"]; 
        }
        else
            {$historial=[];}

        array_push($historial, $ataque);
        
        

        if(isset($_POST["barco1"])){
            $bar1=$_POST["barco1"];
            foreach($bar1 as $llave => $valor)
                echo $valor;
            echo "<br>";
        }
        else{
            echo "<br>";
            $orientacion1= rand(1, 4);
            if($orientacion1 == 1){
                $corx1= rand(0, 9);
                $cory1= rand(2, 9);
                $corbar1=$casillas[$cory1][$corx1];
                $cory2=$cory1-2;
                $corbar12=$casillas[$cory2][$corx1];
                $cory2=$cory1-1;
                $corbar13=$casillas[$cory2][$corx1];
                $bar1=[$corbar1, $corbar13, $corbar12];
                foreach($bar1 as $llave => $val){
                    echo $val;
                }
            }
            elseif($orientacion1 == 2){
                $corx1= rand(0, 9);
                $cory1= rand(0, 7);
                $corbar1=$casillas[$cory1][$corx1];
                $cory2=$cory1+2;
                $corbar12=$casillas[$cory2][$corx1];
                $cory2=$cory1+1;
                $corbar13=$casillas[$cory2][$corx1];
                $bar1=[$corbar1, $corbar13, $corbar12];
                foreach($bar1 as $llave => $val){
                    echo $val;
                }
            }
            elseif($orientacion1 == 3){
                $corx1= rand(2, 9);
                $cory1= rand(0, 9);
                $corbar1=$casillas[$cory1][$corx1];
                $corx2=$corx1-2;
                $corbar12=$casillas[$cory1][$corx2];
                $corx2=$corx1-1;
                $corbar13=$casillas[$cory1][$corx2];
                $bar1=[$corbar1, $corbar13, $corbar12];
                foreach($bar1 as $llave => $val){
                    echo $val;
                }
            }
            elseif($orientacion1 == 4){
                $corx1= rand(0, 7);
                $cory1= rand(0, 9);
                $corbar1=$casillas[$cory1][$corx1];
                $corx2=$corx1+2;
                $corbar12=$casillas[$cory1][$corx2];
                $corx2=$corx1+1;
                $corbar13=$casillas[$cory1][$corx2];
                $bar1=[$corbar1, $corbar13, $corbar12];
                foreach($bar1 as $llave => $val){
                    echo $val;
                }
            }
        }
        
        if(isset($_POST["barco2"])){
            $bar2=$_POST["barco2"];
            foreach($bar2 as $llave => $valor)
            echo "<br>";
        }
        else{
            echo "Holi";
            echo "<br>";
            $orientacion2= rand(1, 4);
            if($orientacion2 == 1){
                $corx3= rand(0, 9);
                $cory3= rand(3, 9);
                $corbar2=$casillas[$cory3][$corx3];
                $cory5=$cory3-1;
                $corbar22=$casillas[$cory5][$corx3];
                $cory6=$cory3-2;
                $corbar23=$casillas[$cory6][$corx3];
                $cory4=$cory3-3;
                $corbar24=$casillas[$cory4][$corx3];
                $bar2=[$corbar2, $corbar22, $corbar23, $corbar24];
                foreach($bar2 as $llave => $val){
                    echo $val;
                }
            }
            elseif($orientacion2 == 2){
                $corx3= rand(0, 9);
                $cory3= rand(0, 6);
                $corbar2=$casillas[$cory3][$corx3];
                $cory5=$cory3+1;
                $corbar22=$casillas[$cory5][$corx3];
                $cory6=$cory3+2;
                $corbar23=$casillas[$cory6][$corx3];
                $cory4=$cory3+3;
                $corbar24=$casillas[$cory4][$corx3];
                $bar2=[$corbar2, $corbar22, $corbar23, $corbar24];
                foreach($bar2 as $llave => $val){
                    echo $val;
                }
            }
            elseif($orientacion2 == 3){
                $corx3= rand(3, 9);
                $cory3= rand(0, 9);
                $corbar2=$casillas[$cory3][$corx3];
                $corx5=$corx3-1;
                $corbar22=$casillas[$cory3][$corx5];
                $corx6=$corx3-2;
                $corbar23=$casillas[$cory3][$corx6];
                $corx4=$corx3-3;
                $corbar24=$casillas[$cory3][$corx4];
                $bar2=[$corbar2, $corbar22, $corbar23, $corbar24];
                foreach($bar2 as $llave => $val){
                    echo $val;
                }
                
            }
            elseif($orientacion2 == 4){
                $corx3= rand(0, 6);
                $cory3= rand(0, 9);
                $corbar2=$casillas[$cory3][$corx3];
                $corx5=$corx3+1;
                $corbar22=$casillas[$cory3][$corx5];
                $corx6=$corx3+2;
                $corbar23=$casillas[$cory3][$corx6];
                $corx4=$corx3+3;
                $corbar24=$casillas[$cory3][$corx4];
                $bar2=[$corbar2, $corbar22, $corbar23, $corbar24];
                foreach($bar2 as $llave => $val){
                    echo $val;
                }
            }
        }
        
    
      
            if($valor != $ataque)
                $vidas--;   
        
     
            if($valor != $ataque)
                $vidas--;   
        

        for ($i=$vidas; $i>0; $i--)
        {
            echo '<img src="./cora.jpg" width="25" height="25" alt="corazon">';

        }

        
        echo "<table border = '1'>";
            echo "<tr>";
                echo "<td> </td>";
                echo "<td>A</td>";
                echo "<td>B</td>";
                echo "<td>C</td>";
                echo "<td>D</td>";
                echo "<td>E</td>";
                echo "<td>F</td>";
                echo "<td>G</td>";
                echo "<td>H</td>";
                echo "<td>I</td>";
                echo "<td>J</td>";
            echo "</tr>";
            for($i=0; $i < $filas; $i++)
            {
                echo "<tr>";
                echo "<td>";
                echo $i+1;
                echo "</td>";
                for($j=0; $j < $celdas; $j++)
                {
                    echo "<td>";
                            foreach($historial as $llave => $val){
                                if($val ==  $ataque)
                                    $b=1;
                            }
                            foreach($bar1 as $llave => $valor){
                                if($valor == $ataque)
                                    $a=1;
                                    echo $a;
                                    
                            }
                            if($a==1 && $ataque == $casillas[$i][$j] ){
                                echo '<img src="./explosiom.jpg" width="25" height="25" alt="bomba">';
                                $a=0;
                            }
                            else{
                                echo '<img src="./Mar.jpg" width="25" height="25" alt="Mar">';
                            }
                            echo $a;
                            
                    echo "</td>";
                }
                echo "</tr>";
            }
        echo "</table>";
    ?>
    <br><br><br>
    <form action="./Batalla navl.php" method="POST">
    <?php
    foreach($historial as $llave => $valor){
        echo "<input type='hidden' name='Cordenadas[]' value='$valor'>";
    }

    foreach($bar1 as $llave => $valor){
        echo "<input type='hidden' name='barco1[]' value='$valor'>";
    }

    foreach($bar2 as $llave => $valor){
        echo "<input type='hidden' name='barco2[]' value='$valor'>";
    }
    ?>
    <input type="text" name="x"></input>
    <input type="number" name="y" min="1" max="10"></input>
    <button type="submit">ATACAR</button>
    </form>
</body>
</html>