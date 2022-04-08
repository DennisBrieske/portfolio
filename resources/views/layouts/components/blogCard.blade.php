<div class="col-lg-3 mb-5 ms-2 me-3 boxShadow">
    <div class="card h-100 card-blog">
        <div class="card-body d-flex flex-column m-2">
            <img src="{{asset('assets/images/testimonial/coding-1853305_1920.jpg')}}"
                 alt="img" class="card-img-top boxShadow" loading="lazy">
            <h5 class="card-title fw-bold mt-3 mb-2 ms-3"><i class="fas fa-code"></i> {{$article->name}}</h5>
            <p class="card-text mt-2 mb-2 ms-3 me-3">
                {{ $article->text }}
            </p>
            <div class="row align-items-center mt-auto card-title">
                <div class="col-12">
                    <a href="{{ route('blog.show', $article) }}" class="btn btn-primary m-3 p-2 mt-auto" onclick="this.blur();">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>

