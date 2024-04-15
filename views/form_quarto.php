<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro Quarto</title>
</head>
<body>
    <form action="" method="post">
        <label for="numero"><br>
        Número :
        <input type="text" name="numero" id="numero" value='<?php echo !empty($_POST['numero']) ? $_POST['numero']:"" ?>'>
        <br>
        </label>
        <div class="erro">
            <?php echo $msg[0]; ?>
        </div>

        <label for="andar"><br>
        Andar :
        <input type="number" name="andar" id="andar"  min="0" max="99999" value='<?php echo !empty($_POST['andar']) ? $_POST['andar'] : "" ?>'>
        <br>
        </label>
        <div>
            <?php echo $msg[1]; ?>
        </div>

        <label for="tipo"><br>
            Tipo :
        </label>
        <select name="tipo" id="tipo"><br>
            <option value="">Selecione uma opção</option>

            <?php
                foreach ($tipos as $tipo) 
                {
                    if(!empty($_POST['tipo'] == $tipo->idtipo))
                    {
                        echo "<option selected value='{$tipo->idtipo}'>{$tipo->descritivo}</option>";
                    }else{
                        echo "<option value='{$tipo->idtipo}'>{$tipo->descritivo}</option>";
                    }
                }
            ?>

        </select>
        <div>
            <?php echo $msg[2]; ?>
        </div>

        <label for="hotel"><br>
        Hotel :
        </label>
        <select name="hotel" id="hotel"><br>
            <option value="">Selecione uma oção</option>

            <?php
                foreach ($hoteis as $hotel) 
                {
                    if(!empty($_POST['hotel'] == $hotel->idhotel))
                    {
                        echo "<option selected value='{$hotel->idhotel}'>{$hotel->nome}</option>";
                    }else{
                        echo "<option value='{$hotel->idhotel}'>{$hotel->nome}</option>";
                    }
                }
            ?>
        </select>
        <div>
            <?php echo $msg[3]; ?>
        </div>
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>