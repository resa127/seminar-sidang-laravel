<?php

namespace App\Http\Requests;
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// Validation rules for seminar and thesis registration.
class StoreRegistrationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'student_id' => ['required', 'integer'],
            'type' => ['required', 'string', 'max:20'],
            'title' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:20'],
        ];
    }
}
use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'student_id' => ['required', 'integer'],
            'type' => ['required', 'string', 'max:20'],
            'title' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:20'],
        ];
    }
}