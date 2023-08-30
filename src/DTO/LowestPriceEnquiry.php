<?php

namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class LowestPriceEnquiry implements PromtionsEnquiryInterface
{
 /**
  * Summary of quantity
  * @var 
  */
	private ?int $quantity;
    
 /**
  * Summary of request_location
  * @var 
  */
	private ?string $request_location;
    
 /**
  * Summary of voucher_code
  * @var 
  */
	private ?string $voucher_code;
    
 /**
  * Summary of request_date
  * @var 
  */
	private ?string $request_date;
    
 /**
  * Summary of productId
  * @var 
  */
	private ?int $productId;
    
 /**
  * Summary of price
  * @var 
  */
	private ?int $price;
    
 /**
  * Summary of discounted_price
  * @var 
  */
	private ?int $discounted_price;
    
 /**
  * Summary of promotion_id
  * @var 
  */
	private ?int $promotion_id;
    
 /**
  * Summary of promotion_name
  * @var 
  */
	private ?string $promotion_name;
    

    /**
     * Get the value of productId
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * Set the value of productId
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get the value of quantity
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     */
    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

	
	/**
	 * Get the value of request_location
	 */
	public function getRequestLocation(): ?string
	{
		return $this->request_location;
	}

	/**
	 * Set the value of request_location
	 */
	public function setRequestLocation(?string $request_location): self
	{
		$this->request_location = $request_location;

		return $this;
	}

	/**
	 * Get the value of voucher_code
	 */
	public function getVoucherCode(): ?string
	{
		return $this->voucher_code;
	}

	/**
	 * Set the value of voucher_code
	 */
	public function setVoucherCode(?string $voucher_code): self
	{
		$this->voucher_code = $voucher_code;

		return $this;
	}

	/**
	 * Get the value of request_date
	 */
	public function getRequestDate(): ?string
	{
		return $this->request_date;
	}

	/**
	 * Set the value of request_date
	 */
	public function setRequestDate(?string $request_date): self
	{
		$this->request_date = $request_date;

		return $this;
	}

	
	/**
	 * Get the value of price
	 */
	public function getPrice(): ?int
	{
		return $this->price;
	}

	/**
	 * Set the value of price
	 */
	public function setPrice(?int $price): self
	{
		$this->price = $price;

		return $this;
	}

	/**
	 * Get the value of discounted_price
	 */
	public function getDiscountedPrice(): ?int
	{
		return $this->discounted_price;
	}

	/**
	 * Set the value of discounted_price
	 */
	public function setDiscountedPrice(?int $discounted_price): self
	{
		$this->discounted_price = $discounted_price;

		return $this;
	}

	/**
	 * Get the value of promotion_id
	 */
	public function getPromotionId(): ?int
	{
		return $this->promotion_id;
	}

	/**
	 * Set the value of promotion_id
	 */
	public function setPromotionId(?int $promotion_id): self
	{
		$this->promotion_id = $promotion_id;

		return $this;
	}

	/**
	 * Get the value of promotion_name
	 */
	public function getPromotionName(): ?string
	{
		return $this->promotion_name;
	}

	/**
	 * Set the value of promotion_name
	 */
	public function setPromotionName(?string $promotion_name): self
	{
		$this->promotion_name = $promotion_name;

		return $this;
	}

    /**
     * Summary of jsonSerialize
     * @return array
     */
    public function jsonSerialize(){
        return get_object_vars($this);
    }
}

