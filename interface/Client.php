<?php

interface Client
{

    /**
     * Делает запрос на удаленный ресурс, принимает как полный url типа: http://renodoapi.m2000.me/v1/url/284ff888abf3b37db115d4674c3eb2c1
     * Так и сокращенный: url/284ff888abf3b37db115d4674c3eb2c1
     * Во втором случае полный URL формируется из предзаданный настроек(version, baseUrl), в первом случае(полный URL) - настройки игнорируются
     * @param string $url
     * возвращает ответ в виде отдельного обьекта Response
     * @return Response
     */
    public function get($url);

    /**
     * Send POST request
     * @param $url string
     * @param array $data
     * @return Response
     */
    public function post($url, array $data);

    /**
     * Send PUT request
     * @param $url string
     * @param array $data
     * @return Response
     */
    public function put($url, array $data);

    /**
     * Send DELETE request
     * @param $url
     * @return Response
     */
    public function delete($url);

    /**
     * Задает новый токен
     * @param $token string
     * @return void
     */
    public function setToken($token);

    /**
     * Конструктор обьекта задает изначальные настройки клиента, такие как:
     * 1. $baseUrl - http://renodoapi.m2000.me
     * 2. $version - v1
     * Client constructor.
     * @param $baseUrl string
     * @param $version string
     */
    public function __construct($baseUrl, $version);



}