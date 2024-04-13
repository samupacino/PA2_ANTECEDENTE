<?php

    include_once'configuracion/configurar.php';
    include_once'configuracion/Base.php';

    try{
   
        $NombreAutor = $_POST['NombreAutor'];
        $Anio = $_POST['Anio'];
        $TipoAntecedente = $_POST['TipoAntecedente'];
        $Titulo = $_POST['Titulo'];
        $ProblemaEstudiado= $_POST['ProblemaEstudiado'];
        $Metodologia = $_POST['Metodologia'];
        $ObjetivoPrincipal = $_POST['ObjetivoPrincipal'];
        $Resultados = $_POST['Resultados'];

        $miConnection = Base::connection();
        $miQuery = "INSERT INTO Antecedente
        (NombreAutor,Anio,TipoAntecedente,Titulo,ProblemaEstudiado,Metodologia,ObjetivoPrincipal,Resultados) 
        VALUES (?,?,?,?,?,?,?,?);";

        $miDeclaracion = $miConnection->prepare($miQuery);
        
        $miDeclaracion->execute(array(
            $NombreAutor,$Anio,$TipoAntecedente,
            $Titulo,$ProblemaEstudiado,$Metodologia,$ObjetivoPrincipal,$Resultados));

        echo "REGISTRO EXITOSO";

    }catch(PDOException $e){

        echo $e->getMessage();
        
    }


?>