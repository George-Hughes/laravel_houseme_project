@extends('layout')

@section('content')
    @php
        $currentCategory = $listing->category;
    @endphp

    {{-- Style --}}
    <style>
        .imagediv {
            overflow: hidden;
            max-height: 100%;
        }
    </style>

    {{-- Search --}}
    @include('partials._search')

     <!-- MAIN AREA -->
     <div class="container mt-5 mb-5">
        <div class="row">
            <!-- MAIN NAV START -->
          <div class="col-lg-12">
            <div class="row">
                {{-- Full Listing --}}
                <div class="col-lg-9 results pb-5">
                    <x-card style="border-radius: 10px 10px 10px 10px;">  
                        <div style="position: relative;" class="imagediv">
                            <img
                            src="{{ $listing->image ? asset('storage/' . $listing->image) : asset('images/default-li.jpg') }}"
                            class="image img-fluid card-img-top imageup"
                            />
                            <a
                            href="/?category={{ $listing->category }}"
                            class="btn btn-dark btn-sm text-uppercase px-3 categoryup"
                            style="
                                position: absolute;
                                top: 5%;
                                left: 3%;
                                background: none;
                                background: linear-gradient(
                                to bottom right,
                                rgba(0, 0, 0, 0.5),
                                rgba(0, 0, 0, 0.7)
                                );
                                backdrop-filter: blur(10px);
                                border: none;
                            "
                            >{{ $listing->category }}</a
                            >
                        </div>
                        <div class="card-body">
                            <h6 class="card-title px-2 text-dark text-uppercase fw-normal">
                            {{ $listing->title }}
                            </h6>
                            <small class="text-muted px-2"
                            >Location
                            <span class="text-dark"
                                >
                                <a style="text-decoration: none" href="#"
                                >{{ $listing->location }}</a>
                            </span>
                    
                            <span style="font-family: 'source sans pro'; float: right;" class="px-2"
                            ><i class="far fa-clock me-1 text-black-50 small"></i>
                            {{ date('M d, Y', strtotime($listing->created_at)) }}
                            </span>
                            </small
                            >
                    
                            <hr />
                            <p class="card-text">
                                {{ $listing->description }}
                            </p>
                            <a 
                            class="small commentup py-2 px-3 text-decoration-none bg-success text-white"
                            style="
                                float: right;
                                border-radius: 2px;
                            "
                            ></i>Ghc {{ $listing->price }}</a
                            >
                    
                            <a href="/">
                            <span class="btn btn-sm btn-outline-secondary readmore py-2" style="border-radius: 5px 15px;"
                                >&lang; &lang; Back to Home
                            </span>
                            </a>
                        </div>
                    </x-card>
                    {{-- Full Listing End --}}
                </div>

                {{-- Side nave --}}
                <div class="col-lg-3">
                  <x-sidebar-card 
                    {{-- :relatedListings="$relatedListings" --}}
                    :listing="$listing"
                    :allCategory="$allCategory"
                    :allUsers="$allUsers"
                  />
                </div>
                {{-- Side nav ends --}}

            </div>            
          </div>
          <!-- MAIN NAV ENDS -->
  
          <!-- Related Posts start -->
          <div class="col-lg-9 mb-5">
              <x-related-posts :relatedListings="$relatedListings" :listing="$listing" />
          </div>
          <!-- Related Posts end -->
  
        </div>
      </div>
      <!-- MAIN AREA END -->

      <!-- FOOTER -->
      @include('partials._footer')
      <!-- FOOTER END -->

@endsection

