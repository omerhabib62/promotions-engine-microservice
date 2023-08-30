<?php

namespace App\Filter\Promotions;

use App\DTO\PromtionsEnquiryInterface;

interface PromotionsFilterInterface{
    public function apply(PromtionsEnquiryInterface $enquiry) : PromtionsEnquiryInterface;
}
