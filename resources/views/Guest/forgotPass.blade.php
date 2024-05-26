<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        @if (session('errors'))
            @include('components.view_modal')
        @endif
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-1 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Masukkan Email</h2>
        </div>
        <div class="mt-1 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="/forgot" method="post">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-1 text-sm font-semibold text-gray-700">Email</label>
                    <input type="email" id="email" name="email"
                        class="mt-1 block w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <button
                        class="mt-1 flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Send Email
                    </button>
                </div>
            </form>
            <div>
                <button
                    class="mt-1 flex w-full justify-center rounded-md bg-sky-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600">
                    <a href="/dashboard">Back</a>
                </button>
            </div>
        </div>
    </div>
</x-layout>