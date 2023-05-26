<!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title>Employés</title>
          <style>
            body{
              text-align: center;
            }

            a{
              text-decoration: none;
              color: black;
            }

            h1, th{
              font-weight: normal;
            }

            table {
              display: grid;
              text-align: center;
              justify-content: center;
              border-collapse: collapse;
            }

            td, th{
              padding: 0.5rem;
            }

            th, td{
              border: 1px solid black;
            }
          </style>
        </head>
        <body>
          <h1>Les employés sont :</h1>
          <?php
              echo '<table>';
              echo '<tr><th>Matricule</th><th>Nom</th><th>Prénom</th></tr>';
              foreach($employes as $employe){
                echo "<tr><td>".$employe->id_employe."</td>";
                echo "<td>".$employe->nom."</td>";
                echo "<td>".$employe->prenom."</td>";              
              }
              echo "</table>";
          ?>
          <br />
          <a href="{{route('hello', ['nom'=> session('user_name')])}}">Home</a>
        </body>
      </html>
