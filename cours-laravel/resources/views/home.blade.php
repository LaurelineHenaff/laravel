<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="logo-laravel.ico" />
    <meta charset="utf-8">
    <style>
      body{
        text-align: center;
        display: grid;
        justify-content: center;
      }

      form{
        padding-top: 1.5rem;
      }
    </style>    
  <title>Cours Lavarel</title>
  </head>
  <body>
    <form method="get" action="{{ route('welcome') }}">
      <input name="_token" type="hidden" value="{{ csrf_token() }}">
      <label for="nom">Entrez votez nom :</label>
      <input type="text" name="nom" id="nom">
      <input type="submit">
    </form>
  </body>
</html>
