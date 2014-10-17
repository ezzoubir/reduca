<?php
class ProduitsController extends AppController{
public $name='Produits';
	
	public function index(){
		$this->Produit->find(array(
		    	//tableau de conditions
		    	'conditions' => array('Produit.active' => 1),
		    	//chaîne de caractère ou tableau définissant order
		    	'order' => array('Produit.created DESC')
		    ));
		}
}