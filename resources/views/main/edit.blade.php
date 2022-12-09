@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mx-auto mt-2 mt-sm-5 pb-5">
                <form action="/{{ $listing->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text form-control h-100">🚩</span>
                            </div>
                            <select name="category" class="form-control select">
                                @foreach ($allCategory as $allCat)
                                    <option value="{{ $allCat->category }}">{{ $allCat->category }}</option>
                                @endforeach
                            </select>
                        </div>

                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text form-control h-100">🏠</span>
                            </div>
                            <input
                              type="text"
                              class="form-control"
                              name="title"
                              placeholder="Example: Three bedrooms"
                              value="{{ $listing->title }}"
                            />
                        </div>

                        @error('location')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text form-control h-100">📌</span>
                            </div>
                            <input
                              type="text"
                              class="form-control"
                              name="location"
                              placeholder="Example: Accra, Tesano"
                              value="{{ $listing->location }}"
                            />
                        </div>

                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text form-control h-100">💲Ghc</span>
                            </div>
                            <input
                              type="number"
                              class="form-control"
                              name="price"
                              placeholder="Example: 1000"
                              value="{{ $listing->price }}"
                            />
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text form-control h-100">🖼️</span>
                            </div>
                            <input
                              type="file"
                              class="form-control"
                              name="image"
                            />
                        </div>

                        <img
                            src="{{ $listing->image ? asset('storage/' . $listing->image) : asset('images/default-li.jpg') }}"
                            class="image img-fluid card-img-top imageup"
                            />

                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label for="description"><span class="fw-bold">Description -</span> <span class="text-black-50">(Example: color, size of room, etc)</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text form-control h-100">📜</span>
                            </div>
                            <textarea 
                                class="form-control" 
                                name="description" 
                                placeholder=""
                                cols="30" 
                                rows="10">
                                {{ $listing->description }}
                            </textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-2">
                                <a href="/{{ $listing->id }}" class="btn btn-warning w-100"><i class="fas fa-arrow-left"></i> Back </a>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <button type="submit" name="submit" class="btn btn-success w-100"><i class="fas fa-check"></i> Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

