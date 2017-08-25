<?php

namespace yiicod\datafilter;

/**
 * Interface DataHandlerInterface
 *
 * @package yiicod\datafilter
 */
interface DataHandlerInterface
{
    /**
     * Handle data
     *
     * @param DataFilterAbstract $dataFilter
     *
     * @return mixed
     */
    public function handle(DataFilterAbstract $dataFilter): DataFilterAbstract;
}
