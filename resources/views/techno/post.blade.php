<div class="post">
    <img src="{{asset('images/blog/02.jpg')}}" alt="Image 02" class="image_frame image_fl" />
    <h2>{{$titre}}</h2>
    {{$contenu}}
    <a href="blog_post.html" class="more float_r">More</a>
    {{$slot}}
    <div class="cleaner"></div>
</div>
