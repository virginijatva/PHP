<?php

interface Interfaceas
{ //jis abstraktus ir public, nurodo, kokius metodus turi naudoti ji implementuojanti klase

    const LABAS = 'Labas labas';

    function someoneSaysSomething(string $say): void;
}
