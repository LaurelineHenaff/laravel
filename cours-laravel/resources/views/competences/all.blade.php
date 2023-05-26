<!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title>Compétences</title>
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
          <h1>Les compétences sont :</h1>
          <?php
            echo '<table>';
            echo '<tr><th>Id</th><th>Nom</th></tr>';
            foreach($competences as $competence){
              echo "<tr><td>".$competence->id_competence."</td>";
              echo "<td> ".$competence->nom."</td></tr>";
            }
            echo "</table>";
          ?>
          <br />
          <a href="{{route('hello', ['nom'=> session('user_name')])}}">Home</a>
        </body>
      </html>
