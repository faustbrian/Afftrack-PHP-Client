<?php

declare(strict_types=1);

/*
 * This file is part of Afftrack PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Afftrack\API;

/**
 * Class AdminManagers.
 */
class AdminManagers extends AbstractAPI
{
    /** @var string */
    public $target = 'admin_managers';

    /** @var array */
    public $methods = [
        'getAdmins',
        'getAdminStatus',
    ];
}
