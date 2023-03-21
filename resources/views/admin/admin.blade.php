@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/admin/admin.css')}}">

    <div class="accordion" id="accordionExample" style="margin: 20px;">
        <div class="accordion-item" >
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Пользаватели
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="tables">
                        <h4><b>Пользаватели</b></h4>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">ИФ</th>
                                <th scope="col">Почта</th>
                                <th scope="col">телефон</th>
                                <th scope="col">Дата рождения</th>
                                <th scope="col">Город</th>
                                <th scope="col">Команда</th>
                                <th scope="col">Cheer</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td><a href="{{route('you', ['slug'=>$user->slug])}}">{{ $user->slug }}</a></td>
                                    <td>{{$user->name}} {{$user->lastname}}</td>
                                    <td>{{$user->email}}</td>
                                    @if($user->phone == null)
                                        <td style="color: darkred;"><b>Не указанно</b></td>
                                    @else
                                        <td>{{$user->phone}}</td>
                                    @endif

                                    @if($user->year == null)
                                        <td style="color: darkred;"><b>Не указанно</b></td>
                                    @else
                                        <td>{{$user->day}} {{$user->month}} {{$user->year}}</td>
                                    @endif

                                    @if($user->city == null)
                                        <td style="color: darkred;"><b>Не указанно</b></td>
                                    @else
                                        <td>{{$user->city}}</td>
                                    @endif

                                    @if($user->team == null)
                                        <td style="color: darkred;"><b>Не указанно</b></td>
                                    @else
                                        <td>{{$user->team}}</td>
                                    @endif

                                    @if($user->cheer == null)
                                        <td style="color: darkred;"><b>Не указанно</b></td>
                                    @else
                                        <td>{{$user->cheer}}</td>
                                    @endif


                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordion Item #2
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accordion Item #3
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
    </div>
@endsection
