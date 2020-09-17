<?php

/*
 * @copyright   2020 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticFormActionsBundle\Form\Type;

use Mautic\CoreBundle\Form\Type\YesNoButtonGroupType;
use Mautic\LeadBundle\Form\Type\LeadFieldsType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class FormActionSaveField extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add(
            'field',
            LeadFieldsType::class,
            [
                'label'                 => 'mautic.form.field.section.leadfield',
                'label_attr'            => ['class' => 'control-label'],
                'multiple'              => false,
                'with_company_fields'   => false,
                'with_tags'             => false,
                'with_utm'              => false,
                'empty_value'           => 'mautic.core.select',
                'attr'                  => [
                    'class'    => 'form-control',
                ],
                'required'    => true,
                'constraints' => [
                    new NotBlank(
                        ['message' => 'mautic.core.value.required']
                    ),
                ],
            ]
        );

        $builder->add(
            'syntax',
            TextType::class,
            [
                'label'                 => 'mautic.formactions.syntax',
                'label_attr'            => ['class' => 'control-label'],
                'attr'                  => [
                    'class'    => 'form-control',
                ],
                'required'    => true,
                'constraints' => [
                    new NotBlank(
                        ['message' => 'mautic.core.value.required']
                    ),
                ],
            ]
        );

        $builder->add(
            'overwriteWithBlank',
            YesNoButtonGroupType::class,
            [
                'label'      => 'mautic.formactions.overwriteWithBlank',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class' => 'form-control',
                ],
                'data'=> isset($options['data']['overwriteWithBlank']) ? $options['data']['overwriteWithBlank'] : false
            ]
        );
    }
}
