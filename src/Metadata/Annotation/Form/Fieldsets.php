<?php

/*
 * This file is part of the Indigo Fieldset package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Fieldset\Metadata\Annotation\Form;

/**
 * @Annotation
 * @Target({"CLASS"})
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
final class Fieldsets
{
    /**
     * @var array
     */
    public $value = [];
}
