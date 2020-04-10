<div class="post">
    <img src="{{asset('images/blog/02.jpg')}}" alt="Image 02" class="image_frame image_fl" />
    <h2>{{$titre}}</h2>
    <div class="meta">by <strong><a href="#">Johny</a></strong> on <strong>March 18, 2048</strong> in <strong><a href="#">Coding</a>, <a href="#">HTML</a></strong> | <strong><a href="#">196 comments</a></strong></div>
    {{$contenu}}
    <a href="blog_post.html" class="more float_r">More</a>
    {{$slot}}
    <div class="cleaner"></div>
</div>
