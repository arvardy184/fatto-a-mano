<x-layoutDashboard>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mx-auto mt-5">
        <h1 class="text-center text-2xl font-bold mb-4">Data Storage</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border text-center">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity Limit</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-100 even:bg-gray-200">
                        <td class="px-4 py-2 border"></td>
                        <td class="px-4 py-2 border"></td>
                        <td class="px-4 py-2 border"></td>
                        <td class="px-4 py-2 border">
                            <button>
                                <a href="/dashboard/data_storage/edit"
                                    class="block w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2"
                                    onclick="return confirm('Are you sure to edit this storage?')">Edit</a>
                            </button>
                            <form action="" method="POST" class="inline-block">
                                @csrf
                                <button type="submit"
                                    class="w-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                    onclick="return confirm('Are you sure to delete this storage?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-6 flex justify-between">
            <a href="/dashboard" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back</a>
            <a href="/dashboard/data_storage/tambah"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add</a>
        </div>
    </div>
</x-layoutDashboard>
