<?php

   include_once'configuracion/configurar.php';
   include_once'configuracion/Base.php';

    try{
        $AntecedenteID = $_GET['id'];
        $NombreAutor = $_POST['NombreAutor'];
        $Anio = $_POST['Anio'];
        $TipoAntecedente = $_POST['TipoAntecedente'];
        $Titulo = $_POST['Titulo'];
        $ProblemaEstudiado= $_POST['ProblemaEstudiado'];
        $Metodologia = $_POST['Metodologia'];
        $ObjetivoPrincipal = $_POST['ObjetivoPrincipal'];
        $Resultados = $_POST['Resultados'];

        $miConnection = Base::connection();
        $miQuery = "UPDATE Antecedente SET
        NombreAutor=?,Anio=?,TipoAntecedente=?,
        Titulo=?,ProblemaEstudiado=?,Metodologia=?,ObjetivoPrincipal=?,Resultados=? 
        WHERE AntecedenteID = ?;";

        $miDeclaracion = $miConnection->prepare($miQuery);
        
        $miDeclaracion->execute(array(
            $NombreAutor,$Anio,$TipoAntecedente,$Titulo,$ProblemaEstudiado,$Metodologia,$ObjetivoPrincipal,
            $Resultados,$AntecedenteID));

        echo "REGISTRO EXITOSO";

    }catch(PDOException $e){

        echo $e->getMessage();
        
    }


?>