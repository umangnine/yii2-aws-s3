<?php

namespace umn\yii2\aws\s3\interfaces;

use umn\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface CommandBuilder
 *
 * @package umn\yii2\aws\s3\interfaces
 */
interface CommandBuilder
{
    /**
     * @param string $commandClass
     *
     * @return \umn\yii2\aws\s3\interfaces\commands\Command
     */
    public function build(string $commandClass): Command;
}
