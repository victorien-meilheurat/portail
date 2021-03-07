<h1>CONNECTEZ VOUS</h1>
<form action="/<?= ROOTLINK?>/authentification/login/" method="post">
    <div>
        <label for="login">Nom d'utilisateur : </label>
        <input type="text" name="login" id="login" required>
    </div>
    <div>
        <label for="password">Mot de passe : </label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <input type="submit" value="Connexion!">
    </div>
</form>