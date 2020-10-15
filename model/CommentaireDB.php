<?php


class CommentaireDB extends Model
{
    public function __construct(){
        parent::__construct();
    }
    public function addCommentaire($com,$id){
        $sql = "INSERT INTO commentaire VALUES(null, '$com','$id')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }
}
