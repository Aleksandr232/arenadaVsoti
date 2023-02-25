@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Главная страница</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        @if(count($posts))
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ count($posts) }}</h3>

                                    <p>Всего новостей</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="{{ route('posts.index') }}" class="small-box-footer">Список новостей <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        @else
                            <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>0</h3>
                                        <p>Всего новостей</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="{{ route('posts.index') }}" class="small-box-footer">Список новостей <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                        @endif
                    </div>
                    <!-- ./col -->
                </div>
            </div>
        </div>
    </section>
@endsection
