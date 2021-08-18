<div>
    @if ($this->visible)
        <div class="block mb-4 text-sm bg-gray-300 border border-gray-400 rounded shadow-sm outline-none">
            <ul>
                <li class="flex p-4 border-b border-gray-400">
                    <div class="flex-grow">
                        Product name
                    </div>
                    <div class="flex items-center flex-shrink px-4">
                        <div class="cursor-pointer">
                            <svg class="w-4 h-4 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm5-9v2H5V9h10z"/>
                            </svg>
                        </div>
                        <div class="px-2">
                            1
                        </div>
                        <div class="cursor-pointer">
                            <svg class="w-4 h-4 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-shrink pr-4">
                        &pound;0.00
                    </div>
                    <div class="flex-shrink text-red-600 cursor-pointer">
                        Remove
                    </div>
                </li>
            </ul>
            <div class="flex items-center p-4">
                <div class="flex-auto">
                    <strong>Total:</strong> &pound;0.00
                </div>
                <div class="flex-shrink">
                    <button type="button" class="px-3 py-2 text-white bg-indigo-600 rounded shadow-sm hover:bg-indigo-700 focus:bg-indigo-700">
                        Checkout
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>
