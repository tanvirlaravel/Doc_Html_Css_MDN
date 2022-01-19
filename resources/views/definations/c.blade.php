@extends('inc.layout')

@section('content')

<div class="row">
    <div class="col">
    <h1 class="mb-4 mt-1 text-primary heding-one">C</h1>
    <hr id="top-heading">
    </div>
</div>

<div class="row">

    <div class="col-3">
            <ul class="list-group position-fixed" id="sidebar_menu">
            </ul>
        </div>

            <div class="col-md-9">
                <h2>Closures</h2>
                <p>Closures are PHP’s version of anonymous functions. A closure is a function that you can pass around as an object, assign to a variable, pass as a parameter to other functions and methods, or even serialize.</p>
                <p>a closure in PHP is a function that can be created without a specified name - an anonymous function</p>
                <hr>

                <h2>Collection</h2>
                <p>A collection is a laravel class that uses arrays internally and adds many features to them. You can create a collection simply by using collect method like this</p>
                <hr>

                <h2>Communication protocol</h2>
                <p>A communication protocol is a system of rules that allows two or more entities of a communications system to transmit information via any kind of variation of a physical quantity. The protocol defines the rules, syntax, semantics and synchronization of communication and possible error recovery methods. Protocols may be implemented by hardware, software, or a combination of both.[1]</p>
                <hr>


            </div>
</div>
@endsection
