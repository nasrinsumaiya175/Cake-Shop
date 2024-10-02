@extends('admin-master')

@section('main_content')
<div class="w-full max-w-lg p-8 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center mb-6">Edit Cake</h2>
    <form action="{{ route('updateCake', $cake->id) }}" method="POST" enctype="multipart/form-data">
        @csrf <!-- CSRF protection -->

        <div class="mb-4">
            <label for="img" class="block text-sm font-medium text-gray-700 mb-2">Current Image:</label>
            <div class="text-center">
                <img src="{{ asset($cake->img) }}" alt="{{ $cake->title }}" class="img-thumbnail" style="max-width: 150px;">
            </div>
        </div>

        <div class="mb-4">
            <label for="img" class="block text-sm font-medium text-gray-700 mb-2">New Image (optional):</label>
            <input type="file" name="img" id="img" accept="image/*" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title:</label>
            <input type="text" name="title" id="title" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" value="{{ $cake->title }}" required>
        </div>

        <div class="mb-4">
            <label for="subtitle" class="block text-sm font-medium text-gray-700 mb-2">Subtitle:</label>
            <input type="text" name="subtitle" id="subtitle" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" value="{{ $cake->subtitle }}" required>
        </div>

        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Price:</label>
            <input type="number" name="price" id="price" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" value="{{ $cake->price }}" required>
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full py-3 px-4 bg-indigo-600 text-white font-bold rounded-lg hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Update
            </button>
        </div>
    </form>
</div>
@endsection