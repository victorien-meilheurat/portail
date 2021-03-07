<?php if($_SESSION['utilisateur']['id_role']==4) : ?>
    <form enctype="multipart/form-data" action="/<?= ROOTLINK?>/ressources/postressource" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        Ajouter une nouvelle ressource : <input name="userfile" type="file" />
        <input type="submit" value="Envoyer le fichier" />
    </form>
<?php endif ?>
<table style="margin-left: 30%; margin-top: 50px;">
    <?php 
        $fichiers = scandir('./ressources/');
        foreach ($fichiers as $fichier) :
    ?>
        <tr>
            <td id="lg1"><h2><?= $fichier ?></h2></td>
            <td id="lg3">
                <a href="./<?= $fichier ?>">Télécharger</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>