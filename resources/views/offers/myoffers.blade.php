@extends('layouts.app')

@section('content')
    <section class=" container">
        @if(Session::has('success'))
            <div class=" alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <h1>My offers</h1>

        @if( count($offers) > 0)
            <div class="row">

                @foreach ($offers as $offer)
                    @if($offer -> user_id == Auth::user()->id)
                        <div class="col-lg-4 text-center mb-3">
                            <div class="border border-info rounded py-5 px-3 shadow offer-card">
                                <div class="layout ">
                                    <p class="text-white"> {{$offer -> details}} </p>
                                    <i class="fa fa-heart layout-icon "></i>
                                    <i class="fa fa-shopping-basket layout-icon "></i>
                                </div>
                                <h4>{{$offer -> name}} </h4>
                                <small>{{$offer -> price}}</small>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        @endif

    </section>
    {{-- <main>
        @yield('offercontent')
    </main> --}}
@endsection
