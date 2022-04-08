@extends('layouts.app')

@section('content')
    <main>
        <div class="container-fluid m-5">
            <div class="row d-flex justify-content-center blogOverview">
                @foreach($articles as $article)
                    <div class="col-10 blogOverviewShadow mt-5 me-5">
                        @include('layouts.components.blogPreview')
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection

