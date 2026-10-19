<?php
$age = 18;
$hasTicket = true;
$isMember = false;
$hasInvitation = true;


$hasTicket = $hasTicket == "true";
$isMember = $isMember == "true";
$hasInvitation = $hasInvitation == "true";

// TODO: Check if the person can enter the event (at least 18 AND has ticket)
$canEnter = $age >= 18 && $hasTicket;

// TODO: Check if the person gets free entry (is member OR has invitation)
$freeEntry = $isMember || $hasInvitation;

// Output the results using var_dump()
var_dump($canEnter);
var_dump($freeEntry);

?>