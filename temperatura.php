<?php
$gradosC = $_POST["temperatura"];
$gradosF = 0;
$gradosK = 0;
function celsiusAF($gradosC){
    return ($gradosC * 9/5) + 32;

};
function celsiusAK ($gradosC){
    return($gradosC);
};
?>