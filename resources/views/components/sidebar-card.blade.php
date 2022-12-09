{{-- @props(['relatedListings', 'allCategory', 'allUsers']) --}}
@props(['listing', 'allCategory', 'allUsers'])

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
        <div
          class="lead"
          style="text-align: center; text-transform: uppercase"
        >
            @foreach ($allUsers as $allUser)
            @if ($allUser->id == $listing->user_id)
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d15883.354872717673!2d-0.24233391688091346!3d5.590838340834297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m5!1s0xfdf9b3e15562c2b%3A0x4103ee5b7c4e1a58!2sCircle%20Mall%20Ghana%2C%20Accra!3m2!1d5.5912177!2d-0.2140886!4m3!3m2!1d5.5931858!2d-0.25279019999999996!5e0!3m2!1sen!2sgh!4v1666638123428!5m2!1sen!2sgh" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, alias magnam. Fugit laborum ducimus nobis exercitationem, veniam corporis atque ex debitis placeat labore? Saepe vel minus ea aspernatur minima atque.
        
      </div>
</x-card>
<br>

<x-card class="mt-1">
    <div class="card-header bg-dark text-white">
        <div
          class="lead"
          style="text-align: center; text-transform: uppercase"
        >
          Book Appointment
        </div>
      </div>

      <div class="card-body">
        {{-- <div class="media">
          
        </div> --}}
        <h4 class="h6 text-center">Fill in the form to book an appointment</h4>
        <form action="/bookings" method="POST" class="form">
          @csrf
          <input type="text" placeholder="full name" name="name" class="form-control mb-1">
          @error('name')
              <div class="text-danger">{{ $message }}</div>
          @enderror
          <input type="text" placeholder="email" name="email" class="form-control mb-1">
          @error('email')
              <div class="text-danger">{{ $message }}</div>
          @enderror
          <input type="text" placeholder="contact" name="contact" class="form-control mb-1">
          @error('contact')
              <div class="text-danger">{{ $message }}</div>
          @enderror
          <input type="text" value="{{ $listing->id }}" name="listing_id" class="form-control mb-1" hidden>
          <input type="text" value="{{ $listing->user_id }}" name="user_id" class="form-control mb-1" hidden>
          <textarea name="comment" class="form-control" id="" cols="20" rows="5" placeholder="Leave any comments here...."></textarea>
          @error('comment')
              <div class="text-danger">{{ $message }}</div>
          @enderror
          <br>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        
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