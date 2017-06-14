<?php

namespace App\Http\Web\Venue\Controller;

use App\Http\Web\Core\Controller\WebController;
use Base\Component\Venue\Service\Contract\VenueServiceInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class VenueController extends WebController
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
        return view('index', ['venues' => $this->venueService->findAll()]);
    }

    public function show($id)
    {
        try
        {
            return view('show', ['venue' => $this->venueService->findOneOrFailById($id)]);
        }
        catch (ModelNotFoundException $e)
        {
            return response()->json("A venue with id ${id} does not exist");
        }
    }
}
