<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container-fluid">
    <div  class="jumbotron">
        <h1 class="text-center">Aufgabenplaner: Login</h1>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form>
                <div class="form-group">
                    <label for="email">Email-Adresse:</label>
                    <input type="email" class="form-control" placeholder="Email-Adresse eingeben" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Passwort</label>
                    <input type="password" class="form-control" placeholder="Passwort" id="password">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">AGBs und Datenschutzbedingung akzeptieren
                    </label>
                </div>
                <a href="../../../../Übung1-4/Aktuelle_Projekte.php"><button type="button" class="btn btn-primary" >Einloggen</button></a>
                <p>Noch nicht registriert?
                    <button type="button" class="btn btn-link">Registrierung</button>
                    <br>
                    Da der Login Vorgang technisch noch nicht realisiert wurde:
                    <a href="../../../../Übung1-4/Aktuelle_Projekte.php"><button type="button" class="btn btn-link">Überspringen</button></a>
                </p>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>

</div>
</body>

</html>