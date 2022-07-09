<?php

namespace Core;
abstract class Controller
{
    public function before($action)
    {
        return true;
    }

    public function after($action)
    {

    }
}