<?php
namespace web;

interface Urlable {
    public function parseRequest($manage, $request);
    public function createUrl($manager, $route, $params);
}
