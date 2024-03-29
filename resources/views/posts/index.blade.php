@extends('layouts.master')

@section('title', '所有文章')

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ asset('img/home-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <hr class="small">
                    <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post‐>id }}</td>
                    <td>{{ $post‐>title }}</td>
                    <td>{{ ($post‐>is_feature)? 'v' : 'x' }}</td>
                    <td>
                        <a href="{{ route('admin.posts.edit', $post‐>id) }}">編輯</a>
                        /
                        <a href="#">刪除</a>
                    </td>
                </tr>
        @endforeach
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
