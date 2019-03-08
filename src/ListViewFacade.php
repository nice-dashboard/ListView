<?php

namespace AvitoDashboard\ListView;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AvitoDashboard\ListView\Skeleton\SkeletonClass
 */
class ListViewFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'list-view';
    }
}
