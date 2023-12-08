@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => trans('backpack::base.welcome'),
        'content'     => trans('backpack::base.use_sidebar'),
        'button_link' => backpack_url('logout'),
        'button_text' => trans('backpack::base.logout'),
    ];

    $widgets['after_content'][] =[
    'type'       => 'card',
    'wrapper' => ['class' => 'bg-primary col-sm-6 col-md-4'], // optional
    'class'   => 'card bg-primary text-white', // optional
    'content'    => [
        'header' => 'Some card title', // optional
        'body'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non mi nec orci euismod venenatis. Integer quis sapien et diam facilisis facilisis ultricies quis justo. Phasellus sem <b>turpis</b>, ornare quis aliquet ut, volutpat et lectus. Aliquam a egestas elit. <i>Nulla posuere</i>, sem et porttitor mollis, massa nibh sagittis nibh, id porttitor nibh turpis sed arcu.',
    ]
    ];
    
@endphp

@section('content')
  <p>Your custom HTML can live here</p>
@endsection