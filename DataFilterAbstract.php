<?php

namespace yiicod\datafilter;

use yii\base\BaseObject;

/**
 * Class DataFilterAbstract
 * Base data filter class
 *
 * @author Alexey Orlov
 *
 * @package yiicod\datafilter
 */
abstract class DataFilterAbstract extends BaseObject
{
    /**
     * Filtered value
     *
     * @var mixed
     */
    public $value;

    /**
     * Filter additional params
     *
     * @var array
     */
    public $params = [];

    /**
     * DataFilter constructor.
     *
     * @param mixed $value
     * @param array $params
     * @param array $config
     */
    public function __construct($value, array $params = [], array $config = [])
    {
        parent::__construct($config);

        $this->value = $value;
        $this->params = $params;
    }

    /**
     * Filter handlers
     *
     * @return array
     */
    abstract public static function handlers(): array;
}
