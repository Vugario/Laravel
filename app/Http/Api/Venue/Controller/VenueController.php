<?php

namespace App\Http\Api\Venue\Controller;

use App\Http\Api\Core\Controller\ApiController;
use Base\Component\Venue\Service\Contract\VenueServiceInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class VenueController extends ApiController
{
    const URI = 'venues';

    /**
     * @var VenueServiceInterface
     */
    private $venueService;

    public function initialize(VenueServiceInterface $venueService)
    {
        $this->venueService = $venueService;
    }

    public function index()
    {
        return $this->venueService->findAll();
    }

    public function show($id)
    {
        try
        {
            return $this->venueService->findOneOrFailById($id);
        }
        catch (ModelNotFoundException $e)
        {
            return response()->json("A venue with id ${id} does not exist");
        }
    }
}
