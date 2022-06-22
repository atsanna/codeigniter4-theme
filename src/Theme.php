<?php

/**
 * This file is part of Theme.
 *
 * (c) Antonio Sanna <atsanna@tiscali.it>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace atsanna\Theme;

include_once __DIR__ . '/Config/Constants.php';

class Theme
{
        // Return Theme Version
    public function getVersion()
    {
        return THEME_VERSION;
    }
}