@extends('layouts.app')

@section('content')
    <div class="container">
            
        @foreach (array_chunk($companies, 3, true) as $company)
                  <div class="row">
                      @foreach ($company as $item)
                          <div class="col-md-4" style="text-align: center; margin-bottom: 40px;">
                             <a href="/{{ $item['slug'] }}">
                                @if(empty($item['image']))
                                    <img style="margin: auto; height: 150px;" class="img-responsive" src="/image/default-logo.png" / >
                                @else
                                    <img style="margin: auto; height: 150px;"  class="img-responsive" src="images/companies/{{ $item['image'] }}" / >
                                @endif
                            </a>
                             <a href="/{{ $item['slug'] }}"><h2> {{$item['title']}} </h2></a>
                          </div>
                      @endforeach
                  </div>
        @endforeach
     </div>
@endsection