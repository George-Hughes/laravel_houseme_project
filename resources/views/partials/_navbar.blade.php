 <!-- NAV BAR -->
 <nav
 class="navbar navbar-expand-lg bg-dark navbar-dark"
 aria-label="Fifth navbar example"
 style="box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2)"
>
 <div class="container">
   <a class="navbar-brand" href="/">HOUSEME</a>
   <button
     class="navbar-toggler"
     type="button"
     data-bs-toggle="collapse"
     data-bs-target="#navbarsExample05"
     aria-controls="navbarsExample05"
     aria-expanded="false"
     aria-label="Toggle navigation"
   >
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarsExample05">
     <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
       <li class="nav-item">
         <a href="/" class="nav-link active mx-1" aria-current="page"
           ><i class="fas fa-home"></i> Home</a
         >
       </li>
       <li class="nav-item dropdown">
         <a
           class="nav-link dropdown-toggle"
           href="#"
           id="dropdown05"
           data-bs-toggle="dropdown"
           aria-expanded="false"
           ><i class="fas fa-list mx-1"></i> Categories</a
         >
         <ul class="dropdown-menu" aria-labelledby="dropdown05">
           <li class="nav-list">
             <a href="#" class="ps-2"
               ><i class="fas fa-check-circle text-dark"></i>
               <span class="heading text-dark">Hostel</span></a
             >
           </li>
         </ul>
       </li>
       <li class="nav-item">
         <a href="#" class="nav-link"
           ><i class="fas fa-info mx-1"></i> About us</a
         >
       </li>
       <li class="nav-item">
         <a href="#" class="nav-link"
           ><i class="fas fa-envelope mx-1"></i> Contact us</a
         >
       </li>
     </ul>
     @auth
     <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a href="/manage" class="nav-link text-primary"
          ><i class="fas fa-edit mx-1"></i> Manage Posts</a
        >
      </li>
      <li class="nav-item">
        <form action="/logout" method="POST">
          @csrf
          <button class="btn text-danger text-danger"
          ><i class="fas fa-arrow-right mx-1"></i> Logout</button>
        </form>
      </li>
    </ul>

      @else

      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="/register" class="nav-link text-danger"
            ><i class="fas fa-user-plus mx-1"></i> Register</a
          >
        </li>
        <li class="nav-item">
          <a href="/login" class="nav-link text-success"
            ><i class="fas fa-key mx-1"></i> Login</a
          >
        </li>
      </ul>
     @endauth
   </div>
 </div>
</nav>
<!-- NAVBAR END -->