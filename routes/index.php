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

        if (count($request->getPath()) === 1)
            foreach ($this->controllers as $key => $value)
                if ($key === $basePath) {
                    return $value->processRequest($request);
                }

        foreach ($this->routers as $key => $value) {
            if ($key === $basePath) {
                $request->shift();
                $res = $value->processRequest($request);
                return $res;
            }
        }
    }
}
endif;