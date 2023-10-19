<?php
class Tri {

    static function TriInsertion($list)
    {
        for ($i = 1; $i < count($list); $i++) {
            $valueInsert = $list[$i];
            $j = $i - 1;
            while ($j >= 0 && $list[$j] > $valueInsert) {
                $list[$j + 1] = $list[$j];
                $j--;
            }
            $list[$j + 1] = $valueInsert;
        }
        return $list;
    }
    static function QuickSort($tab) { // ce tri est récursif
        $size = count($tab);
        if ($size <= 1) { // condition d'arrêt de la récursivité
            return $tab;
        }

        $tmp = $tab[0]; //                  on stock la valeur de tableau[0] dans une variable temporaire (tmp)
        $left = array(); //                 on crée un tableau vide (left)
        $right = array(); //                on crée un tableau vide (right)
        for ($i = 1; $i < $size; $i++) { // pour i allant de 1 à la taille du tableau-1 (le dernier élément)
            if ($tab[$i] < $tmp) { //            si la valeur de tableau[i] est inférieure à la valeur de tmp
                $left[] = $tab[$i]; //               on ajoute la valeur de tableau[i] à la fin du tableau left
            } else { //                          sinon
                $right[] = $tab[$i]; //              on ajoute la valeur de tableau[i] à la fin du tableau right
            }
        }
        // on obtient donc un tableau left avec toutes les valeurs inférieures à la valeur de tmp et un tableau right avec toutes les valeurs supérieures à la valeur de tmp
        return array_merge(self::QuickSort($left), array($tmp), self::QuickSort($right)); // on retourne le tableau left, la valeur de tmp et le tableau right
    }

}
