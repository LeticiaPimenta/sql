<?php
 	namespace App\Classes;

 	
 	class Catalog 
 	{
 		
 		public function carrega_catalogo($arquivo){
	        try {
	            $csv = array_map('str_getcsv', file($arquivo));
	            $x = 0;
	            foreach ($csv as $key => $value) {
	                if($x > 0){
	                    $produto =  new \App\Product;
	                    $produto->NAME = $value[4];
	                    $produto->PRESENTATION_NAME = $value[4];
	                    $produto->CODE = $value[2];
	                    $produto->VALUE = $value[8];
	                    $produto->save();
	                }
	                $x++;
	            }
	            return true;
	        } catch (Exception $e) {
	            return false;
	        }
	    }
 	}