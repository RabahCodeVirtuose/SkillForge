# **SkillForge** 🎓  
Une plateforme de gestion des ateliers de formation, développée avec **Symfony**.  
SkillForge permet aux **instructeurs** de créer et gérer leurs ateliers, aux **apprentis** de s'inscrire et d'évaluer les formations, et aux **administrateurs** de superviser l’ensemble du système.  

---

## 🚀 **Fonctionnalités**  
✔️ **Gestion des utilisateurs** – Rôles distincts : Administrateur, Instructeur, Apprenti  
✔️ **Gestion des ateliers** – Création, modification et suppression des formations  
✔️ **Inscription aux ateliers** – Inscription et désinscription des apprentis  
✔️ **Notation et feedback** – Notation des ateliers et affichage des moyennes  
✔️ **Filtrage et recherche** – Recherche rapide des instructeurs  
✔️ **Sécurité et permissions** – Gestion avancée des accès et des données  

---

## 🛠️ **Technologies utilisées**  
🔹 **Backend** : Symfony, PHP  
🔹 **Frontend** : HTML, CSS, Bootstrap, JavaScript  
🔹 **Base de données** : MySQL  
🔹 **Déploiement** : Docker  

---

## ⚙️ **Installation**  

### 1️⃣ Cloner le projet  
```bash
# Clonage du répertoire Git
git clone https://github.com/RabahCodeVirtuose/SkillForge.git
cd SkillForge
```

### 2️⃣ Lancer les conteneurs Docker
```bash
# Démarrer Docker et les services
docker-compose up -d
```

### 3️⃣ Installer les dépendances
```bash
# Installation des paquets PHP avec Composer
composer install
# Installation des paquets front-end avec npm
npm install
```

### 4️⃣ Appliquer les migrations et charger les données
```bash
# Exécution des migrations de la base de données
php bin/console doctrine:migrations:migrate
# Chargement des jeux de données initiaux
php bin/console doctrine:fixtures:load
```

### 5️⃣ Démarrer le serveur
```bash
# Lancer le serveur Symfony
symfony server:start
```
L'application sera accessible (selon le serveur que t'as mis dans ta configuration docker)

---

## 🔑 **Comptes de test**  

| Rôle        | Email                | Mot de passe  |
|-------------|----------------------|---------------|
| Admin       | admin@example.com    | admin123      |
| Apprenti    | apprenti@example.com | apprenti123   |
| Instructeur | toto.titi@gmail.com  | tototiti      |

---

## ⚠ **Important : Modification des ateliers**  
- Seul l'instructeur propriétaire d'un atelier peut le modifier.  
- Si vous testez avec un compte instructeur sans atelier associé, vous ne verrez pas le bouton "Modifier".  

### 📌 Comment tester la modification d'un atelier ?  
1. Créez un atelier avec le compte instructeur actuel.  
2. Récupérez un autre compte instructeur généré par Faker avec cette commande :  
   ```bash
   php bin/console doctrine:query:sql "SELECT * FROM user;"
   ```
3. Les comptes Faker ont le mot de passe par défaut : `password`.  

---

## 📌 **À propos**  
Ce projet a été réalisé en seulement 4 jours dans le cadre d’un exercice intensif de développement full-stack avec Symfony.  
Il permet de mettre en pratique les concepts de gestion des rôles, authentification, CRUD avancé et sécurisation des accès.

---

## 🧑‍💻 **Auteur**  
**Rabah TOUBAL** - Étudiant en L3 Informatique Ingénierie  
- Passionné par le développement web et l’optimisation des systèmes  
- En recherche de nouvelles opportunités pour renforcer mes compétences en Symfony & développement full-stack  

---


**🎯 SkillForge : Une solution performante pour la gestion des ateliers éducatifs** 🚀  
> ✨ Développé en un temps record, optimisé pour une expérience utilisateur fluide ✨