<?php if (!class_exists('VehicleController')):
require('../views/vehicle.view.php');

class VehicleController {
    public function showVehicle($model): string {
        return VehicleView::render($model);
    }

    public function processRequest($request): string {
        if ($request->getMethod() === 'POST') {
            $reqBody = $request->getBody();
            return $this->showVehicle($reqBody["model"]);
        }
        return "<p>Handler was not found</p>";
    }
}

endif;