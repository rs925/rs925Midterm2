@extends('layouts.app')
@extends('Includes.menu')

@section('content')

    <div class="card mt-3">
        <div class="card-title pl-3 pr-2"><h1>Contact.</h1>
            <p class="lead">Please Use This form to contact site owner.</p></div>

        <div class="card-body">

            <form action="/contact" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="email">Subject</label>
                    <input name="email"  class="form-control" id="subject" placeholder="Enter Subject">
                </div>
                <div class="form-group">
                    <label for="body">Contact Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3" placeholder="Enter Your Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
@endsection