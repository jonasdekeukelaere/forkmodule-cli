<?php

namespace Forkmodule\Service;

/**
 * Update service
 */
class Update
{
    /**
     * Run method
     *
     * This methods runs an update on the repository
     *
     * @param string $basedir The basedir of the forkmodule installation
     */
    public function run($basedir)
    {
        passthru('cd ' . realpath($basedir) . ' && git pull origin master && git remote update && cd -');
    }
}