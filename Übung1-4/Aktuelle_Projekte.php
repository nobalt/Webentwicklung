<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">

    <title>PHP Beispiel</title>

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container-fluid">
    <div  class="jumbotron">
        <h1 class="text-center">Aufgabenplaner: Todos (Aktuelles Projekt)</h1>
    </div>


    <div class="row">
        <!-- A1 Navigation einbinden -->
        <?php include('Navigation.php'); ?>

            <!-- Alternativ:
            <ul class="nav flex-column">
                <span class = "border"><a class="nav-link" href="Login.html">Login</a></span>
                <span class="border"><a class="nav-link" href="Projekte.html">Projekte</a></span>
                <span class ="border"><a class="nav-link" href="Aktuelle_Projekte.html">Aktuelle Projekte</a></span>

                <span class ="border" style="width:80%;margin-left:auto"><a class="nav-link" href="Reiter.html">Reiter</a></span>
                <span class ="border" style="width:80%;margin-left:auto"><a class="nav-link" href="Aufgaben.html">Aufgaben</a></span>
                <span class ="border"  style="width:80%;margin-left:auto" ><a class="nav-link" href="Personen.html">Personen</a></span>
            </ul> -->

        <div class="col-sm">
            <div class="list-group">
                <div class="card-header">ToDo:</div>
                <div class="list-group-item">HTML Datei erstellen (Max Mustermann)</div>
                <div class="list-group-item">CSS Datei erstellen (Max Mustermann)</div>
            </div>
        </div>

        <div class="col-sm">
            <div class="list-group">
                <div class="card-header">Erledigt:</div>
                <div class="list-group-item">PC eingeschaltet (Petra Müller)</div>
                <div class="list-group-item">Kaffee trinken (Petra Müller)</div>
            </div>
        </div>

        <div class="col-sm">
            <div class="list-group">
                <div class="card-header">Verschoben:</div>
                <div class="list-group-item">Für die Uni lernen (Max Mustermann)</div>
            </div>
        </div>

        <!-- Test
        <div class="col-sm">
          <div class="list-group">
                <div class="card-header">Verschoben:</div>
                <div class="list-group-item">Für die Uni lernen (Max Mustermann)</div>
          </div>
       </div>
        -->

    </div>
</div>

</body>

</html>