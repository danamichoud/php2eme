
 /********************************************************
 * Société : CPNV 
 * Auteur  : Bastien Nicoud
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
	 var  nombre1 = 0.0;
	 var  nombre2 = 0.0;
	 var  racine = 0.0;
	 var  puissance = 0.0;
	 var  arrondiinf = 0.0;
	 var  arrondisup = 0.0;
	 var  aleatoire = 0.0;
	     
	nombre1 = document.getElementById('nombre1').value * 1;  // récupération du premier nombre
	nombre2 = document.getElementById('nombre2').value * 1;  // récupération du second nombre
	
	racine = Math.sqrt(nombre1);  // racine
	puissance = Math.pow(nombre1,3);  // puissance
	arrondiinf = Math.floor(nombre2);  // arrondiinf
	arrondisup = Math.ceil(nombre2);  // arrondisup
	aleatoire = Math.random()*50;  // aleatoire
	
	document.getElementById("resultat").innerHTML =
	"La racine carree de " + nombre1 + " vaut " + racine + "<br />" +
	nombre1 + " a la puissance 3 (cube) vaut " + puissance + "<br />" +
	"Arrondi inferieur de " + nombre2 + " : " + arrondiinf + "<br />" +
	"Arrondi superieur de " + nombre2 + " : " + arrondisup + "<br />" +
	"Voici un nombre aleatoire entre 0 et 50 : " + aleatoire; // remplir le texte "resultat"

	return false;	// Pour empecher le submit du formulaire
	      
 }
 
