<h2>Login</h2>
<?php echo getFlash('message'); ?>

<form action="/login" method="post" id="box-login">
    <input type="text" name="email" placeholder="Seu email" value="">
    <input type="password" name="password" placeholder="Sua senha" value="">
    <button type="submit">Login</button>
</form>