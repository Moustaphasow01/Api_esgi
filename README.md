# Api_esgi
Projet pour la fin du module api . 
## Author 
- Moustapha yaya sow
- Elsa loubelle 
- Younes Hannour 
- Antoine battaire 
## Esgi 2
## Demande Iniitale du client
Réseau social d'entreprise

Fonctionnalités minimum (+ routes)

----------------------------------

Inscription (JSON)
POST /auth/signin 

Connexion (JSON)
POST /auth/login

-----------------------------------

Nouveau post (JSON)
POST /post

Récupérer tous les posts (View)
GET /post

Récupérer un post et tous les commentaires associés (View)
GET /post/<id>

Modifier un post (JSON)
PUT /post

Supprimer un post (JSON)
DELETE /post

----------------------------------

Ajouter un commentaire (à un post) (JSON)
POST /post/<id>/comment

Supprimer un commentaire (JSON)
DELETE /comment/id

----------------------------------

 
# Installation et configuration

Pour le bon fonctionnement de ce projet, il est nécessaire d'avoir un outil pour tester les requêtes API (ex: postman) ainsi qu'un serveur web avec mySQL (type wamp, lamp etc).
