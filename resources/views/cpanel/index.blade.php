@extends('layouts.cpanel')

@section('title') Dashboard @endsection

@section('body')

{{-- over view --}}
<section class="overview">
	<div class="container">
		<h3 class="text-capitalize d-flex align-items-center w-100 mb-4">
			<span class="me-3">bienvenido, </span>
			<span class="me-3">{{ Auth::user()->name }}</span>
			<span class="icon d-flex align-items-center justify-content-center"> <i class="fas fa-caret-right"></i> </span>
		</h3>

		{{-- items container --}}
		<div class="items-container d-flex align-items-center justify-content-between flex-wrap">
			
			{{-- all news --}}
			<a href="{{ route('cpanel-posts') }}" class="item d-flex align-items-center justify-content-between text-decoration-none shadow-sm">
				<div class="text">
					<div class="icon"><i class="far fa-newspaper"></i></div>
					<p class="m-0 p-0 text-capitalize">publicaciones</p>
				</div>
				<span class="number d-flex align-items-center justify-content-center">{{ count($posts) }}</span>
			</a>

			{{-- all categories --}}
			<a href="{{ route('cpanel-categories') }}" class="item d-flex align-items-center justify-content-between text-decoration-none shadow-sm">
				<div class="text">
					<div class="icon"><i class="fas fa-tags"></i></div>
					<p class="m-0 p-0 text-capitalize">categorias</p>
				</div>
				<span class="number d-flex align-items-center justify-content-center">{{ count($cats) }}</span>
			</a>

			{{-- all comments --}}
			<a href="{{ route('cpanel-comments') }}" class="item d-flex align-items-center justify-content-between text-decoration-none shadow-sm">
				<div class="text">
					<div class="icon"><i class="fas fa-comments"></i></div>
					<p class="m-0 p-0 text-capitalize">comentarios</p>
				</div>
				<span class="number d-flex align-items-center justify-content-center">0</span>
			</a>

			{{-- all messages --}}
			{{-- <a href="{{ route('cpanel-messages') }}" class="item d-flex align-items-center justify-content-between text-decoration-none shadow-sm">
				<div class="text">
					<div class="icon"><i class="fas fa-envelope-open-text"></i></div>
					<p class="m-0 p-0 text-capitalize">all messages</p>
				</div>
				<span class="number d-flex align-items-center justify-content-center">0</span>
			</a> --}}

		</div>

	</div>
</section>

@endsection