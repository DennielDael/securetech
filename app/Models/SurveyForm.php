<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyForm extends Model
{
    use HasFactory;
    protected $table = 'survey_forms';

    protected $fillable = [
        'fullname','company_name','address','description',
    ];
}
