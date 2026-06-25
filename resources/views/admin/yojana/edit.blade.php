@extends('layouts.admin')

@section('title','Edit Scheme')

@section('content')

<div class="container-fluid">

```
<div class="card shadow-sm">

    <div class="card-header">

        <h4>Edit Scheme</h4>

    </div>

    <div class="card-body">

        @if ($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form action="{{ route('schemes.update',$scheme->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">

                        Title

                    </label>

                    <input type="text"
                           name="title"
                           id="title"
                           value="{{ old('title',$scheme->title) }}"
                           class="form-control"
                           required>

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">

                        Slug

                    </label>

                    <input type="text"
                           name="slug"
                           id="slug"
                           value="{{ old('slug',$scheme->slug) }}"
                           class="form-control"
                           required>

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">

                        Category

                    </label>

                    <select name="category_id"
                            class="form-control">

                        <option value="">
                            Select Category
                        </option>

                        @foreach($categories as $category)

                        <option value="{{ $category->id }}"
                            {{ $scheme->category_id == $category->id ? 'selected' : '' }}>

                            {{ $category->name }}

                        </option>

                        @endforeach

                    </select>

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">

                        State

                    </label>

                    <select name="state_id"
                            class="form-control">

                        <option value="">
                            Select State
                        </option>

                        @foreach($states as $state)

                        <option value="{{ $state->id }}"
                            {{ $scheme->state_id == $state->id ? 'selected' : '' }}>

                            {{ $state->name }}

                        </option>

                        @endforeach

                    </select>

                </div>

                <div class="col-md-12 mb-3">

                    <label class="form-label">

                        Current Image

                    </label>

                    <br>

                    @if($scheme->featured_image)

                        <img src="{{ asset('uploads/schemes/'.$scheme->featured_image) }}"
                             width="150"
                             class="img-thumbnail">

                    @else

                        <span class="text-danger">

                            No Image Found

                        </span>

                    @endif

                </div>

                <div class="col-md-12 mb-3">

                    <label class="form-label">

                        Change Image

                    </label>

                    <input type="file"
                           name="featured_image"
                           class="form-control">

                </div>

                <div class="col-md-12 mb-3">

                    <label class="form-label">

                        Short Description

                    </label>

                    <textarea name="short_description"
                              rows="3"
                              class="form-control">{{ old('short_description',$scheme->short_description) }}</textarea>

                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Overview</label>
                    <textarea name="overview" rows="8" class="form-control editor">{{ old('overview',$scheme->overview) }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Benefits</label>
                    <textarea name="benefits" rows="8" class="form-control editor">{{ old('benefits',$scheme->benefits) }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Eligibility</label>
                    <textarea name="eligibility" rows="8" class="form-control editor">{{ old('eligibility',$scheme->eligibility) }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Documents Required</label>
                    <textarea name="documents_required" rows="8" class="form-control editor">{{ old('documents_required',$scheme->documents_required) }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Application Process</label>
                    <textarea name="application_process" rows="8" class="form-control editor">{{ old('application_process',$scheme->application_process) }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Financial Benefits</label>
                    <textarea name="financial_benefits" rows="8" class="form-control editor">{{ old('financial_benefits',$scheme->financial_benefits) }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Important Dates</label>
                    <textarea name="important_dates" rows="5" class="form-control editor">{{ old('important_dates',$scheme->important_dates) }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Status Check</label>
                    <textarea name="status_check" rows="6" class="form-control editor">{{ old('status_check',$scheme->status_check) }}</textarea>
                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">

                        Official Website

                    </label>

                    <input type="url"
                           name="official_website"
                           value="{{ old('official_website',$scheme->official_website) }}"
                           class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">

                        Helpline

                    </label>

                    <input type="text"
                           name="helpline"
                           value="{{ old('helpline',$scheme->helpline) }}"
                           class="form-control">

                </div>

                <div class="col-md-12 mb-3">

                    <label class="form-label">

                        Meta Title

                    </label>

                    <input type="text"
                           name="meta_title"
                           value="{{ old('meta_title',$scheme->meta_title) }}"
                           class="form-control">

                </div>

                <div class="col-md-12 mb-3">

                    <label class="form-label">

                        Meta Description

                    </label>

                    <textarea name="meta_description"
                              rows="4"
                              class="form-control">{{ old('meta_description',$scheme->meta_description) }}</textarea>

                </div>

                <div class="col-md-12 mb-4">

                    <label class="form-label">

                        Status

                    </label>

                    <select name="status"
                            class="form-control">

                        <option value="1"
                            {{ $scheme->status == 1 ? 'selected' : '' }}>
                            Active
                        </option>

                        <option value="0"
                            {{ $scheme->status == 0 ? 'selected' : '' }}>
                            Inactive
                        </option>

                    </select>

                </div>

                <div class="col-md-12">

                    <button type="submit"
                            class="btn btn-primary">

                        Update Scheme

                    </button>

                </div>

            </div>

        </form>

    </div>

</div>


</div>

<script>
document.getElementById('title').addEventListener('keyup',function(){

    let slug=this.value
    .toLowerCase()
    .replace(/ /g,'-')
    .replace(/[^\w-]+/g,'');

    document.getElementById('slug').value=slug;

});
</script>

@endsection
