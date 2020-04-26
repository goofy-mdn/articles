# Système d'articles

Système d'articles créé par StellarFX.
Il a été codé en PHP avec une base de donnée MySQL.
L'affichage des articles fonctionne avec jQuery et PHP.

- Création d'articles disponible sur la page "write".
- Visionnage des articles disponible sur la page "accueil".

Lors de l'envoi du formulaire, l'image est alors stockée dans "upload" avec comme nom "<id>.<extension>", les deux stockés dans la base de donnée, qui est alors récupérée sur la page "accueil" grâce à une boucle, avec également le contenu, le titre, et la catégorie de l'article.
  
**A venir :**
- Affichage d'article entier sur une page
- Amélioration de l'affichage responsive
