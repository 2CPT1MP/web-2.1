<?php if (!class_exists('VehicleView')):

class VehicleView {
    public static function render($model): string {
        return <<<VEHICLE
            <h1>$model</h1>
        VEHICLE;
    }
}

endif;