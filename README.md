# 🧁reCESIpes🧁

_Cube web-mobile 2022 - Kevin Noah Maxime Claire_

Dernière édition : 23/06/2022 - Claire

### Presentation

🧁*reCESIpies*🧁 propose des recettes de cuisines variées accessibles à tous.

### Documentation

Le dossier */documentation* contient :

 - 📐 Le schéma UML de la base de données.
 - 💄 Les maquettes de la plateforme. (visible  aussi sur : https://miro.com/app/board/uXjVOwdAQsA=/)
 - 📚 Le cahier des charges du projet.

---

Schéma réalisé sur Draw.io (https://app.diagrams.net/)

---

Wireframe réalisé sur Miro (https://miro.com/app/board/uXjVOwdAQsA=/)

---

Maquette Flutter réalisée avec Flutter Flow (https://app.flutterflow.io/project/re-c-e-s-ipes-zonj5z)

---

### Stack / Config
 

    Bootstrap
    Svelte (Web)
    Flutter (Mobile)
    ---
    ---
    Docker
    Database    : MariaDB
    Serveur web : Apache2
    API         : Laravel-Sail + PHP 8.1


PORT back-end   : 8000
PORT front-end  : 3000

### Hébergement

AWS - Instance EC2 T2.micro Ubuntu 22.04 

    - Mise en route le 19/06
    - Association à une ElasticIP pour éviter les changements d'adresse au reboot
    - SSH : Groupe de sécurité avec filtrage IP des membres du groupe
    - Pour le moment : fermeture des ports 443 et 80 (https, http) 

### Backlog


##### 🔧 Préparation / Infra :

* [x] Repo + backlog
* [x] Inspiration       : références site cuisine ; ajout de contenu (ingrédients etc)
* [x] Versioning        : clone local avec branche individuelle ; merge requests 
* [x] Modélisation bdd + Schéma et maquettes
* [x] Serveur APACHE (vhost, rewrite)
* [x] Mise en route EC2
* [x] Configuration EC2
* [x] Docker avec Laravel-Sail

##### 📚 Documentation du projet :

 * [ ] Presentation
 * [ ] Outils / techno / softwares
 * [x] Base de données

##### ⚙️ Back-end:

* [x] Démarrage projet laravel
* [x] Définition routes et API


##### :nail_care: Front-end :

* [x] Choix techno (framework ?)
* [x] Wireframe
* [x] Maquette web + mobile
* [x] Front-end statique
* [ ] Flutter
* [ ] Intégration avec laravel
