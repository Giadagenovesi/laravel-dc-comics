<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:50',
            'description' => 'nullable',
            'thumb' => 'required',
            'price' => 'required|min:5|max:30',
            'series' => 'required|min:5|max:50',
            'sale_date' => 'required|min:10|max:30',
            'type' => 'required|min:5|max:30',
        ];
    }

    public function messages() {
        return [
            'title.required' => 'Il titolo è richiesto e deve contenere almeno 5 caratteri e non più di 50',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'title.max' => 'Il titolo non deve superare :max caratteri',
            'thumb.required' => 'Devi per forza inserire un immagine',
            'price.required' => 'Devi per forza inserire un prezzo',
            'series.required' => 'Devi per forza inserire una serie',
            'sale_date.required' => 'La data deve essere scritta con il seguente formato YYYY-MM-DD',
            'type.required' => 'La tipologia è richiesta e deve contenere almeno 5 caratteri e non più di 30'
        ];
    }
}
