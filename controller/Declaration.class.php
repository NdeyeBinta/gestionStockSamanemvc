<?php


class Declaration extends Controller
{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/DeclarationDB.php';
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
    //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    public function index(){
        return $this->view->load("declaration/index");
    }

    public function getID($id){
        $data['ID'] = $id;

        return $this->view->load("declaration/get_id", $data);
    }

    public function get($id){
        //Instanciation du model
        $ddb = new DeclarationDB();

        $data['declaration'] = $ddb->getDeclaration($id);

        return $this->view->load("declaration/get", $data);
    }
    public function liste(){
        //Instanciation du model
        $tdb = new DeclarationDB();

        $data['declarations'] = $tdb->listeDeclaration();

        return $this->view->load("declaration/liste", $data);
    }


    public function add(){
        //Instanciation du model
        $pdb = new DeclarationDB();
       $data['declaration'] ='';

        //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            $pic = $_FILES['pic'];
           // move_uploaded_file($pic['tmp_name'],"pic/".$pic['name']);
            if(!empty($_FILES)){
                $pic = $_FILES['pic']['name'];
                $upload = '/public/image/'.$pic;

                //$upload = "pic/".$pic;
                $upload = 'C:\xampp\htdocs\mesproget\gestionStockSamanemvc\public\images/'.$pic;
                move_uploaded_file($_FILES['pic']['tmp_name'],$upload);
                if(!empty($nom) && !empty($prenom)&& !empty($tel)&& !empty($adress)&& !empty($email)&& !empty($info) && !empty($rec)&& !empty($day) && !empty($pic)) {
                    $ok = $pdb->addDeclaration($nom, $prenom,$tel,$adress,$email,'$info',$rec,$day,$pic);
                    $data['ok'] = $ok;
                }
            }
        }
        return $this->view->load("declaration/add", $data);
    }
   /** public function addCom(){
        //Instanciation du model
        $pdb = new DeclarationDB();
        //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);

                if(!empty($com)&& !empty($id) ) {
                    $ok = $pdb->addCommentaire($com,$id);
                    $data['ok'] = $ok;
                }

        }
        return $this->view->load("declaration/addC", $data);
    }**/
    public function update(){
        //Instanciation du model
        $pdb = new DeclarationDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($id) && !empty($nom) && !empty($prenom)&& !empty($tel)&& !empty($adress)&& !empty($email)&& !empty($info) && !empty($pic)) {
                $ok = $pdb->updateDeclaration($nom, $prenom,$tel,$adress,$email,$info,$pic);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $pdb = new DeclarationDB();
        //Supression
        $pdb->deleteDeclaration($id);
        //Retour vers la liste
        return $this->liste();
    }

    public function edit($id){


        //Instanciation du model
        $pdb = new DeclarationDB();
        //Supression
        $data['declaration'] = $pdb->getDeclaration($id);
        //chargement de la vue edit.html
        return $this->view->load("declaration/edit", $data);
    }
}
?>
