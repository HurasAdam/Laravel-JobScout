<x-layout>

<x-slot:heading>
        <h1>Create</h1>
    </x-slot:heading>
<form method="POST" action="/jobs">
  @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
      <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

        <div class="sm:col-span-4">
          <label for="title" class="block text-sm font-medium leading-6 text-gray-900">title</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
           
              <input required type="text" name="title" id="title"  class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Office manager">
            </div>
            @error("title")
           <p class="text-red-500 text-sm"> {{$message}}</p>
            @enderror
          </div>
        </div>

</div>


<div class="sm:col-span-4">
    <label for="currency" class="block text-sm font-medium leading-6 text-gray-900">Currency</label>
    <div class="mt-2">
        <div class="flex justify-between  sm:max-w-md gap-5">
            <!-- USD Option -->
            <div class="relative flex-1 rounded-md shadow-sm ring-1  ring-gray-300">
                <input type="radio" id="USD" name="currency" value="USD" class="hidden peer" {{ old('currency') == 'USD' ? 'checked' : '' }}>
                <label for="USD" class="text-center block  cursor-pointer w-full peer-checked:bg-slate-700 peer-checked:text-white peer-checked:border-black  peer-checked:rounded-md p-2">
                    USD
                </label>
            </div>
            <!-- PLN Option -->
            <div class="relative flex-1 rounded-md shadow-sm ring-1  ring-gray-300">
                <input type="radio" id="PLN" name="currency" value="PLN" class="hidden peer" {{ old('currency') == 'PLN' ? 'checked' : '' }}>
                <label for="PLN" class=" text-center block cursor-pointer w-full peer-checked:bg-slate-700 peer-checked:text-white peer-checked:border-black  peer-checked:rounded-md p-2">
                    PLN
                </label>
            </div>
            <!-- EUR Option -->
            <div class="relative flex-1 rounded-md shadow-sm ring-1  ring-gray-300">
                <input type="radio" id="EUR" name="currency" value="EUR" class="hidden peer" {{ old('currency') == 'EUR' ? 'checked' : '' }}>
                <label for="EUR" class="text-center block cursor-pointer w-full peer-checked:bg-slate-700 peer-checked:text-white peer-checked:border-black  peer-checked:rounded-md p-2">
                    EUR
                </label>
            </div>
        </div>
    </div>
</div>

          
            @error("salary")
           <p class="text-red-500 font-semibold text-xs"> {{$message}}</p>
            @enderror
          </div>
        </div>



        <div class="sm:col-span-4">
          <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
         
              <input required type="text" name="salary" id="salary"  class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="$70.000/year">
            </div>
            @error("salary")
           <p class="text-red-500 font-semibold text-xs"> {{$message}}</p>
            @enderror
          </div>
        </div>



    
      </div>
 <!-- <div class="mt-10">
 @if($errors->any())
      <ul>
        @foreach($errors->all() as $error )
        <li class="text-red-500 italic text-sm">{{$error}}</li>
        @endforeach
      </ul>
      
      @endif
 </div> -->
    </div>

 


  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>

<!--  -->

</x-layout>