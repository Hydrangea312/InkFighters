<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            /*'team.team' => 'required|string|max:10',
            'team.motivation' => 'required|integer|max:10',
            'team.number_applicant' => 'required|integer|max:3',
            'team.comment' => 'required|string|max:100',
            'team.friendcode' => 'required|integer|max:1',*/
            
            'opponent.comment' => 'required|string|max:100',
            'opponent.win_number' => 'required|integer|max:10',
            'opponent.rank' => 'required|string|max:10',
            'opponent.friendcode' => 'required|integer|min:1',
        ];
    }
}
