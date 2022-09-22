<p> EXERCICI Batalla 2 </p>

<table border='5' style="color:red",width="100px",height="100px">
<?php
$vaixells = [[[3,4]],[[2,2],[2,3]],[[4,4],[4,5],[4,6]],[[8,7],[9,7],[10,7],[11,7]]];

$w = 16;
$h = 16;

for($j=0; $j<$h;$j++){
    echo "<tr>\n";
    for($i=0;$i<$w;$i++){

        if (($j==0) && ($i != 0)){
            echo "<td>$i</td>\n";
        }
        elseif (($j!=0) && ($i==0)){
            echo "<td>".chr($j+64)."</td>";
        }
        else{
            $cruces = false;
            foreach ($vaixells as $k) {
                foreach($k as $p) {
                    if (($j == $p[0]) && ($i == $p[1])) {
                        $cruces = true;
                        echo "<td>X</td>";
                    }
                }
            }
            if ($cruces == false) {
                echo "<td></td>";
            }
        }
    }
    echo "</tr>";
}
echo "</table>";
?>