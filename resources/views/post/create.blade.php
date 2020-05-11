@extends("layouts.app")
@section('content')
    <div class="container-fluid " >
        <div class="row">
{{--           ------------------------------------- leftside-start---------------------------------------------}}
            <div class="col-7 col-md-3 p-0 vh-100 leftside pb-3">
                <div id="mySidenav" class="sidenav pt-0  bg-light" style="overflow-y: scroll; margin-top: 60px; z-index: 1;">
                    <div class="accordion px-1" id="accordionExample"  >
                        <div class="m-2">
{{--                            <h5 class="font-weight-bolder text-danger m-3">CORE</h5>--}}
                            <div class="list-group">
                                <li class="list-group-item d-flex shadow-sm align-items-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                                    <img src="{{asset('/img/user.png')}}" style="width: 40px; height: 40px; opacity: 0.9;"  class="rounded-circle" alt="">
                                    <span> &nbsp; &nbsp; {{ Auth::user()->name }}</span>
{{--                                    <span class="badge badge-primary badge-pill">2</span>--}}
                                </li>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <ul class="list-group">
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-lock-open fa-fw text-danger"></i>  Logout</li>
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-user-circle fa-fw text-danger"></i>  My Acccount</li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="m-2">
                            <h5 class="font-weight-bolder text-danger m-3">INTERFACE</h5>
                            <div class="list-group ">
                                <li class="list-group-item d-flex shadow-sm  justify-content-between align-items-center" data-toggle="collapse" data-target="#c2" aria-expanded="true">
                                    <span><i class="fas fa-flag text-danger fa-fw"></i> Pages</span>
                                    <span class="badge badge-primary badge-pill">3</span>
                                </li>
                            </div>
                            <div id="c2" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <ul class="list-group">
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="list-group ">
                                <li class="list-group-item d-flex shadow-sm  justify-content-between align-items-center" data-toggle="collapse" data-target="#c3" aria-expanded="true">
                                    <span><i class="fas fa-user-friends text-danger fa-fw"></i> Groups</span>
                                    <span class="badge badge-primary badge-pill">3</span>
                                </li>
                            </div>
                            <div id="c3" class="collapse " aria-labelledby="headingThree" data-parent="#accordionExample">
                                <ul class="list-group">
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="list-group ">
                                <li class="list-group-item d-flex shadow-sm  justify-content-between align-items-center" data-toggle="collapse" data-target="#c4" aria-expanded="true">
                                    <span><i class="fas fa-calendar-check text-danger fa-fw"></i> Events</span>
                                    <span class="badge badge-primary badge-pill">3</span>
                                </li>
                            </div>
                            <div id="c4" class="collapse " aria-labelledby="headingFour" data-parent="#accordionExample">
                                <ul class="list-group">
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="list-group">
                                <li class="list-group-item d-flex shadow-sm  justify-content-between align-items-center" data-toggle="collapse" data-target="#c5" aria-expanded="true">
                                    <span><i class="fas fa-user-tag text-danger fa-fw"></i> Friends</span>
                                    <span class="badge badge-primary badge-pill">5</span>
                                </li>
                            </div>
                            <div id="c5" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <ul class="list-group">
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="list-group">
                                <li class="list-group-item d-flex shadow-sm  justify-content-between align-items-center" data-toggle="collapse" data-target="#c6" aria-expanded="true">
                                    <span><i class="fas fa-video text-danger fa-fw"></i> Videos</span>
                                    <span class="badge badge-primary badge-pill">5</span>
                                </li>
                            </div>
                            <div id="c6" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                <ul class="list-group">
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-2">
                            <h5 class="font-weight-bolder text-danger m-3">Favourites</h5>
                            <div class="list-group">
                                <li class="list-group-item d-flex shadow-sm  justify-content-between align-items-center" data-toggle="collapse" data-target="#c7" aria-expanded="true">
                                    <span><i class="fas fa-user-friends text-danger fa-fw"></i> Groups</span>
                                    <span class="badge badge-primary badge-pill">2</span>
                                </li>
                            </div>
                            <div id="c7" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                <ul class="list-group">
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="list-group">
                                <li class="list-group-item d-flex shadow-sm  justify-content-between align-items-center" data-toggle="collapse" data-target="#c8" aria-expanded="true">
                                    <span><i class="fas fa-flag text-danger fa-fw"></i> Pages</span>
                                    <span class="badge badge-primary badge-pill">2</span>
                                </li>
                            </div>
                            <div id="c8" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                <ul class="list-group">
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                    <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
{{--           ------------------------------------- leftside-end---------------------------------------------}}

