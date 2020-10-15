<?php


class ContactDB extends Model
{
    //La base de données samane_test est dans view/test
    //Pour tester importer la
    public function __construct(){
        parent::__construct();
    }

    public function getContact($id)
    {
        $sql = "SELECT *
                     FROM contact
                     WHERE contact.id = ".$id;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function addContact($nom, $prenom,$tel,$adress,$email,$message){
        $sql = "INSERT INTO contact VALUES(null, '$nom', '$prenom','$tel','$adress','$email','$message')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function deleteContact($id){
        $sql = "DELETE FROM contact WHERE ID = $id ";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateContact($id, $nom, $prenom,$tel,$adress,$email,$message){
        $sql = "UPDATE contact SET nom = '$nom',
						prenom = '$prenom',
						tel = '$tel',
						adress = '$adress',
						email = '$email',
						message = '$message'
						WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeContact(){
        $sql = "SELECT * FROM contact";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
}