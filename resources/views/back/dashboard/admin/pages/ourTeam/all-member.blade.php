@extends('admin-master')

@section('main_content')
<div class="container-scroller">
    @include('back.dashboard.admin.common.header')

    <div class="main-panel">
        <div class="content-wrapper d-flex justify-content-center align-items-start" style="min-height: calc(100vh - 100px); padding-top: 50px;">
            <div class="w-100" style="width: 80%;">
                <h2 class="text-2xl font-bold text-center mb-6">All Members</h2>
                @if ($share->isEmpty())
                <div class="text-center text-gray-500">
                    <p>No members found.</p>
                </div>
                @else
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr>
                            <th class="border-b p-4">Image</th>
                            <th class="border-b p-4">Full Name</th>
                            <th class="border-b p-4">Job Title</th>
                            <th class="border-b p-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($share as $member)
                        <tr class="hover:bg-gray-100">
                            <td class="border-b p-4">
                                <img src="{{ asset($member->img) }}" alt="Member Image" class="w-16 h-16 rounded-full">
                            </td>
                            <td class="border-b p-4">{{ $member->fullname }}</td>
                            <td class="border-b p-4">{{ $member->jobtitle }}</td>
                            <td class="border-b p-4">
                                <a href="{{ route('edit_member', $member->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                <!-- Add a Delete button if applicable -->
                                <form action="{{ route('delete_member', $member->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>

    @include('back.dashboard.admin.common.footer')
</div>
@endsection