@extends('layout')

@section('content')
    <style>
        .imgManage{
            max-height: 80px
        }
        a{
            text-decoration: none
        }
    </style>

    <div class="container overflow-auto">
        <h1 class="mt-3">Manage Posts</h1>

        @php
            $numberId = 1;
        @endphp

        <table class="table table-striped mt-4">
            <tr class="table-dark fw-bold fs-5">
                <td>
                    #
                </td>
                <td>
                    Title
                </td>
                <td>
                    Price
                </td>
                <td>
                    Image
                </td>
                <td>
                    Action
                </td>
            </tr>
            @forelse ($listings as $listing)
            <tr>
                <td>
                    {{ $numberId++; }}
                </td>
                <td>
                    <a href="/{{ $listing->id }}">
                        {{ $listing->title }}
                    </a>
                </td>
                <td>
                    {{ $listing->price }}
                </td>
                <td>
                    <img 
                        class="img img-fluid imgManage"
                        src="{{ asset('storage/'. $listing->image) }}" 
                        alt="{{ $listing->image }}">
                </td>
                <td>
                    <div class="d-inline-flex">
                        <a href="/{{ $listing->id }}/edit" class="btn-sm btn-warning m-1">
                            <i class="fas fa-edit"></i>
                            edit
                        </a>
                        <form action="/{{ $listing->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn-sm btn-danger m-1">
                                <i class="fas fa-trash"></i>
                                delete
                            </button>
                        </form>
                        <a href="/{{ $listing->id }}" class="btn-sm btn-info m-1">
                            <i class="fas fa-tv"></i>
                            preview
                        </a>
                    </div>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="4">
                        <p>No posts found</p>
                    </td>
                </tr>
            @endforelse
        </table>

        {{-- For Bookings --}}
        <h1 class="mt-5">Manage Bookings</h1>
        <table class="table table-striped mt-4">
            <tr class="table-dark fw-bold fs-5">
                <td>
                    #
                </td>
                <td>
                    name
                </td>
                <td>
                    Email
                </td>
                <td>
                    Contact
                </td>
                <td>
                    Comment
                </td>
                <td>
                    House Booked
                </td>
            </tr>
            @forelse ($bookings as $booking)
            <tr>
                <td>
                    {{ $numberId++; }}
                </td>
                <td>
                    {{ $booking->name }}
                </td>
                <td>
                    {{ $booking->email }}
                </td>
                <td>
                    {{ $booking->contact }}
                </td>
                <td>
                    {{ $booking->comment }}
                </td>
                <td>
                    <a class="btn btn-sm btn-info" href="/{{ $booking->id }}">
                        View House
                    </a>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="4">
                        <p>No posts found</p>
                    </td>
                </tr>
            @endforelse
        </table>
    </div>

    {{-- Footer --}}
    @include('partials._footer')

@endsection

