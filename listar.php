<?php

   include_once'configuracion/configurar.php';
   include_once'configuracion/Base.php';
    
    try{
        
        
            $miJson = array();
            $miConnection = Base::connection();
            $miDeclaracion = $miConnection->prepare("SELECT * FROM Antecedente");
            $miDeclaracion->execute();
            $miJson = $miDeclaracion->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($miJson);
        


    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>