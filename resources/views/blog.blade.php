@extends('layout')

@section('content')
    @php
        $page = 'Блог';
    @endphp
    <x-hero-page-card :page="$page" />

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                
                
                @foreach($blogs as $blog)
                  <x-blog-card :blog="$blog" />
                @endforeach

            </div>

            <div class="row no-gutters my-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
