<?php


class DeclarationDB extends Model
{//La base de données samane_test est dans view/test
    //Pour tester importer la
    public function __construct(){
        parent::__construct();
    }

    public function getDeclaration($id)
    {
        $sql = "SELECT *
                     FROM declaration
                     WHERE declaration.id = ".$id;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function addDeclaration($nom, $prenom,$tel,$adress,$email,$info,$rec,$pic,$date){
        $sql = "INSERT INTO declaration VALUES(null, '$nom', '$prenom','$tel','$adress','$email','$info','$rec','$pic','$date')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function deleteDeclaration($id){
        $sql = "DELETE FROM declaration WHERE ID = $id ";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateDeclaration($id, $nom, $prenom,$tel,$adress,$email,$info,$pic){
        $sql = "UPDATE declaration SET nom = '$nom',
						prenom = '$prenom',
						tel = '$tel',
						adress = '$adress',
						email = '$email',
						info = '$info',
						pic = '$pic'
						WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }
    public function listeDeclaration(){
        $sql = "SELECT * FROM declaration";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
    public function listeCommentaire(){
        $sql = "SELECT * FROM commentaire";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
}