<h2>Create</h2>

<form action="/user/store" method="post" id="box-login">
    <input type="text" name="firstName" placeholder="Seu nome">
    <?php echo getFlash('firstName'); ?>
    <br>
    <input type="text" name="lastName" placeholder="Seu sobrenome">
    <?php echo getFlash('lastName'); ?>
    <br>
    <input type="text" name="email" placeholder="Seu email">
    <?php echo getFlash('email'); ?>
    <br>
    <input type="password" name="password" placeholder="Sua senha">
    <?php echo getFlash('password'); ?>
    <br>
    <button type="submit">Create</button>
</form>