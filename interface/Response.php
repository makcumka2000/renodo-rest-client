<?php

/**
 * Created by PhpStorm.
 * User: makcu
 * Date: 24.04.2017
 * Time: 20:10
 */
interface Response
{
    /**
     * Возвращает массив информации из ответа
     * @return array
     */
    public function getData();

    /**
     * Возвращает заголовок ответа в виде массива данных
     * @return array
     */
    public function getHeaders();

    /**
     * Информация о страницах из ответа.
     * Инкапсулирова в отдельном обьекте
     * Может возвращать null в случае отсутствия паджинации(например при просмотре данных о конкретной записи)
     * @return Pagination|null
     */
    public function getPagination();

    /**
     * Успешный запрос или нет
     * @return boolean
     */
    public function isSuccess();

    /**
     * Возвращает тело ответа в чистом виде, в виде текста
     * @return string
     */
    public function getRawData();

    /**
     * Возвращает заголовки в чистом виде, в виде текста
     * @return string
     */
    public function getRawHeaders();

    /**
     * Возвращает код ответа, например: 404 или 200
     * @return integer
     */
    public function getCode();

    /**
     * Возвращает описание ошибки, в случае неудачного вызова
     * @return string
     */
    public function getErrorMessage();
}