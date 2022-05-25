<?php

namespace App\Http\Requests\Journal;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJournalRequest extends FormRequest
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
}
