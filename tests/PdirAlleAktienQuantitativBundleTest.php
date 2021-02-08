<?php

declare(strict_types=1);

/*
 * AlleAktien Quantitativ bundle for Contao Open Source CMS
 *
 * Copyright (c) 2021 pdir / digital agentur // pdir GmbH
 *
 * @package    contao-alleaktien-quantitativ-bundle
 * @link       https://pdir.de/docs/de/contao/extensions/alleaktien-quantitativ/
 * @license    @license LGPL-3.0-or-later
 * @author     Mathias Arzberger <develop@pdir.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pdir\AlleAktienQuantitativBundle\Tests;

use Pdir\AlleAktienQuantitativBundle\PdirAlleAktienQuantitativBundle;
use PHPUnit\Framework\TestCase;

class PdirAlleAktienQuantitativBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new PdirAlleAktienQuantitativBundle();

        $this->assertInstanceOf('Pdir\AlleAktienQuantitativBundle\PdirAlleAktienQuantitativBundle', $bundle);
    }
}
