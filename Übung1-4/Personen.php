<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">

    <title>Personen</title>

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

</head>

<body>
<div class="container-fluid">
    <div  class="jumbotron">
        <h1 class="text-center">Aufgabenplaner: Personen</h1>
    </div>


    <div class="row">
        <!-- A1 Navigation einbinden -->
        <?php include('Navigation.php'); ?>

        <div class="col-md-8">
            <table class="table table-responsive d-table">
                <thead>
                <tr class="table-secondary">
                    <th data-sortable="true">Name</th>
                    <th data-sortable="true">E-Mail</th>
                    <th data-sortable="true">In Projekt</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Max Mustermann</td>
                    <td>mustermann@muster.de</td>
                    <td>
                        <label>
                            <input style="float: left" class="form-check-input" type="checkbox">
                        </label>

                        <span style="float: right">
                            <button type="button" class="btn btn-link">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </span>
                        <span style="float: right">
                            <button type="button" class="btn btn-link">
                                <i class="far fa-edit"></i>
                            </button>
                        </span>
                    </td>

                </tr>

                <tr>
                    <td>Petra Müller</td>
                    <td>petra@mueller.de</td>
                    <td>
                        <label>
                            <input class="form-check-input" type="checkbox">
                        </label>

                        <span style="float: right">
                            <button type="button" class="btn btn-link">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </span>
                        <span style="float: right">
                            <button type="button" class="btn btn-link">
                                <i class="far fa-edit"></i>
                            </button>
                        </span>
                    </td>
                </tr>

                </tbody>
            </table>


            <h3>Bearbeiten/Erstellen:</h3>

            <div class="form-group">
                <label for="Username">Username:</label>
                <input type="text" class="form-control" placeholder="Username" id="Username">
            </div>

            <div class="form-group">
                <label for="E-Mail">E-Mail-Adresse:</label>
                <textarea type="textarea" class="form-control" placeholder="E-Mail-Adresse eingeben" id="E-Mail"></textarea>
            </div>

            <div class="form-group">
                <label for="passwort">Passwort:</label>
                <input type="text" class="form-control" placeholder="Passwort" id="passwort">
            </div>

            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">Dem Projekt zugeordnet
                </label>
            </div>
            <button type="button" class="btn btn-primary">Speichern</button>
            <button type="button" class="btn btn-info">Reset</button>
        </div>

    </div>
</div>

</body>

</html>