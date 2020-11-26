# Paravent - Globalis
@LUCA Ion

### Instructions
Pour lancer le script veuillez vous rendre dans le dossier `cd paravent`.
Puis lancez la commande suivante pour lancer les tests : `php Paravent.php`.

Ensuite veuillez renseigner ***la largeur du continent*** (une valeur comprise entre 1 et 100 000 compris) et ***les altitudes du terrain*** séparés par des espaces (valeurs comprises entre 0 et 100 000 comprises).
 
### Énoncé
Pas de répit pour les Prolosaures ! La mer étant à peine redescendue à son niveau normal, une nouvelle prophétie annonce la venue d'un ouragan.
Des vents violents venus de l'ouest emporteront tout ce qui sera exposé, mais ils seront interceptés par le relief montagneux, derrière lequel les
Prolosaures seront à l'abri de la catastrophe imminente.
Votre but est de déterminer la surface totale protégée par les montagnes. 

### Exemple d'entrée/sortie
**Exemple d'entrée**
```bash
10
30 27 17 42 29 12 14 41 42 42
```
**Exemple de sortie**
```bash
6
```
### Entrée
La première ligne est un entier **n**, la largeur du continent.
La ligne suivante contient n entiers **h[1] , …, h[n]** séparés par des espaces donnant les altitudes du terrain, d'ouest en est.
Le vent arrive de la gauche (de l'ouest) et lorsqu'il rencontre une montagne, toutes les terres qui sont plus à droite et de hauteurs inférieures à celle-ci
sont à l'abri.
Chaque altitude correspond à un terrain d'une unité de surface.
 
### Sortie
La sortie est un unique entier qui est la surface d'abri disponible

### Contraintes d'exécution
>**Utilisation mémoire maximum**
2000 kilo-octets

>**Temps d'exécution maximum**
500 millisecondes