<?php if($classe['id']!=""){ ?>
    <h2> Vous modifiez la classe avec l'id: <?=$classe['id']?></h2>
<?php } else { ?>
    <h2> Ajouter une classe</h2>
<?php } ?>
<form action="/<?= ROOTLINK?>/classes/<?= $classe['id']!="" ? "update" : "add"?>/<?=$classe['id']?>" method="post">
    <div>
        <label for="nom">Nom de la classe : </label>
        <input type="text" name="nom" id="nom" value="<?=$classe['nom']?>" required>
    </div>
    <div>
        <input type="submit" value="Valider!">
        <a href="/<?= ROOTLINK?>/classes/index/">Annuler</a>
    </div>
</form>