<?php
if (!class_exists('VehicleController')):

    require('../views/vehicle.php');

    class VehicleController {

        public function showVehicle($model) {
            return VehicleView::render($model);
        }

        public function processRequest($request) {
            if ($request->getMethod() === 'POST') {
                $reqBody = $request->getBody();
                return $this->showVehicle($reqBody["model"]);
            }
        }
    }
endif;