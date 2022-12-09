@props(['listing'])

<x-card style="box-shadow: 0 7px 20px rgba(0, 0, 0, 0.2); border: none; overflow: hidden; border-radius: 10px 50px 10px 10px;">  
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
            @php
                if(strlen($listing->description) > 50){
                    $PostDescription = substr($listing->description, 0, 50) . " .........";
                    echo htmlentities($PostDescription); 
                }else{
                echo htmlentities($listing->description);
                }                                
            @endphp
        </p>
        <a 
        class="small commentup py-2 px-3 text-decoration-none bg-success text-white"
        style="
            float: right;
            border-radius: 2px;
        "
        ></i>Ghc {{ $listing->price }}</a
        >

        <a href="/{{ $listing->id }}">
        <span class="btn btn-sm btn-outline-secondary readmore py-2" style="border-radius: 5px 15px;"
            >More Details &rang;&rang;
        </span>
        </a>
    </div>
</x-card>

