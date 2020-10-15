<?php


class Service extends Controller
{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/ServiceDB.php';
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
    //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    public function index(){
        return $this->view->load("service/index");
    }

    public function getID($id){
        $data['ID'] = $id;

        return $this->view->load("service/get_id", $data);
    }

    public function get($id){
        //Instanciation du model
        $pdb = new ServiceDB();

        $data['test'] = $pdb->getService($id);

        return $this->view->load("service/get", $data);
    }
    public function liste(){
        //Instanciation du model
        $sdb = new ServiceDB();

        $data['services'] = $sdb->listeService();

        return $this->view->load("service/liste", $data);
    }


    public function add(){
        //Instanciation du model
        $pdb = new ServiceDB();
        //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            if(!empty($nom) && !empty($prenom)&& !empty($tel)&& !empty($adress)&& !empty($email)&& !empty($type) && !empty($description)) {
                $ok = $pdb->addService($nom, $prenom,$tel,$adress,$email,$type,$description);
                $data['ok'] = $ok;
            }
        }

        return $this->view->load("service/add", $data);
    }
    public function update(){
        //Instanciation du model
        $pdb = new ServiceDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($id) && !empty($nom) && !empty($prenom)&& !empty($tel)&& !empty($adress)&& !empty($email)&& !empty($type)&& !empty($description)) {
                $ok = $pdb->updateService($id, $nom, $prenom,$tel,$adress,$email,$type,$description);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $pdb = new ServiceDB();
        //Supression
        $pdb->deleteService($id);
        //Retour vers la liste
        return $this->liste();
    }

    public function edit($id){


        //Instanciation du model
        $pdb = new ServiceDB();
        //Supression
        $data['service'] = $pdb->getService($id);
        //chargement de la vue edit.html
        return $this->view->load("service/edit", $data);
    }
}
?>
