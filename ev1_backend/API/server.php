<?php
    //extraemos variables del server que nos ayudaran mas adelante
    $_method = $_SERVER ['REQUEST_METHOD'];
    $_header = false; 

    try {
        if(isset(getallheaders()['Authorization']) && getallheaders()['Authorization'] === 'Bearer ciisaANS'){
            $_header = true; //boolean solo toma valor true si existe una autorizacion y es bearer ciisa
        } else {
            http_response_code(401); //es el codigo de no autorizado
            echo json_encode(['error' => 'No tiene autorizacion']);
        };
    } catch (Exception $e) {
        echo 'error';
    };

    
    