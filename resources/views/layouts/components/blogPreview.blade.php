<div class="m-5">
    <div class="card blogOverview-card mt-3">
        <div class="card-body">
            @if($article->image != null)
            <img src="{{asset('assets/images/testimonial/'.$article->image)}}"
                 alt="img" class="card-img-top img-blog" loading="lazy">
            @endif
            <h5 class="card-title fw-bold mt-5 mb-2 ms-3"><i class="fas fa-code"></i> {{ $article->name }}</h5>
            <p class="blogOverview-card-text mt-3 mb-2 ms-3 me-3">
                {{ $article->description }}
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