{{--           ------------------------------------- rightside-start---------------------------------------------}}

            <div class="col-12 col-md-9 rightside bg-light vh-100 pt-3 " style="overflow-y: scroll; ">
                <div class="container pt-5" >
                    <div class="row justify-content-around">
                        <div class="col-12">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('status'))
                                <p class="alert alert-success">
                                    {{ session('status') }}
                                </p>
                            @endif
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @error('description')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6 ml-lg-5">
                            <div class="col-12 mb-3">
                                <div class="card shadow">
                                    <div class="card-body d-flex flex-wrap">
                                        <div class="col-12 p-0 d-flex align-items-center">
                                            <img src="{{asset('/img/user.png')}}" style="width: 16%; height: 60px; opacity: 0.9;"  class="rounded-circle" alt="">&nbsp;&nbsp;
                                            <input type="text" onclick="post()" name="post" class="form-control " placeholder="What is on your mind?..." style="width: 84%; height: 50px; border-radius: 40px; background: rgba(0,0,0,0.07)">
                                        </div>
                                    </div>
                                </div>
                            </div>
{{-----------------------------------------POst List start--------------------------------------------}}
{{--                            {{$lists}}--}}
{{--                            {{$photos->location}}--}}

                            @if(!$lists->count())
                                <p class="alert alert-warning mt-2 w-100">
                                    There is nothing here.
                                </p>
                            @else
                                @foreach($lists as $l)
                                    <div class="col-12 mb-3">
                                        <div class="card shadow">
                                            <div class="card-header bg-light d-flex">
                                                <img src="{{asset('/img/user.png')}}" style="width: 50px; height: 50px; opacity: 0.9;"  class="rounded-circle" alt="">&nbsp;&nbsp;
                                                <div>
                                                    <span>{{ Auth::user()->name }}</span><br>
                                                    <small class="text-muted">{{$l->created_at}}</small>
                                                </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="col-12 p-3">
                                                    <h5 class="card-title">{{$l->title}}</h5>
                                                    <p class="card-text">{{$l->description}}
                                                        <a href="">See More...</a> </p>
                                                </div>
                                                <div class="col-12 p-0 d-flex w-100 flex-wrap justify-content-around">
                                                    <span class="d-none">
                                                        {{ $photos = \App\Post::find($l->id)->photos }}
                                                    </span>
                                                    @if(count($photos)==1)
                                                        @foreach($photos as $p)
                                                            {{--                                                        {{$p->location}}--}}
                                                            <img src="{{asset($p->location)}}" class="py-1" style="width: 100%;" alt="">
                                                        @endforeach
                                                        @else
                                                        @foreach($photos as $p)
                                                            {{--                                                        {{$p->location}}--}}
                                                            <img src="{{asset($p->location)}}" class="py-1" style="width: 49%;" alt="">
                                                        @endforeach
                                                    @endif

                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <div class="col-6 text-left text-muted">
                                                        5 Likes
{{--                                                        <div class="">--}}
{{--                                                            <form action="{{route('like.store')}}" id="like_post" method="post" enctype="multipart/form-data" >--}}
{{--                                                                @csrf--}}
{{--                                                                <div class="form-group">--}}
{{--                                                                    <input type="hidden" required name="like" class="form-control"  value="{{$l->id}}" id="like">--}}
{{--                                                                </div>--}}
{{--                                                                <button class="btn btn-primary mt-3  like_post_{{$l->id}}">--}}
{{--                                                                    <i class="fas fa-plus-circle"></i> Like--}}
{{--                                                                </button>--}}
{{--                                                            </form>--}}
{{--                                                        </div>--}}
                                                    </div>
                                                    <div class="col-6 text-right text-muted">
                                                        6 Comments
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex text-center">
                                                <div class="col-4 ">
                                                    <i class="fas text-danger fa-heart fa-fw"></i> Like
                                                </div>
                                                <div class="col-4">
                                                    <i class="fas fa-comment"></i> Comment
                                                </div>
                                                <div class="col-4">
                                                    <i class="fas fa-share"></i> Share
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                            @endif

                            <div class="col-12 mb-3">
                                <div class="card shadow">
                                    <div class="card-header bg-light d-flex">
                                        <img src="{{asset('/img/user2.jpg')}}" style="width: 50px; height: 50px; opacity: 0.9;"  class="rounded-circle" alt="">&nbsp;&nbsp;
                                        <div>
                                            <span>Min Nyunt Aung</span><br>
                                            <small class="text-muted">April 10 at 5:17 AM </small>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="col-12 p-3">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content. With supporting text below as a natural lead-in to additional content.With supporting text below as a natural lead-in to additional content.
                                                <a href="">See More...</a> </p>
                                        </div>
                                        <div class="col-12 p-0 d-flex w-100 flex-wrap justify-content-around">
                                            <img src="{{asset('/img/1.png')}}" class="py-1" style="width: 49%;" alt="">
                                            <img src="{{asset('/img/2.jpg')}}" class="py-1" style="width: 49%;" alt="">
                                            <img src="{{asset('/img/3.jpg')}}" class="py-1" style="width: 49%;" alt="">
                                            <img src="{{asset('/img/1.png')}}" class="py-1" style="width: 49%;" alt="">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="col-6 text-left text-muted">
                                                5 Likes
                                            </div>
                                            <div class="col-6 text-right text-muted">
                                                6 Comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex text-center">
                                        <div class="col-4 ">
                                            <i class="fas text-danger fa-heart fa-fw"></i> Like
                                        </div>
                                        <div class="col-4">
                                            <i class="fas fa-comment"></i> Comment
                                        </div>
                                        <div class="col-4">
                                            <i class="fas fa-share"></i> Share
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card shadow">
                                    <div class="card-header bg-light d-flex">
                                        <img src="{{asset('/img/default_user.png')}}" style="width: 50px; height: 50px; opacity: 0.9;"  class="rounded-circle" alt="">&nbsp;&nbsp;
                                        <div>
                                            <span>Naing Win Aung</span><br>
                                            <small class="text-muted">April 30 at 2:17 PM </small>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="col-12 p-3">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content. With supporting text below as a natural lead-in to additional content.With supporting text below as a natural lead-in to additional content.
                                                <a href="">See More...</a> </p>
                                        </div>
                                        <div class="col-12 p-0 d-flex w-100 flex-wrap justify-content-around">
                                            <img src="{{asset('/img/4.jpg')}}" class="py-1" style="width: 49%;" alt="">
                                            <img src="{{asset('/img/5.jpg')}}" class="py-1" style="width: 49%;" alt="">
                                            <img src="{{asset('/img/6.jpg')}}" class="py-1" style="width: 49%;" alt="">
                                            <img src="{{asset('/img/7.jpg')}}" class="py-1" style="width: 49%;" alt="">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="col-6 text-left text-muted">
                                                5 Likes
                                            </div>
                                            <div class="col-6 text-right text-muted">
                                                6 Comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex text-center">
                                        <div class="col-4 ">
                                            <i class="fas text-danger fa-heart fa-fw"></i> Like
                                        </div>
                                        <div class="col-4">
                                            <i class="fas fa-comment"></i> Comment
                                        </div>
                                        <div class="col-4">
                                            <i class="fas fa-share"></i> Share
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="card shadow">
                                    <div class="card-header bg-light d-flex">
                                        <img src="{{asset('/img/user4.png')}}" style="width: 50px; height: 50px; opacity: 0.9;"  class="rounded-circle" alt="">&nbsp;&nbsp;
                                        <div>
                                            <span>Htet Htet Thu</span><br>
                                            <small class="text-muted">April 30 at 2:17 PM </small>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="col-12 p-3">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content. With supporting text below as a natural lead-in to additional content.With supporting text below as a natural lead-in to additional content.
                                                <a href="">See More...</a> </p>
                                        </div>
                                        <div class="col-12 p-0 d-flex w-100 flex-wrap justify-content-around">
                                            <img src="{{asset('/img/2.jpg')}}" class="py-1" style="width: 49%;" alt="">
                                            <img src="{{asset('/img/4.jpg')}}" class="py-1" style="width: 49%;" alt="">
                                            <img src="{{asset('/img/7.jpg')}}" class="py-1" style="width: 49%;" alt="">
                                            <img src="{{asset('/img/1.png')}}" class="py-1" style="width: 49%;" alt="">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="col-6 text-left text-muted">
                                                5 Likes
                                            </div>
                                            <div class="col-6 text-right text-muted">
                                                6 Comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex text-center">
                                        <div class="col-4 ">
                                            <i class="fas text-danger fa-heart fa-fw"></i> Like
                                        </div>
                                        <div class="col-4">
                                            <i class="fas fa-comment"></i> Comment
                                        </div>
                                        <div class="col-4">
                                            <i class="fas fa-share"></i> Share
                                        </div>
                                    </div>
                                </div>
                            </div>
{{-----------------------------------------POst List end--------------------------------------------}}

                        </div>

