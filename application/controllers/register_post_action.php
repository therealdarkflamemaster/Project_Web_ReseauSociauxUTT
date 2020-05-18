<?php
//   commencer à télécharger les données dans le table utilisateur
if(isset($_POST['submit'])){
    $username = $_POST["user"];
    $email = $_POST["email"];
    $localisation = $_POST['localisation'];
    $password = $_POST["password"];
    $option_identity = $_POST["identity"];
    if($option_identity == "etudiant"){
        $identity = "etudiant(e)";
    }else if ($option_identity == "prof"){
        $identity ="Professeur";
    }else{
        $identity ="Personel";
    }
    include 'fragmentDataBaseConfig.php';
    try{
        $database->beginTransaction();
        $requete = "insert into utilisateur values ('$username', '$email', '$password', '$identity', '$localisation')";
        $statement = $database->prepare($requete);
        $statement->execute();
        $database->commit();
    }catch(PDOException $e){
        $database->rollBack();
        echo '<script type="text/javascript">alert(" Cet email est déjà enregisté  ");';
        exit("location.href='application/view/login.php';</script>");

    }
    echo '<script type="text/javascript">alert(" Réussir à enregister!  ");';
    exit("location.href='application/view/Homepage.php';</script>");

}








