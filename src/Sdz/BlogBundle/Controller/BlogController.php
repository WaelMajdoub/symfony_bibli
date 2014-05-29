<?php

// FICHIER src/Sdz/BlogBundle/Controller/BlogController.php

/// lignes par défaut
// namespace Sdz\BlogBundle\Controller;
// use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/*
class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SdzBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
*/
/*
Si on a une erreur Class Controller not found, c'est qu'on a oublié la ligne namespace Sdz\BlogBundle\Controller;
*/
namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Sdz\BlogBundle\Entity\Article;
use Sdz\BlogBundle\Form\ArticleType;

class BlogController extends Controller
{
    

	// route correspondante : sdz_blog_index
	// cette action doit afficher la liste des articles
	// Exemples d'URLs : 
	// http://meteo.sitelocal/app_dev.php/blog/voir
	// http://meteo.sitelocal/app_dev.php/blog/article
    public function indexAction($name)
    {
        
    	$listeArticles = array(); 
    	$listeArticles = $this->getDoctrine()->getManager()->getRepository('SdzBlogBundle:Article')->FindAll();
    	// affichage : Pour rappel cet affichage peut se faire directement dans le template twig.
		$cpt=0;
		foreach($listeArticles as $article){
		    echo $article->getContenu();
		    $cpt++;
		}
		if($cpt==0) return new Response("(SdzBlog.index) Aucun article dans la base");


    	// Pour memoire : Action par defaut :
        // return $this->render('SdzBlogBundle:Default:index.html.twig', array('name' => $name));
    }


    // route correspondante : sdz_blog_accueil
    public function accueilAction($name = 'Aucun nom de blog défini')
    {
        return $this->render('SdzBlogBundle:Default:accueil.html.twig', array('name' => $name));
    }

    // route correspondante : sdz_blog_ajouter
    public function ajouterAction()
    {
        
        $article  = new Article();
        $form = $this->createForm(new ArticleType, $article);

        $request = $this->get('request');
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($article);
                $em->flush();
                return $this->redirect($this->generateUrl('sdzblog_accueil'));
            }
        }

        /*
        // FORMULAIRE MANUEL : On utilise finalement la methode ci dessus
    	$article = new Article();

    	$formBuilder = $this->createFormBuilder($article);

    	// on ajoute les champs de l'entite que l'on veut à notre formulaire
    	$formBuilder->add('date','date')
            ->add('titre','text')
            ->add('contenu','textarea')
            ->add('auteur','text');
            // ->add('publication','checkbox');
        // Pour l'instant pas de commentaires, catégories, etc ; on les gérera plus tard
//            ->add('' => ''),

        // à partir du formBuilder on génère le formulaire
        $form = $formBuilder->getForm();
*/
        
        // On passe la méthode createView() à la vue de façon à ce qu'elle puisse afficher le formulaire toute seule
        return $this->render('SdzBlogBundle:Blog:ajouter.html.twig', array('form' => $form->createView(),
        	));
        
    }

    // appel : route sdz_blog_voir:
    // affichera la liste de tous les articles, si aucun n'existe un message apparaitra
    public function voirAction(){
    	
    	$listeArticles = array(); 
    	$listeArticles = $this->getDoctrine()->getManager()->getRepository('SdzBlogBundle:Article')->FindAll();
    	// affichage : Pour rappel cet affichage peut se faire directement dans le template twig.
		$cpt=0;
		foreach($listeArticles as $article){
		    echo $article->getContenu();
		    $cpt++;
		}
		if($cpt==0) return new Response("Aucun article dans la base");
    }


    // appel : route sdz_blog_voirarticle:
    // http://meteo.sitelocal/app_dev.php/blog/article/2
    // http://meteo.sitelocal/app_dev.php/blog/article/new ===> mettre ajouter et non new !!
    public function voirarticleAction($id){
    	if($id === null)
    	{

		throw $this->createNotFoundException('Article[idXXX] inexistant. ligne A VIRER'); 
    		// ET NON ceci : return new Response("Identifiant d'article non défini");
    	
    	}
    		else
    	{
    		$article = $this->getDoctrine()->getManager()->getRepository('SdzBlogBundle:Article')->find(array('id' => $id));
    		if($article === null)
    			throw $this->createNotFoundException('Erreur d\'identifiant : Article[id='.$id.'] inexistant.');
    		else
    		return $this->render('SdzBlogBundle:Article:show.html.twig', array('entity' => $article));
    	}


    }

}

