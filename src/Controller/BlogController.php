<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */

    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'owner' => 'Thomas',
        ]);
    }

    /**
     * @Route("/blog/list/{page}", requirements={"page"="\d+"}, name="blog_list")
     */
    public function list($page)
    {
        return $this->render('blog/list.html.twig',
            ['page' => $page]);
    }

    /**
     * @Route("/blog/show/{slug}",
     * requirements={"slug"="[a-z0-9-]+"},
     * defaults={"slug"="Article sans Titre"},
     * name="blog_show")
     */
     public function show($slug)
     {
        return $this->render('blog/show.html.twig', [
        'slug'=>$slug = ucwords(str_replace
        ('-', ' ', $slug))
        ]);
     }
    /**
     * @Route("/blog/error/{slug}",
     * requirements={"slug"="[A-Z]+"},
     * defaults={"slug"="UPPER-CASE-NOT-ALLOWED"},
     * name="error")
     */
    public function error($slug)
    {
        return $this->render('blog/error_404.html.twig', ['slug' => $slug]);
    }
}