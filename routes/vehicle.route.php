<?php if (!class_exists('VehicleRouter')):
require('../controllers/vehicle.controller.php');

class VehicleRouter extends RootRouter {
    public function __construct() {
        $this->addController('/', new VehicleController());
    }
}

endif;