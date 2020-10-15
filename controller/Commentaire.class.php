<?php


class Commentaire extends Controller
{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/CommentaireDB.php';
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
    //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    public function index(){
        return $this->view->load("commentaire/index");
    }
    public function add(){
        //Instanciation du model
        $data['commentaire'] ='';

        $pdb = new CommentaireDB();
        //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);

            if(!empty($com) && !empty($id)) {
                $ok = $pdb->addCommentaire('$com',$id);
                $data['ok'] = $ok;
            }

        }
        return $this->view->load("commentaire/add", $data);
    }
}