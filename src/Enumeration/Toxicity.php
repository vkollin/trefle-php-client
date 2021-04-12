<?php declare(strict_types=1);


namespace Trefle\Enumeration;

use MyCLabs\Enum\Enum;

/**
 * @method static Toxicity NONE()
 * @method static Toxicity LOW()
 * @method static Toxicity MEDIUM()
 * @method static Toxicity HIGH()
 */
final class Toxicity extends Enum
{
    public const NONE = 'none';
    public const LOW = 'low';
    public const MEDIUM = 'medium';
    public const HIGH = 'high';
}