{{-----------------------------------------Active User start--------------------------------------------}}
                        <div class="col-12 col-md-3 position-fixed " style="right: 40px; z-index: 5;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex  align-items-center justify-content-between">
                                    <div class="active_user w-100" style="text-decoration: none; color: rgba(0,0,0,0.9);">
                                            <img src="{{asset('/img/user.png')}}" style="width: 43px; height: 43px; opacity: 0.9;"  class="rounded-circle border border-secondary" alt="">&nbsp;&nbsp;&nbsp;
                                            <span>Aung Htet Chon</span><br>
                                    </div>
                                    <div class="text-right text-success">
                                        <i class="fas fa-circle fa-fw"></i>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex  align-items-center justify-content-between">
                                    <div class="active_user w-100" style="text-decoration: none; color: rgba(0,0,0,0.9);">
                                            <img src="{{asset('/img/user1.jpg')}}" style="width: 43px; height: 43px; opacity: 0.9;"  class="rounded-circle border border-secondary" alt="">&nbsp;&nbsp;&nbsp;
                                            <span>Naing Win Aung</span><br>
                                    </div>
                                    <div class="text-right text-success">
                                        <i class="fas fa-circle fa-fw"></i>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex  align-items-center justify-content-between">
                                    <div class="active_user w-100" style="text-decoration: none; color: rgba(0,0,0,0.9);">
                                            <img src="{{asset('/img/user2.jpg')}}" style="width: 43px; height: 43px; opacity: 0.9;"  class="rounded-circle border border-secondary" alt="">&nbsp;&nbsp;&nbsp;
                                            <span>Min Nyunt Aung</span><br>
                                    </div>
                                    <div class="text-right text-success">
                                        <i class="fas fa-circle fa-fw"></i>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex  align-items-center justify-content-between">
                                    <div class="active_user w-100" style="text-decoration: none; color: rgba(0,0,0,0.9);">
                                            <img src="{{asset('/img/user3.png')}}" style="width: 43px; height: 43px; opacity: 0.9;"  class="rounded-circle border border-secondary" alt="">&nbsp;&nbsp;&nbsp;
                                            <span>Ko Naing Aung</span><br>
                                    </div>
                                    <div class="text-right text-success">
                                        <i class="fas fa-circle fa-fw"></i>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex  align-items-center justify-content-between">
                                    <div class="active_user w-100" style="text-decoration: none; color: rgba(0,0,0,0.9);">
                                            <img src="{{asset('/img/user4.png')}}" style="width: 43px; height: 43px; opacity: 0.9;"  class="rounded-circle border border-secondary" alt="">&nbsp;&nbsp;&nbsp;
                                            <span>Htet Htet Thu</span><br>
                                    </div>
                                    <div class="text-right text-success">
                                        <i class="fas fa-circle fa-fw"></i>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex  align-items-center justify-content-between">
                                    <div class="active_user w-100" style="text-decoration: none; color: rgba(0,0,0,0.9);">
                                            <img src="{{asset('/img/user5.png')}}" style="width: 43px; height: 43px; opacity: 0.9;"  class="rounded-circle border border-secondary" alt="">&nbsp;&nbsp;&nbsp;
                                            <span>Ba La Gyi</span><br>
                                    </div>
                                    <div class="text-right text-success">
                                        <i class="fas fa-circle fa-fw"></i>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex  align-items-center justify-content-between">
                                    <div class="active_user w-100" style="text-decoration: none; color: rgba(0,0,0,0.9);">
                                            <img src="{{asset('/img/user6.jpg')}}" style="width: 43px; height: 43px; opacity: 0.9;"  class="rounded-circle border border-secondary" alt="">&nbsp;&nbsp;&nbsp;
                                            <span>Chit Ko San</span><br>
                                    </div>
                                    <div class="text-right text-success">
                                        <i class="fas fa-circle fa-fw"></i>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex  align-items-center justify-content-between">
                                    <div class="active_user w-100" style="text-decoration: none; color: rgba(0,0,0,0.9);">
                                            <img src="{{asset('/img/user7.jpg')}}" style="width: 43px; height: 43px; opacity: 0.9;"  class="rounded-circle border border-secondary" alt="">&nbsp;&nbsp;&nbsp;
                                            <span>Ye Min Khant</span><br>
                                    </div>
                                    <div class="text-right text-success">
                                        <i class="fas fa-circle fa-fw"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
{{-----------------------------------------Active User end--------------------------------------------}}

