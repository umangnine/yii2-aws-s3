<?php

namespace umn\yii2\aws\s3\interfaces;

use umn\yii2\aws\s3\interfaces\commands\Command;
use umn\yii2\aws\s3\interfaces\handlers\Handler;

/**
 * Interface HandlerResolver
 *
 * @package umn\yii2\aws\s3\interfaces
 */
interface HandlerResolver
{
    /**
     * @param \umn\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return \umn\yii2\aws\s3\interfaces\handlers\Handler
     */
    public function resolve(Command $command): Handler;

    /**
     * @param string $commandClass
     * @param mixed  $handler
     */
    public function bindHandler(string $commandClass, $handler);
}
