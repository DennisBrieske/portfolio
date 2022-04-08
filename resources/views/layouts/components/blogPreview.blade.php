<div class="m-5">
    <img src="{{asset('assets/images/testimonial/coding-1853305_1920.jpg')}}"
         alt="img" class="blog-img" loading="lazy">
    <div class="card blogOverview-card mt-3">
        <div class="card-body">
            <h5 class="card-title fw-bold mt-2 mb-2 ms-3"><i class="fas fa-code"></i> {{ $article->name }}</h5>
            <p class="blogOverview-card-text mt-2 mb-2 ms-3 me-3">
                {{ $article->text }}
            </p>
            <div class="row align-items-center card-title">
                <div class="col-6">
                    <a href="{{ route('blog.show', $article) }}" class="btn btn-primary m-3 p-2" onclick="this.blur();">Read more</a>
                </div>
                <div class="col-6 pe-3 text-end">
                    {{ date('d.m.Y', $article->created_at->getTimestamp()) }}
                </div>
            </div>
        </div>
    </div>
</div>

