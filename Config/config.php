<?php

/*
 * @copyright   2020 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

return [
    'routes' => [
    ],
    'menu' => [
    ],
    'services' => [
        'events' => [
            'mautic.formactions.subscriber.lead' => [
                'class'     => \MauticPlugin\MauticFormActionsBundle\EventListener\FormSubscriber::class,
                'arguments' => [
                    'mautic.formactions.settings',
                    'twig',
                    'mautic.form.model.field',
                    'mautic.lead.model.lead'
                ],
            ],
        ],
        'forms'  => [
        ],
        'models' => [
        ],
        'helpers'=> [
        ],
        'others'=> [
            'mautic.formactions.settings' => [
                'class'     => \MauticPlugin\MauticFormActionsBundle\Integration\FormActionsSettings::class,
                'arguments' => [
                    'mautic.helper.integration',
                ],
            ],
        ],
        'integrations' => [
            'mautic.integration.formactions' => [
                'class'     => \MauticPlugin\MauticFormActionsBundle\Integration\FormActionsIntegration::class,
                'arguments' => [
                    'event_dispatcher',
                    'mautic.helper.cache_storage',
                    'doctrine.orm.entity_manager',
                    'session',
                    'request_stack',
                    'router',
                    'translator',
                    'logger',
                    'mautic.helper.encryption',
                    'mautic.lead.model.lead',
                    'mautic.lead.model.company',
                    'mautic.helper.paths',
                    'mautic.core.model.notification',
                    'mautic.lead.model.field',
                    'mautic.plugin.model.integration_entity',
                    'mautic.lead.model.dnc',
                ],
            ],
        ],
    ],
];
