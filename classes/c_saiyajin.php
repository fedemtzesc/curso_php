<?php

    class Saiyajin{
        #private String $nombre;
        #private int $nivel_pelea;

        public function __construct(private String $nombre, private int $nivel){
            # Lo que hicimos aqui fue una promocion de atributos, lo que significa
            # que los parametros formales en automatico se convierten en atributos
            # de la clase, con los modificadores y tipos que les definamos. Algo 
            # parecido a lo que hace Python al declarar un constructor
            #$this->nombre = $nombre;
            #$this->nivel_pelea=$nivel;
        }
        
        public function Saludar(){
            return "<br>Hola soy ".$this->nombre;
        }

        public function NivelDePelea(){
            return "<br>".$this->nombre." tiene una nivel de pelea de ".$this->nivel;
        }
    }

