@extends('layouts.app')

@section('title', 'Забыли пароль на Laravel 12')

@section('content')
    <div class="max-w-md mx-auto">
        <h1 class="text-2xl font-bold mb-6">Сброс пароля</h1>

        @if (session('status'))
            <div class="mb-4 p-3 bg-green-500/10 border border-green-500/30 text-green-400 rounded text-sm">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block mb-1 text-sm">Email</label>
                <input type="email" name="email"
                       class="w-full border border-white/10 bg-gray-900 text-white rounded px-3 py-2 focus:border-fuchsia-500 focus:outline-none"
                       value="{{ old('email') }}" required autofocus>

                @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <button class="bg-slate-900 text-white w-full py-2 rounded hover:bg-slate-800 transition">
                Отправить ссылку
            </button>
        </form>
    </div>
@endsection

