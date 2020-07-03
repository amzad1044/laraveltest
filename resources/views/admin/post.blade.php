<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Add new</button></div>

                            <div class="card-body">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th scope="col">Sl</th>
                                      <th scope="col">Title</th>
                                      <th scope="col">Body</th>
                                      <th scope="col">Post Type</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Section</th>
                                      <th scope="col">Image</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @php($i=1)
                                    @foreach($allpost as $post)
                                    <tr>
                                      <th scope="row">{{$i++}}</th>
                                      <td>{{$post->title}}</td>
                                        @if($post->type==1)
                                        <td>{{$post->title}}</td>
                                        @else
                                          <td>
                                            <iframe width="160" height="115" src="<?php echo $post->body;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                          </td>
                                        @endif
                                      <td>
                                        @if($post->type==1)
                                            <span class="badge badge-success">Post</span>
                                        @else
                                            <span class="badge badge-info">Video</span>
                                        @endif
                                      </td>
                                      <td>
                                        @if($post->status==1)
                                            <a href="{{url('/unpublish',[$post->id])}}"><span class="badge badge-success">Published</span></a>
                                        @else
                                            <a href="{{url('/publish',[$post->id])}}" id="pub"><span class="badge badge-warning">Unpublished</span></a>
                                        @endif
                                      </td>
                                      <td>{{$post->section}}</td>
                                      <td><img src="{{asset($post->image)}}" height="50" width="50"></td>


                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form method="POST" action="{{route('savepost')}}" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title">
                <span class="text-danger">{{$errors->has('title') ? $errors->first('title') : ' '}}</span>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">body</label>
                <input type="text" class="form-control" name="body">
                <span class="text-danger">{{$errors->has('body') ? $errors->first('body') : ' '}}</span>
              </div>
              <div class="form-group">
                    <select  class="form-control" name="type">
                        <option value="1">Post</option>
                        <option value="0">Video</option>
                    </select>
                    <span class="text-danger">{{$errors->has('type') ? $errors->first('type') : ' '}}</span>
              </div>

                <div class="form-group row">
                    <label class="control-label col-md-3">Status</label>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-radio1" class="form-check-label ">
                                <input type="radio" name="status" value="1" class="form-check-input">Published
                            </label>
                            <label for="inline-radio2" class="form-check-label ">
                                <input type="radio" id="inline-radio2" name="status" value="0" class="form-check-input">Unpublished
                            </label>
                            <span class="text-danger">{{$errors->has('status') ? $errors->first('status') : ' '}}</span>
                        </div>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-3">Section</label>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-radio1" class="form-check-label ">
                                <input type="radio" name="section" value="1" class="form-check-input">Section 1
                            </label>
                            <label for="inline-radio2" class="form-check-label ">
                                <input type="radio" id="inline-radio2" name="section" value="2" class="form-check-input">Section 2
                            </label>
                            <span class="text-danger">{{$errors->has('section') ? $errors->first('section') : ' '}}</span>
                        </div>

                    </div>
                </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" name="image">
                <span class="text-danger">{{$errors->has('image') ? $errors->first('image') : ' '}}</span>
              </div>


              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>

    </div>
  </div>
</div>


    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- 
    <script type="text/javascript">
        let myifrm = document.getElementById("ifrm");
        myifrm.src = "https://www.youtube.com/embed/O1gaRriWVPk";
    </script> -->

</body>
</html>
