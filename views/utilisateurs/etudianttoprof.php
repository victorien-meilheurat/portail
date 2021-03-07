<div class="center-div">
    <h2>Mes étudiants</h2>
    <table>
    <?php foreach($utilisateurs as $utilisateur): ?>
        <tr>
            <td id="lg2"><p><p><?=$utilisateur['nom']?></p></td>
            <td id="lg2"><p><p><?=$utilisateur['prenom']?></p></td>
            <td id="lg2"><p><p><?=$utilisateur['nom_classe']?></p></td>
        </tr>
    <?php endforeach ?>
    </table>
</div>