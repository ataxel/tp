<?php

namespace Nova\DemoSiteBundle\Controller;

use eZ\Publish\API\Repository\Values\Content\Query;
use Symfony\Component\HttpFoundation\Response;
use eZ\Bundle\EzPublishCoreBundle\Controller;
use eZ\Publish\API\Repository\Values\Content\Query\SortClause;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use eZ\Publish\API\Repository\LocationService;
use eZ\Publish\API\Repository\Repository;


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
     *
     */
    public function subItemsAction($locationId)  {

            $query = new Query();
            $query->criterion = new Criterion\LogicalAnd(
                array(
                    new Criterion\ParentLocationId( $locationId ),
                    new Criterion\ContentTypeIdentifier( 'nv_pkg_version' )
                )
            );
            $result = $this->getRepository()->getSearchService()->findContent($query);
            $content = array();
            foreach($result->searchHits as $hit)
            {
                $content[] = $hit->valueObject;
            }


            return $this->render( 'NovaDemoSiteBundle:full:onePackage.html.twig', array("content"=>$content));

    }

    public function rubricContentListAction ($currentLocationId) {

        /*$currentLocation = $this->locationService->loadLocation( $currentLocationId );
        $childLocationList = $this->locationService->loadLocationChildren( $currentLocation );*/
        $searchService = $this->getRepository()->getSearchService();
        $query = new Query();
        $query->criterion = new Criterion\LogicalAnd(

            array(
                new Criterion\ParentLocationId($currentLocationId),
                new Criterion\ContentTypeIdentifier('nv_pkg_version')
            )
        );

        $result = $searchService->findContent($query);
        $content=array();
        foreach ($result->searchHits as $hit){

            $content[] = $hit->valueObject;
        }

        return $this->render('NovaDemoSiteBundle:line:line.html.twig', array("content"=>$content));

    }

}
