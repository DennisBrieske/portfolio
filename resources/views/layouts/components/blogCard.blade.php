<div class="col-lg-3 mb-5 me-5 ms-md-3 me-md-3 boxShadow">
    <div class="card h-100 card-blog">
        <div class="card-body d-flex flex-column m-2 mt-5">
            @if($article->image != null)
            <img src="{{asset('assets/images/testimonial/'.$article->image)}}"
                 alt="img" class="card-img-top boxShadow" loading="lazy">
            @endif
            <h5 class="card-title fw-bold mt-3 mb-2 ms-3"><i class="fas fa-code"></i> {{$article->name}}</h5>
            <p class="card-text mt-2 mb-2 ms-3 me-3">
                {{ $article->description }}
            </p>
            <div class="row align-items-center mt-auto card-title">
                <div class="col-12">
                    <a href="{{ route('blog.show', $article) }}" class="btn btn-primary m-3 p-2 mt-auto" onclick="this.blur();">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>

