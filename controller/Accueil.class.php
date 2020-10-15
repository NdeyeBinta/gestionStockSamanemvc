<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
    //class
    class Accueil extends Controller{

        public function __construct(){
            parent::__construct();
            require_once 'model/UtilisateurDB.php';
        }
        //methode ou url
        public function index(){
			//view
            return $this->view->load("accueil/index");
			
        }
        public function test(){
            //view
            return $this->view->load("accueil/test");

        }
        public function connexion(){
            //Instanciation du model
            $data['erreur']="";
            $pdb = new UtilisateurDB();
            //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST['connexion']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                if(!empty($login) && !empty($password)) {
                    $ok = $pdb->getConnexion($login, $password);
                    if($ok!=null)
                        return $this->view->load("accueil/accueil");
                    else
                        $data['erreur']="login ou mot de pass incorect";
                }
            }

            return $this->view->load("accueil/accueil", $data);
        }
        public function add(){
            //Instanciation du model
            $pdb = new UtilisateurDB();
            //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                if(!empty($nom) && !empty($prenom)&& !empty($email)&& !empty($login)&& !empty($password)) {
                    $ok = $pdb->addUtilisateur($nom, $prenom,$email,$login,$password);
                    $data['ok'] = $ok;
                }
            }

            return $this->view->load("accueil/add", $data);
        }
    }
?>