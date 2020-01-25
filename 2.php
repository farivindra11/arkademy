<?php 

function usernameValidity($username){
    if (preg_match("/^[a-z._]{8,12}$/", $username)){
        echo "true";
    }
    else{
        echo "false";
    }
}

// username valid menampilkan true
usernameValidity("fariv_indra.");
// username tidak valid menampilkan false
usernameValidity("Fariv");

function passwordValidity($password){
    if (preg_match("/^(?=.*[A-Za-z0-9])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{9}$/", $password)){
        echo "true";
    }else{
        echo "false";
    }

}

// password valid menampilkan true
passwordValidity("Fariv1@rt");
// password tidak valid menampilkan false
passwordValidity("farivindra");


?>