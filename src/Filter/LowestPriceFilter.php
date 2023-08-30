<?php

namespace App\Filter;

use App\DTO\PromtionsEnquiryInterface;
use App\Filter\Promotions\PromotionsFilterInterface;

class LowestPriceFilter implements PromotionsFilterInterface
{
    public function apply(PromtionsEnquiryInterface $enquiry) : PromtionsEnquiryInterface {
        $enquiry->setDiscountedPrice(50);
        $enquiry->setPrice(100);
        $enquiry->setPromotionId(3);
        $enquiry->setPromotionName('Black Friday half price');

        return $enquiry;
    }
}