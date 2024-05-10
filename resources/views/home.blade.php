@extends('layout.main')

@section('content')

    <div class="container-main">
        @foreach ( $products as $product)
        <div class="card">
            <div class="card-img-container" >
              <img src="{{Vite::asset('resources/img/' . $product['frontImage']) }}" alt="1" class="img-a">
              <img src="{{Vite::asset('resources/img/' . $product['backImage']) }}" alt="1b" class="img-b">
               <span class="hearts" {{--  :class="{ isFav }" @click="isFav = !isFav" --}}>&hearts;</span>
              {{--<span class="sale" v-if="discountValue">{{discountValue}}</span>
              <span class="sustain" v-if="sustainabilityBadge">{{sustainabilityBadge}}</span>--}}
            </div>
            <div class="caption">
              <h5>{{$product['brand']}}</h5>
              <h3>{{$product['name']}}</h3>
              {{-- <span class="price">{{finalPrice}} &euro;</span> --}}
              <span class="full-price" {{--v-if="finalPrice != fullPrice"--}}>{{$product['price']}}&euro;</span>
            </div>
          </div>
        @endforeach



    </div>

@endsection
