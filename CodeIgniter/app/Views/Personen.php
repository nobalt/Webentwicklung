<!DOCTYPE html>
<html lang="de">


<body>
<div class="container-fluid">
    <div  class="jumbotron">
        <h1 class="text-center">Aufgabenplaner: Personen</h1>
    </div>


    <div class="row">
        <!-- A1 Navigation einbinden -->
        <?php include('Templates/Navigation.php'); ?>

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
                <form action="<?php echo base_url('public/Personen/button_filter') ?>" method="post">
                    <?php
                    if(isset($mitarbeiter)){
                        foreach ($mitarbeiter as $row){
                            echo ('<tr>');
                            if(isset($row)){
                                $firstElement = true;
                                foreach ($row as $cell){
                                    if(isset($cell) && !$firstElement){
                                        echo ('<td>' . $cell . '</td>');
                                    }else{
                                        $firstElement = false;
                                    }
                                }
                                echo ('<td><div class="form-group form-check"  width="50%"><input type="checkbox" class="form-check-input" id="inProj"><label class="form-check-label" for="inProj" width="50%"></label></div></td>');
                                echo ('<td>
                        <div class="btn-group">
                            <button type="submit" name="editButton" id="editButton" value="');
                                echo ($row['id']);
                                echo ('" class="btn" ><i class="far fa-edit" style="color:#3498DB"></i></button>
                            <button type="submit" name="deleteButton" id="deleteButton" value="');
                                echo ($row['id']);
                                echo ('" class="btn"><i class="far fa-trash-alt" style="color:#3498DB"></i></i></button>
                        </div>
                    </td>');
                            }
                            echo ('</tr>');
                        }
                    }
                    form_close()
                    ?>
                <!-- Übung 6 Aufgabe 1
                < ?php foreach ($mitglieder as $item): ?>
                <tr>
                    <td>< ?= $item['Username']?></td>
                    <td>< ?= $item['EMail']?></td>


              Übung 5 Aufgabe 2
               <tr>
                    <td>
                      < ?php echo($personen[0]['Name']); ?>
                    </td>
                    <td>
                    < ?php echo($personen[0]['E-Mail']); ?>
                    </td>

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
                    <td>< ?php
                        echo($personen[1]['Name']);
                        ?></td>
                    <td>< ?php
                        echo($personen[1]['E-Mail']);
                        ?></td>

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
                < ?php endforeach;?>
                -->
                </tbody>
            </table>


            <h3>Bearbeiten/Erstellen:</h3>
            <form action="<?php base_url('public/Personen/button_filter') ?>" method="post">

            <div class="form-group">
                <label for="Username">Username:</label>
                <input type="text" class="form-control" name="username" placeholder="Username" id="username"value="<?php if (isset($editName)){echo ($editName);} ?>">
            </div>

            <div class="form-group">
                <label for="E-Mail">E-Mail-Adresse:</label>
                <input type="email" class="form-control" placeholder="E-Mail-Adresse eingeben" name="email" id="email" value="<?php if (isset($editEMail)){echo ($editEMail);} ?>"></input>
            </div>

            <div class="form-group">
                <label for="passwort">Passwort:</label>
                <input type="text" class="form-control" name="password" placeholder="Passwort" id="password">
            </div>

            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">Dem Projekt zugeordnet
                </label>
            </div>
            <button name="saveButton" id="saveButton" value="<?php if (isset($editID)){echo ($editID);} ?>" class="btn btn-primary">Speichern</button>
            <button type="button" class="btn btn-info">Reset</button>
        </div>
        <?php form_close()?>
    </div>
</div>

</body>

</html>