<div class="center-div">
    <h2>Mes examens</h2>
    <table>
    <?php foreach($examens as $examen): ?>
        <tr>
            <td id="lg2"><p><p><?=$examen['nom_exam']?></p></td>
            <td id="lg2"><p><p><?=$examen['nom_matiere']?></p></td>
            <td id="lg2"><p><p><?=$examen['nom_cours']?></p></td>
            <td id="lg2"><p><p><?=$examen['date']?></p></td>
            <td id="lg3">
                <form enctype="multipart/form-data" action="/<?= ROOTLINK?>/ressources/postexamen" method="post">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    Envoyer une ressource : <input name="userfile" type="file" />
                    <input type="submit" value="Envoyer le fichier" />
                </form>
            </td>
        </tr>
    <?php endforeach ?>
    </table>
</div>