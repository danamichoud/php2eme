/********************************************************
 * Société : CPNV 
 * Auteur  : Dana Michoud
 * Date    : 15.01.2015
 *
 * Projet  : Introduction à la programmation avec JavaScript
 * Fichier : Les fonctions, exercice 1
 *
 * Description : fiche de salaire
 ********************************************************/

// Calcul de la retenue AVS/AI/APG de 5.15%
function retenueAVSAIAPG() {
	var salaireBrut = document.getElementById( 'SalaireBrut' ).value;

	return ( (salaireBrut * 5.15) / 100 );	
}

// Calcul de la retenue AC (Assurance Chômage) de 1.1% (Salaire max de 10'500)
function retenueAC() {
	var salaireBrut = document.getElementById( 'SalaireBrut' ).value;
	
	return ( (salaireBrut * 1.1) / 100 );
}

// Calcul de la retenue LPP de 7%
function retenueLPP() {
	var salaireBrut = document.getElementById( 'SalaireBrut' ).value;
	
	return ( (salaireBrut * 7) / 100 );
}

// Calcul de la retenue AA (Assurance Accident) de 0.93%
function retenueAA() {
	var salaireBrut = document.getElementById( 'SalaireBrut' ).value;
	
	return ( (salaireBrut * 0.93) / 100 );
}

// Calcul des Allocations familiales enfant 200.- par enfant 
function allocationsEnfant
	var salaireBrut = document.getElementById( 'SalaireBrut' ).value;
	
	return ( (
//Calcul des Allocations  familiales enfant étudiant ou en formation 250.- par enfant



function calcul()
{

// Récupération de la saisie
	var salaireBrut = document.getElementById( 'SalaireBrut' ).value,
	    salaireNet = 0,			// Pour stocker le salaire net
	    resulat = "";			// Pour afficher le résultat dans le conteneur Resultat
	
//Affichage du résultat
var resultat = "Salaire Brut				:"+ salaireBrut + "\n" +
			   "AVS/AI/APG					:"+ retenueAVSAIAPG + "\n" +
			   "Chômage						:"+ retenueAC + "\n" +
			   "LPP							:"+ retenueLPP + "\n" +
			   "Accident non prof.			:"+ retenueAA + "\n" +
			   "Allocs enfants				:"+ allocationsEnfant + "\n" +
			   "Allocs étudiants			:"+ allocationsEdudiant + "\n" +
			   "Salaire net					:"+ salaireNet;
document.getElementById('resultat').value=resultat;

	return false;

}
