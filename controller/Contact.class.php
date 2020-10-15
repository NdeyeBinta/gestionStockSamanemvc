<?php


class Contact extends Controller
{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/ContactDB.php';
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
    //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    public function index(){
        return $this->view->load("contact/index");
    }

    public function getID($idP){
        $data['IDP'] = $idP;

        return $this->view->load("produit/get_idP", $data);
    }

    public function get($idP){
        //Instanciation du model
        $pdb = new ProduitDB();

        $data['test'] = $pdb->getProduit($idP);

        return $this->view->load("produit/get", $data);
    }
    public function liste(){
        //Instanciation du model
        $cdb = new ContactDB();

        $data['contacts'] = $cdb->listeContact();

        return $this->view->load("contact/liste", $data);
    }


    public function add(){
        //Instanciation du model
        $data['contact'] ='';

        $pdb = new ContactDB();
        //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            if(!empty($nom) && !empty($prenom)&& !empty($tel)&& !empty($adress)&& !empty($email)&& !empty($message)) {
                $ok = $pdb->addContact($nom, $prenom,$tel,$adress,$email,$message);
                $data['ok'] = $ok;
            }
        }

        return $this->view->load("contact/add", $data);
    }
    public function update(){
        //Instanciation du model
        $pdb = new ContactDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($id) && !empty($nom) && !empty($prenom)&& !empty($tel)&& !empty($adress)&& !empty($email)&& !empty($message)) {
                $ok = $pdb->updateProduit($id, $nom, $prenom,$tel,$adress,$email,$message);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $pdb = new ContactDB();
        //Supression
        $pdb->deleteContact($id);
        //Retour vers la liste
        return $this->liste();
    }

    public function edit($id){


        //Instanciation du model
        $pdb = new ContactDB();
        //Supression
        $data['contact'] = $pdb->getContact($id);
        //chargement de la vue edit.html
        return $this->view->load("contact/edit", $data);
    }
}
?>