<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="hello.ico" />
    <link rel="stylesheet" href="css/style.css">
    <title>Bonjour !</title>    
    <style>
      a{
        text-decoration: none;
        color: black;
      }

      body{
        text-align: center;
      }

      h1{
        font-weight: normal;
      }
    </style>
  </head>

  <body>
    <h1>Bonjour {{ $nom }} !</h1>
    <br>
    <a href="{{ route('employes.all') }}">Voir tous les employés</a><br />
    <br>
    <a href="{{ route('competences.all') }}">Voir toutes les compétences</a><br />
    <br>
    <br><br><br>
    Chercher un employé : <br>
    <form action="{{ route('employes.find') }}" method="get">
      <br><br>
      <input name="_token" type="hidden" value="{{ csrf_token() }}">
      Nom : <input type="text" name="nom">
      &nbsp;&nbsp;&nbsp;
      Prenom : <input type="text" name="prenom">
      <input type="submit" value="Go">
    </form><br /><br /><br />
    Chercher une compétence : <br>
    <form action="{{ route('competences.find') }}" method="get">
      <br><br>
      <input name="_token" type="hidden" value="{{ csrf_token() }}">
      Nom : <input type="text" name="nom">
      <input type="submit" value="Go">
    </form>
    <br>
  </body>
</html>
