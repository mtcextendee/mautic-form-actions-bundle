<?php

/*
 * @copyright   2020 MTCExtendee. All rights reserved
 * @author      MTCExtendee
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticFormActionsBundle\Integration;

use Mautic\LeadBundle\Form\Type\LeadFieldsType;
use Mautic\PluginBundle\Integration\AbstractIntegration;
use Symfony\Component\Form\FormBuilder;

class FormActionsIntegration extends AbstractIntegration
{
    const INTEGRATION_NAME = 'FormActions';

    public function getName()
    {
        return self::INTEGRATION_NAME;
    }

    public function getDisplayName()
    {
        return 'Form Actions';
    }

    public function getAuthenticationType()
    {
        return 'none';
    }

    public function getRequiredKeyFields()
    {
        return [
        ];
    }

    public function getIcon()
    {
        return 'plugins/MauticFormActionsBundle/Assets/img/icon.png';
    }

    /**
     * @param \Mautic\PluginBundle\Integration\Form|FormBuilder $builder
     * @param array                                             $data
     * @param string                                            $formArea
     */
    public function appendToForm(&$builder, $data, $formArea)
    {
        if ($formArea == 'features') {
        }
    }
}
