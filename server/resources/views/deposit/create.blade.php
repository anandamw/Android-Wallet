@extends('layouts.template')
@section('content')
    <form method="post" action="/deposit/insert">
        @csrf
        <!-- Main Page Content -->
        <div class="main-container container">
            <!-- Select Amount -->
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <input type="text" class="transparent-input text-center form-control fs-4 fw-bold" name="mount"
                        value="Rp 5.000" readonly id="mount" />

                    <div class="text-center mt-2">
                        <span class="text-secondary">Let's save and reach our goals!</span>
                    </div>
                </div>
            </div>

            <!-- Group User -->
            <div class="row">
                <div class="col-12">
                    <!-- DateTime Input -->
                    <div class="form-group form-floating is-valid mb-3">
                        <input type="datetime-local" class="form-control" name="datetime" id="datetime"
                            placeholder="Select Date and Time" required />
                        <label for="datetime">Date Time</label>
                    </div>
                </div>
            </div>

            <!-- Send Request Button -->
            <div class="row mb-4">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-lg shadow-sm w-100">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
