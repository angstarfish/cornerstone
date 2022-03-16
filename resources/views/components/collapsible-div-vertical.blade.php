<div x-data="{open : false} ">
    <button @click="open = !open"
        class="flex items-center float-right w-full py-2 text-gray-600 cursor-pointer rounded-b-md justify-left hover:bg-gray-100 hover:text-gray-700 focus:outline-none">
        <div class="inline-flex flex-row w-full text-gray-600">
            {{ $trigger ?? '' }}
        </div>
    </button>
    <div x-show="open">
        {{ $content ?? '' }}
    </div>
</div>
