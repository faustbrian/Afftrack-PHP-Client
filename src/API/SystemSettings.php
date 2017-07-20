<?php

/*
 * This file is part of Afftrack PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Afftrack\API;

/**
 * Class SystemSettings.
 */
class SystemSettings extends AbstractAPI
{
    /** @var string */
    public $target = 'system_settings';

    /** @var array */
    public $methods = [
        'getCountries',
        'getLoginDomains',
        'getRedirectReasons',
        'getStates',
        'getTimeZones',
        'getTrackingDomains',
    ];
}