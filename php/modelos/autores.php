<?php
    class autores{
        var $id_autor_atr, $nombre_autor_atr, $apellido_autor_atr, $pais_autor_atr;
        var $busqueda_autor_atr, $resultadoAutores; 

        public function insertarAutorMet($idAutor_par, $nombreAutor_par, $apellidoAutor_par, $paisAutor_par){
            $this->id_autor_atr=$idAutor_par;
            $this->nombre_autor_atr=$nombreAutor_par;
            $this->apellido_autor_atr=$apellidoAutor_par;
            $this->pais_autor_atr=$paisAutor_par;           
            include_once('../bd/conexionOpen.php');
            $insertarAutorSql="INSERT INTO autores(nombre_autor,apellido_autor,pais_autor) VALUES('"."$nombreAutor_par"."','"."$apellidoAutor_par"."','"."$paisAutor_par"."')";
            $insertarAutorQuery=mysqli_query($conexion,$insertarAutorSql) or die("Error al insertar el autor");
            include_once('../bd/conexionClose.php');           
        }// insertarAutor

        public function seleccionarAutorPorIdMet($idAutor_par){
            $this->id_autor_atr=$idAutor_par;           
            include_once('../bd/conexionOpen.php');  
            $selecAutorQuery="SELECT * FROM autores WHERE id_autor = ".$idAutor_par." ";
            $autorResult=mysqli_query($conexion,$selecAutorQuery) or die("No se pudo seleccionar el autor");
            while ($autorArray=mysqli_fetch_array($autorResult)){
                $this->resultadoAutor[]=$autorArray; 
            }                      
            return $this->resultadoAutor;
            include_once('../bd/conexionClose.php');       
        }// seleccionarAutorPorIdMet

        public function editarAutorMet($idAutor_par, $nombreAutor_par, $apellidoAutor_par, $paisAutor_par){
            $this->id_autor_atr=$idAutor_par; 
            $this->nombre_autor_atr=$nombreAutor_par;
            $this->apellido_autor_atr=$apellidoAutor_par;
            $this->pais_autor_atr=$paisAutor_par;            
            include_once('../bd/conexionOpen.php');
            $editarAutorSql="UPDATE autores SET nombre_autor='".$nombreAutor_par."', apellido_autor='".$apellidoAutor_par."', pais_autor='".$paisAutor_par."' WHERE id_autor = ".$idAutor_par." ";
            $editarAutorQuery=mysqli_query($conexion,$editarAutorSql) or die("No fue posible editar el autor");
            include_once('../bd/conexionClose.php');              
        }// editarAutor

        public function eliminarAutorMet($idAutor_par){
            $this->id_autor_atr=$idAutor_par;
            include_once('../bd/conexionOpen.php');  
            $borrarAutorQuery="DELETE FROM autores WHERE id_autor = ".$idAutor_par." ";
            $borrarResult=mysqli_query($conexion,$borrarAutorQuery) or die("No se pudo eliminar el autor");
            include_once('../bd/conexionClose.php');  
        }// eliminarAutor

        public function mostrarAutoresMet($busqueda_autor_par){
            $this->busqueda_autor_atr=$busqueda_autor_par;       
            include_once('../bd/conexionOpen.php');
            $mostrarAutoresQuery="SELECT * FROM autores WHERE nombre_autor LIKE '%".$busqueda_autor_par."%'  OR apellido_autor LIKE '%".$busqueda_autor_par."%' OR pais_autor LIKE '%".$busqueda_autor_par."%' ";
            $autoresResult=mysqli_query($conexion,$mostrarAutoresQuery) or die("No se pudo mostrar el(los) autor(es)");
            while ($autoresArray=mysqli_fetch_array($autoresResult)){
                $this->resultadoAutores[]=$autoresArray;
            }
            return $this->resultadoAutores;
            include_once('../bd/conexionClose.php');
        }// mostrarAutores


    }// class autores

   
?>