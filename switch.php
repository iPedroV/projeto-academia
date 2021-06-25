<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Switch em PHP </title>
</head>
<body>
    <h3>Eleições para síndico</h3>
    <label>Selecione o seu candidato</label>
    <form method="POST" action="">
        <label>Candidato:</label>
        <select name="candidato">
            <option value="x">[--SELECIONE--]</option>
            <option value="1">Sebastião</option>
            <option value="2">Marta</option>
            <option value="3">Miranda</option>
        </select>
        <input type="submit" value="Votar" name="voto">
    </form>

    <?php
    
    if(isset($_POST['voto'])){
    $resultado = $_POST['candidato'];

    switch($resultado){
        case 1:
            echo "resp 1";
        break;
        case 2:
            echo "resp 2";
        break;
        case 3:
               
        break;
        default:
               
        break;
    }
}

    

    ?>
</body>
</html>