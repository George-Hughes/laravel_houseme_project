@props(['relatedListings', 'listing'])

<!-- Related Posts start -->
<x-card class="w-100 mb-4">
  <div class="card-header bg-dark text-white">
      <div
          class="lead"
          style="text-align: center; text-transform: uppercase"
        >
          Related Posts {{ $listing->category }}
      </div>
    </div>
    <div class="card-body">
      <div class="row">
      @forelse ($relatedListings as $relatedListing)
        <div class="col-lg-6">
        <div class="media my-1">
          <a href="/{{ $relatedListing->id }}"
            ><img
              src="{{ $relatedListing->image ? asset('storage/' . $relatedListing->image) : asset('images/default-li.jpg') }}"
              class="d-block img-fluid align-self-start float-start me-2 imageups"
              width="90"
              style="object-fit:initial; height: 75px"
              alt=""
          />
        </a>
          <div class="media-body">
            <a href="/{{ $relatedListing->id }}" style="text-decoration: none"
              ><h6
                class="lead text-primary m-0 fw-normal text-capitalize"
              >
                {{ substr($relatedListing->title, 0, 20) . '...' }}
              </h6></a
            >
            <small class="small text-muted">
              {{ date('M d, Y', strtotime($relatedListing->created_at)) }}
            </small>
            <p class="small">{{ substr($relatedListing->description, 0, 25) . " ......"; }}</p>
          </div>
        </div>
        <hr class="mt-0 featurette-divider">
      </div>
      @empty
      <p>No related posts available</p>
      @endforelse                        
    </div>
    </div>
</x-card>    
<!-- Related Posts end -->

