@props(['relatedListings', 'allCategory', 'allUsers'])

<style>
    .card {
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
      border: none;
    }
    .imageups {
      opacity: 0.8;
      transition: 0.3s;
    }
    .media:hover .imageups {
      opacity: 1;
    }
  </style>

<x-card class="mt-1">
    <div class="card-header bg-dark text-white">
      @forelse ($relatedListings as $relatedListing)
        <div
          class="lead"
          style="text-align: center; text-transform: uppercase"
        >
          
            @foreach ($allUsers as $allUser)
              @if ($allUser->id == $relatedListing->user_id)
              <span> <span class="text-capitalize text-warning">Owner: </span>
                {{ $allUser->name }}
              </span><br>
              <span> <span class="text-capitalize text-warning">Contact: </span>
                {{ $allUser->contact }}
              </span>
              @endif
            @endforeach
          
        </div>
      </div>

      <div class="card-body">
        <div class="media">
          <a href="/{{ $relatedListing->id }}"
            ><img
              src="{{ asset('storage/'. $relatedListing->image) }}"
              class="d-block img-fluid align-self-start float-start me-2 imageups"
              width="90"
              style="object-fit:initial; height: 75px"
              alt=""
          />
        </a>
          <div class="media-body">
            <a href="/{{ $relatedListing->id }}" style="text-decoration: none"
              ><h6
                class="lead text-secondary m-0 fw-normal text-capitalize"
              >
                {{ substr($relatedListing->title, 0, 15) . '...' }}
              </h6></a
            >
            <small class="small text-muted">
              {{ date('M d, Y', strtotime($relatedListing->created_at)) }}
            </small>
            <p class="small">{{ substr($relatedListing->description, 0, 20) . " ......"; }}</p>

          </div>
        </div>

        @empty
            <p>No related Post found</p>
        @endforelse

        
      </div>
</x-card>

<br>

{{-- <x-card>
    <div class="card-header bg-dark text-light">
        <h2
          class="lead"
          style="text-align: center; text-transform: uppercase"
        >
          Categories
        </h2>
      </div>

      <div class="card-body">
        @foreach ($allCategory as $allCat)
          <a href="/{{ $allCat->id }}" style="text-decoration: none; color: #333"
            >&hearts; <span class="heading">{{ $allCat->category }}</span></a
          ><br />
        @endforeach
      </div>
</x-card>

<br> --}}

{{-- <x-card class="mb-5">
    <div class="card-header bg-dark text-light">
        <h2
          class="lead"
          style="text-align: center; text-transform: uppercase"
        >
          Follow Me
        </h2>
    </div>

    <div class="card-body">
        <div class="text-center">
          <a href="#"
            ><img
              src="images/facebook.png"
              width="30px"
              title="facebook"
              alt="facebook"
              class="mx-2"
          /></a>
          <a href="#"
            ><img
              src="images/instagram.png"
              width="30px"
              title="instagram"
              alt="instagram"
              class="mx-2"
          /></a>
          <a href="#"
            ><img
              src="images/twitter.png"
              width="30px"
              title="twitter"
              alt="twitter"
              class="mx-2"
          /></a>
          <a href="#"
            ><img
              src="images/youtube.png"
              width="30px"
              title="youtube"
              alt="youtube"
              class="mx-2"
          /></a>
        </div>
      </div>
</x-card> --}}