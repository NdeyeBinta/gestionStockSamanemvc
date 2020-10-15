<?php


class TrouverDB extends Model
{
//La base de données samane_test est dans view/test
    //Pour tester importer la
    public function __construct(){
        parent::__construct();
    }

    public function getTrouver($id)
    {
        $sql = "SELECT *
                     FROM trouver
                     WHERE trouver.id = ".$id;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function addTrouver($titre, $categorie,$info,$tel,$adress,$email,$rec,$pic,$date){

        $sql = "INSERT INTO trouver VALUES(null, '$titre', '$categorie','$info','$tel','$adress','$email','$rec','$pic','$date')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function deleteTrouver($id){
        $sql = "DELETE FROM trouver WHERE ID = $id ";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateTrouver($id, $titre, $categorie,$info,$tel,$adress,$email,$pic){
        $sql = "UPDATE trouver SET titre = '$titre',
						categorie = '$categorie',
						info = '$info',
						tel = '$tel',
						adress = '$adress',
						email = '$email',
						pic = '$pic'
						WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeTrouver(){
        $sql = "SELECT * FROM trouver";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
}