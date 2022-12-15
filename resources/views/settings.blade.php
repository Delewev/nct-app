@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href={{asset('css/settings.css')}}>
    <div class="settings" style="">
                <user-component dataupdate="{{route('dataupdate')}}" :user=@json($user) ></user-component>
        <div class="form">
            <div class="form-log">
                <div class="img">
                    <img class="avotar" src="{{asset('img/avotar.jpeg')}}" alt="">
                </div>
                <div class="name"><h4>{{$user->name}} {{$user->lastname}} </h4></div>
            </div>
            <form action="{{route('update.settings')}}" method="post" id="contactForm">
                <div class="form-name">
                    @csrf
                    <div>
                        <div>
                            <h6>Имя</h6>
                        </div>
                        <div>
                            <input type="text" name="name" id="name" placeholder="{{$user->name}}">
                        </div>
                    </div>
                    <div class="form-name-f">
                        <div><h6>Фамилия</h6></div>
                        <div>
                            <input type="text" name="lastname" id="lastname" placeholder="{{$user->lastname}}">
                        </div>
                    </div>
                </div>
                <div class="form-name-f">
                    <div><h6>Отчество</h6></div>
                    <div>
                        <input type="text" name="firstname" id="firstname" placeholder="{{$user->firstname}}">
                    </div>
                    <div><h6>Номер Телефона</h6></div>
                    <div>
                        <input type="tel" name="phone" id="phone" placeholder="{{$user->phone}}">
                    </div>
                </div>
                <div class="form-info">
                    <div class="form-pol">
                        <div><h6>Пол</h6></div>
                        <div>
                            <select name="person" id="person">
                                <option>Мужской</option>
                                <option>Женский</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-info-data">
                        <div><h6>Дата рождения</h6></div>
                        <div class="form-age">
                            <div class="form-age-inter">
                                <select name="day" id="day">
                                    <option>{{$user->day}}</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                </select>
                            </div>
                            <div>
                                <select name="month" id="month">
                                    <option>{{$user->month}}</option>
                                    <option>Январь</option>
                                    <option>Февраль</option>
                                    <option>Март</option>
                                    <option>Апрель</option>
                                    <option>Май</option>
                                    <option>Июнь</option>
                                    <option>Июль</option>
                                    <option>Август</option>
                                    <option>Сентябрь</option>
                                    <option>Октябрь</option>
                                    <option>Ноябрь</option>
                                    <option>Декабрь</option>
                                </select>
                            </div>
                            <div class="form-age-god">
                                <select name="year" id="year">
                                    <option>{{$user->year}}</option>
                                    <option>1991</option>
                                    <option>1992</option>
                                    <option>1993</option>
                                    <option>1994</option>
                                    <option>1995</option>
                                    <option>1996</option>
                                    <option>1997</option>
                                    <option>1998</option>
                                    <option>1999</option>
                                    <option>2000</option>
                                    <option>2001</option>
                                    <option>2002</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-name-f">
                    <div><h6>Команда</h6></div>
                    <div>
                        <select name="team" id="team">
                            <option>{{$user->team}}</option>
                            <option>NCT - Казань</option>
                            <option>Зачёт - Казань</option>
                            <option>No Name - Москва</option>
                        </select>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn" name="update" id="submit">
                        {{ __('Сохранить') }}
                    </button>
                </div>
            </form>
        </div>

    </div>

@endsection
