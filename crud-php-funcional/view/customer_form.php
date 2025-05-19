<section>
    <form action="?page=create" method="post">

        <?php 
        if (isset($confirm)) {
            echo '
                <label for="id">Id:</label>
                <input type="text" name="id" id="id" value="'. $id .'" readonly>
            ';
        }
        ?>
       
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="<?= $name ?? "" ?>">
        
        <label for="surname">Sobrenome:</label>
        <input type="text" name="surname" id="surname" value="<?= $surname ?? "" ?>">
        
        <label for="ddd">DDD:</label>
        <input type="text" name="ddd" id="ddd" value="<?= $ddd ?? "" ?>">
        
        <label for="phone">Telefone:</label>
        <input type="text" name="phone" id="phone" value="<?= $phone ?? "" ?>">
        
        <button type="submit"><?= isset($confim) ? "Confirmar" : "Salvar" ?></button>
        
    </form>
    <br>
</section>