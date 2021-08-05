<?php declare(strict_types=1);
/*
 * This file is part of Aplus Framework CLI Library.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Framework\CLI\Streams;

/**
 * Class Stdin.
 */
class Stdin extends Stream
{
    public static function init() : void
    {
        \stream_filter_register(static::class, static::class);
        \stream_filter_append(\STDIN, static::class);
    }
}
