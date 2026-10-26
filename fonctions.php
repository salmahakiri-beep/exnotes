<?php

function affichertableau(array $notes):void
{
    foreach ($notes as $nom => $valeur ) 
        { echo "<p> $nom : $valeur </p><br>";
        }
}
function moyenne(array $notes):float
{
    return array_sum($notes) / count ($notes);
}

function admis (array $notes):array
{
    return array_filter($notes , fn($n) => $n>=10);
}

function notestriées(array $notes):array
{
    sort($notes);
    return $notes;
}
function notesbonus(array $notes):array
{
    return array_map(fn($n) => $n+1 , $notes);
}