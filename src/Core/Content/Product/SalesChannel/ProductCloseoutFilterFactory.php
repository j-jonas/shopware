<?php declare(strict_types=1);

namespace Shopware\Core\Content\Product\SalesChannel;

use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\MultiFilter;
use Shopware\Core\Framework\Plugin\Exception\DecorationPatternException;

class ProductCloseoutFilterFactory extends AbstractProductCloseoutFilterFactory
{
    public function getDecorated(): AbstractProductCloseoutFilterFactory
    {
        throw new DecorationPatternException(self::class);
    }

    public function create(): MultiFilter
    {
        return new ProductCloseoutFilter();
    }
}