<?php
// src/Controller/BlogController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Entity\Category;
use Symfony\Flex\Response;

class BlogController extends AbstractController
{
    /**
     * Show all row from article's entity
     *
     * @Route("/", name="app_index")
     * @return \Symfony\Component\HttpFoundation\Response|Response
     */
    public function index()
    {
        $articles = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();
        if (!$articles) {
            throw $this->createNotFoundException(
                'no article found in article\'s table.');
        }
        return $this->render('blog/index.html.twig', ['articles' => $articles]);
    }
    /**
     * @Route("/blog/show/", name="blog_list")
     */
    public function Default()
    {
        return $this->render('blog/list.html.twig');
    }
    /**
     * @Route("/blog/show/{slug}",
     * requirements={"slug"="[a-z0-9-]+"},
     * defaults={"slug"="Article sans Titre"},
     * name="blog_show")
     */
    public function show($slug)
    {
        // redirection vers la page blog show
        return $this->render('blog/show.html.twig', ['slug' => $slug = ucwords(str_replace('-', ' ', $slug))]);
    }
    /**
     * @Route("/blog/error/{slug}",
     * requirements={"slug"="[A-Z]+"},
     * defaults={"slug"="UPPER-CASE-NOT-ALLOWED"},
     * name="error")
     */
    public function error($slug)
    {
        // redirection vers la page erreur, correspondant à l'insertion de majuscule dans l'URL
        return $this->render('blog/error_404.html.twig', ['slug' => $slug]);
    }
    /**
     * Show all row from article's entity
     *
     * @Route("/blog/category/{name}", name="show_category")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showByCategory(Category $category)
    {
        $article = $category->getArticles();
        return $this->render('blog/category.html.twig', ['category' => $category, 'articles' => $article]);
    }
}