<!DOCTYPE html>
<html lang="de">
<body>
<div class="container-fluid">
    <div  class="jumbotron">
        <h1 class="text-center">Aufgabenplaner: Reiter</h1>
    </div>


    <div class="row">
        <!-- A1 Navigation einbinden -->
        <?php include('Templates/Navigation.php'); ?>

        <div class="col-md-8">
            <table class="table table-responsive d-table">
                <thead>
                <tr class="table-secondary">
                    <th data-sortable="true">Name</th>
                    <th data-sortable="true">Beschreibung</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>ToDo</td>
                    <td>Dinge die erledigt werden müssen.
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
                    <td>Erledigt</td>
                    <td>Dinge die erledigt sind.
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
                    <td>Verschoben</td>
                    <td>Dinge die später erledigt werden.
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
                <label for="Reiter">Bezeichnung des Reiters:</label>
                <input type="text" class="form-control" placeholder="Reiter" id="Reiter">
            </div>
            <div class="form-group">
                <label for="Beschreibung">Beschreibung:</label>
                <textarea type="textarea" class="form-control" placeholder="Beschreibung" id="Beschreibung"></textarea>
            </div>
            <button type="button" class="btn btn-primary">Speichern</button>
            <button type="button" class="btn btn-info">Reset</button>
        </div>

    </div>
</div>

</body>

</html>