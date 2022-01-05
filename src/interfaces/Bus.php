<?php

namespace umn\yii2\aws\s3\interfaces;

use umn\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface Bus
 *
 * @package umn\yii2\aws\s3\interfaces
 */
interface Bus
{
    /**
     * @param \umn\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);
}
