<?php

namespace App\Modules\Behold\Stats;

enum StatType : int
{
    case Monologue = 0;
    case Profanity = 1;
    case Action = 2;
    case Violence = 3;
    case Question = 4;
    case Shout = 5;
    case Caps = 6;
    case Smile = 7;
    case Frown = 8;
    case KickVictim = 9;
    case KickPerpetrator = 10;
    case Join = 11;
    case Part = 12;
    case DonatedOps = 13;
    case RevokedOps = 14;
}
