<div class='wrap'>
    <h1>Configurações do Meu Plugin</h1>
    <hr>
    <form method='post' action='options.php'>
        <label for='nome'>Nome</label>
        <br>
        <input type='text' name='nome'>
        <br>
        <br>
        <label for='sobrenome'>Sobrenome</label>
        <br>
        <input type='text' name='sobrenome'>
    </form>
    <?php submit_button(); ?>
</div>