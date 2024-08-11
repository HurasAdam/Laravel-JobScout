@props([
    "type",
    "name",
    "id",
    "class",
    "placeholder"=>"",
    "value",
    "required"=>false,
    "value"=>""
    ])
<div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input
                                    type="{{$type}}"
                                    name="{{$name}}"
                                    id="{{$id}}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                  placeholder="{{ $placeholder }}"
                                    value="{{ $value}}"
                                    required>
                            </div>