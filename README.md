# 🎭 Application de Gestion de Salles de Spectacle

## 📌 Description du projet
Cette application Laravel permet la gestion complète des salles de spectacle, y compris la réservation, la gestion des artistes, la vente de billets et la planification des événements. Elle utilise **Laravel 12** en backend et **Next.js** pour l'interface utilisateur.

---

## 🚀 Fonctionnalités principales
- 🎟 Gestion des salles et de leurs disponibilités
- 📅 Planification des spectacles et représentations
- 🎤 Gestion des artistes (principaux et secondaires)
- 💳 Vente et suivi des tickets (en ligne et physique)
- 🏢 Gestion des réservations de salles
- 🔐 Système d'authentification sécurisé avec Laravel Sanctum
- ⚙️ Attribution des rôles et permissions avec Spatie Laravel Permission
- 📊 Tableau de bord pour les administrateurs

---

## 🛠️ Technologies utilisées
- **Backend** : Laravel 12
- **Frontend** : Next.js
- **Base de données** : MySQL / PostgreSQL
- **Authentification** : Laravel Sanctum
- **Gestion des rôles** : Spatie Laravel Permission
- **Tests automatisés** : PHPUnit + GitHub Actions

---

## 📦 Installation et configuration

### 1️⃣ Prérequis
Assurez-vous d'avoir installé :
- PHP 8.2+
- Composer
- Node.js 18+
- MySQL / PostgreSQL
- Redis (optionnel pour la mise en cache)

### 2️⃣ Cloner le projet
```bash
git clone https://github.com/votre-utilisateur/votre-repo.git
cd votre-repo
```

### 3️⃣ Installer les dépendances
```bash
composer install
npm install
```

### 4️⃣ Configuration de l'environnement
```bash
cp .env.example .env
php artisan key:generate
```
Modifiez `.env` avec vos informations MySQL.

### 5️⃣ Configuration de la base de données
```bash
php artisan migrate --seed
```

### 6️⃣ Lancer le serveur
```bash
php artisan serve
npm run dev
```
L’application sera accessible sur `http://127.0.0.1:8000`.

---

## 🔒 Gestion des rôles et permissions
L’application utilise **Spatie Laravel Permission** pour gérer les rôles et permissions.

- **Ajouter un rôle :**
```php
use Spatie\Permission\Models\Role;
Role::create(['name' => 'admin']);
```

- **Attribuer une permission :**
```php
use Spatie\Permission\Models\Permission;
Permission::create(['name' => 'manage-salles']);
```

---

## 🧪 Tests et CI/CD
Les tests automatisés sont gérés avec PHPUnit et exécutés via **GitHub Actions**.

- **Lancer les tests unitaires :**
```bash
php artisan test
```

- **Vérifier le code avec Pint :**
```bash
./vendor/bin/pint
```

---

## 📜 API et intégration
L’API expose des endpoints REST sécurisés via Laravel Sanctum.

- **Liste des spectacles programmés** :
  ```http
  GET /api/spectacles
  ```

- **Réserver une salle** :
  ```http
  POST /api/reservations
  ```

---

## 📌 Contributeurs
- **[Nom du développeur 1]** - Backend Laravel
- **[Nom du développeur 2]** - Frontend Next.js
- **[Nom du développeur 3]** - UI/UX

---

## 📜 Licence
Ce projet est sous licence **MIT**.

---

🎭 **Prêt à gérer vos spectacles comme un pro !** 🚀