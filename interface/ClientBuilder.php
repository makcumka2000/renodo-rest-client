<?php

/**
 * Вспомогательный класс для построения клиента
 * Можно создать клиента вручную:
 * $client = new Client($baseUrl, $version);
 * $client->setToken($token);
 * А можно с помощью этого строителя:
 * $client = (new ClientBuilder())->setBaseUrl($baseUrl)->setVersion($version)->setToken($token)->build();
 * Тут опциально, как удобнее.
 */
interface ClientBuilder
{
    /**
     * @param $baseUrl string
     * @return ClientBuilder
     */
    public function setBaseUrl($baseUrl);

    /**
     * @param $version string
     * @return ClientBuilder
     */
    public function setVersion($version);



    /**
     * @param $token string
     * @return ClientBuilder
     */
    public function setToken($token);

    /**
     * @return Client
     * @throws InvalidArgumentException
     */
    public function build();

}