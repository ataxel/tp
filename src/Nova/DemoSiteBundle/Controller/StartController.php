<?php

namespace Nova\DemoSiteBundle\Controller;

use eZ\Publish\API\Repository\Values\Content\Query;
use Symfony\Component\HttpFoundation\Response;
use eZ\Bundle\EzPublishCoreBundle\Controller;

class StartController extends Controller
{
    public function indexAction($locationId)
    {

        $this->getRepository()->getLocationService()->loadLocation($locationId);
        return $this->render('NovaDemoSiteBundle:NovaFront:index.html.twig');
    }

    public function rubricDisplayAction($locationId, $viewType, $layout = false, array $params = array())
    {


        $response = $this->get('ez_content')->viewLocation($locationId, $viewType, $layout, $params);

        return $response;

    }

    /**
     * Renders sub-items of the current location
     *
     * TODO: add content type filtering, and possibly more
     * TODO: add template to be used for rendering
     *
     * @param int $locationId
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function subItemsAction($locationId)  {


            $location = $this->locationService->loadLocation( $locationId );
            $childLocationList = $this->loccationService->loadLocationChildren( $location );

            return $this->render( 'NovaDemoSiteBundle:parts:sub_items.html.twig', array("contentList"=>$childLocationList));

    }

}
