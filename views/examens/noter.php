<h2>Noter un élèves</h2>

<form action="/<?= ROOTLINK?>/examens/sendnote/" method="post">

    <div>
        <label for="id_eleve">Elève : </label>
        <select name="id_eleve" id="id_eleve">
            <?php foreach($examens as $examen): ?>
                <option value="<?=$examen['id_eleve']?>"><?=$examen['nom_eleve']?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <label for="note">Note : </label>
        <input type="text" name="note" id="note" value="" required>
    </div>
    <div>
        <input type="submit" value="Valider!">
        <a href="/<?= ROOTLINK?>/examens/profexam/<?= $_SESSION['utilisateur']['id'] ?>">Annuler</a>
    </div>
</form>