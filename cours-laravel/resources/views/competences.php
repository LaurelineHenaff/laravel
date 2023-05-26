<?php
echo '<table>';
echo '<tr><th>Id</th><th>Nom</th></tr>';
foreach($competences as $c){
  echo "<tr><td>".$c->id_competence."</td>";
  echo "<td> ".$c->nom."</td></tr>";
}
echo "</table>";
?>
