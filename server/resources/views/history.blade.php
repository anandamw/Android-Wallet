@extends('layouts.template')
@section('content')
    <div class="main-container container">

        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush bg-none">
                            @foreach ($deposits as $item)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-60 shadow-sm card rounded-15 p-1">
                                                <img src="{{ asset('assets/img/company4.jpg') }}" alt="User Avatar"
                                                    class="rounded-15" />
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-0">
                                                {{ $item->name }}
                                            </p>
                                            <p class="size-10 text-secondary">
                                                {{ $item->description ?? 'No description available' }}</p>
                                        </div>
                                        <div class="col align-self-center text-end">
                                            <p class="text-secondary text-muted size-10 mb-0">
                                                {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y, H:i') }}
                                            </p>
                                            <p>
                                                {{ $item->mount > 0 ? '' . number_format($item->mount, 0, ',', '.') : 'Rp 0' }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
