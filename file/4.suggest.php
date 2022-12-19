<?php
// Array with names
$a[] = "Ex Dosing 1";
$a[] = "Ex Blower Transfer Material";
$a[] = "Material Dosing Unit (MDU Mixer)";
$a[] = "Blower Transfer Material";

// get the q parameter from URL
$p = $_REQUEST["p"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($p !== "") {
    $p = strtolower($p);
    $len=strlen($p);
    foreach($a as $name) {
        if (stristr($p, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>