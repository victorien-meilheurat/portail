<div class="center-div">
    <h2>Noms des roles</h2>

    <div>
        
    </div>
    <table>
        <?php foreach($roles as $role): ?>
            <tr>
                <td id="lg1"><h2><?=$role['id']?></h2></td>
                <td id="lg2"><p><?=$role['nom']?></p></td>
            </tr>
        <?php endforeach ?>
    </table>
</div>