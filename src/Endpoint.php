<?php

class Endpoint {

    public static function Routing() {
        include('Tri.php');
        if (isset($_GET['method']) && isset($_GET['tab'])) {
            $method = $_GET['method'];
            $tab = json_decode($_GET['tab'], true);


            switch($method){
                case $method === "TriInsertion" :
                    $sorted_method = Tri::TriInsertion($tab);
                    echo json_encode($sorted_method);
                    break;
                case $method === "QuickSort" :
                    $sorted_method = Tri::QuickSort($tab);
                    echo json_encode($sorted_method);
                    break;
                default:
                    echo json_encode('Aucune methode trouvé');
                    break;
            }
        }
    }
}