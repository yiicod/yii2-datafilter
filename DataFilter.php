<?php

namespace yiicod\datafilter;

use yii\base\Object;

/**
 * Class DataFilter
 *
 * @package yiicod\datafilter
 */
class DataFilter extends Object
{
    /**
     * Filter data
     *
     * @param DataFilterAbstract $dataFilter
     *
     * @return mixed
     */
    public static function filter(DataFilterAbstract $dataFilter)
    {
        $handlers = get_class($dataFilter)::handlers($dataFilter);

        $data = $dataFilter;
        foreach ($handlers as $class) {
            /** @var DataHandlerInterface $handler */
            $handler = new $class();
            $data = $handler->handle($data);
        }

        return $data->value;
    }
}
