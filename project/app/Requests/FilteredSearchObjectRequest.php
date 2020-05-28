<?php


namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class FilteredSearchObjectRequest extends Request
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules() {
        return [
            'minPrice' => 'integer',
            'maxPrice' => 'integer',
            'minSize' => 'integer',
            'maxSize' => 'integer'
        ];
    }
}
