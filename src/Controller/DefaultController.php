<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index()
    {
        return $this->render('default.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
?>
<a href="{{ path('blog_show', { 'slug': "javascript-vs-php" }) }}">
Testing show() method from BlogController with a real article s slug.
</a>
<br>
<a href="{{ path('blog_index') }}">
    Testing index() method from BlogController to view all articles.
</a>
