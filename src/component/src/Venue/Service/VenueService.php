<?php

namespace Base\Component\Venue\Service;

use Base\Component\Venue\Model\Venue;
use Base\Component\Venue\Service\Contract\VenueServiceInterface;

class VenueService implements VenueServiceInterface
{
    /**
     * @inheritdoc
     */
    public function findOneOrFailById(int $id)
    {
        return Venue::findOrFail($id);
    }

    /**
     * @inheritdoc
     */
    public function findAll()
    {
        return Venue::all();
    }
}
