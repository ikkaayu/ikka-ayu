<?php

require_once("lat4_5a.php");

$s = new sarjana;
$s->getProgream('Mahasiswa') ."<br>";
$s->tugasAkhir();

$m = new magister;
$m->getProgram('Mahasiswa') ."<br>";
$m->tugasAkhir();