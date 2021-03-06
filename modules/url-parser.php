<?php if (!class_exists('UrlParser')):

class UrlParser {
    public static function parseRoute($routeUriStr) {
        $splitPath = explode('/', $routeUriStr);
        array_shift($splitPath);
        return $splitPath;
    }

    public static function parseQueryParams($queryParamsStr): array {
        $parsedListOfParams = [];
        $listOfParams = explode('&', $queryParamsStr);

        foreach ($listOfParams as $value) {
            $pair = explode('=', $value);
            $parsedListOfParams[$pair[0]] = $pair[1];
        }
        return $parsedListOfParams;
    }

    public static function parseRequestUrl($requestUrl): array {
        $paramPos = strpos($requestUrl, '?');

        if (!$paramPos)
            return [UrlParser::parseRoute($requestUrl), null];

        $pathStr = substr($requestUrl, 0, $paramPos);
        $paramsStr = substr($requestUrl, $paramPos+1);

        $route = UrlParser::parseRoute($pathStr);
        $params = UrlParser::parseQueryParams($paramsStr);

        return [$route, $params];
    }
}

endif;
