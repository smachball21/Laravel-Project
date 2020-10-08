@extends('layouts.template')

@section('content')
<style>
.vertical-center {
  min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
  min-height: 100vh; /* These two lines are counted as one :-)       */

  display: flex;
  align-items: center;
}

.card {
    background-color: #343A40;
    color: #ffff;
}

.fixed-top {
    z-index: -1;
}

h1,h2 {
  font-weight: 200;
  margin: 0.4em 0;
}
h1 { font-size: 3.5em; }
h2 {
  color: #dbdbdb;
  font-size: 2em;
}
</style>

<script>
    var TxtRotate = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
    };

    TxtRotate.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 300 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function() {
        that.tick();
    }, delta);
    };

    window.onload = function() {
    var elements = document.getElementsByClassName('txt-rotate');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-rotate');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
        new TxtRotate(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666; color: #dbdbdb }";
    document.body.appendChild(css);
    };
</script>
<link href="{{ asset('/css/template.css') }}" rel="stylesheet"> 
<div class="vertical-center fixed-top">
<div class="container">
    <div class="row justify-content-center ">
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
        <h1>
        <span
            class="txt-rotate"
            data-period="2000"
            data-rotate='[ "Waw ! It is an amazing website !", "So cooooool !", "If u love tell me now !", "Bruh ! so much functionnality", "Laravel is so fast !" ]'></span>
        </h1>
    </div>
</div>
   
</div>
@endsection