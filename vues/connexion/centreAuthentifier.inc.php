<!-- VARIABLES NECESSAIRES -->
<!-- $this->message : à afficher sous le formulaire -->
<h3>Bienvenue sur le site de gestion des stages GestStages</h3>
<?php
if (isset($this->getDonnees['message'])) {
    echo "<strong>" . $this->getDonnees['message'] . "</strong>";
}
