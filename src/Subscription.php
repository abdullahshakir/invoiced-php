<?php

namespace Invoiced;

class Subscription extends Object
{
    use Operations\Create;
    use Operations\All;
    use Operations\Update;
    use Operations\Delete;
}