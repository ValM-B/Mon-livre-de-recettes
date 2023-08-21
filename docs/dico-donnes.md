# Dictionnaire des données

## Catégories (table `category`)

Contient la  liste des catégories

| Nom | Type | Spécificités | Description |
| --- | --- | --- | --- |
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | Identifiant de la catégorie |
| name | VARCHAR(64) | NOT NULL | Nom de la catégorie |
| family | VARCHAR(64) | NOT NULL | Famille de la catégorie |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP | La date de création de la catégorie |
| updated_at | TIMESTAMP | NULL | La date de la dernière mise à jour de la catégorie |

## Recettes (table `recipe`)

Contient la liste des recettes

| Nom | Type | Spécificités | Description |
| --- | --- | --- | --- |
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | Identifiant de la recette |
| title | VARCHAR(128) | NOT NULL | Titre de la recette |
| portions | INT | NOT NULL, UNSIGNED | Nombre de parts de la recettes |
| rate | INT | NOT NULL, UNSIGNED | Note de la recette de 0 à 5 |
| ingredients | TEXT | NOT NULL | Liste des ingrédients de la recette |
| instructions | TEXT | NOT NULL | Instructions de la recette |
| picture | VARCHAR(128) | NOT NULL | url de l'image de la recette |
| created_at | TIMESTAMP | NOT NULL, DEFAULT CURRENT_TIMESTAMP | La date de création de la recette |
| updated_at | TIMESTAMP | NULL | La date de la dernière mise à jour de la recette |
| category_id | INT | FK(category), NOT NULL | Identifiant de la catégorie de la recette |

## Utilisateurs (table `user`)

Contient la liste des recettes

| Nom | Type | Spécificités | Description |
| --- | --- | --- | --- |
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | Identifiant de l'utilisateur |
| email | VARCHAR(128) | NOT NULL | Email de l'utilisateur |
| password | VARCHAR(255) | NOT NULL | Mot de passe de l'utilisateur |
| name | VARCHAR(128) | NOT NULL | Nom de l'utilisateur |
| role | VARCHAR(128) | NOT NULL | Rôle de l'utilisateur 'author' ou 'admin' |
| status | TINYINT(1) | NOT NULL, UNSIGNED | Status de l'utilisateur (0: inactif ou 1: actif) |