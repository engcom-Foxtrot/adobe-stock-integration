<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\MediaGalleryRenditionsApi\Api;

use Magento\Framework\Exception\LocalizedException;

interface GenerateRenditionsInterface
{
    /**
     * Generate Renditions image
     *
     * @param string $path
     * @throws LocalizedException
     */
    public function execute(string $path): void;
}
