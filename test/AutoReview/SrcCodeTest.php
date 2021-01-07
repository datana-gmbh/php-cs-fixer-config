<?php

declare(strict_types=1);

/**
 * Copyright (c) 2021 Datana GmbH
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/datana-gmbh/php-cs-fixer-config
 */

namespace Datana\PhpCsFixer\Config\Test\AutoReview;

use Ergebnis\Test\Util\Helper;
use PHPUnit\Framework;

/**
 * @internal
 *
 * @coversNothing
 */
final class SrcCodeTest extends Framework\TestCase
{
    use Helper;

    /**
     * @test
     */
    public function srcClassesHaveUnitTests(): void
    {
        self::assertClassesHaveTests(
            __DIR__.'/../../src',
            'Datana\\PhpCsFixer\\Config\\',
            'Datana\\PhpCsFixer\\Config\\Test\\Unit\\'
        );
    }
}
