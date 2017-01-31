<?php

//Les objets repository permettent de récupérer des enregistrements en base de données
//Toutes les requpetes select sont donc sensées s'y trouver

class CommandeRepository
{

	//Récupère la liste de tous les clients en base de données
	public function getAll($pdo) {

		//Effectuer la requête en bdd pour récupérer l'ensemble des clients enregistrés en bdd
    $req = $pdo->query("SELECT p.nom, p.prenom, cmd.id, cmd.ref, cmd.date_expedition, cmd.date_cmd, s.libelle FROM personne p INNER JOIN commande cmd ON p.id=cmd.client_id INNER JOIN statut s ON cmd.statut_id=s.id ORDER BY p.nom, p.prenom");
		$req->setFetchMode(PDO::FETCH_OBJ);

		//Boucler sur tous les enregistrements récupérés grâce à votre requête SELECT
		//et pour chaque enregistrement :
		// 1 -  instancier un objet client
		// 2 -  hydrater ses attributs avec les valeurs récupérées en bdd
		// 3 - pour chaque objet client instanciés et hydratés, les ajouter dans un tableau
		// 4 - retourner ensuite ce tableau avec l'instruction return

		$listeCommande = array();

		while($obj = $resultats->fetch()){

			$commande = new Commande();
			$commande->setId($obj->id);
			$commande->setRef($obj->ref);
			$commande->setNom($obj->nom);
			$commande->setPrenom($obj->prenom);
			$commande->setDateCommande($obj->date_cmd);
      $commande->setDateExpedition($obj->date_expedition);
      $commande->setStatut($obj->libelle);

			$listeCommande[] = $commande;

		}

		return $listeCommande;
	}
}
?>
