<?php foreach($roles as $role): ?>

<h2><a href="./roles/detail/<?=$role['id']?>"><?=$role['id']?></a></h2>
<p><?=$role['nom']?></p>

<?php endforeach ?>