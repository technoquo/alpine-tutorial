<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @vite('resources/js/app.js')

</head>

<body class="antialiased">
    {{-- <div x-data="{ name: 'John Doe' }">
        <div class="bg-green-400 m-4 p-4">
            <span x-text="name"></span>
        </div>
        <div x-data="{ message: 'Hello World' }" class="bg-slate-200 m-4 p-4">
            <span x-text="message"></span><br />
            <span x-text="name"></span>
        </div>
    </div> --}}


    {{-- <div x-data="{
        selectedImageUrl: 'https://fr.web.img6.acsta.net/pictures/23/02/13/18/18/3312661.jpg',
        show: true,
        inputValue: 'Hello John Wick'
    }">
        <img class="w-96 h-96" :class="{ 'hidden': !show }" :src="selectedImageUrl" alt="">
        <input type="text" :value="inputValue" :style="{ color: 'red' }">
    </div> --}}


    {{-- <div x-data="{ message: 'Hello World' }">
        <input type="text" x-model="message">
        <p x-text="message" class="m-2 p-2 bg-slate-200"></p>
        <div class="max-w-md mx-auto space-y-2" x-data="{ myColor: 'gray' }">
            <div class="w-24 h-24 rounded" :class="'bg-' + myColor + '-500'"></div>
            <select x-model="myColor">
                <option value="gray">Gray</option>
                <option value="green">Green</option>
                <option value="blue">Blue</option>
                <option value="red">Red</option>
            </select>
        </div> --}}

    {{-- <div x-data="{ show: false }">
        <button @click="show = !show" class="bg-red-300 p-2">
            Toogle Show
        </button>
        <div x-show="show">
            This is element will be shown or hidden based on the show value.
        </div>
    </div>
    <div x-data="{ showIfExample: false }">
        <button @click="showIfExample = !showIfExample" class="bg-green-300 p-2">
            Toogle If
        </button>
        <template x-if="showIfExample">
            <div>
                This is element will be shown or hidden based on the show value.
            </div>
        </template>
    </div> --}}
    <section x-data>
        <button x-on:click="alert('Hello World!')">Say Hi</button>
    </section>
    <section x-data="{ isOpen: false }">
        <button @click="isOpen = !isOpen"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">Dropdown button <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg></button>
        <div x-show="isOpen" id="dropdown" @click.outside="isOpen = false"
            class="z-10  bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                        out</a>
                </li>
            </ul>
        </div>
    </section>
    <section x-data>
        <button @click="$refs.text.remove()">Remove Text</button>
        <span x-ref="text">Hello 👋</span>
    </section>
    </div>
    <section x-data="{ maxLenght: 100 }">

        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
        <textarea id="message" x-ref="message" @keyup="maxLenght = 100 - $refs.message.value.length" rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Write your thoughts here..."></textarea>
        <span x-text="maxLenght + ' Characters remaining'"></span>
    </section>
    <section>
        <div x-data="{ count: 0 }" x-init="count = $refs.countme.value.length">
            <textarea
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your thoughts here..." rows="4" maxlength="50" x-ref="countme"
                x-on:keyup="count = $refs.countme.value.length"></textarea>

            <div class="">
                <span x-html="count"></span> / <span x-html="$refs.countme.maxLength"></span>
            </div>
        </div>
    </section>

</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
