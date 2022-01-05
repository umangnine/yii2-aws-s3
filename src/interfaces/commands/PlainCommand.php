<?php

namespace umn\yii2\aws\s3\interfaces\commands;

/**
 * Interface PlainCommand
 *
 * @package umn\yii2\aws\s3\interfaces\commands
 */
interface PlainCommand extends Command
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return array
     */
    public function toArgs(): array;
}
