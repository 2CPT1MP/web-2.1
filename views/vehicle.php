<?php
if (!class_exists('VehicleView')):

class VehicleView {
    public static function render($model){
        return <<<VEHICLE
            <h1>$model</h1>
        VEHICLE;
    }
}
endif;