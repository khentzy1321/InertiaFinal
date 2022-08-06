<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    @vite('resources/css/app.css')
    @inertiaHead
  </head>

  <body style="background-color:  #aaa">
    @inertia
    @vite('resources/js/app.js')
  </body>
  <style>
        body {
                background-image: url('./img/pops1.jpg');
                background-repeat: no-repeat;
                background-position: top center;
                background-attachment: fixed;
                background-color: #676;
                background-size: 100%;
    }
  </style>
</html>
