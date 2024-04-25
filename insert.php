<?php

function connectDB(){
    $servername= "localhost";
    $username= "root";
    $password= "";
    $dbname= "bibliotheque";

    //creation de la connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    //verifier la connexion
    if ($conn->connect_error) {
        die("connection failed:" .$conn->connect_error);
    }
    //verifier si les formulaires ont été soumis

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        //insertion des donnèes dans la table
        if(isset($_POST["isbn"]) && isset($_POST["titre"]) && isset($_POST["auteur"])) {
            $isbn = $_POST["isbn"];
            $titre = $_POST["titre"];
            $auteur = $_POST["auteur"];

            $sql = "INSERT INTO livre (ISBN, Titre, Auteur)
            VALUES ('$isbn', '$titre','$auteur')";
            if($conn->query($sql) === TRUE){
               echo"Les données sont insérées dans la table livre avec succés. <br>";
            }else{
                echo "Erreur lors de l'insertion dans la table livre : " . $conn->error;
            }
        }
        //insertion des données dans la table
        if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["filiere"]) && isset($_POST["classe"]) && isset($_POST["datenaissance"]) && isset($_POST["dateinscription"])) {
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $filiere = $_POST["filiere"];
            $classe = $_POST["classe"];
            $datenaissance = $_POST["datenaissance"];
            $dateinscription = $_POST["dateinscription"];
        
            // Vérifie si la variable INE est définie, sinon, déclare-la à NULL
            $ine = isset($_POST["ine"]) ? $_POST["ine"] : NULL;
        
            $sql = "INSERT INTO Inscrire (Nom, Prenom, INE, Filiere, Classe, DateNaissance, DateInscription)
                    VALUES ('$nom', '$prenom', '$ine', '$filiere', '$classe', '$datenaissance', '$dateinscription')";
            if($conn->query($sql) === TRUE){
               echo "Les données sont insérées dans la table inscription avec succés. <br>";
            } else {
                echo "Erreur lors de l'insertion dans la table inscription : " . $conn->error;
            }
        }


        if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["numbINE"]) && isset($_POST["filiere"]) && isset($_POST["classe"]) && isset($_POST["ddn"])) {
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $numbINE = $_POST["numbINE"];
            $filiere = $_POST["filiere"];
            $ddn = $_POST["ddn"];
            $ine = isset($_POST["nom"]) ? $_POST["prenom"] : NULL;
        
            $sql = "INSERT INTO membre (Nom, Prenom, numbINE, Filiere, Classe, ddn)
                    VALUES ('$nom', '$prenom', '$ine', '$filiere', '$classe', '$datenaissance', '$dateinscription')";
            if($conn->query($sql) === TRUE){
               echo "Les données sont insérées dans la table inscription avec succés. <br>";
            } else {
                echo "Erreur lors de l'insertion dans la table inscription : " . $conn->error;
            }
        }


        if(isset($_POST["titre"]) && isset($_POST["auteur"]) && isset($_POST["numbIsbn"])) {
            $titre = $_POST["titre"];
            $auteur = $_POST["auteur"];
            $numbIsbn = $_POST["numbIsbn"];

             $numbIsbn = isset($_POST["titre"]) ? $_POST["auteur"] : null;
        
            $sql = "INSERT INTO livre (titre, auteur, numbIsbn)
                    VALUES ('$titre', '$auteur', '$numbIsbn' )";
            if($conn->query($sql) === TRUE){
               echo "Les données sont insérées dans la table inscription avec succés. <br>";
            } else {
                echo "Erreur lors de l'insertion dans la table inscription : " . $conn->error;
            }
        }
        
          
    }
    
    // fermer la connexion
    $conn->close();
}


connectDB();
?>