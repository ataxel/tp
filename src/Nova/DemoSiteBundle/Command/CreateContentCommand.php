<?php
namespace Nova\DemoSiteBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;


class CreateContentCommand extends ContainerAwareCommand {

    /**
     *
     */
    protected function configure( ) {
        $this->setName( 'ezpublish:nova:create_content' )->setDefinition(

            array(
                new InputArgument( 'parentLocationId', InputArgument::REQUIRED, '1' ),
                new InputArgument( 'contentType', InputArgument::REQUIRED, 'tsms_rubric' ),
                new InputArgument( 'title', InputArgument::REQUIRED, 'My Title' ),

            )
        );
    }

    protected function execute( InputInterface $input, OutputInterface $output){

        /** @var $repository \eZ\Publish\API\Repository\Repository */
        $repository = $this->getContainer()->get( 'ezpublish.api.repository' );
        $contentService = $repository->getContentService();
        $locationService = $repository->getLocationService();
        $contentTypeService = $repository->getContentTypeService();

        $repository->setCurrentUser( $repository->getUserService()->loadUser( 14 ) );

        $parentLocationId = $input->getArgument( 'parentLocationId' );
        $contentTypeIdentifier = $input->getArgument( 'contentType' );
        $title = $input->getArgument( 'title' );

        try {
            $contentType = $contentTypeService->loadContentTypeByIdentifier( $contentTypeIdentifier );
            $contentCreateStruct = $contentService->newContentCreateStruct( $contentType, 'eng-GB' );
            $contentCreateStruct->setField( 'title', $title );

            // instantiate a location create struct from the parent location
            $locationCreateStruct = $locationService->newLocationCreateStruct( $parentLocationId );

            // create a draft using the content and location create struct and publish it
            $draft = $contentService->createContent( $contentCreateStruct, array( $locationCreateStruct ) );

            $content = $contentService->publishVersion( $draft->versionInfo );
            // print out the title
            print_r( $content );
        }

            // Content type or location not found
        catch ( \eZ\Publish\API\Repository\Exceptions\NotFoundException $e ) {
            $output->writeln( $e->getMessage() );
        }
            // Invalid field value
        catch ( \eZ\Publish\API\Repository\Exceptions\ContentFieldValidationException $e ) {
            $output->writeln( $e->getMessage() );
        }
            // Required field missing or empty
        catch ( \eZ\Publish\API\Repository\Exceptions\ContentValidationException $e ) {
            $output->writeln( $e->getMessage() );
        }


    }
}