<?php

namespace App\Enums;

enum ToDoStatuses: int
{
    case TODO = 0;
    case DOING = 1;
    case DONE = 2;
}
