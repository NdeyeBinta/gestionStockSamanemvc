<?php


class UtilisateurDB extends Model
{
//La base de données samane_test est dans view/test
    //Pour tester importer la
    public function __construct(){
        parent::__construct();
    }

    public function getUtilisateur($id)
    {
        $sql = "SELECT *
                     FROM utilisateur
                     WHERE utilisateur.id = ".$id;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }
    public function getConnexion($login,$password)
    {
        $sql = "SELECT *
                     FROM utilisateur
                     WHERE utilisateur.login ='$login' and utilisateur.password ='$password' ";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
            //return $sql;
        }else{
            return null;
        }
    }
    public function addUtilisateur($nom, $prenom,$email,$login,$password){
        $sql = "INSERT INTO utilisateur VALUES(null, '$nom', '$prenom','$email','$login','$password')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function deleteUtilisateur($id){
        $sql = "DELETE FROM utilisateur WHERE ID = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateUtilisateur($idP, $libP, $qtStock){
        $sql = "UPDATE utilisateur SET libP = '$libP',
						qtStock = '$qtStock'
						WHERE idP = $idP";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeUtilisateur(){
        $sql = "SELECT * FROM utilisateur";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
}