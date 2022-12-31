<?php
    require('actions/users/securityAction.php');
    require('actions/questions/publishQuestionAction.php'); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>

<?php include 'includes/navbar.php'; ?>
    <br><br>
    <form class="container" method="POST">

        <?php 
            if(isset($erroMsg)){ 
                echo '<p>'.$erroMsg.'</p>';
            } elseif(isset($successMsg)){
                echo '<p>'.$successMsg.'</p>';
            }

        ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description de la question</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contenu de la question</label>
            <textarea class="form-control" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="validate">Publier la question</button>

    </form>
</body>
</html>