<div class="center-div">
    <h2>Vos examens</h2>

    <table>
    <?php foreach($examens as $examen): ?>
        <tr>
            <td id="lg1"><h2><?=$examen['id_examen']?></h2></td>
            <td id="lg2"><p><p><?=$examen['nom_examen']?></p></td>
            <td id="lg3">
                <a href="/<?= ROOTLINK?>/examens/noter/<?=$examen['id_examen']?>">Noter</a>
            </td>
        </tr>
    <?php endforeach ?>
    </table>
</div>