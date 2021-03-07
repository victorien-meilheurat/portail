<?php if($cour['id']!=""){ ?>
    <h2> Vous modifiez le role avec l'id: <?=$role['id']?></h2>
<?php } else { ?>
    <h2> Ajouter un role</h2>
<?php } ?>
<form action="/<?= ROOTLINK?>/roles/<?= $role['id']!="" ? "update" : "add"?>/<?=$role['id']?>" method="post">
    <div>
        <label for="nom">Nom du role : </label>
        <input type="text" name="nom" id="nom" value="<?=$role['nom']?>" required>
    </div>
    <div>
        <input type="submit" value="Valider!">
        <a href="/<?= ROOTLINK?>/roles/index/">Annuler</a>
    </div>
</form>