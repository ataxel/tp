<?php
/**
 * Created by PhpStorm.
 * User: ta.adigo
 * Date: 09/07/2015
 * Time: 17:44
 */
namespace Nova\DemoSiteBundle\Controller;

use eZ\Publish\API\Repository\Values\Content\Query;
use eZ\Bundle\EzPublishCoreBundle\Controller;
use eZ\Publish\API\Repository\Values\Content\Query\SortClause;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion;


class FooterController extends Controller{

    public function displayPagesAction( ) {

        $query = new Query();
        $query->criterion = new Criterion\ContentTypeIdentifier( 'nv_page' );
        $result = $this->getRepository()->getSearchService()->findContent($query);

        $content = array();
        foreach($result->searchHits as $hit)
        {
            $content[] = $hit->valueObject;
        }

        return $this->render( 'NovaDemoSiteBundle:line:page.html.twig', array("contentList"=>$content));

    }



}