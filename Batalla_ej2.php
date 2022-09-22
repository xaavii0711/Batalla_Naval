<p> EXERCICI Batalla 1 </p>

<table border='5' style="color:red",width="100px",height="100px">
<?php
$submarino = [[3,4],[3,5]];

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
            if (($j==$submarino[0][0]) && ($i == $submarino[0][1]) || ($j==$submarino[1][0]) && ($i == $submarino[1][1])) {
                echo "<td>X</td>";
            }
            else {
                echo "<td> </td>";
            }
        }
    }
    echo "</tr>";
}
echo "</table>";
?>

