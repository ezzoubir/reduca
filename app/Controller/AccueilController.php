<?php
class AccueilController extends AppController{

	public $name='Accueil';
	var $uses = array('Produit','Marchand','Ville','Categorie');
	
	public function index(){
		
		//select all 
		$products = $this->Produit->findAllByPhare(1);
		$annonceurs = $this->Marchand->findAllByPhare(1);
		$villes = $this->Ville->find('list');
		$categories = $this->Categorie->find('list');
		
		// return to view
		$this->set('listannonceurs',$annonceurs);
		$this->set('listproduits',$products);
		$this->set('listvilles',$villes);
		$this->set('listcategories',$categories);
	}
}
