<?php

namespace Modules\Iticke\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateTicketRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            "subject"=>"required",
            "message"=>"required",
            "full_name"=>"required|string|max:100",
            "email"=>"required|email",
            "status"=>"number",
            "priority"=>"number",
            "type"=>"number",
        ];
    }

    public function translationRules()
    {
        return [];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [];
    }

    public function translationMessages()
    {
        return [];
    }
}
