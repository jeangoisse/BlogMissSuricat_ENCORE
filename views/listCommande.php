<table>
  <thead>
    <th>Id</th>
    <th>Référence</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Date Commande</th>
    <th>Dare Expedition </th>
    <th>Statut</th>
    <th>Modifier</th>
    <th>Supprimer</th>
  </thead>
  <tbody>
    <?php
    foreach ($listeCommande as $commande) {
      echo '<tr>';
      echo '<td>' . $commande->getId() . '</td>';
      echo '<td>' . $commande->getRef() . '</td>';
      echo '<td>' . $commande->getNom() . '</td>';
      echo '<td>' . $client->getPrenom() . '</td>';
      echo '<td>' . $client->getDateComd() . '</td>';
      echo '<td>' . $client->getDateExp() . '</td>';
      echo '<td>' . $client->getStatut() . '</td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
<!-- Afficher ici le message d'erreur ou de confirmation lors d'une suppression -->
<label><?php if(isset($message)) echo $message ?></label>
