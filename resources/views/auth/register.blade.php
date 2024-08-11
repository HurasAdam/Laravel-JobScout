<x-layout>
    <x-slot:heading>
       Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
             

                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field>
            <x-form-label label="First Name" for="first_name"/>
                    
            <x-form-input
                    type='text'
                    name='first_name'
                    id='first_name'
                
                    placeholder="John"
                    />

            <x-form-error name="first_name"/>
</x-form-field>
<x-form-field>
            <x-form-label label="Last Name" for="last_name"/>
                    
            <x-form-input
                    type='text'
                    name='last_name'
                    id='last_name'
                
                    placeholder="Doe"
                    />

            <x-form-error name="last_name"/>
</x-form-field>
<x-form-field>
            <x-form-label label="Email" for="email"/>
                    
            <x-form-input
                    type='email'
                    name='email'
                    id='email'
                
                    placeholder="johnDoe@gmail.com"
                    />

            <x-form-error name="email"/>
</x-form-field>
<x-form-field>
            <x-form-label label="Password" for="password"/>
                    
            <x-form-input
                    type='password'
                    name='password'
                    id='password'
                
                 
                    />

            <x-form-error name="password"/>
</x-form-field>

<x-form-field>
            <x-form-label label="Confirm Password" for="password_confirmation"/>
                    
            <x-form-input
                    type='password'
                    name='password_confirmation'
                    id='password_confirmation'
                
                  
                    />

            <x-form-error name="password_confirmation"/>
</x-form-field>
              
                </div>

{{--                <div class="mt-10">--}}
{{--                    @if($errors->any())--}}
{{--                        <ul>--}}
{{--                            @foreach($errors->all() as $error)--}}
{{--                                <li class="text-red-500 italic">{{ $error }}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    @endif--}}
{{--                </div>--}}
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
          <x-button href="/">Cancel</x-button>
<x-form-button label="Register"/>
        </div>
    </form>
</x-layout>