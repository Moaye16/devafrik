<?php

class DashboardsController extends Controller
{

    function admin_index(){

            $d['totalPartenaires'] = $this->request('Dashboards', 'nbPartenaires');

            $d['totalMembers'] = $this->request('Dashboards', 'nbMembres');

            //$d['totalVisiteur'] = $this->request('Dashboards', 'compteurVisite');


            if(empty($d)){
    
                $this->e404('Page introuvable');
    
            }

            $this->set($d);
            
    }


    //Affiche le logo, l'icone et la sigle
    function contact(){

        $this->loadModel('Contact');

        return $this->Contact->findFirst(array(
            'conditions' => array('online ' => 1)
        ));
    }


    //Affiche le nombre de partenaires
    function nbPartenaires(){

        $this->loadModel('Partenaire');

        $condPartenaires = array('online !' => -1);

        return $this->Partenaire->findCount($condPartenaires);
    }


    //Affiche le nombre de membre
    function nbMembres(){

        $this->loadModel('Member');

        $condMembers = array('active !' => -1);

        return $this->Member->findCount($condMembers);
    }
    
    //Affiche le compteur de visite
    function compteurVisite(){

        $this->paramCompteur();

        return $paramCompteur()->nbVisiteur();

    }

    //Affiche le compteur de visite
    function updateCompteur(){

        $this->paramCompteur();

        return $compteur->mise_ajour();
        
    }

    //Affiche le compteur de visite
    function paramCompteur(){

        $chemin = BASE_URL.'/img/text/';

        $compteur = new Compteur();

        $compteur->Compteur($chemin);

        return $compteur->mise_ajour();
        
    }

}