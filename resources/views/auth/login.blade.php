<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">


                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label label="Email" for="email" />

                        <x-form-input type='email' name='email' id='email' placeholder="johnDoe@gmail.com"
                            :value="old('email')" />

                        <x-form-error name="email" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label label="Password" for="password" />

                        <x-form-input type='password' name='password' id='password' />

                        <x-form-error name="password" />
                    </x-form-field>



                </div>

                {{--                <div class="mt-10"> --}}
                {{--                    @if ($errors->any()) --}}
                {{--                        <ul> --}}
                {{--                            @foreach ($errors->all() as $error) --}}
                {{--                                <li class="text-red-500 italic">{{ $error }}</li> --}}
                {{--                            @endforeach --}}
                {{--                        </ul> --}}
                {{--                    @endif --}}
                {{--                </div> --}}
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-button href="/">Cancel</x-button>
            <x-form-button label="Register" />
        </div>
    </form>
</x-layout>
