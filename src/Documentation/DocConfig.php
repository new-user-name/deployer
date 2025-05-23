<?php

declare(strict_types=1);

/* (c) Anton Medvedev <anton@medv.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Deployer\Documentation;

class DocConfig
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $defaultValue;
    /**
     * @var string
     */
    public $comment;
    /**
     * @var string
     */
    public $recipePath;
    /**
     * @var int
     */
    public $lineNumber;
}
