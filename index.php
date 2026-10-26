<?php
 require_once "config.php";
 require_once "fonctions.php";
 $notes=["Mohamed" => 14,"Sami" => 9,"Amel" => 19,"Yassine" => 8,"Ines"=> 12];
 //affichage du tableau des notes
 affchertableau($notes);    
 //calcul de la moyenne
 echo "<p> Moyenne de la classe : ".moyenne($notes)."</p><br>";
 //affichage des admis
    echo "<p> Admis : </p><br>";
    affichertableau(admis($notes));
//affichage des notes triées
    echo "<p> Notes triées :</p><br>";
    affichertableau(notestriées($notes));
//affichage des notes avec 1 point bonus
    echo "<p> Notes avec 1 point bonus :</p><br>";
    affichertableau(notesbonus($notes));
 ?>