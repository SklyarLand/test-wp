<?php


namespace App\Gk;


class WpRegisterEntity
{
    const NAME = 'BASE';

    protected const LABELS = [];

    protected const PARAMETERS = [];

    /**
     * @return array
     */
    public static function getParameters(): array
    {
        return array_merge(static::PARAMETERS, ['labels' => static::LABELS]);
    }
}