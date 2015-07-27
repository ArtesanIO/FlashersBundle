<?php

namespace ArtesanIO\FlashersBundle\Utils;

class FlashersExtension extends \Twig_Extension
{

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('flashers',
                    array($this, 'flashers'),
                    array('is_safe' => array('html'),
                    'needs_environment' => true
                )
            ),
        );
    }

    public function flashers(\Twig_Environment $twig = null)
    {
        return $twig->render('FlashersBundle::Flashers/flashers.html.twig');
    }

    public function getName()
    {
        return 'artesanio.flashers';
    }

}



?>
