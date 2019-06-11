<?php
$title ="Ajouter";
require "../inc/_header.php";
?>
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Formulaire d'enregistrement</legend>
            <div class="form-group">
                <select class="custom-select" name="typepersonne">
                    <option selected="">Type de personne</option>
                    <option value="1">Etudiant</option>
                    <option value="2">Enseignant</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom"  name="nom" placeholder="Entrer le nom">
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="prenom">Prénoms</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="ex: jane jack">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Photo</label>
                <input type="file" class="form-control-file" id="exampleInputFile"  name="photo" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
            </div>
            <fieldset class="form-group">
                <legend>Genre</legend>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" value="M" name="genre" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Masculin</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" value="F" name="genre" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Feminin</label>
                </div>
                <div class="form-group">
                    <label>Date de naissance</label>
                    <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                        <input type="text" name="datenaiss" class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                        <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#datetimepicker4').datetimepicker({
                            format: 'L'
                        });
                    });
                </script>
            </fieldset>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </fieldset>
    </form>
<?php dump($_POST)?>
<?php require "../inc/_footer.php" ?>