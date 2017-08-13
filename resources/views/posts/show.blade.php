@extends ('layout.master') 

@section ('content') 
    <div class="col-sm-8 blog-main">
        <h1>{{ $post->title }}</h1>

        {{ $post->body }}
    <hr>
        <div class="comments">
        <ul class="list-group">
             @foreach ($post->comments as $comments)
                <li class="list-group-item">{{ comment->body }}</li>
                <strong>
                    {{ $comment->created_at->diffForHumans () }}:
                </strong>
        </ul>
        </div>

        <hr>

            <div class="card">
                <div class="card-block">
                  <form method="POST" action="/posts/{{ $post->id }}/comments">
                      <div class="form-group">
                        <textarea name="body" placeholder="Your comment here" class="form-control" rows="" cols="">
                        </textarea>
                          
                      </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Comment</button>
                         </div>
                          
                      </div>

                  </form>
                </div>
            </div>
    </div>
@endsection