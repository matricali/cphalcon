<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Test\Cli\Cli\Router;

use CliTester;

class WasMatchedCest
{
    /**
     * Tests Phalcon\Cli\Router :: wasMatched()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function cliRouterWasMatched(CliTester $I)
    {
        $I->wantToTest('Cli\Router - wasMatched()');
        $I->skipTest('Need implementation');
    }
}
