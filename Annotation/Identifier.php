<?php

/*
 * This file is part of the DunglasApiBundle package.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Dunglas\ApiBundle\Annotation;

/**
 * Identifier annotation.
 *
 * @author Mikaël Labrut <labrut@gmail.com>
 *
 * @Annotation
 * @Target({"PROPERTY"})
 */
class Identifier
{
    public $value;
}
