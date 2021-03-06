<!DOCTYPE html>
<html lang="de">



<body>
<div class="container-fluid">
    <div  class="jumbotron">
        <h1 class="text-center">Aufgabenplaner: Projekte</h1>
    </div>


    <div class="row">
        <!-- A1 Navigation einbinden -->
        <?php include('Templates/Navigation.php'); ?>
        <div class="col-md-8">
            <h2>Projekte Auswählen:</h2>
            <div class="form-group">
                <label>
                    <select class="form-control">
                        <option selected>- bitte auswählen -</option>
                        <option>...</option>
                    </select>
                </label>
            </div>

            <button type="button" class="btn btn-primary">Auswählen</button>
            <button type="button" class="btn btn-primary">Bearbeiten</button>
            <button type="button" class="btn btn-danger">Löschen</button>

            <h3>Projekt bearbeiten/erstellen:</h3>
            <div class="form-group">
                <label for="Projektname">Projektname:</label>
                <input type="text" class="form-control" placeholder="Projekt" id="Projektname">
            </div>
            <div class="form-group">
                <label for="Projektbeschreibung">Projektbeschreibung:</label>
                <textarea type="textarea" class="form-control" placeholder="Beschreibung" id="Projektbeschreibung"></textarea>
            </div>
            <button type="button" class="btn btn-primary">Speichern</button>
            <button type="button" class="btn btn-info">Reset</button>
        </div>

    </div>
</div>

</body>

</html>