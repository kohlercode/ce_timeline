<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    // Icon identifier
    'ce-timeline-icon' => [
        // Icon provider class
        'provider' => SvgIconProvider::class,
        // The source SVG for the SvgIconProvider
        'source' => 'EXT:ce_timeline/Resources/Public/Icons/content-timeline.svg',
    ],
    'ce-timeline-record-icon' => [
        'provider' => SvgIconProvider::class,
        // The source bitmap file
        'source' => 'EXT:ce_timeline/Resources/Public/Icons/content-timeline-record.svg',
    ],
];
