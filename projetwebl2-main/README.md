#WARNING : le front et le back sont sur le même dépôt!

#Base de donnée (mysql)

J'ai créé une base de donnée books qui contient (pour cette version) 2 tables.

# INFORMATIONS IMPORTANTES
- Pour avoir du contenu sur le site, il faut importer les bases de données book.sql et user_data.sql (bdd/), après avoir crée books.
- Si il y a un problème de connection à la base de données, il faut configurer le fichier src/model/bdd_model


# BOOK
Il fallait bien évidement une table sur livre étant donné la tournure du site.
Comme je voulais un site qui présente des livres, il était normal de donner le maximum d'informations aux utilisateurs, pour d'une part savoir si il est possible d'acheter le livre en France (car pas tous les livres sont traduits, et pas tous le monde est bilingue), mais surtout pour faire connaitre l'auteur, et peut-être faire découvrir de nouveaux livres de tel auteur à l'utilisateur.

Structure de la table:
- id : pour identifier de manière unique le livre
- titre
- couverture
- auteur
- description
- theme
- langue_original
- date de parution originale 
- date de parution française
- date de sortie

Dans le code, il n'y a que des récupérations d'informations de cette table. Une insertion peut-être envisageable quand j'aurais mis en place le rôle d'admin ou d'écrivain qui rempliront la liste de livre.

Au départ, ce site devait être une sorte d'annuaire de livres que j'ai lu, et dont je peux faire un retour sur. Quand cette feature sera mise en place, il pourrait y avoir une clé qui se rajoute dans la table qui fera référence à une autre table, une table qui recensera tous les articles, dont l'article sur le livre d'id id. 


# USER_DATA
Dans le futur, je voudrais permettre aux utilisateurs d'avoir des avantages à s'inscrire, dont les commentaires, écrire des articles sur une de leur dernière lecture etc.
Cependant pour l'instant je leur permet juste de créer un compte/se connecter, mais rien ne change de l'affichage avec les autres utilisateurs, sauf un bouton  de déconnection.. 

Nb: avec l'exportation de la user_data.sql, vous pouvez vous connecter avec le pseudo : test et le mot de passe : test 

Structure de la table:
- id
- username
- pwd
- first_name
- last_name
- email

La table se remplis par le biais de l'inscription de l'utilisateur, rien de plus pour le moment. 


# ARCHITECTURE DU SITE

Mon site est en multipage. Il était possible de le faire en one page, mais vu l'objectif fixé dans l'avenir, il était préférable de directement partir sur cette architecture car il y aura beaucoup de contenu et d'actions possible par l'utilisateur, donc pas gérable, ou difficilement.