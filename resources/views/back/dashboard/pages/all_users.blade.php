@extends('back.dashboard.dashboard')
@section('main_home')

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Table Basic</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>

                        <td><i class='bx bx-edit'></i></td>
                        <td><i class='bx bx-delete'></i></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection