@extends('layouts.app')

@section('content')
    <main>
        <div class="container-fluid m-5">
            <div class="row d-flex justify-content-center blogOverview">
                <div class="col-10 blogOverviewShadow mt-5 me-5">
                    @include('layouts.components.blogContent')
                </div>
            </div>
        </div>
    </main>
@endsection

