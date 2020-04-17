<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (empty($this->input('slug'))) {
            $this['slug'] = Str::slug($this->input('title'));
        } else {
            $this['slug'] = Str::slug($this->input('slug'));
        }

        $rules = [
            'user_id' => 'sometimes|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'verse' => 'required|max:255',
            'image' => 'required|image|mimes:png,jpg',
            'body' => 'required|string'
        ];

        if ($post = $this->route('post')) {
            $rules['slug'] = ',slug,' . $post->id;
        }

        return $rules;
    }
}
