<?php

/**
 * This file is part of phpfn package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Fun\Symbol\Tests\Behaviour;

use Fun\Symbol\Symbol;
use PHPUnit\Framework\ExpectationFailedException;

class GlobalSymbolTestCase extends BehaviourTestCase
{
    /**
     * @return void
     * @throws ExpectationFailedException
     */
    public function testIsUniqueWithDifferentNames(): void
    {
        $a = Symbol::for('global-1');
        $b = Symbol::for('global-2');

        $this->assertNotSame($a, $b);
    }

    /**
     * @return void
     * @throws ExpectationFailedException
     */
    public function testIsNonUniqueWithSameNames(): void
    {
        $a = Symbol::for('global-3');
        $b = Symbol::for('global-3');

        $this->assertSame($a, $b);
    }
}
