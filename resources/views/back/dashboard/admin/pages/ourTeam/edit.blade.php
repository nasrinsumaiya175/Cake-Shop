@extends('admin-master')

@section('main_content')
<div class="container-scroller">
    @include('back.dashboard.admin.common.header')

    <div class="main-panel">
        <div class="content-wrapper d-flex justify-content-center align-items-start" style="min-height: calc(100vh - 100px); padding-top: 50px;">
            <div class="w-100" style="width: 80%;">
                <div class="p-8 bg-white rounded-lg shadow-md w-full" style="max-width: 100%;">
                    <h2 class="text-2xl font-bold text-center mb-6">Update Member</h2>
                    <form action="{{ route('update_member', $member->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Image Upload Field -->
                        <div class="mb-4">
                            <label for="imageUpload" class="block text-sm font-medium text-gray-700 mb-2">Upload Image:</label>
                            <input type="file" name="img" id="imageUpload" accept="image/*" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                        </div>

                        <!-- Image Preview with Fixed Width and Height of 180px -->
                        <img id="imagePreview" class="border-2 border-gray-300 rounded-lg mt-4" src="{{ asset($member->img) }}" alt="Image Preview" style="display:block; width: 180px; height: 180px;" />

                        <!-- Full Name Field -->
                        <div class="mb-4">
                            <label for="fullname" class="block text-sm font-medium text-gray-700 mb-2">Full Name:</label>
                            <input type="text" name="fullname" id="fullname" value="{{ old('fullname', $member->fullname) }}" placeholder="Enter full name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                        </div>

                        <!-- Job Title Field -->
                        <div class="mb-4">
                            <label for="jobtitle" class="block text-sm font-medium text-gray-700 mb-2">Job Title:</label>
                            <input type="text" name="jobtitle" id="jobtitle" value="{{ old('jobtitle', $member->jobtitle) }}" placeholder="Enter job title" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                        </div>

                        <!-- X Field -->
                        <div class="mb-4">
                            <label for="x" class="block text-sm font-medium text-gray-700 mb-2">X:</label>
                            <input type="text" name="x" id="x" value="{{ old('x', $member->x) }}" placeholder="Enter X value" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                        </div>

                        <!-- Facebook URL Field -->
                        <div class="mb-4">
                            <label for="facebook" class="block text-sm font-medium text-gray-700 mb-2">Facebook URL:</label>
                            <input type="url" name="facebook" id="facebook" value="{{ old('facebook', $member->facebook) }}" placeholder="Enter Facebook profile URL" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                        </div>

                        <!-- LinkedIn URL Field -->
                        <div class="mb-4">
                            <label for="linkdin" class="block text-sm font-medium text-gray-700 mb-2">LinkedIn URL:</label>
                            <input type="url" name="linkdin" id="linkdin" value="{{ old('linkdin', $member->linkdin) }}" placeholder="Enter LinkedIn profile URL" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="w-full py-3 px-4 bg-indigo-600 text-white font-bold rounded-lg hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('back.dashboard.admin.common.footer')
    @include('back.dashboard.admin.common.script')
</div>

<!-- Script for Image Preview -->
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