<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Guess extends Application 
 { 
     
    function index() 
    { 
        $this->data['pagebody'] = 'justone'; 
        $this->data = array_merge($this->data, $this->quotes->get(4)); 
        $this->render(); 
     } 
 } 
