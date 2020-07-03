@extends('front.master')
@section('body')
                <div class="col-lg-6">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Section 1</h6>
                </div>
                <div class="card-body">
                  <div class="row">

                    <div class="col-lg-6 mb-4">
                        @foreach($post_big_sec1 as $Bigpost)
                        <a href="{{route('single',['id' => $Bigpost->id])}}">
                        <div style="position: relative; left: 0; top: 0;">
                            <img src="{{asset($Bigpost->image)}}" height="100" width="200" class="image">
                            @if($Bigpost->type==0)
                            <span class="icon"><i class="fa fa-play"></i></span>
                            @endif
                        </div>
                        <h4>{{$Bigpost->title}}</h4>
                        </a>    
                        @endforeach

                    </div>

                    <div class="col-lg-6 mb-4">
                        @foreach($post_sec1 as $sec1)
                        <div>
                            <a href="{{route('single',['id' => $sec1->id])}}">
                            <div style="position: relative; left: 0; top: 0;">
                                <img src="{{asset($sec1->image)}}" height="50" width="70">
                                @if($sec1->type==0)
                                <span class="iconsmall"><i class="fa fa-play"></i></span>
                                @endif
                            </div>
                            <p>{{$sec1->title}}</p>
                            </a>
                        </div>
                        @endforeach
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Section 2</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12 mb-4">
                        @foreach($post_big_sec2 as $Bigpost)
                        <a href="{{route('single',['id' => $Bigpost->id])}}">
                        <div style="position: relative; left: 0; top: 0;">
                            <img src="{{asset($Bigpost->image)}}" height="100" width="200">
                            @if($Bigpost->type==0)
                            <span class="icons1"><i class="fa fa-play"></i></span>
                            @endif
                        </div>
                        <h4>{{$Bigpost->title}}</h4>
                        </a>
                        @endforeach
                    </div>
                  </div>

                  <div class="row">
                     <div class="col-lg-12 mb-4">
                        @foreach($post_sec2 as $sec2)
                        <div>
                            <a href="{{route('single',['id' => $sec2->id])}}">
                            <div style="position: relative; left: 0; top: 0;">
                                <img src="{{asset($sec2->image)}}" height="50" width="70">
                                @if($sec2->type==0)
                                <span class="icons2"><i class="fa fa-play"></i></span>
                                @endif
                            </div>
                            <p>{{$sec2->title}}</p>
                            </a>
                        </div>
                        @endforeach
                    </div>
                  </div>

                </div>
              </div>
            </div>
@endsection