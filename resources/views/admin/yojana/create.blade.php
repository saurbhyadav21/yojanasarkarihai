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



                    <div class="container-fluid">


                        <div class="card shadow-sm">

                            <div class="card-header">

                                <h4>Add New Scheme</h4>

                            </div>

                            <div class="card-body">

                                <form action="{{ route('yojana.store') }}" method="POST"
                                    enctype="multipart/form-data">

                                    @csrf

                                    <div class="row">

                                        <!-- TITLE -->

                                        <div class="col-md-6 mb-3">

                                            <label class="form-label">

                                                Title

                                            </label>

                                            <input type="text" name="title" id="title" class="form-control"
                                                required>

                                        </div>

                                        <!-- SLUG -->

                                        <div class="col-md-6 mb-3">

                                            <label class="form-label">

                                                Slug

                                            </label>

                                            <input type="text" name="slug" id="slug" class="form-control"
                                                required>

                                        </div>

                                        <!-- CATEGORY -->

                                        <div class="col-md-6 mb-3">

                                            <label class="form-label">

                                                Category

                                            </label>

                                            <select name="category_id" class="form-control">

                                                <option value="">
                                                    Select Category
                                                </option>

                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">

                                                        {{ $category->name }}

                                                    </option>
                                                @endforeach

                                            </select>

                                        </div>

                                        <!-- STATE -->

                                        <div class="col-md-6 mb-3">

                                            <label class="form-label">

                                                State

                                            </label>

                                            <select name="state_id" class="form-control">

                                                <option value="">
                                                    Select State
                                                </option>

                                                @foreach ($states as $state)
                                                    <option value="{{ $state->id }}">

                                                        {{ $state->name }}

                                                    </option>
                                                @endforeach

                                            </select>

                                        </div>

                                        <!-- IMAGE -->

                                        <div class="col-md-12 mb-3">

                                            <label class="form-label">

                                                Featured Image

                                            </label>

                                            <input type="file" name="featured_image" class="form-control">

                                        </div>

                                        <!-- SHORT DESCRIPTION -->

                                        <div class="col-md-12 mb-3">

                                            <label class="form-label">

                                                Short Description

                                            </label>

                                            <textarea name="short_description" rows="3" class="form-control"></textarea>

                                        </div>

                                        <!-- OVERVIEW -->

                                        <div class="col-md-12 mb-3">

                                            <label class="form-label">

                                                Overview

                                            </label>

                                            <textarea name="overview" rows="6" class="form-control"></textarea>

                                        </div>

                                        <!-- BENEFITS -->

                                        <div class="col-md-12 mb-3">

                                            <label class="form-label">

                                                Benefits

                                            </label>

                                            <textarea name="benefits" rows="6" class="form-control"></textarea>

                                        </div>

                                        <!-- ELIGIBILITY -->

                                        <div class="col-md-12 mb-3">

                                            <label class="form-label">

                                                Eligibility

                                            </label>

                                            <textarea name="eligibility" rows="6" class="form-control"></textarea>

                                        </div>

                                        <!-- DOCUMENTS -->

                                        <div class="col-md-12 mb-3">

                                            <label class="form-label">

                                                Documents Required

                                            </label>

                                            <textarea name="documents_required" rows="6" class="form-control"></textarea>

                                        </div>

                                        <!-- APPLICATION PROCESS -->

                                        <div class="col-md-12 mb-3">

                                            <label class="form-label">

                                                Application Process

                                            </label>

                                            <textarea name="application_process" rows="6" class="form-control"></textarea>

                                        </div>

                                        <!-- FINANCIAL BENEFITS -->

                                        <div class="col-md-12 mb-3">

                                            <label class="form-label">

                                                Financial Benefits

                                            </label>

                                            <textarea name="financial_benefits" rows="6" class="form-control"></textarea>

                                        </div>

                                        <!-- IMPORTANT DATES -->

                                        <div class="col-md-12 mb-3">

                                            <label class="form-label">

                                                Important Dates

                                            </label>

                                            <textarea name="important_dates" rows="4" class="form-control"></textarea>

                                        </div>

                                        <!-- STATUS CHECK -->

                                        <div class="col-md-12 mb-3">

                                            <label class="form-label">

                                                Status Check

                                            </label>

                                            <textarea name="status_check" rows="5" class="form-control"></textarea>

                                        </div>

                                        <!-- OFFICIAL WEBSITE -->

                                        <div class="col-md-6 mb-3">

                                            <label class="form-label">

                                                Official Website

                                            </label>

                                            <input type="url" name="official_website" class="form-control">

                                        </div>

                                        <!-- HELPLINE -->

                                        <div class="col-md-6 mb-3">

                                            <label class="form-label">

                                                Helpline

                                            </label>

                                            <input type="text" name="helpline" class="form-control">

                                        </div>

                                        <!-- META TITLE -->

                                        <div class="col-md-12 mb-3">

                                            <label class="form-label">

                                                Meta Title

                                            </label>

                                            <input type="text" name="meta_title" class="form-control">

                                        </div>

                                        <!-- META DESCRIPTION -->

                                        <div class="col-md-12 mb-3">

                                            <label class="form-label">

                                                Meta Description

                                            </label>

                                            <textarea name="meta_description" rows="4" class="form-control"></textarea>

                                        </div>

                                        <!-- STATUS -->

                                        <div class="col-md-12 mb-4">

                                            <label class="form-label">

                                                Status

                                            </label>

                                            <select name="status" class="form-control">

                                                <option value="1">

                                                    Active

                                                </option>

                                                <option value="0">

                                                    Inactive

                                                </option>

                                            </select>

                                        </div>

                                        <!-- BUTTON -->

                                        <div class="col-md-12">

                                            <button type="submit" class="btn btn-success">

                                                Save Scheme

                                            </button>

                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>


                    </div>

                    <script>
                        document.getElementById('title').addEventListener('keyup', function() {

                            let slug = this.value
                                .toLowerCase()
                                .replace(/ /g, '-')
                                .replace(/[^\w-]+/g, '');

                            document.getElementById('slug').value = slug;

                        });
                    </script>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
