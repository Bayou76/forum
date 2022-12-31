<?php

    require('actions/database.php');

    //Récupérer l'identifiant de l'utilisateur
    if(isset($_GET['id']) AND !empty($_GET['id'])){

        //L'id de l'utilisateur
        $idOfUser = $_GET['id'];

        //Vérifier si l'utilisateur existe
        $checkIfUserExists = $bdd->prepare('SELECT pseudo, nom, prenom FROM users WHERE id=?');
        $checkIfUserExists->execute(array($idOfUser));

        if ($checkIfUserExists->rowCount() > 0) {

            //Récupérer toutes les données de l'utilisateurb   
            $usersInfo = $checkIfUserExists->fetch();

            $user_pseudo = $usersInfo['pseudo'];
            $user_lastname = $usersInfo['nom'];
            $user_firstname = $usersInfo['prenom'];

            $getHisQuestions = $bdd->prepare('SELECT * FROM questions WHERE id_auteur = ? ORDER BY id DESC');
            $getHisQuestions->execute(array($idOfUser));



    } else {
        $errorMsg = "Aucun utilisateur trouvé";
    }


    } else {
        $errorMsg = "Aucun utilisateur trouvé";
    }

?>