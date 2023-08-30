<?php

namespace App\Controller;

/*Handles requests related to products, such as retrieving the lowest price and getting promotions for a specific product. */

//Happy Path
//Professional tip: When working in a team, when you are thinking how to make a function work. Create a fake static response so that the API could just used by others instead of being buggered by others in team for causing a blocker.

/**
 * 
 * How does one enquire about promotions ? 
 * Send EnquryDTO to Promotions Filter which will result in product and its promotion
 * 
 */

use App\DTO\LowestPriceEnquiry;
use App\Filter\Promotions\PromotionsFilterInterface;
use App\Service\Serializer\DTOSerializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{

    /**
     * Returns the lowest price of a product 
     * 
     * @param Request represents the HTTP request made to the server. It contains information such as the request
     * method, headers, query parameters, and request body.
     * @param int $id The `id` parameter represents the unique identifier of a product. It is used to
     * specify which product's lowest price is being requested.
     * 
     * @return JsonResponse
     */
    #[Route('products/{id}/lowest-price', name: 'lowest-price', methods:'POST')]
    public function lowestPrice(
        Request $request,
        int $id,
        DTOSerializer $serializer,
        PromotionsFilterInterface $promotionsFilter
        ): Response
        {
        /**
         * TO do:
         * 1. Deserialize json data into a EnquiryDTO
         * 2. Pass the Enquiry into a promotions filter(the appropriate  promotions will be applied).
         * 3. Return the modified Enquiry.
         */
        
        if($request->headers->has('force-fail')){
            return new JsonResponse([
                'error'=>'Promotions Engine Failed !'
            ],$request->headers->get('force-fail'));
        }
        
        //1
        /** @var LowestPriceEnquiry $lowestPriceEnquiry$ */
        $lowestPriceEnquiry = $serializer->deserialize($request->getContent(), LowestPriceEnquiry::class,  'json');
        
        //2
        $modifiedEnquiry    = $promotionsFilter->apply($lowestPriceEnquiry);

        //3
       

        $responseContent = $serializer->serialize($modifiedEnquiry,'json');

        return new Response($responseContent, 200);
    }

    #[Route('products/{id}/promotions', name: 'promotions', methods:'GET')]
    public function promotions(int $id): Response{
        dd($id);
    }
}
