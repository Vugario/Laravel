<?php

namespace App\Http\Admin\Venue\Controller;

use App\Http\Admin\Core\Controller\AdminController;
use Base\Component\Venue\Service\Contract\VenueServiceInterface;

class VenueController extends AdminController
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
        $venues = $this->venueService->findAll();

        return view('index', ['venues' => $venues]);
    }

    public function show($id)
    {
        $venue = $this->venueService->findOneOrFailById($id);

        return view('show', ['venue' => $venue]);
    }
}
