<?php
// src/Bibli/LivresBundle/DataFixtures/ORM/Pays.php

namespace Bibli\LivresBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Bibli\LivresBundle\Entity\Pays;

class LoadPaysData implements FixtureInterface
{
    // Ds l'arg de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

        // liste des noms de Pays à ajouter
        $data_pays = array(
        array('France','français','Paris','Europe'),
        array('Allemagne','allemand','Berlin','Europe'),
        array('Hongrie','hongrois','Budapest','Europe'),
        );

        foreach ($data_pays as $i => $pays) {
    
            // on crée le Pays
            $liste_Pays[$i] = new Pays();
            $liste_Pays[$i]->setPays($pays[0]);
            $liste_Pays[$i]->setNationalite($pays[1]);
            $liste_Pays[$i]->setCapitale($pays[2]);
            $liste_Pays[$i]->setContinent($pays[3]);

            // On la persiste
            $manager->persist($liste_Pays[$i]);
        }

        // On déclenche l'enregistrement
            $manager->flush();
    }
}
