<?php
class MarchandsController extends AppController{
public $name='Marchands';
	
	public function index(){
		$this->Marchand->find(array(
		    	//tableau de conditions
		    	'conditions' => array('Marchand.active' => 1),
		    	//chaîne de caractère ou tableau définissant order
		    	'order' => array('Marchand.created DESC')
		    ));
		}
}