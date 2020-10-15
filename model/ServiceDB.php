<?php


class ServiceDB extends Model
{//La base de données samane_test est dans view/test
    //Pour tester importer la
    public function __construct(){
        parent::__construct();
    }

    public function getService($id)
    {
        $sql = "SELECT *
                     FROM service
                     WHERE service.id = ".$id;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function addService($nom, $prenom,$tel,$adress,$email,$type,$description){
        $sql = "INSERT INTO service VALUES(null, '$nom', '$prenom','$tel','$adress','$email','$type','$description')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function deleteService($id){
        $sql = "DELETE FROM service WHERE ID = $id ";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateService($id, $nom, $prenom,$tel,$adress,$email,$type,$description){
        $sql = "UPDATE service SET nom = '$nom',
						prenom = '$prenom',
						tel = '$tel',
						adress = '$adress',
						email = '$email',
						type = '$type',
						description = '$description'
						WHERE id = $id";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeService(){
        $sql = "SELECT * FROM service";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
}