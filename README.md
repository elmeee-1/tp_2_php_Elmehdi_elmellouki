# TP 02 - PHP

Nom fictif : Dupont  
Prénom fictif : Ali  
Groupe : G1

## Titre
TP 02 PHP — Programmation Web 2 — 2026/2027

## Liste des exercices
1. Exercice 1 : affichage HTML/PHP
2. Exercice 2 : variables et conventions de nommage
3. Exercice 3 : constantes et calculs
4. Exercice 4 : types et conversions
5. Exercice 5 : conditions
6. Exercice 6 : switch et date
7. Exercice 7 : boucles et pyramid
8. Exercice 8 : contrôle des itérations
9. Exercice 9 : tableaux associatifs
10. Exercice 10 : formulaires GET/POST

## Points importants

### Variables et casse
PHP est sensible à la casse. Donc `$note` et `$Note` sont deux variables distinctes. Le nom de variable doit commencer par un `$`, puis un caractère alphabétique ou `_`, et ne peut pas commencer par un chiffre.

Noms valides :
- `$a`
- `$_a`
- `$a_a`
- `$AAA`
- `$a1`

Noms invalides :
- `$a!` (caractère interdit `!`)
- `$1a` (commence par un chiffre)

### Différence entre `echo` et `var_dump()` pour `false`
`echo false` affiche une chaîne vide, car `false` est interprété comme vide. En revanche, `var_dump(false)` affiche explicitement `bool(false)`, ce qui rend le type et la valeur visibles.

### Formulaires GET et POST
Dans un formulaire GET, les valeurs envoyées apparaissent dans l'URL sous forme de query string. Dans un formulaire POST, les données sont envoyées dans le corps de la requête, donc elles n'apparaissent pas dans l'URL.

## Lancement
Pour tester le projet localement :

```bash
php -S localhost:8000
```

Puis ouvrir :

```text
http://localhost:8000/index.php
```
