<?php if($examen['id']!=""){ ?>
    <h2> Vous modifiez l'examen avec l'id: <?=$examen['id']?></h2>
<?php } else { ?>
    <h2> Ajouter un examen</h2>
<?php } ?>
<form action="/<?= ROOTLINK?>/examens/<?= $examen['id']!="" ? "update" : "add"?>/<?=$examen['id']?>" method="post">
    <div>
        <label for="nom">Nom de l'examen : </label>
        <input type="text" name="nom" id="nom" value="<?=$examen['nom']?>" required>
    </div>
    <div>
        <label for="id_cours">Examen pour le cours de : </label>
        <input type="text" name="id_cours" id="id_cours" value="<?=$examen['id_cours']?>" required>
    </div>
    <div>
        <label for="id_type">Type d'examen : </label>
        <input type="text" name="id_type" id="id_type" value="<?=$examen['id_type']?>" required>
    </div>
    <div>
        <input type="submit" value="Valider!">
        <a href="/<?= ROOTLINK?>/examens/index/">Annuler</a>
    </div>
</form>