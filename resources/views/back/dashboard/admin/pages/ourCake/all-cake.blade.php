@extends('admin-master')

@section('main_content')
<div class="w-full p-8 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center mb-6">All Cakes</h2>

    <!-- Success Message Display -->
    @if (session('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
        {{ session('success') }}
    </div>
    @endif

    <!-- Table for Displaying Cakes -->
    <table class="min-w-full table-auto">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Image</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Title</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Subtitle</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Price</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $product)
            <tr class="border-b">
                <td class="px-4 py-2">
                    <img src="{{ asset($product->img) }}" alt="{{ $product->title }}" class="h-16 w-16 object-cover rounded-lg">
                </td>
                <td class="px-4 py-2">{{ $product->title }}</td>
                <td class="px-4 py-2">{{ $product->subtitle }}</td>
                <td class="px-4 py-2">${{ $product->price }}</td>
                <td class="px-4 py-2 flex space-x-2">
                    <!-- Edit Button -->
                    <a href="{{ route('editCake', $product->id) }}" class="px-2 py-1 bg-blue-600 text-white rounded-lg hover:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M17.414 2.586a2 2 0 010 2.828L7.707 15.12a1 1 0 01-.293.208l-4 1.5a1 1 0 01-1.28-1.28l1.5-4a1 1 0 01.208-.293L14.586 2.586a2 2 0 012.828 0zm-9.707 9.707L16 4.414l-3-3L4.707 9.293l-1 3 3-1z" />
                        </svg>
                        Edit
                    </a>

                    <!-- Delete Form -->
                    <form action="{{ route('deleteCake', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this cake?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-2 py-1 bg-red-600 text-white rounded-lg hover:bg-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1H5.5a.5.5 0 000 1h9a.5.5 0 000-1H11V3a1 1 0 00-1-1zM4 7v9a2 2 0 002 2h8a2 2 0 002-2V7H4zm2 0v9h8V7H6z" clip-rule="evenodd" />
                            </svg>
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection