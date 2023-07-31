<?php

declare(strict_types=1);

namespace MauticPlugin\MauticFormActionsBundle\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

final class ContentExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return [
            new TwigFilter('unescape', fn (string $string) => html_entity_decode($string)),
        ];
    }
}
