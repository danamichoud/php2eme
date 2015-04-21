
 /********************************************************
 * Société : CPNV 
 * Auteur  : Dana Michoud
 * Date    : 02.10.2014  (première version)
 *
 * Projet  : Utilisation de fonctions numériques
 * Fichier : script4.html
 *
 * Description : 
 *   Calcul de différentes valeurs a laide de fonctions
 *
 * Modifications :
 * 	02.10.2014 
 ********************************************************/
 
 
 function traiteFormulaire() {

	/* Declarations des variables locales */	 
	 var couleur= "" ;//type caractère
	 var message= "" ;
	 
	 
	couleur = document.getElementById('couleur').value;
	 
	 switch(couleur) {
	 
	 case "bleu":
	 message= "Vous avez choisi le bleu, vous etes un bonbon schroumf" + "<br/>";
	 break;
	 case "vert":
	 message="Vous avez choisi le vert, vous etes une salade" + "<br/>";
	 break;
	 case "noir":
	 message="Vous avez choisi le noir, vous etes un gothique" + "<br/>";
	 break;
	 case "rouge":
	 message="Vous avez choisi le rouge, vous etes nul" + "<br/>";
	 break;
	 case "rose":
	 message="Vous avez choisi le rose, je vous aime!" + "<br/>";
	 break;
	 case "vaudois":
	 message="PAPET!!!" + "<br/>";
	 break;
	 }
	 
	document.getElementById("message").innerHTML = 
	   message + "<br/>" ;
	     
	

	return false;	// Pour empecher le submit du formulaire    
	      
 }
 
