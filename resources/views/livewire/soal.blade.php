<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Soal') }}
    </h2>
</x-slot>

<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden flex justify-between shadow-sm sm:rounded-lg">
            <div class="flex flex-col">
                <div class="dark:bg-gray-600 p-4 text-gray-900 dark:text-gray-100">
                    {{__($soalText)}}
                </div>
                <div>
                    <input type="checkbox" value="{{$idSoal}}" wire:click='answer({{$idSoal}})' @if ($checkedTrue == 1git)
                        checked
                    @endif>
                </div>
            </div>
            <div class="p-6 max-w-56 text-gray-50 dark:bg-gray-700 flex items-center justify-center flex-wrap dark:text-gray-100">
                @foreach ($soal as $ind => $s)
                    <button wire:click='soalNav({{$ind+=1}})'>
                        <div class="px-2 py-2 m-1 text-center dark:bg-gray-800 rounded-lg min-w-11 max-w-11 text-gray-900 dark:text-gray-100 ring-gray-800 dark:ring-gray-100">
                            {{$ind}}
                        </div>
                    </button>
                @endforeach
            </div>
        </div>
    </div>
</div>