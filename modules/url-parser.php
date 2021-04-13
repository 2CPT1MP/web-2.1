<?php

function parseRoute($routeUriStr) {
    $splitPath = explode('/', $routeUriStr);
    array_shift($splitPath);
    return $splitPath;
}

function parseQueryParams($queryParamsStr): array {
    $parsedListOfParams = [];
    $listOfParams = explode('&', $queryParamsStr);

    foreach ($listOfParams as $value) {
        $pair = explode('=', $value);

        $parsedListOfParams[$pair[0]] = $pair[1];
    }
    return $parsedListOfParams;
}

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
