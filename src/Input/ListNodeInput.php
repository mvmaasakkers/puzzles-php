<?php

namespace App\Input;

use App\Helpers\ListNode;

class ListNodeInput extends InputInterface
{
    private ListNode $input;

    public function __construct(ListNode $input)
    {
        $this->input = $input;
    }

    public function getRawInput(): ListNode
    {
        return $this->input;
    }
}
