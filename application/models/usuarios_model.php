<?php
//Modelo de Login
class Usuarios_model extends CI_Model{
  
    function ValidarUsuario($maillogin,$passwordlogin){ //   Consulta Mysql para buscar en la tabla Usuario aquellos usuarios que coincidan con el mail y password ingresados en pantalla de login
      
        //$this->load->library('encrypt');
        //$key = 'super-secret-key';
        //$password = $this->encrypt->encode($password);

        $query = $this->db->where('email',$maillogin);//   La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
        $query = $this->db->where('password', $passwordlogin);
        $query = $this->db->get('usuarios');

        return $query->row();    //   Devolvemos al controlador la fila que coincide con la búsqueda. (FALSE en caso que no existir coincidencias)    
   
      
    }
}
?>

