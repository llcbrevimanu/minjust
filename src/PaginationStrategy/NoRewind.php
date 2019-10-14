<?php

namespace SomeWork\Minjust\PaginationStrategy;

use PHPHtmlParser\Dom;

class NoRewind implements ParseStrategyInterface
{
    public function getPage(Dom $dom): int
    {
        return (int) $dom->find('span.currentStep', 0)->text();
    }

    public function getTotalPage(Dom $dom): int
    {
        $collection = $this->getSteps($dom);

        return (int) $collection->offsetGet($collection->count() - 1)->text();
    }

    protected function getSteps(Dom $dom): Dom\Collection
    {
        return $dom->find('span.summ > div.pagination > a.step');
    }

    public function isSupport(Dom $dom): bool
    {
        return $this->getSteps($dom)->count() > 1;
    }
}