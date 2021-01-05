<!DOCTYPE html>
<html lang="de">


<body>
<div class="container-fluid">
    <div  class="jumbotron">
        <h1 class="text-center">Aufgabenplaner: Aufgaben</h1>
    </div>


    <div class="row">
        <!-- A1 Navigation einbinden -->
        <?php include('Templates/Navigation.php'); ?>
        <div class="col-md-8">
            <table class="table table-responsive d-table">
                <thead>
                <tr class="table-secondary">
                    <th data-sortable="true">Aufgabenbezeichnung:</th>
                    <th data-sortable="true">Beschreibung der Aufgabe:</th>
                    <th data-sortable="true">Reiter:</th>
                    <th data-sortable="true">Zuständig:</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>HTML Datei erstellen</td>
                    <td>HTML Datei erstellen</td>
                    <td>ToDo</td>
                    <td>Max Mustermann
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
                    <td>CSS Datei erstellen</td>
                    <td>CSS Datei erstellen</td>
                    <td>ToDo</td>
                    <td>Max Mustermann
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
                    <td>PC eingeschaltet</td>
                    <td>PC einschalten</td>
                    <td>Erledigt</td>
                    <td>Max Mustermann
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
                    <td>Kaffee trinken</td>
                    <td>Kaffee trinken</td>
                    <td>Erledigt</td>
                    <td>Petra Müller
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
                    <td>Für die Uni lernen</td>
                    <td>Für die Uni lernen.</td>
                    <td>Verschoben</td>
                    <td>Max Mustermann
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
                <label for="Aufgabenbezeichnung">Aufgabenbezeichnung:</label>
                <input type="text" class="form-control" placeholder="Aufgabe" id="Aufgabenbezeichnung">
            </div>

            <div class="form-group">
                <label for="Beschreibung">Beschreibung der Aufgabe:</label>
                <textarea type="textarea" class="form-control" placeholder="Beschreibung" id="Beschreibung"></textarea>
            </div>

            <div class="form-group">
                <label for="Erstellungsdatum">Erstellungsdatum:</label>
                <input type="text" class="form-control" placeholder="01.01.19" id="Erstellungsdatum">
            </div>

            <div class="form-group">
                <label for="fällig">fällig bis:</label>
                <input type="text" class="form-control" placeholder="01.01.19" id="fällig">
            </div>

            <div class="form-group">
                <label>Zugehöriger Reiter:</label>
                <label>
                    <select class="form-control">
                        <option selected>ToDo</option>
                        <option>Erledigt</option>
                        <option>Verschoben</option>
                    </select>
                </label>
            </div>

            <div class="form-group">
                <label>Zuständig:</label>
                <label>
                    <select class="form-control">
                        <option selected>Max Mustermann</option>
                        <option>Petra Müller</option>
                    </select>
                </label>
            </div>


            <button type="button" class="btn btn-primary">Speichern</button>
            <button type="button" class="btn btn-info">Reset</button>
        </div>

    </div>
</div>

</body>

</html>