<?php

namespace Nova\DemoSiteBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use eZ\Bundle\EzPublishCoreBundle\Controller;

class PartsController extends Controller
{
    /**
     * @param mixed|null $currentLocationId
     * @return Response
     */
    public function topMenuAction( $currentLocationId ) {
        if ( $currentLocationId !== null ) {
            $location = $this->getLocationService()->loadLocation( $currentLocationId );
            if ( isset( $location->path[130] ) )
            {
                $secondLevelLocationId = $location->path[130];
            }
        }

        $response = new Response;

        $menu = $this->getMenu( 'top' );
        $parameters = array( 'menu' => $menu );

        if ( isset( $secondLevelLocationId ) && isset( $menu[$secondLevelLocationId] ) ) {
            $parameters['submenu'] = $menu[$secondLevelLocationId];
        }

        return $this->render( 'NovaDemoSiteBundle:parts:topmenu.html.twig', $parameters, $response );
    }

    /**
     * @param string $identifier
     * @return \Knp\Menu\MenuItem
     */
    private function getMenu( $identifier ) {
        return $this->container->get( "nvdemo.menu.$identifier" );
    }

    /**
     * @return \eZ\Publish\API\Repository\LocationService
     */
    private function getLocationService() {
        return $this->container->get( 'ezpublish.api.service.location' );
    }
}