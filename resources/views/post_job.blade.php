@extends('layouts.default')

@section('head')
    <title>Hire a Developer - {{ Config::get('app.name') }}</title>
@endsection


@section('body')
    <x-gigantic-title>Hire top developers with unfathomable talent for your next big <span data-scroll-text="app, design, project, work, engineering">app</span></x-gigantic-title>



    <style>
        .tracking-in {
            -webkit-animation: tracking-in-expand 700ms cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
                    animation: tracking-in-expand 700ms cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
        }
        .tracking-out {
            -webkit-animation: tracking-out-contract 700ms cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
                    animation: tracking-out-contract 700ms cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
        }


        /* ----------------------------------------------
        * Generated by Animista on 2023-2-8 19:51:7
        * Licensed under FreeBSD License.
        * See http://animista.net/license for more info.
        * w: http://animista.net, t: @cssanimista
        * ---------------------------------------------- */

        /**
        * ----------------------------------------
        * animation tracking-in-expand
        * ----------------------------------------
        */
        @-webkit-keyframes tracking-in-expand {
            0% {
                letter-spacing: -0.5em;
                opacity: 0;
            }
            40% {
                opacity: 0.6;
            }
            100% {
                opacity: 1;
            }
        }
        @keyframes tracking-in-expand {
            0% {
                letter-spacing: -0.5em;
                opacity: 0;
            }
            40% {
                opacity: 0.6;
            }
            100% {
                opacity: 1;
            }
        }


        /* ----------------------------------------------
        * Generated by Animista on 2023-2-8 19:50:30
        * Licensed under FreeBSD License.
        * See http://animista.net/license for more info.
        * w: http://animista.net, t: @cssanimista
        * ---------------------------------------------- */

        /**
        * ----------------------------------------
        * animation tracking-out-contract
        * ----------------------------------------
        */
        @-webkit-keyframes tracking-out-contract {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 1;
            }
            100% {
                letter-spacing: -0.5em;
                opacity: 0;
            }
        }
        @keyframes tracking-out-contract {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 1;
            }
            100% {
                letter-spacing: -0.5em;
                opacity: 0;
            }
        }

    </style>
    <script>
        window.onload = (event) => {
            allElms = document.querySelectorAll('[data-scroll-text]');

            if (allElms.length > 0) {
                allElms.forEach(elm => {
                    text = elm.getAttribute('data-scroll-text');

                    elm.innerHTML = '';

                    arr = text.split(',');

                    render(elm, arr);
                    setInterval(() => {
                        render(elm, arr);
                    }, arr.length*2500);
                });
            }

            function render(elm, arr) {
                arr.forEach((el, i) => {
                setTimeout(() => {
                    elm.classList.remove('tracking-out');
                    elm.classList.add('tracking-in');
                    elm.innerHTML = el;
                    setTimeout(() => {
                        elm.classList.remove('tracking-in');
                        elm.classList.add('tracking-out');
                    }, 1500);
                }, i * 2500);
            });
            }
        };
    </script>
@endsection
