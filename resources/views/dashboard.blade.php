@extends('app')



@section('content')

@can('user')
    <h1>Welcome <span class="text-info">{{ auth()->user()->role }}</span> to dashboard</h1>
@endcan

@can('manager')
<h1>Welcome <span class="text-info">{{ auth()->user()->role }}</span> to dashboard</h1>
@endcan

@jafer
<h1>Welcome <span class="text-info">{{ auth()->user()->role }}</span> to dashboard</h1>
@endjafer


@endsection