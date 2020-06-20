<?php  
require_once('classes.php');
 
                    $chat = new Chien("Adoc");


                    $chat->setPedigree("Bresilien");
                    
                    //On utilise $classeAnimal comme référence à Animal
                    $classeAnimal = "Animal";


                    echo "<p>".
                    "Nom : " .$chat->getNom() . "<br />".
                    "vacciné le : " .  $chat->getdateVaccination(). "<br />". 
                    $chat->getVaccin(1). "<br />".
                    
                    "Pédigrée : " . $chat->getPedigree(). "</p>".
                    "<p>".


                    "Nombre de visite : ".  $classeAnimal::totalNbreVisites() . 
                    "</p>";


            $chat->setAdresse("345, rue des Animaux","75000","Paris");
            echo "Adresse :<br />" . $chat->getAdresse();
?>