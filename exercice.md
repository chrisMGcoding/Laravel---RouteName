**Partie une : structure**
Créer un projet avec là compositions des dossiers et fichiers suivantes :

**view**
-Views/infos/contact/sav.blade.php
-Views/infos/contact/partenariat.blade.php
-Views/infos/contact/info.blade.php
*Ces trois pages doivent contenir un formulaire de contact chaqu'une différents* 

-Views/team/web/dev/frontend.blade.php
-Views/team/web/dev/backend.blade.php
*Ces deux pages contiennent chaqu'une des profils des membres de nos équipes*

**informations en plus**
- faire une nav fonctionnel 
- la page home doit contenir une présentation du site
- las pages sav, partanariat, info doivent contenir un formulaire

**routes**
le nom de la route pour : 
- sav.blade.php -> /contact/sav
- partenariat.blade.php -> /contact/partenariat
- info.blade.php -> /contact/info
- frontend.blade.php -> /team/front
- backend.blade.php -> /team/back


 **Partie deux : Les données (data)**
-Créez un tableau(object) du nom de "front" que vous enverrez dans la route frontend qui contient 5 personnes : nom, fonction, chemin d’une photo 

-Créez un second tableau(object) du nom de "back"  que vous enverrez dans la route backend avec 4 personnes : Nom, fonction, chemin photo 

-Avec l’aide d’une boucle affichez chaque personne dans leur page respective dans des col-4 et des cards