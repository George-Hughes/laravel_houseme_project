@extends('layout')

@section('content')
  <style>
    .w-5{
        display: none;
    }
  </style>

    <!-- Header Start -->
    @include('partials._search')
    <!-- Header End -->

    <!-- MAIN AREA -->
    <div class="container mt-5 mb-5">
      <div class="row">
          <!-- MAIN NAV START -->
        <div class="col-lg-9">
          <div class="row">
            @forelse ($listings as $listing)
              <div class="col-lg-4 results pb-5">
                  <x-listing-card :listing="$listing"/>
              </div>
            @empty
              <p>No listing found</p>  
            @endforelse

             {{-- Pagination --}}
            <div class="mb-3 p-4 pagination-lg">
              {{ $listings->links() }}
            </div>
            {{-- Pagination end --}}
            
          </div>            
        </div>
        <!-- MAIN NAV ENDS -->

        {{-- Sidenav --}}
        <div class="col-lg-3">
          @include('partials._sidebar')
        </div>
        {{-- End Sidenav --}}

      </div>
    </div>
    <!-- MAIN AREA END -->

    <!-- FOOTER -->
    @include('partials._footer')
    <!-- FOOTER END -->
@endsection



