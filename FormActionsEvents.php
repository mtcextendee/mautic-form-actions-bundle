<?php

/*
 * @copyright   2020 Mautic, Inc. All rights reserved
 * @author      Mautic, Inc
 *
 * @link        https://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticFormActionsBundle;

final class FormActionsEvents
{

    /**
     * The mautic.formactions.save_contact_field event is dispatched when a new submission is fired.
     *
     * The event listener receives a Mautic\FormBundle\Event\SubmissionEvent instance.
     *
     * @var string
     */
    const SAVE_CONTACT_FIELD = 'save_contact_field';
}
