<?php

namespace App\Models;

use Platon\Database\AdvancedCustomFields;
use Platon\Database\Components;
use Platon\Database\FormatedContent;
use Platon\Database\Model;
use Platon\Database\Thumbnail;

class Page extends Model
{
    use AdvancedCustomFields, Components, Thumbnail, FormatedContent;
}
