<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleLikeController extends AbstractController
{
    /**
     *@param $id
     *@param $type
     *@Route("/articles/{id}/like/{type}")
     */
    public function like($id , $type)
    {
        if ($type == 'like'){
            $likes = rand(121, 200);
        } else {
            $likes = rand(0, 119);
        }

        return $this->json((['likes' => $likes]));
    }
}