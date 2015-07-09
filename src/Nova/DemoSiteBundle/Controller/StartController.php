<?php

namespace Nova\DemoSiteBundle\Controller;

use eZ\Publish\API\Repository\Values\Content\Query;
use Pagerfanta\Pagerfanta;

use Symfony\Component\HttpFoundation\Request;
use eZ\Bundle\EzPublishCoreBundle\Controller;
use eZ\Publish\API\Repository\Values\Content\Query\SortClause;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion;

use eZ\Publish\Core\Pagination\Pagerfanta\ContentSearchAdapter;


class StartController extends Controller
{
    public function indexAction()
    {

        return $this->redirect($this->generateUrl('accueil'));
    }
    public function accueilAction()
    {



        return $this->render( 'NovaDemoSiteBundle:NovaFront:index.html.twig');
    }

    public function rubricDisplayAction(Request $req,$locationId)
    {

        $query = new Query();
        $query->criterion = new Criterion\LogicalAnd(
            array(
                new Criterion\ParentLocationId( $locationId ),
                new Criterion\ContentTypeIdentifier( 'nv_package' )
            )
        );
        /* $result = $this->getRepository()->getSearchService()->findContent($query);

         $content = array();
         foreach($result->searchHits as $hit)
         {
             $content[] = $hit->valueObject;
         }*/

        $pager = new Pagerfanta(

            new contentSearchAdapter( $query, $this->getRepository()->getSearchService() )
        );
        $pager->setMaxPerPage( 1 );
        $pager->setCurrentPage( $req->get( 'page',1 ));


       // return $this->render( 'NovaDemoSiteBundle:line:rubric.html.twig', array("contentList"=>$content));

        return $this->render( 'NovaDemoSiteBundle:line:rubric.html.twig',
                            array(
                                "totalFolderCount"=>$pager->getNbResults(),
                                "pagerFolder" => $pager,
                                "location" => $this->getRepository()->getLocationService()->loadLocation( $locationId ),
                            ) );

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

            $query2 = new Query();
            $query2->criterion = new Criterion\LogicalAnd(
                array(
                    new Criterion\LocationId( $locationId ),
                    new Criterion\ContentTypeIdentifier( 'nv_package' )
                )
            );
            $result2 = $this->getRepository()->getSearchService()->findContent($query2);
            $contentList = array();
            foreach($result2->searchHits as $hit)
            {
                $contentList[] = $hit->valueObject;
            }




            return $this->render( 'NovaDemoSiteBundle:full:onePackage.html.twig', array(
                                                                                        "content"=>$content,
                                                                                        "contentList"=>$contentList));

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