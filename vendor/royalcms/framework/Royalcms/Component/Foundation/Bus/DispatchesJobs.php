<?php

namespace Royalcms\Component\Foundation\Bus;

use ArrayAccess;

trait DispatchesJobs
{
    /**
     * Dispatch a job to its appropriate handler.
     *
     * @param  mixed  $job
     * @return mixed
     */
    protected function dispatch($job)
    {
        return royalcms('Royalcms\Component\Contracts\Bus\Dispatcher')->dispatch($job);
    }

    /**
     * Marshal a job and dispatch it to its appropriate handler.
     *
     * @param  mixed  $job
     * @param  array  $array
     * @return mixed
     */
    protected function dispatchFromArray($job, array $array)
    {
        return royalcms('Royalcms\Component\Contracts\Bus\Dispatcher')->dispatchFromArray($job, $array);
    }

    /**
     * Marshal a job and dispatch it to its appropriate handler.
     *
     * @param  mixed  $job
     * @param  \ArrayAccess  $source
     * @param  array  $extras
     * @return mixed
     */
    protected function dispatchFrom($job, ArrayAccess $source, $extras = [])
    {
        return royalcms('Royalcms\Component\Contracts\Bus\Dispatcher')->dispatchFrom($job, $source, $extras);
    }
}
