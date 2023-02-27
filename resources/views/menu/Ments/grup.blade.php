@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/grup.css')}}">
<link rel="stylesheet" href="{{asset('css/festbtn.css')}}">
<div class="fonall">
<div class="fon" style="background-image: url({{asset('img/grupfest.jpg')}});">
<div class="fests" >
    <form action="{{route('grup.store')}}" method="post" >
        @csrf
    <div class="fests-con">
        <div>
            <div class="fests-header" style="">
                <img src="{{asset('img/fest.png')}}" alt="" class="img-fest">
            </div>
            <div class="contents">
                <div class="form-grup">
                    <div class="form-name">
                        <div>
                            <div>
                                <h6>Имя</h6>
                                <input type="text" name="name" id="name" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="form-name-f">
                            <div><h6>Фамилия</h6>
                                <input type="text" name="lastname" id="lastname" value="{{$user->lastname}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-name">
                        <div>
                            <div>
                                <h6>Номер Телефона</h6>
                            </div>
                            <div>
                                <input type="tel" name="phone"
                                       id="phone" v-model="phone" value="{{$user->phone}}">
                            </div>
                        </div>
                        <div class="form-name-f">
                            <div><h6>ID Telegram</h6></div>
                            <div>
                                <input type="text" name="telegafets" id="telegafets"
                                       v-model="telegafets"
                                       placeholder="@">
                            </div>
                        </div>
                    </div>
                    <div class="fut-grup">
                        <div class="fut">
                            <div><h6>Размер футболки</h6></div>
                            <div>
                                <select name="fut" id="fut" v-model="fut">
                                    <option>XS</option>
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                    <option>XХL</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-info">
                    </div>
                    <div class="form-team">
                        <div class="form-team-d">
                            <div class="cityfest">
                                <div><h6>Город</h6></div>
                                <div>
                                    <input type="text" name="city" id="city" value="{{$user->city}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-team-d">
                            <div><h6>Команда</h6></div>
                            <div>
                                <select name="team" id="team" value="{{$user->team}}" >
                                    <option>NCT</option>
                                    <option>G-FAME</option>
                                    <option>Zachet</option>
                                    <option>Fenomen-A</option>
                                    <option>NO-NAME</option>
                                    <option>Titans</option>
                                    <option>Grand-Arena</option>
                                    <option>LEGION</option>
                                    <option>NO-LIMIT</option>
                                    <option>Power</option>
                                    <option>Destiny</option>
                                    <option>Groove</option>
                                    <option>Insight</option>
                                    <option>Фаворит</option>
                                    <option>Кодекс</option>
                                    <option>United</option>
                                    <option>Husky</option>
                                    <option>Другое</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-team-d">
                            <div><h6>Название гуппового</h6></div>
                            <div>
                                <input name="titelfest" id="titelfest" v-model="titelfest">
                            </div>
                        </div>
                    </div>
                    <div class="contakt">
                        <div class="name">
                            <div><h6>ФИ контактного лица</h6></div>
                            <div>
                                <input id="namecoch" name="namecoch" placeholder="Иванов Иван"
                                       v-model="namecoch">
                            </div>
                        </div>
                        <div class="telcoch">
                            <div><h6>Телефо контактного лица</h6></div>
                            <div>
                                <input id="phonecoch" name="phonecoch" v-model="phonecoch">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btns">
                        <button type="submit" class="button" id="submit"> Отправить </button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
</div>
</div>
