<?php

namespace Nova\DemoSiteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use eZ\Bundle\EzPublishCoreBundle\Controller;

class StartController extends Controller
{
    public function indexAction($locationId) {

        $this->getRepository()->getLocationService()->loadLocation($locationId);
        return $this->render('NovaDemoSiteBundle:NovaFront:index.html.twig');
    }

    public function rubricDisplayAction ($locationId, $viewType, $layout =false, array $params=array()) {


        $response = $this->get('ez_content')->viewLocation($locationId, $viewType, $layout, $params);

        return $response;

    }

}
