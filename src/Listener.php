<?php

namespace OpenPlay\Pay360;

interface Listener
{
    public function update($action, $data);
}