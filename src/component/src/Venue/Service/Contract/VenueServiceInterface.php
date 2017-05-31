<?php

namespace Base\Component\Venue\Service\Contract;

use Illuminate\Database\Eloquent\ModelNotFoundException;

interface VenueServiceInterface
{
    /**
     * Returns one Venue by its id
     *
     * @param int $id
     *
     * @return Venue
     *
     * @throws ModelNotFoundException
     */
    public function findOneOrFailById(int $id);

    /**
     * Returns all the venues
     *
     * @return Venue[]
     */
    public function findAll();
}
