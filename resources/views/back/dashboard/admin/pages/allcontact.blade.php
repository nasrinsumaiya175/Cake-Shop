@extends('admin-master')

@section('main_content')
<div class="w-full p-8 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center mb-6 mt-6">All Contact</h2>

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
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Name</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Email</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Subject</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($share as $con)
            <tr class="border-b">

                <td class="px-4 py-2">{{ $con->name }}</td>
                <td class="px-4 py-2">{{ $con->email }}</td>
                <td class="px-4 py-2">${{ $con->subject }}</td>
                <td class="px-4 py-2">${{ $con->message }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection