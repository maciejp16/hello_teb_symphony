<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
    public function list()
    {
        $list = [
            ["slug" => "tttt", "desc" => "hurr" ],
            ["slug" => "rrrr", "desc" => "durr" ],
            ["slug" => "wwww", "desc" => "murr" ]
        ];

        return $this->render('blog/list.html.twig', [
            'list' => $list,
        ]);
    }

    public function show($slug)
    {
        return $this->render('blog/show.html.twig', [
            'slug' => $slug,
        ]);
    }
}
?>