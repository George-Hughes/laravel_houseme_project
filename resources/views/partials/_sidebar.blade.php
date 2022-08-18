<!-- SIDE AREA START -->
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
  <!-- SIDE AREA START -->
  <div class="card mt-1">
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
          <a href="/?category={{ $allCat->category }}" style="text-decoration: none; color: #333"
            class="m-0 p-0"
            >&hearts; <span class="m-0 p-0 text-capitalize">{{ $allCat->category }}</span></a
          ><hr>
      @endforeach
    </div>
  </div>
  <br />
  <div class="card">
    <div class="card-body">
      <div class="media">
        <h4 class="text-center">Add a Post</h4>
        <a class="btn btn-primary w-100" href="/create">Add Post</a>
        <p class="m-auto text-center mt-2"><span class="text-primary">Login</span> to add a post or <span class="text-warning">create an account</span> to get started!</p>
      </div>
    </div>
  </div>
  <br />
  <div class="card mb-5">
    <div class="card-header bg-dark text-light">
      <h2
        class="lead"
        style="text-align: center; text-transform: uppercase"
      >
        Follow Us On
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
  </div>
  <!-- START AREA ENDS -->