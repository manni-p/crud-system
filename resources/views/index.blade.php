@extends('partials.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="results-container" data-page="1">
                @if($json)
                @foreach($json as $result)
                <div class="result-inside">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12">
                            <img src="http://via.placeholder.com/350x250">
                        </div>
                        <div class="col-lg-8 col-sm-12">
                            <div class="information">
                                <div class="name">
                                    <p>Name: {{ $result->name }}</p>
                                    <p>Description: {{ $result->description }}</p>
                                    <p>Price: {{ $result->price }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
                @else
                    No Results
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
