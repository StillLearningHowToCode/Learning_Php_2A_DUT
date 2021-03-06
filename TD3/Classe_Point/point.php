<!-- Écrire le code PHP de la classe Point. -->

<?php class Point
{
    var $x;
    var $y;
    var $color;

    // Définir un constructeur
    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    // Exemple d'utilisation d'un constructeur
    var $p1 = new Point(2, 4, "jaune");

    // Définir une méthode Afficher()
    function Afficher()
    {
        return ("[" . $this->x . "," . $this->y . "] : " . $this->color);
    }

    // Conflit si distance euclidienne entre ces points < 2.0 && même couleur

    function distance_a($p2)
    {
        $distance = 0;

        $distance = sqrt(pow(($this->x)-($p2->x), 2)-pow(($this->y)-($p2->y),2));

        return $distance;
    }

    function conflit_avec($p2) {
        if (($this->distance > 2) && ($this->color == $p2->color)) {
            conflit_avec() = false;
        } else {
            conflit_avec() = true;
        }
    }

    abstract class Figure {
        function Aire($base, $hauteur);
    }

    abstract class Polygone() extends Figure {
        function NombreDeCotes();
    }

    private class Triangle extends Polygone {
        function NombreDeCotes() {
            return 3;
        }

        function Aire($base, $hauteur) {
            return 0.5 * $base * $hauteur;
        }
    }

    private class Rectangle extends Polygone {
        function NombreDeCotes() {
            return 4;
        }

        function Aire($base, $hauteur) {
            return $base * $hauteur;
        }
    }

    private class Cercle {
        function Aire($rayon) {
            $pi = 3.14;
            return $pi * pow($rayon);
        }
    }
}