{{-----------------------------------------Post Add Box start--------------------------------------------}}

                        <div class="col-12 col-md-4 bg-light">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary d-none post_btn" data-toggle="modal" data-target="#exampleModalLong">
                                Launch demo modal
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title w-100 text-center font-weight-bolder" id="exampleModalLongTitle">Create Post</h4>
                                            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data" class="border p-3 " >
                                                @csrf
                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input type="text" required name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" id="title">

                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea name="description" required id="description" class="form-control  @error('description') is-invalid @enderror"  rows="6">{{old('description')}}</textarea>
                                                </div>
                                                <div class="input-field">
                                                    <label class="active">Photos</label>
                                                    <div class="input-images" style="padding-top: .5rem;"></div>
                                                </div>
                                                <button class="btn btn-primary mt-3">
                                                    <i class="fas fa-plus-circle"></i> Add Post
                                                </button>
                                                <button type="button" class="btn mt-3 btn-secondary" data-dismiss="modal">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
{{-----------------------------------------Add Post Box end--------------------------------------------}}
{{----------------------------------------- Chat Box start--------------------------------------------}}
                        <div class="col-3 mb-3 chat_box d-none" style="position: fixed; bottom: 0px; right: 200px; z-index: 30;">
                            <div class="card shadow">
                                <div class="card-header chat_user bg-light d-flex">

                                    <i class="fas fa-times-circle ml-auto fa-fw h-50 chat_close" style="font-size: 20px; cursor: pointer; color: red;"></i>
                                </div>
                                <div class="card-body p-0">
                                    <div class="col-12 p-3 d-flex align-content-end flex-wrap" style="height: 250px; width: 100%;">
                                        <div class="col-12 text-left p-0 my-2">
                                            <span class="py-1 px-2  border" style="border-radius: 20px;">
                                                How are you?
                                            </span>
                                        </div>
                                        <div class="col-12 text-right p-0 my-2 ">
                                            <span class="border py-1 px-2 " style="border-radius: 20px;">
                                                I am fine. An you?
                                            </span>
                                        </div>
                                        <div class="col-12 text-left p-0 my-2">
                                            <span class="py-1 px-2  border" style="border-radius: 20px;">
                                                Yes I'm fine too.
                                            </span>
                                        </div>
                                        <div class="col-12 text-right p-0 my-2">
                                            <span class="py-1 px-2  border" style="border-radius: 20px;">
                                                OK!
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="col-3 text-center text-muted p-1">
                                            <i class="fas fa-image fa-fw btn btn-outline-primary w-100"></i>
                                        </div>
                                        <div class="col-3 text-center text-muted p-1">
                                            <i class="btn btn-outline-primary w-100 fas fa-video fa-fw"></i>
                                        </div>
                                    </div>
                                    <div class="col-12 p-0 w-100">
                                        <form action="" method="post" enctype="multipart/form-data" class="d-flex w-100 flex-wrap justify-content-around">
                                            @csrf
                                            <div class="form-group mb-1" style="width: 67%;">
                                                <input type="text" name="chat_text" class="form-control" >
                                            </div>
                                            <button class="btn btn-primary btn-sm" style="width: 30%; height: 37px">Send</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
 {{----------------------------------------- Chat Box end--------------------------------------------}}

                    </div>
                </div>
                <button class="btn btn-primary btn-sm" id="openNav" onclick="openNav()">
                    <i class="fas fa-angle-double-right fa-fw "></i>
                </button>
                <button class="btn btn-primary btn-sm" id="closeNav" onclick="closeNav()">
                    <i class="fas fa-angle-double-left fa-fw"></i>
                </button>
            </div>
{{--           ------------------------------------- rightside-end---------------------------------------------}}

        </div>
    </div>
    @endsection
@section('script')
<script>
    // Gets a reference to the form element
    var form = document.getElementById('like_post');

    // Adds a listener for the "submit" event.
    form.addEventListener('submit', function(e) {

        e.preventDefault();

    });
    $("#closeNav").hide();
    $(".chat_close").click(function () {
        $(".chat_box").slideToggle(500);
    })
    $(".chat_box").hide();
    $(".active_user").click(function () {
        $(".chat_hide").remove();
        $(".chat_box").hide();
        $(".chat_box").removeClass("d-none").slideToggle(700);
        $(this).clone().addClass("chat_hide").prependTo(".chat_user");
    })
    function openNav() {
        $(".sidenav").css("width","100%");
        $("#openNav").slideUp(300);
        $("#closeNav").slideDown(500);
        // $("#closeNav").css("display","block");
    }

    function closeNav() {
        $(".sidenav").css("width","0%");
        $("#closeNav").slideUp(300);
        $("#openNav").slideDown(500);
    }
    $('.input-images').imageUploader();
    function post() {
        $(".post_btn").click();
    }
</script>
@endsection
