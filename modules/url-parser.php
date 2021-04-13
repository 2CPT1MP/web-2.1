<?php

if (!function_exists('parseRoute')):
function parseRoute($routeUriStr) {
    $splitPath = explode('/', $routeUriStr);
    array_shift($splitPath);
    return $splitPath;
}
endif;

if (!function_exists('parseQueryParams')):
function parseQueryParams($queryParamsStr): array {
    $parsedListOfParams = [];
    $listOfParams = explode('&', $queryParamsStr);

    foreach ($listOfParams as $value) {
        $pair = explode('=', $value);

        $parsedListOfParams[$pair[0]] = $pair[1];
    }
    return $parsedListOfParams;
}
endif;

if (!function_exists('parseRequestUrl')):
function parseRequestUrl($requestUrl): array {
    $paramPos = strpos($requestUrl, '?');

    if (!$paramPos)
        return [parseRoute($requestUrl), null];

    $pathStr = substr($requestUrl, 0, $paramPos);
    $paramsStr = substr($requestUrl, $paramPos+1);

    $route = parseRoute($pathStr);
    $params = parseQueryParams($paramsStr);

    return [$route, $params];
}
endif;
