<section>
    <div class="card ms-5 me-5 boxShadow blogPreviewCard">
        <div class="container-fluid ps-4 pe-4">
            <div class="row">
                <div class="col-12">
                    <h4 class="mt-4 ms-2 mb-4">Check my latest blogposts</h4>
                </div>
            </div>
            <div class="row justify-content-lg-center card-top me-0 me-md-4">
                @foreach( $articles as $article)
                    @include('layouts.components.blogCard')
                @endforeach
            </div>
        </div>
    </div>
</section>
