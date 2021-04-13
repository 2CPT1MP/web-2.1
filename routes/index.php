<?php
if (!class_exists('RootRouter')):

class RootRouter {
    protected $routers = [];
    protected $controllers = [];

    public function addRouter($baseUrl, $router) {
        $parsedBaseUrl = parseRoute($baseUrl)[0];
        $this->routers[$parsedBaseUrl] = $router;
    }

    public function addController($postfixUrl, $controller) {
        $parsedPostfixUrl = parseRoute($postfixUrl)[0];
        $this->controllers[$parsedPostfixUrl] = $controller;
    }

    public function processRequest($request) {
        $basePath = $request->getPath()[0];

        if (count($request->getPath()) === 1) {
            foreach ($this->controllers as $key => $value)
                if ($key === $basePath) {
                    $value->processRequest($request);
                    return "CONTROLLER FOUND";
                }
            var_dump($this->controllers);
            return "CONTROLLER NOT FOUND";
        }

        foreach ($this->routers as $key => $value) {
            if ($key === $basePath) {
                $shiftedPath = $request->getPath();
                array_shift($shiftedPath);
                $value->processRequest($request);
                return "ROUTER";
            }
        }
    }
}
endif;