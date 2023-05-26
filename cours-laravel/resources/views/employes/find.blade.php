<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Employés - find</title>
    <style>
      a{
        text-decoration: none;
        color: black;
      }
    </style>
  </head>
  <body>
    <h1>Les employés cherchés sont :</h1><br>
    @if(count($employes)>0)
        @foreach ($employes as $employe)
            {{ $employe->id_employe }} | {{ $employe->nom }} | {{ $employe->prenom }} <br>
        @endforeach
    @else
        Pas de résultat ... Voulez vous le créer ? <br><br>
        <form method='get' action="{{route('hello', ['nom'=> session('user_name')])}}">
            <input type="submit" value="Non">
        </form>
        <br>
        <form method='get' action="{{route('employes.store')}}">
            <input type=hidden name='nom' value="{{ $_REQUEST['nom'] }}">
            <input type=hidden name="prenom" value="{{ $_REQUEST['prenom'] }}"">
            <input type="submit" value="Oui">
        </form>
    @endif
    <br>
    <a href="{{route('hello', ['nom'=> session('user_name')])}}"">Home</a>
  </body>
</html>
