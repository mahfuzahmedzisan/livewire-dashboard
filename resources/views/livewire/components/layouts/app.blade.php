@extends('livewire.components.layouts.app.sidebar', ['title' => $title ?? null])

@section('content')
    <flux:main>
        {{ $slot }}
    </flux:main>
@endsection
