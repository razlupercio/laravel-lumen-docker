<!-- resources/views/components/base.blade.php -->
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>{{ $title ?? 'Facturación Fácil' }}</title>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker3.css">
    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/locales/bootstrap-datepicker.es.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/editor.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/narrow-jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">Factura Fácil</h3>
      </div>

      <div class="row marketing">


        {{ $slot }}

      </div>

      <footer class="footer">
        <p>© Factura Fácil {{ date("Y")  }}</p>
      </footer>

    </div> <!-- /container -->
  

</body>
</html>