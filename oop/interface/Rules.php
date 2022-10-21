<?php
 interface Rules{
     public function play();
     public function stop();
     public function delete();
     public function next();
     public function playlist();
 }