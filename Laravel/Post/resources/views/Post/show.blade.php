@extends('Post.Layout.layout')
@extends('Post.navbar')

@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card card-body">
                <h3>user/slug:  {{$post->title}} {{$post->slug}}</h3>
                <h3>Description: {{$post->desc}}</h3>
                <h3>Body: {{$post->body}}</h3>
                <h3>id: {{$post->id}}</h3>
                <h3>published at : {{$post->published_at}}</h3>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
