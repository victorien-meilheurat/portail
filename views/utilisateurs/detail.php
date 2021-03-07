<?php if($utilisateur['id']!=""){ ?>
    <h2> Vous modifiez l'utilisateur avec l'id: <?=$utilisateur['id']?></h2>
<?php } else { ?>
    <h2> Ajouter un utilisateur</h2>
<?php } ?>
<form action="/<?= ROOTLINK?>/utilisateurs/<?= $utilisateur['id']!="" ? "update" : "add"?>/<?=$utilisateur['id']?>" method="post">
    <div>
        <label for="nom">Nom de l'utilisateur : </label>
        <input type="text" name="nom" id="nom" value="<?=$utilisateur['nom']?>" required>
    </div>
    <div>
        <label for="prenom">Prénom de l'utilisateur : </label>
        <input type="text" name="prenom" id="prenom" value="<?=$utilisateur['prenom']?>" required>
    </div>
    <div>
        <label for="login">Login de l'utilisateur : </label>
        <input type="text" name="login" id="login" value="<?=$utilisateur['login']?>" required>
    </div>
    <div>
        <label for="password">Mot de passe de l'utilisateur : </label>
        <input type="text" name="password" id="password" value="<?=$utilisateur['password']?>" required>
    </div>
    <div>
        <label for="id_classe">Classe de l'utilisateur : </label>
        <input type="text" name="id_classe" id="id_classe" value="<?=$utilisateur['id_classe']?>" required>
    </div>
    <div>
        <label for="id_role">Role de l'utilisateur : </label>
        <input type="text" name="id_role" id="id_role" value="<?=$utilisateur['id_role']?>" required>
    </div>
    <div>
        <input type="submit" value="Valider!">
        <a href="/<?= ROOTLINK?>/utilisateurs/index/">Annuler</a>
    </div>
</form>