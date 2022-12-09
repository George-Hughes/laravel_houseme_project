 <!-- Header Start -->
 <header
 class="header w-100 py-5"
 style="
   background: linear-gradient(
       to bottom left,
       rgba(0, 0, 0, 0.4),
       rgba(0, 0, 0, 0.6)
     ),
     url('images/search_bg.jpeg');
     /* url('images/red_bowers_and_wilkins_p3_headphones-wallpaper-1400x1050.jpg'); */
     background-size: cover;
     background-position: center;
     background-attachment:fixed;
     background-repeat: no-repeat;
 "
>
 <div class="container py-5">
   <h1 class="display-5 text-center fw-bold text-white mt-4">
     Find Your Next Housing!
   </h1>
   <form action="" class="d-flex mt-5 mb-3">
     <input
       type="text"
       name="search"
       placeholder="Search housing here ...."
       value="{{ old('search') }}"
       class="form-control me-1 py-2 px-4 text-light"
       style="background: none; backdrop-filter: blur(15px)"
     />
     <button
       type='submit'
       class="btn btn-dark px-4"
     >
       Search
     </button>
   </form>
 </div>
</header>
<!-- Header End -->

