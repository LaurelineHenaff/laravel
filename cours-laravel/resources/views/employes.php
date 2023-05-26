<?php
echo '<table>';
echo '<tr><th>Matricule</th><th>Nom</th><th>Prénom</th></tr>';
foreach($employes as $e){
  echo "<tr><td>".$e->id_employe."</td>";
  echo "<td>".$e->nom."</td>";
  echo "<td>".$e->prenom."</td>";
}
echo "</table>";
?>
