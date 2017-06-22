<?php

namespace Fuel\Tasks;
use Cron;

class Market
{
    public function ticker()
    {
        Cron\Market::populateHistory();
    }
}