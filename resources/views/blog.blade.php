@extends('layouts.app')

@section('content')
    <main>
        <div class="row d-flex justify-content-center blogOverview">
            <div class="col-9 blogOverviewShadow mt-5">
                @include('layouts.components.blogContent')
            </div>
        </div>
    </main>
@endsection

