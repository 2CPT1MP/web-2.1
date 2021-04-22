<?php if (!class_exists('PhotosRouter')):
require('../controllers/photos.controller.php');

class PhotosRouter extends RootRouter {
    public function __construct() {
        $this->addController('/', new PhotosController());
    }
}

endif;