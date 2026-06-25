<x-app-layout>


{{-- @section('title','Schemes List')

@section('content') --}}

<div class="container-fluid">


<div class="row mb-3">

    <div class="col-md-6">

        <h3>
            All Schemes
        </h3>

    </div>

    <div class="col-md-6 text-end">

        <a href="{{ route('yojana.create') }}"
           class="btn btn-success">

            Add New Scheme

        </a>

    </div>

</div>

@if(session('success'))

    <div class="alert alert-success">

        {{ session('success') }}

    </div>

@endif

<div class="card shadow-sm">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-dark">

                    <tr>

                        <th width="60">
                            ID
                        </th>

                        <th width="100">
                            Image
                        </th>

                        <th>
                            Title
                        </th>

                        <th>
                            Slug
                        </th>

                        <th>
                            Status
                        </th>

                        <th width="180">
                            Action
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($schemes as $scheme)

                    <tr>

                        <td>
                            {{ $scheme->id }}
                        </td>

                        <td>

                            @if($scheme->featured_image)

                                <img src="{{ asset('uploads/schemes/'.$scheme->featured_image) }}"
                                     width="80"
                                     class="img-thumbnail">

                            @else

                                No Image

                            @endif

                        </td>

                        <td>

                            <strong>

                                {{ $scheme->title }}

                            </strong>

                        </td>

                        <td>

                            {{ $scheme->slug }}

                        </td>

                        <td>

                            @if($scheme->status)

                                <span class="badge bg-success">

                                    Active

                                </span>

                            @else

                                <span class="badge bg-danger">

                                    Inactive

                                </span>

                            @endif

                        </td>

                        <td>

                            <a href="{{ route('schemes.edit',$scheme->id) }}"
                               class="btn btn-primary btn-sm">

                                Edit

                            </a>

                            <form action="{{ route('schemes.destroy',$scheme->id) }}"
                                  method="POST"
                                  style="display:inline-block;">

                                @csrf

                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete this scheme?')">

                                    Delete

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="6"
                            class="text-center">

                            No Schemes Found

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="mt-3">

            {{ $schemes->links() }}

        </div>

    </div>

</div>


</div>

</x-app-layout>
