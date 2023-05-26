<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Compétences - find</title>
    <style>
      a{
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <h1>Les compétences cherchées sont :</h1><br>
    @if(count($competences)>0)
        @foreach ($competences as $competence)
            {{ $competence->id_competence }} | {{ $competence->nom }} <br>
        @endforeach
    @else
        Pas de résultat ... Voulez vous le créer ? <br><br>
        <form method='get' action={{route('hello', ['nom'=> session('user_name')])}} >
            <input type="submit" value="Non">
        </form>
        <br>
        <form method='get' action={{route('competences.store')}}>
            <input type=hidden name="id" value={{ $_REQUEST['id'] }}>
            <input type=hidden name="nom" value={{ $_REQUEST['nom'] }}>
            <input type="submit" value="Oui">
        </form>
    @endif
    <br>
    <a href={{route('hello', ['nom'=> session('user_name')])}}>Home</a>
  </body>
</html>
