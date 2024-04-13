<?php
    include_once'configuracion/configurar.php';
    include_once'configuracion/Base.php';
    
    try{
        
            $miParametro_uno = $_GET['titulo'];
            $miJson = array();
            $miConnection = Base::connection();
            $miDeclaracion = $miConnection->prepare("SELECT * FROM Antecedente WHERE Titulo = ?");
            $miDeclaracion->execute(array($miParametro_uno));
            $miJson = $miDeclaracion->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($miJson);
        


    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>