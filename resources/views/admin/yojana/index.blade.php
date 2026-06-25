{{-- <x-app-layout>

    <div class="container py-4">

        <div class="row mb-4">

            <div class="col-lg-6">

                <h2 class="fw-bold mb-1">
                    Sarkari Yojana Management
                </h2>

                <p class="text-muted">
                    Manage all schemes from one place
                </p>

            </div>

            <div class="col-lg-6 text-lg-end">

                <a href="{{ route('yojana.create') }}" class="btn btn-success">

                    + Add New Scheme

                </a>

            </div>

        </div>

        <div class="row mb-4">

            <div class="col-md-4">

                <div class="card border-0 shadow-sm">

                    <div class="card-body">

                        <h6 class="text-muted">
                            Total Schemes
                        </h6>

                        <h2 class="fw-bold">
                            {{ $schemes->total() }}
                        </h2>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow-sm">

                    <div class="card-body">

                        <h6 class="text-muted">
                            Active Schemes
                        </h6>

                        <h2 class="fw-bold text-success">
                            {{ $schemes->where('status', 1)->count() }}
                        </h2>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow-sm">

                    <div class="card-body">

                        <h6 class="text-muted">
                            Inactive Schemes
                        </h6>

                        <h2 class="fw-bold text-danger">
                            {{ $schemes->where('status', 0)->count() }}
                        </h2>

                    </div>

                </div>

            </div>

        </div>
        <thead class="table-light">

            <tr>

                <th>ID</th>

                <th>Image</th>

                <th>Scheme Name</th>

                <th>Slug</th>

                <th>Status</th>

                <th>Actions</th>

            </tr>

        </thead>

        <td>

            <div class="d-flex gap-2">

                {{-- <a href="{{ route('yojana.edit', $yojana->id) }}" class="btn btn-primary btn-sm">

                    Edit

                </a> --}}

{{-- <form action="{{ route('yojana.destroy', $yojana->id) }}" method="POST">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete Scheme?')">

                        Delete

                    </button>

                </form> --}}

{{-- </div>

        </td>

    </div>

</x-app-layout> --}}


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Yojana') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container py-4">

                        <div class="row mb-4">

                            <div class="col-lg-6">

                                <h2 class="fw-bold mb-1">
                                    Sarkari Yojana Management
                                </h2>

                                <p class="text-muted">
                                    Manage all schemes from one place
                                </p>

                            </div>

                            <div class="col-lg-6 text-lg-end">

                                <a href="{{ route('yojana.create') }}" class="btn btn-success">

                                    + Add New Scheme

                                </a>

                            </div>

                        </div>

                        <div class="row mb-4">

                            <div class="col-md-4">

                                <div class="card border-0 shadow-sm">

                                    <div class="card-body">

                                        <h6 class="text-muted">
                                            Total Schemes
                                        </h6>

                                        <h2 class="fw-bold">
                                            {{ $schemes->total() }}
                                        </h2>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="card border-0 shadow-sm">

                                    <div class="card-body">

                                        <h6 class="text-muted">
                                            Active Schemes
                                        </h6>

                                        <h2 class="fw-bold text-success">
                                            {{ $schemes->where('status', 1)->count() }}
                                        </h2>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-4">

                                <div class="card border-0 shadow-sm">

                                    <div class="card-body">

                                        <h6 class="text-muted">
                                            Inactive Schemes
                                        </h6>

                                        <h2 class="fw-bold text-danger">
                                            {{ $schemes->where('status', 0)->count() }}
                                        </h2>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <thead class="table-light">

                            <tr>

                                <th>ID</th>

                                <th>Image</th>

                                <th>Scheme Name</th>

                                <th>Slug</th>

                                <th>Status</th>

                                <th>Actions</th>

                            </tr>

                        </thead>

                        <td>

                            <div class="d-flex gap-2">

                                {{-- <a href="{{ route('yojana.edit', $yojana->id) }}" class="btn btn-primary btn-sm">

                    Edit

                </a> --}}

                                {{-- <form action="{{ route('yojana.destroy', $yojana->id) }}" method="POST">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete Scheme?')">

                        Delete

                    </button>

                </form> --}}
                            </div>

                        </td>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
