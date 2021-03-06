<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class DataController extends AbstractController
{

  /**
   * @Route("/data", name="data")
   */
  public function dataAction()
  {
      return new JsonResponse([
          [
              'id' => 1,
              'author' => 'Chris Colborne',
              'avatarUrl' => 'http://1.gravatar.com/avatar/13dbc56733c2cc66fbc698cdb07fec12',
              'title' => 'Bitter Predation',
              'description' => 'Thirteen thin, round towers …',
          ],
          [
              'id' => 2,
              'author' => 'Louanne Perez',
              'avatarUrl' => 'https://randomuser.me/api/portraits/thumb/women/18.jpg',
              'title' => 'Strangers of the Ambitious',
              'description' => "A huge gate with thick metal doors …",
          ],
          [
              'id' => 3,
              'author' => 'Theodorus Dietvorst',
              'avatarUrl' => 'https://randomuser.me/api/portraits/thumb/men/49.jpg',
              'title' => 'Outsiders of the Mysterious',
              'description' => "Plain fields of a type of grass cover …",
          ],
      ]);
  }

  /**
   * @Route("/data/home", name="data-home")
   */
   public function homeData(){
     return new JsonResponse([
       [
         'id' => 1,
         'title' => 'Gana tiempo, asesora mejor',
         'intro' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '
       ]
     ]);
   }

}
