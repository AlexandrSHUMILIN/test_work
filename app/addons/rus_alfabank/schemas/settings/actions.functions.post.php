<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

use Tygh\Enum\NotificationSeverity;

defined('BOOTSTRAP') or die('Access denied');

function fn_settings_actions_addons_rus_alfabank($new_status, $old_status, $on_install)
{
    if ($new_status === 'A') {
        fn_set_notification(NotificationSeverity::WARNING, __('warning'), __('rus_alfabank.depreciation_warning'));
    }
}
