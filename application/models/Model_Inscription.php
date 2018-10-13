<?php
class Model_Inscription extends CI_Model
{
    public function insertUser($pNomUser, $pEmail, $pSexe, $pDateNaissance, $pLogin, $pMdp, $pPhotoUser){
       
        //$sql = $this->db->query("insert into user values ('$pNomUser', '$pEmail', '$pSexe', '$pDateNaissance', '$pLogin', '$pMdp', '$pPhotoUser');");
        //return $sql->exec($sql);  
        
        $retour = false;
        $bdd = new PDO('mysql:host=localhost;dbname=trocdetemps', 'root', '')
             or die ('Error connexion with the data base');
        $requete = "insert into user values ('$pNomUser', '$pEmail', '$pSexe', '$pDateNaissance', '$pLogin', '$pMdp', '$pPhotoUser');";
        $retour = $bdd->exec($requete);
        return $retour;
    }

    public function verifLogin(){
        if(isset($_POST["nomUser"], $_POST["email"], $_POST["sexe"], $_POST["dateNaissance"], $_POST["login"], $_POST["mdp"], $_POST["photoUser"])){
            $nomUser = $_POST["nomUser"];
            $email = $_POST["email"];
            $sexe = $_POST["sexe"];
            $dateNaissance = $_POST["dateNaissance"];
            $login = $_POST["login"];
            $mdp = $_POST["mdp"];
            $photoUser = $_POST["photoUser"];

            $ret = verifLogin($login);
        
            if($ret){
                echo "Ce login est déjà attribué, merci d'en prendre un autre";
            }
            else{
                $ok = insertUser($nomUser, $email, $sexe, $dateNaissance, $login, $mdp, $photoUser);
                if($ok){
                    header("cc");
                }
                else{
                    echo "L'ajout à échoué";
                }
            }
        }
    }

}
?>






      