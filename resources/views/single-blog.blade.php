@extends('layout')

@section('content')
    @php
        $page = 'Блог';

        $tags = preg_split("/\,/", $blog->tags);

        $bid = $blog->id;
        $comNum = $comments->filter(function($c) use ($bid){
            return $c->blog_id == $bid;
        })->count();
    @endphp
    <x-hero-page-card :page="$page" />



    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <h2 class="mb-3">{{ $blog->title }}</h2> <br>
                    <p>
                        <img src="{{$blog->image ? asset('storage/' . $blog->image) : asset('images/image_3.jpg') }}" alt="" class="img-fluid">
                    </p> <br>

                    @foreach($arr as $a)
                         <p>{{$a}}</p> <br>
                    @endforeach

                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            @foreach($tags as $item)
                                <a href="" class="tag-cloud-link">{{$item}}</a>
                            @endforeach
                        </div>
                    </div>


                    <div class="pt-5 mt-5">
                        <h3 class="mb-5 h4 font-weight-bold p-4 bg-light">{{$comNum}} Коментар/а</h3>
                        <ul class="comment-list">

                            @foreach($comments as $com)
                                @if($com->blog_id == $blog->id)
                                    <x-comment-card :comment="$com" />
                                @endif
                            @endforeach

                        </ul>
                        <!-- END comment-list -->

                        <!-- START leave a comment -->
                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5 h4 font-weight-bold p-4 bg-light">Напиши коментар</h3>
                            <form method="POST" action="/blog/{{$blog->id}}" class="p-4 p-md-5 bg-light">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Име *</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">И-мејл *</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>

                                <div class="form-group">
                                    <label for="message">Порука</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Пошаљи" class="btn py-3 px-4 btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
                <!-- START leave a comment -->


                <!-- SIDEBAR START -->

                <div class="col-lg-4 sidebar ftco-animate">
                    <br><br><br>
                    <div class="sidebar-box ftco-animate">
                        <h3 style="font-weight: 700;">Категорије</h3>
                        <ul class="categories">
                            <li><a href="/blog/?category=Доручак">Доручак </a></li>
                            <li><a href="/blog/?category=Ручак">Ручак </a></li>
                            <li><a href="/blog/?category=Специјалитети">Специјалитети </a></li>
                            <li><a href="/blog/?category=Дезерти">Дезерти </a></li>
                            <li><a href="/blog/?category=Пића">Пића </a></li>
                            <li><a href="/blog/?category=Вина">Вина </a></li>
                        </ul>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 style="font-weight: 700;">Популарни чланци</h3>

                        @foreach($popular_blogs as $item)
                            <x-popular-posts-card :item="$item"/>
                        @endforeach

                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Тагови</h3>
                        <ul class="tagcloud m-0 p-0">
                            @foreach($tags as $item)
                                <a href="#" class="tag-cloud-link">{{$item}}</a>
                            @endforeach
                        </ul>
                    </div>


                    <div class="sidebar-box ftco-animate">
                        <h3>Диверзија</h3>
                        <p>Диверзија је породични ресторан који је срцем и душом посвећен пружању изузетног гурманског доживљаја свима 
                            који нас посете. Отворени смо са једним циљем - да Вам приуждимо место где ћете уживати у незаборавним моментима 
                            окружени укусима који мамију осмех на лице.</p>
                    </div>
                </div><!-- END COL -->
            </div>
        </div>
    </section>
@endsection
