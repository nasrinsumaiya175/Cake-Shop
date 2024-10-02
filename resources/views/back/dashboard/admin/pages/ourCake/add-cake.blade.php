@extends('admin-master')

@section('main_content')
<div class="container-scroller">
    @include('back.dashboard.admin.common.header')

    <div class="main-panel">
        <div class="content-wrapper d-flex justify-content-center align-items-start" style="min-height: calc(100vh - 100px); padding-top: 50px;">
            <div class="w-full max-w-lg p-8 bg-white rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-center mb-6">Add Product</h2>
                <form action="{{ route('cakeStore') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="imageUpload" class="block text-sm font-medium text-gray-700 mb-2">Upload Image:</label>
                        <input type="file" name="img" id="imageUpload" accept="image/*" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <img id="imagePreview" class="w-full max-w-full h-auto border-2 border-gray-300 rounded-lg mt-4" src="" alt="Image Preview" style="display:none;" />

                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title:</label>
                        <input type="text" name="title" id="title" placeholder="Enter product title" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <div class="mb-4">
                        <label for="subtitle" class="block text-sm font-medium text-gray-700 mb-2">Subtitle:</label>
                        <input type="text" name="subtitle" id="subtitle" placeholder="Enter product subtitle" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <div class="mb-4">
                        <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Price:</label>
                        <input type="number" name="price" id="price" placeholder="Enter product price" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="w-full py-3 px-4 bg-indigo-600 text-white font-bold rounded-lg hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('back.dashboard.admin.common.footer')
    @include('back.dashboard.admin.common.script')

</div>

<script>
    const imageUpload = document.getElementById('imageUpload');
    const imagePreview = document.getElementById('imagePreview');

    imageUpload.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection