<?php
namespace Force\DBDoc\Controller;

use Symfony\Component\HttpFoundation\Response;

class DocumentorController
{
    private $content;
    
    public function allAction()
    {
        return new Response('Hello world');
    }
    
    public function setContent(string $content) {
        $this->content = $content;
        return $this;
    }
}

