<?php

namespace App\Http\Requests\Journal;

use Illuminate\Foundation\Http\FormRequest;

class StoreJournalRequest extends FormRequest
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
     * @return array
     */
      public function rules()
    {
        return [
         'entry_date'     => 'required|date|after:today',
         'exit_date'      => 'required|date',
         'position_nr'    => 'numeric|min:0',
         'symbol'         => 'required|not_in:0',
         'size'           => 'numeric',
         'type'           => 'required|not_in:0',
         'entry_price'    => 'numeric',
         's_l'            => 'numeric',
         't_p'            => 'numeric',
         'exit_price'     => 'numeric',
         'commission'     => 'numeric',
          'swap'          => 'numeric',
         'profit'         => 'numeric',
        ];
    }

    // public function messages() {
    //     return [
    //         'book_thumb.book_thumb' => 'The type of the uploaded file should be an image.',
    //         'image.max' => 'Failed to upload an image. The image maximum size is 2MB.',
    //     ];
    // }
}