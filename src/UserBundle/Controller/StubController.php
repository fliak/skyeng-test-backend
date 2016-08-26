<?php
/**
 * Created by PhpStorm.
 * User: fliak
 * Date: 22.8.16
 * Time: 14.27
 */

namespace UserBundle\Controller;


use Symfony\Component\HttpFoundation\Response;

class StubController
{

    public function stubAction()    {
        return new Response('OK', 200);
    }

}