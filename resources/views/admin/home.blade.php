@extends('layouts.appAdmin')
@section('content')
    <button>
        {{ Auth::user()->name }}
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-dropdown-link href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                {{ __('Logout') }}
            </x-jet-dropdown-link>
        </form>
    </button>
@endsection
