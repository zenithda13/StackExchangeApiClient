<?php

/**
 * This file is part of the StackExchangeApiClient library.
 *
 * @author  benatespina <benatespina@gmail.com>
 *
 * @license MIT
 */

namespace spec\BenatEspina\StackExchangeApiClient\Model\Traits;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\ClosedDetailsInterface;
use PhpSpec\ObjectBehavior;

/**
 * Class CloseTraitSpec.
 *
 * @package spec\Benatespina\StackExchangeApiClient\Model\Traits
 */
class CloseTraitSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('BenatEspina\StackExchangeApiClient\Stubs\Traits\CloseTraitStub');
    }

    function its_can_close_is_mutable()
    {
        $this->setCanClose(true)->shouldReturn($this);
        $this->isCanClose()->shouldReturn(true);
    }

    function its_close_vote_count_is_mutable()
    {
        $bountyClosesDate = new \DateTime("@" . 1409845665);

        $this->setCloseVoteCount($bountyClosesDate)->shouldReturn($this);
        $this->getCloseVoteCount()->shouldReturn($bountyClosesDate);
    }

    function its_closed_date_is_mutable()
    {
        $closeDate = new \DateTime("@" . 1409845665);

        $this->setClosedDate($closeDate)->shouldReturn($this);
        $this->getClosedDate()->shouldReturn($closeDate);
    }

    function its_closed_details_is_mutable(ClosedDetailsInterface $closedDetails)
    {
        $this->setClosedDetails($closedDetails)->shouldReturn($this);
        $this->getClosedDetails()->shouldReturn($closedDetails);
    }

    function its_closed_reason_is_mutable()
    {
        $this->setClosedReason('closed reason')->shouldReturn($this);
        $this->getClosedReason()->shouldReturn('closed reason');
    }
}
