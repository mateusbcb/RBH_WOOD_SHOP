@extends('layouts.default')

@section('title', 'Create portifolio item')

@section('content')

    <section data-bs-version="5.1" class="form4 cid-tj8W7ijXH2 mbr-fullscreen" id="form4-n">
        <div class="container">
            <div class="row content-wrapper justify-content-center">

                <div class="col-lg-5 offset-lg-1 bg-white mb-4 mbr-form" data-form-type="formoid">
                    <form action="{{ route('portfolio.update', ['id' => $portfolio->id]) }}" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler" data-form-title="Form Name">
                        <div class="dragArea row">
                            @method('PATCH')
                            @csrf

                            <div class="col-12 form-group mb-3 shadow-lg py-2" data-for="textarea">
                                <div class="mb-2">
                                    <label for="cover">Cover image</label>
                                </div>
                                <p class="text-muted fs-6">
                                    Project reference image
                                </p>
                                <input type="file" class="form-control" name="cover" value="{{ asset('storage/'.$portfolio->cover) }}" accept="image/*" id="cover">
                            </div>

                            <div class="col-12 form-group mb-3 shadow-lg py-2" data-for="textarea">
                                <div class="mb-2">
                                    <label for="images">project images</label>
                                </div>
                                <p class="text-muted fs-6">
                                    Insert the images referring to the project. Select all images from the same project
                                </p>
                                <input type="file" class="form-control" name="images[]" multiple accept="image/*" id="images">
                            </div>

                            <div class="col-md col-sm-12 form-group mb-3 shadow-lg py-2" data-for="title">
                                <div class="mb-2">
                                    <label for="title">Title</label>
                                </div>
                                <input type="text" name="title" placeholder="Title" data-form-field="title" class="form-control" value="{{ $portfolio->title }}" id="title">
                            </div>

                            <div class="col-12 form-group mb-3 shadow-lg py-2" data-for="url">
                                <div class="mb-2">
                                    <label for="category">Category</label>
                                </div>
                                <p class="text-muted fs-6">
                                    Type a category and press the Enter key, or select from the list
                                </p>
                                <select name="category" name="category" data-form-field="category" class="form-control" value="" id="category">
                                    @if(isset($categories))
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->category }}" {{ $category->category == $portfolioCategory->category ? 'selected' : '' }}>{{ $category->category }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="col-md col-sm-12 form-group mb-3 shadow-lg py-2" data-for="client">
                                <div class="mb-2">
                                    <label for="client">Client</label>
                                </div>
                                <p class="text-muted fs-6">
                                    Inform the customer if possible
                                </p>
                                <input type="text" name="client" placeholder="Client" data-form-field="client" class="form-control" value="{{ $portfolio->cient }}" id="client">
                            </div>

                            <div class="col-12 form-group mb-3 shadow-lg py-2" data-for="url">
                                <div class="mb-2">
                                    <label for="tags">Tags</label>
                                </div>
                                <p class="text-muted fs-6">
                                    Type as many tags as necessary, separating them with a comma "," or with the Enter key
                                </p>
                                <select name="tags[]" data-form-field="tags" class="form-control" multiple="multiple" id="tags">
                                    @foreach($allTags as $tag)
                                        <option value="{{ $tag }}" @if( strstr($tag, '_') ) selected @endif>{{ str_replace('_', '', $tag) }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12 form-group mb-3 shadow-lg py-2" data-for="descrition">
                                <div class="mb-2">
                                    <label for="descrition">Descrition</label>
                                </div>
                                <textarea name="descrition" placeholder="Descrition" data-form-field="descrition" class="form-control" id="descrition">{{ $portfolio->descrition }}</textarea>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                                <button type="submit" class="btn btn-primary display-4">Send</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-5 offset-lg-1 border border-1 col-12">
                    <div class=" border border-1 mt-4">
                        <h2 class="text-center">
                            Cover image preview
                        </h2>
                        <hr>
                        <div id="preview_cover" class="img_prev d-flex justify-content-center">
                            <img src="{{ asset('storage/'.$portfolio->cover) }}" alt="">
                        </div>
                    </div>

                    <div class=" border border-1 mt-4 d-flex justify-content-center flex-column">
                        <h2 class="text-center">
                            Preview of project images
                        </h2>
                        <hr>
                        <div id="preview" class="img_prev">
                            @foreach (json_decode($portfolio->images) as $image)
                                <img src="{{ asset($image) }}" alt="">
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
