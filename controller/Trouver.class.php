<?php


class Trouver extends Controller
{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/TrouverDB.php';
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
    //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    public function index(){
        return $this->view->load("trouver/index");
    }

    public function getID($id){
        $data['ID'] = $id;

        return $this->view->load("trouver/get_id", $data);
    }

    public function get($id){
        //Instanciation du model
        $ddb = new TrouverDB();

        $data['trouver'] = $ddb->getTrouver($id);

        return $this->view->load("trouver/get", $data);
    }
    public function liste(){
        //Instanciation du model
        $tdb = new TrouverDB();

        $data['trouvers'] = $tdb->listeTrouver();

        return $this->view->load("trouver/liste", $data);
    }


    public function add(){
        //Instanciation du model
        $data['trouver'] ='';

        $pdb = new TrouverDB();
        //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            //$pic = $_FILES['pic'];
            //move_uploaded_file($pic['tmp_name'],"pic/".$pic['name']);
            if(!empty($_FILES)){
                $pic = $_FILES['pic']['name'];
                //$upload = "pic/".$pic;
                $upload = 'C:\xampp\htdocs\mesproget\gestionStockSamanemvc\public\images/'.$pic;
               move_uploaded_file($_FILES['pic']['tmp_name'],$upload);
                if(!empty($titre) && !empty($categorie)&& !empty($info)&& !empty($tel)&& !empty($adress)&& !empty($email)&& !empty($rec)&& !empty($day) && !empty($pic) ) {
                    $ok = $pdb->addTrouver($titre, $categorie,$info,$tel,$adress,$email,$rec,$day,$pic);
                    $data['ok'] = $ok;
                }
            }
        }

        return $this->view->load("trouver/add", $data);
    }
    public function update(){
        //Instanciation du model
        $pdb = new TrouverDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($id) && !empty($titre) && !empty($categorie)&& !empty($info)&& !empty($tel)&& !empty($adress)&& !empty($email) && !empty($pic)) {
                $ok = $pdb->updateTrouver($titre, $categorie,$info,$tel,$adress,$email,$pic);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $pdb = new TrouverDB();
        //Supression
        $pdb->deleteTrouver($id);
        //Retour vers la liste
        return $this->liste();
    }

    public function edit($id){


        //Instanciation du model
        $pdb = new TrouverDB();
        //Supression
        $data['trouver'] = $pdb->getTrouver($id);
        //chargement de la vue edit.html
        return $this->view->load("trouver/edit", $data);
    }
}
//move_uploaded_file($pic['tmp_name'],"pic/".$pic['name']);
if(!empty($_FILES)) {
    $pic = $_FILES['pic']['name'];
    //$upload = "pic/".$pic;

    $upload = "pic/" . $pic;

   // move_uploaded_file($_FILES['pic']['tmp_name'], $upload);
}