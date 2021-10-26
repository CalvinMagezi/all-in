@extends('layouts.app')
@push('styles')
<style>
			.carousel-open:checked + .carousel-item {
				position: static;
				opacity: 100;
			}
			.carousel-item {
				-webkit-transition: opacity 0.6s ease-out;
				transition: opacity 0.6s ease-out;
			}
			#carousel-1:checked ~ .control-1,
			#carousel-2:checked ~ .control-2,
			#carousel-3:checked ~ .control-3 {
				display: block;
			}
			.carousel-indicators {
				list-style: none;
				margin: 0;
				padding: 0;
				position: absolute;
				bottom: 2%;
				left: 0;
				right: 0;
				text-align: center;
				z-index: 10;
			}
			#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
			#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
			#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
				color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
			}
            .material-card {
                font-family: 'Roboto', sans-serif;
                background-color: #FFF;
                box-shadow: 0px 2px 1px -1px rgba(0, 0, 0, 0.2), 0px 1px 1px 0px rgba(0, 0, 0, 0.14), 0px 1px 3px 0px rgba(0,0,0,.12);
            }
		</style>
@endpush
@section('content')

{{-- Hero Slides --}}
<div class="mt-32 w-screen h-screen font-sans leading-normal tracking-normal">
<div class="carousel relative shadow-2xl bg-white">
	<div class="carousel-inner relative overflow-hidden w-full">
	  <!--Slide 1-->
		<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
		<div style="background:url('img/gameon.jpeg'); background-size:cover; background-repeat:no-repeat;" class="carousel-item absolute opacity-0 h-screen">
			<div class="block h-full w-full bg-black bg-opacity-70 text-white text-5xl text-center">
                <h1 class="pt-64 text-8xl text-indigo-600 font-bold">Game On!</h1>
                <p class="text-sm text-white my-5">Add Text Here.</p>
                <button style="box-shadow: 5px 10px indigo;" class="bg-white p-5 text-indigo-600 text-xl">Read More <i class="fa fa-arrow-right  text-2xl" aria-hidden="true"></i></button>
            </div>
		</div>
		<label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

		<!--Slide 2-->
		<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
		<div style="background:url('img/gameon.jpeg'); background-size:cover; background-repeat:no-repeat;" class="carousel-item absolute opacity-0 h-screen">
			<div class="block h-full w-full bg-black bg-opacity-70 text-white text-5xl text-center">
                <h1 class="pt-64 text-8xl text-indigo-600 font-bold">Game On 2!</h1>
                <p class="text-sm text-white my-5">Add Text Here.</p>
                <button style="box-shadow: 5px 10px indigo;" class="bg-white p-5 text-indigo-600 text-xl">Read More <i class="fa fa-arrow-right  text-2xl" aria-hidden="true"></i></button>
            </div>
		</div>
		<label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

		<!--Slide 3-->
		<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
		<div style="background:url('img/gameon.jpeg'); background-size:cover; background-repeat:no-repeat;" class="carousel-item absolute opacity-0 h-screen">
			<div class="block h-full w-full bg-black bg-opacity-70 text-white text-5xl text-center">
                <h1 class="pt-64 text-8xl text-indigo-600 font-bold">Game On 3!</h1>
                <p class="text-sm text-white my-5">Add Text Here.</p>
                <button style="box-shadow: 5px 10px indigo;" class="bg-white p-5 text-indigo-600 text-xl">Read More <i class="fa fa-arrow-right  text-2xl" aria-hidden="true"></i></button>
            </div>
		</div>
		<label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

		<!-- Add additional indicators for each slide-->
		<ol class="carousel-indicators">
			<li class="inline-block mr-3">
				<label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
		</ol>

	</div>
</div>
</div>

{{-- Cards Slider --}}
<div class="w-screen h-full py-10 bg-yellow-400 items-center justify-center" >
    <div class="flex w-screen">
       <div class="mx-auto my-auto flex">
		<button class="my-auto "><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
        <div class="card_block">
            <ul class="flex mt-32 mx-auto items-center justify-center">
                <li class="px-1 mx-1" x-data="{ chance: false }">
                    <img src="{{ asset('img/chance.jpg') }}" class="w-56 border-2 border-indigo-600" alt="">
					<p class="text-indigo-600">Add text here.</p>
					<br>
					<button x-on:click="chance = ! chance" class="text-black border-none mt-5">Read More <i class="ml-5 fa fa-arrow-right text-indigo-600 text-2xl" aria-hidden="true"></i></button>

                    <div x-show="chance" class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-800 bg-opacity-70">
                        <img src="{{ asset('img/chance-how.jpg') }}" class="w-80" alt="">
                    <div class="bg-white rounded-lg w-1/2">
                        <div class="flex flex-col items-start p-4">
                        <div class="flex items-center w-full">
                            <div class="text-indigo-600 font-medium text-4xl">Chance</div>
                            <svg x-on:click="chance = false" class="ml-auto fill-current text-gray-700 w-6 h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/>
                            </svg>
                        </div>
                        <hr>
                        <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        <hr>
                        <div class="ml-auto">
                            <button class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Play Now
                            </button>
                            <button  x-on:click="chance = false" class="bg-transparent hover:bg-gray-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Close
                            </button>
                        </div>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="px-1 mx-1" x-data="{ truth: false }">
                    <img src="{{ asset('img/truthordare.jpg') }}" class="w-56 border-2 border-indigo-600" alt="">
					<p class="text-indigo-600">Add text here.</p>
					<br>
					<button x-on:click="truth = ! truth" class="text-black border-none mt-5">Read More <i class="ml-5 fa fa-arrow-right text-indigo-600 text-2xl" aria-hidden="true"></i></button>

                     <div x-show="truth" class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-800 bg-opacity-70">
                        <img src="{{ asset('img/truth-how.jpg') }}" class="w-80" alt="">
                    <div class="bg-white rounded-lg w-1/2">
                        <div class="flex flex-col items-start p-4">
                        <div class="flex items-center w-full">
                            <div class="text-indigo-600 font-medium text-4xl">Truth Or Dare</div>
                            <svg x-on:click="truth = false" class="ml-auto fill-current text-gray-700 w-6 h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/>
                            </svg>
                        </div>
                        <hr>
                        <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        <hr>
                        <div class="ml-auto">
                            <button class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Play Now
                            </button>
                            <button  x-on:click="truth = false" class="bg-transparent hover:bg-gray-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Close
                            </button>
                        </div>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="px-1 mx-1" x-data="{ charades: false }">
                    <img src="{{ asset('img/charades.jpg') }}" class="w-56 border-2 border-indigo-600" alt="">
					<p class="text-indigo-600">Add text here.</p>
					<br>
					<button x-on:click="charades = ! charades" class="text-black border-none mt-5">Read More <i class="ml-5 fa fa-arrow-right text-indigo-600 text-2xl" aria-hidden="true"></i></button>

                     <div x-show="charades" class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-800 bg-opacity-70">
                        <img src="{{ asset('img/charades-how.jpg') }}" class="w-80" alt="">
                    <div class="bg-white rounded-lg w-1/2">
                        <div class="flex flex-col items-start p-4">
                        <div class="flex items-center w-full">
                            <div class="text-indigo-600 font-medium text-4xl">Charades</div>
                            <svg x-on:click="charades = false" class="ml-auto fill-current text-gray-700 w-6 h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/>
                            </svg>
                        </div>
                        <hr>
                        <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        <hr>
                        <div class="ml-auto">
                            <button class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Play Now
                            </button>
                            <button  x-on:click="charades = false" class="bg-transparent hover:bg-gray-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Close
                            </button>
                        </div>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="px-1 mx-1" x-data="{ never: false }">
                    <img src="{{ asset('img/neverhaveiever.jpg') }}" class="w-56 border-2 border-indigo-600" alt="">
					<p class="text-indigo-600">Add text here.</p>
					<br>
					<button x-on:click="never = ! never" class="text-black border-none mt-5">Read More <i class="ml-5 fa fa-arrow-right text-indigo-600 text-2xl" aria-hidden="true"></i></button>

                     <div x-show="never" class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-800 bg-opacity-70">
                        <img src="{{ asset('img/never-how.jpg') }}" class="w-80" alt="">
                    <div class="bg-white rounded-lg w-1/2">
                        <div class="flex flex-col items-start p-4">
                        <div class="flex items-center w-full">
                            <div class="text-indigo-600 font-medium text-4xl">Never Have I Ever</div>
                            <svg x-on:click="never = false" class="ml-auto fill-current text-gray-700 w-6 h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/>
                            </svg>
                        </div>
                        <hr>
                        <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        <hr>
                        <div class="ml-auto">
                            <button class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Play Now
                            </button>
                            <button  x-on:click="never = false" class="bg-transparent hover:bg-gray-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Close
                            </button>
                        </div>
                        </div>
                    </div>
                    </div>
                </li>
            </ul>
        </div>
        <button class="my-auto "><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
	   </div>
    </div>
</div>

{{-- Promo Video --}}
<div style="background:url('img/demo.jpg'); background-repeat:no-repeat; background-size:cover;" class="w-screen h-screen bg-cover">
	<div class="bg-black bg-opacity-70 h-full">
		<div class="w-3/5 mx-auto h-full">
		<div class="pt-96 text-center items-center justify-center">
		<button class="rounded-full bg-white bg-opacity-70 my-5 p-5"><i class="fa fa-play text-indigo-600 text-4xl" aria-hidden="true"></i></button>
		<h1 class="text-white font-bold text-6xl font-bold">HOW TO PLAY</h1>
			</div>
		</div>
	</div>
</div>

{{-- About Us --}}
<div class="w-screen h-screen flex">
	<div class="w-2/5 h-full" style="background:url('img/dice.jpeg'); background-size: cover; background-repeat:no-repeat;">
	</div>
	<div class="w-3/5 h-full bg-yellow-300 p-10 relative">
		<p class="text-indigo-600">11.11.18/ in Games</p>
		<h1 class="text-indigo-600 text-7xl font-bold py-3">About Us</h1>
		<h3 class="text-2xl text-indigo-600">Add Text Here</h3>

		<button class="absolute bottom-0 font-italic text-indigo-600 text-2xl">Read More <i class="fa fa-arrow-right text-indigo-600 text-2xl" aria-hidden="true"></i></button>
	</div>
</div>

{{-- Upcoming Events --}}
<div class="w-screen h-screen bg-indigo-600">
<div class="w-full text-center">
	<h1 class="text-yellow-400 pt-3 font-bold text-5xl">Upcoming Events</h1>
</div>

<div class="flex items-center p-10 w-full h-full">
	<div class="border-t border-b pt-16 grid grid-cols-2 gap-8">
		<div class="flex flex-col justify-start">
			<div class="flex flex-col w-full object-cover h-4/6 justify-items-start border rounded-lg overflow-hidden"
				style="min-heigth:320px">
				<img class="w-full h-full object-cover" src='{{ asset('img/upcoming.jpeg') }}' alt='All In' >
            </div>
			</div>
			<div class="flex flex-col">
				<div class="flex flex-col gap-4">
					<h1 class="capitalize text-4xl text-yellow-400 font-extrabold">Event Title</h1>
					<h2 class="text-3xl text-yellow-400">24 Hrs 30 Min 20 Sec</h2>
					<p class="text-lg text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Voluptatibus voluptatum nisi maxime obcaecati impedit? Ratione error eum qui quidem? Veniam
						accusamus ea repudiandae itaque, explicabo quidem perspiciatis. Culpa, asperiores deserunt.</p>
					<div class="flex items-center gap-4 my-6 cursor-pointer ">
						<div class="bg-yellow-400 px-5 py-3 text-indigo-600 rounded-lg w-2/4 text-center">Register Now</div>
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400" viewBox="0 0 20 20"
							fill="currentColor">
							<path fill-rule="evenodd"
								d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
								clip-rule="evenodd" />
						</svg>
					</div>
				</div>
			</div>
		</div>
</div>
</div>

{{-- Game Ranks --}}
<div class="w-screen h-full py-10 bg-red-500">
    <div class="w-full text-center">
        <h1 class="text-white text-6xl font-bold">Game Ranks</h1>
    </div>

    <div class="w-4/5 mx-auto">
        <div class="w-full text-center my-10">
            <h1 class="text-black text-7xl">TRUTH OR DARE</h1>
        </div>
        <div class="w-full flex flex-column my-5">
            <button><i class="fa fa-arrow-left text-indigo-600 text-2xl" aria-hidden="true"></i></button>
            <div class="mx-3">
                <div class="max-w-sm rounded material-card bg-white">
                    <div class="mx-4 mt-2 mb-4">
                    <a class="tracking-wider uppercase font-bold text-purple-700 hover:bg-purple-100 rounded p-2 inline-block" href="#">1</a>
                </div>
                <img class="w-full rounded-t" src="data:image/svg+xml,%3Csvg%20width%3D%22344%22%20height%3D%22194%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%3Cdefs%3E%3Cpath%20id%3D%22a%22%20d%3D%22M-1%200h344v194H-1z%22%2F%3E%3C%2Fdefs%3E%3Cg%20transform%3D%22translate(1)%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cmask%20id%3D%22b%22%20fill%3D%22%23fff%22%3E%3Cuse%20xlink%3Ahref%3D%22%23a%22%2F%3E%3C%2Fmask%3E%3Cuse%20fill%3D%22%23BDBDBD%22%20xlink%3Ahref%3D%22%23a%22%2F%3E%3Cg%20mask%3D%22url(%23b)%22%3E%3Cpath%20d%3D%22M173.65%2069.238L198.138%2027%20248%20112.878h-49.3c.008.348.011.697.011%201.046%200%2028.915-23.44%2052.356-52.355%2052.356C117.44%20166.28%2094%20142.84%2094%20113.924c0-28.915%2023.44-52.355%2052.356-52.355%2010%200%2019.347%202.804%2027.294%207.669zm0%200l-25.3%2043.64h50.35c-.361-18.478-10.296-34.61-25.05-43.64z%22%20fill%3D%22%23757575%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E">
                <div class="px-6 py-4 bg-yellow-300 text-indigo-600">
                    <div class="font-bold text-xl tracking-wide">Name Here</div>
                    <div class="text-gray-500 text-sm mb-3">Rank Description</div>

                </div>

                </div>
            </div>
            <div class="mx-3">
                <div class="max-w-sm rounded material-card bg-white">
                    <div class="mx-4 mt-2 mb-4">
                    <a class="tracking-wider uppercase font-bold text-purple-700 hover:bg-purple-100 rounded p-2 inline-block" href="#">1</a>
                </div>
                <img class="w-full rounded-t" src="data:image/svg+xml,%3Csvg%20width%3D%22344%22%20height%3D%22194%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%3Cdefs%3E%3Cpath%20id%3D%22a%22%20d%3D%22M-1%200h344v194H-1z%22%2F%3E%3C%2Fdefs%3E%3Cg%20transform%3D%22translate(1)%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cmask%20id%3D%22b%22%20fill%3D%22%23fff%22%3E%3Cuse%20xlink%3Ahref%3D%22%23a%22%2F%3E%3C%2Fmask%3E%3Cuse%20fill%3D%22%23BDBDBD%22%20xlink%3Ahref%3D%22%23a%22%2F%3E%3Cg%20mask%3D%22url(%23b)%22%3E%3Cpath%20d%3D%22M173.65%2069.238L198.138%2027%20248%20112.878h-49.3c.008.348.011.697.011%201.046%200%2028.915-23.44%2052.356-52.355%2052.356C117.44%20166.28%2094%20142.84%2094%20113.924c0-28.915%2023.44-52.355%2052.356-52.355%2010%200%2019.347%202.804%2027.294%207.669zm0%200l-25.3%2043.64h50.35c-.361-18.478-10.296-34.61-25.05-43.64z%22%20fill%3D%22%23757575%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E">
                <div class="px-6 py-4 bg-yellow-300 text-indigo-600">
                    <div class="font-bold text-xl tracking-wide">Name Here</div>
                    <div class="text-sm mb-3">Rank Description</div>

                </div>

                </div>
            </div>
            <div class="mx-3">
                <div class="max-w-sm rounded material-card bg-white">
                    <div class="mx-4 mt-2 mb-4">
                    <a class="tracking-wider uppercase font-bold text-purple-700 hover:bg-purple-100 rounded p-2 inline-block" href="#">1</a>
                </div>
                <img class="w-full rounded-t" src="data:image/svg+xml,%3Csvg%20width%3D%22344%22%20height%3D%22194%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%3Cdefs%3E%3Cpath%20id%3D%22a%22%20d%3D%22M-1%200h344v194H-1z%22%2F%3E%3C%2Fdefs%3E%3Cg%20transform%3D%22translate(1)%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cmask%20id%3D%22b%22%20fill%3D%22%23fff%22%3E%3Cuse%20xlink%3Ahref%3D%22%23a%22%2F%3E%3C%2Fmask%3E%3Cuse%20fill%3D%22%23BDBDBD%22%20xlink%3Ahref%3D%22%23a%22%2F%3E%3Cg%20mask%3D%22url(%23b)%22%3E%3Cpath%20d%3D%22M173.65%2069.238L198.138%2027%20248%20112.878h-49.3c.008.348.011.697.011%201.046%200%2028.915-23.44%2052.356-52.355%2052.356C117.44%20166.28%2094%20142.84%2094%20113.924c0-28.915%2023.44-52.355%2052.356-52.355%2010%200%2019.347%202.804%2027.294%207.669zm0%200l-25.3%2043.64h50.35c-.361-18.478-10.296-34.61-25.05-43.64z%22%20fill%3D%22%23757575%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E">
                <div class="px-6 py-4 bg-yellow-300 text-indigo-600">
                    <div class="font-bold text-xl tracking-wide">Name Here</div>
                    <div class="text-sm mb-3">Rank Description</div>

                </div>

                </div>
            </div>
            <div class="mx-3">
                <div class="max-w-sm rounded material-card bg-white">
                    <div class="mx-4 mt-2 mb-4">
                    <a class="tracking-wider uppercase font-bold text-purple-700 hover:bg-purple-100 rounded p-2 inline-block" href="#">1</a>
                </div>
                <img class="w-full rounded-t" src="data:image/svg+xml,%3Csvg%20width%3D%22344%22%20height%3D%22194%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%3Cdefs%3E%3Cpath%20id%3D%22a%22%20d%3D%22M-1%200h344v194H-1z%22%2F%3E%3C%2Fdefs%3E%3Cg%20transform%3D%22translate(1)%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cmask%20id%3D%22b%22%20fill%3D%22%23fff%22%3E%3Cuse%20xlink%3Ahref%3D%22%23a%22%2F%3E%3C%2Fmask%3E%3Cuse%20fill%3D%22%23BDBDBD%22%20xlink%3Ahref%3D%22%23a%22%2F%3E%3Cg%20mask%3D%22url(%23b)%22%3E%3Cpath%20d%3D%22M173.65%2069.238L198.138%2027%20248%20112.878h-49.3c.008.348.011.697.011%201.046%200%2028.915-23.44%2052.356-52.355%2052.356C117.44%20166.28%2094%20142.84%2094%20113.924c0-28.915%2023.44-52.355%2052.356-52.355%2010%200%2019.347%202.804%2027.294%207.669zm0%200l-25.3%2043.64h50.35c-.361-18.478-10.296-34.61-25.05-43.64z%22%20fill%3D%22%23757575%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E">
                <div class="px-6 py-4 bg-yellow-300 text-indigo-600">
                    <div class="font-bold text-xl tracking-wide">Name Here</div>
                    <div class="text-sm mb-3">Rank Description</div>

                </div>

                </div>
            </div>
            <div class="mx-3">
                <div class="max-w-sm rounded material-card bg-white">
                    <div class="mx-4 mt-2 mb-4">
                    <a class="tracking-wider uppercase font-bold text-purple-700 hover:bg-purple-100 rounded p-2 inline-block" href="#">1</a>
                </div>
                <img class="w-full rounded-t" src="data:image/svg+xml,%3Csvg%20width%3D%22344%22%20height%3D%22194%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E%3Cdefs%3E%3Cpath%20id%3D%22a%22%20d%3D%22M-1%200h344v194H-1z%22%2F%3E%3C%2Fdefs%3E%3Cg%20transform%3D%22translate(1)%22%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cmask%20id%3D%22b%22%20fill%3D%22%23fff%22%3E%3Cuse%20xlink%3Ahref%3D%22%23a%22%2F%3E%3C%2Fmask%3E%3Cuse%20fill%3D%22%23BDBDBD%22%20xlink%3Ahref%3D%22%23a%22%2F%3E%3Cg%20mask%3D%22url(%23b)%22%3E%3Cpath%20d%3D%22M173.65%2069.238L198.138%2027%20248%20112.878h-49.3c.008.348.011.697.011%201.046%200%2028.915-23.44%2052.356-52.355%2052.356C117.44%20166.28%2094%20142.84%2094%20113.924c0-28.915%2023.44-52.355%2052.356-52.355%2010%200%2019.347%202.804%2027.294%207.669zm0%200l-25.3%2043.64h50.35c-.361-18.478-10.296-34.61-25.05-43.64z%22%20fill%3D%22%23757575%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E">
                <div class="px-6 py-4 bg-yellow-300 text-indigo-600">
                    <div class="font-bold text-xl tracking-wide">Name Here</div>
                    <div class="text-sm mb-3">Rank Description</div>

                </div>

                </div>
            </div>
            <button><i class="fa fa-arrow-right text-indigo-600 text-2xl" aria-hidden="true"></i></button>
        </div>

    </div>
</div>

{{-- Game Pass --}}
<div class="w-screen h-ful bg-gray-300 py-3">
    <div class="w-full text-center">
        <h1 class="text-indigo-600 text-6xl font-bold">GAME PASS</h1>
    </div>
    <div class="w-4/5 mx-auto flex my-2">
        <div class="w-1/5 p-4 bg-yellow-400 text-center">
            <h1 class="text-indigo-600 text-3xl font-bold mt-5">Normal Pass</h1>
        </div>
        <div class="w-3/5 overflow-auto px-5 py-2 flex bg-indigo-600">
            <div class="bg-white w-32 h-32 mx-1"></div>
            <div class="bg-white w-32 h-32 mx-1"></div>
            <div class="bg-white w-32 h-32 mx-1"></div>
            <div class="bg-white w-32 h-32 mx-1"></div>
            <div class="bg-white w-32 h-32 mx-1"></div>
            <div class="bg-white w-32 h-32 mx-1"></div>
        </div>
        <div class="w-1/5 p-4 bg-yellow-400 text-center">
            <h1 class="text-indigo-600 text-3xl font-bold">Free</h1>
        </div>
    </div>

    <div class="w-4/5 mx-auto flex my-2">
        <div class="w-1/5 p-4 bg-yellow-400 text-center">
            <h1 class="text-indigo-600 text-3xl font-bold mt-5">Bronze Pass</h1>

        </div>
        <div class="w-3/5 overflow-x-scroll px-5 py-2 flex bg-indigo-600">
            <div class="bg-white w-32 h-32 mx-1"></div>
            <div class="bg-white w-32 h-32 mx-1"></div>
            <div class="bg-white w-32 h-32 mx-1"></div>
            <div class="bg-white w-32 h-32 mx-1"></div>
            <div class="bg-white w-32 h-32 mx-1"></div>
            <div class="bg-indigo w-32 h-32 mx-1 text-center">
                <h1 class="text-2xl text-yellow-400 font-bold">Plus Normal Pass</h1>
            </div>
        </div>
        <div class="w-1/5 p-4 bg-yellow-400 text-center">
            <h1 class="text-indigo-600 text-3xl font-bold">Ksh 1,000</h1>
            <a href="#" class="w-full text-yellow-400 bg-indigo-600 rounded-lg p-2 text-2xl mt-3 border-1 border-gray-300">Select Plan</a>
        </div>
    </div>

    <div class="w-4/5 mx-auto flex my-2">
        <div class="w-1/5 p-4 bg-yellow-400 text-center">
            <h1 class="text-indigo-600 text-3xl font-bold mt-5">Gold Pass</h1>
        </div>
        <div class="w-3/5 overflow-x-scroll px-5 py-2 flex bg-indigo-600">
            <div class="bg-white w-32 h-32 mx-1"></div>
            <div class="bg-white w-32 h-32 mx-1"></div>
            <div class="bg-white w-32 h-32 mx-1"></div>
            <div class="bg-white w-32 h-32 mx-1"></div>
            <div class="bg-white w-32 h-32 mx-1"></div>
            <div class="bg-indigo w-32 h-32 mx-1 text-center">
                <h1 class="text-2xl text-yellow-400 font-bold">Plus Normal & Bronze Pass</h1>
            </div>
        </div>
        <div class="w-1/5 p-4 bg-yellow-400 text-center">
            <h1 class="text-indigo-600 text-3xl font-bold">Ksh 2,000</h1>
            <a href="#" class="w-full text-yellow-400 bg-indigo-600 rounded-lg p-2 text-2xl mt-3 border-1 border-gray-300">Select Plan</a>
        </div>
    </div>

    <div class="w-full text-center">
        <h1 class="text-indigo-600 text-4xl">Pass Ends In: <span class="font-bold">7 Days 8 Hours 30 Min 8 Sec</span></h1>
    </div>

    <div class="w-3/5 mx-auto h-24 bg-indigo-600 text-center">
        <h1 class="text-yellow-300 text-2xl">Disclaimer Here</h1>
    </div>
</div>

{{-- Blog Section --}}
<div class="w-screen h-screen bg-yellow-300">
     <div class="px-6 py-8">
        <div class="container flex justify-between mx-auto">
            <div class="w-full lg:w-8/12">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-bold text-indigo-600 md:text-2xl">Latest News</h1>
                    <div>
                        <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option>Latest</option>
                            <option>Last Week</option>
                        </select>
                    </div>
                </div>
                <div class="mt-6">
                    <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                        <div class="flex items-center justify-between"><span class="font-light text-gray-600">Jun 1,
                                2020</span><a href="#"
                                class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Laravel</a>
                        </div>
                        <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Build
                                Your New Idea with Laravel Freamwork.</a>
                            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                        </div>
                        <div class="flex items-center justify-between mt-4"><a href="#"
                                class="text-blue-500 hover:underline">Read more</a>
                            <div><a href="#" class="flex items-center"><img
                                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                        alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                    <h1 class="font-bold text-gray-700 hover:underline">Alex John</h1>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                        <div class="flex items-center justify-between"><span class="font-light text-gray-600">mar 4,
                                2019</span><a href="#"
                                class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Design</a>
                        </div>
                        <div class="mt-2"><a href="#"
                                class="text-2xl font-bold text-gray-700 hover:underline">Accessibility tools for
                                designers and developers</a>
                            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                        </div>
                        <div class="flex items-center justify-between mt-4"><a href="#"
                                class="text-blue-500 hover:underline">Read more</a>
                            <div><a href="#" class="flex items-center"><img
                                        src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80"
                                        alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                    <h1 class="font-bold text-gray-700 hover:underline">Jane Doe</h1>
                                </a></div>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <div class="flex">
                        <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md cursor-not-allowed">
                            previous
                        </a>

                        <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                            1
                        </a>

                        <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                            2
                        </a>

                        <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                            3
                        </a>

                        <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                            Next
                        </a>
                    </div>
                </div>
            </div>
            <div class="hidden w-4/12 -mx-8 lg:block">
                <div class="px-8">
                    <h1 class="mb-4 text-xl font-bold text-gray-700">Authors</h1>
                    <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md">
                        <ul class="-mx-4">
                            <li class="flex items-center"><img
                                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                    alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Alex John</a><span
                                        class="text-sm font-light text-gray-700">Created 23 Posts</span></p>
                            </li>
                            <li class="flex items-center mt-6"><img
                                    src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80"
                                    alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Jane Doe</a><span
                                        class="text-sm font-light text-gray-700">Created 52 Posts</span></p>
                            </li>
                            <li class="flex items-center mt-6"><img
                                    src="https://images.unsplash.com/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=281&amp;q=80"
                                    alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Lisa Way</a><span
                                        class="text-sm font-light text-gray-700">Created 73 Posts</span></p>
                            </li>
                            <li class="flex items-center mt-6"><img
                                    src="https://images.unsplash.com/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=735&amp;q=80"
                                    alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Steve Matt</a><span
                                        class="text-sm font-light text-gray-700">Created 245 Posts</span></p>
                            </li>
                            <li class="flex items-center mt-6"><img
                                    src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=373&amp;q=80"
                                    alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Khatab
                                        Wedaa</a><span class="text-sm font-light text-gray-700">Created 332 Posts</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="px-8 mt-10">
                    <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
                    <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md">
                        <ul>
                            <li><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    AWS</a></li>
                            <li class="mt-2"><a href="#"
                                    class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    Laravel</a></li>
                            <li class="mt-2"><a href="#"
                                    class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">- Vue</a>
                            </li>
                            <li class="mt-2"><a href="#"
                                    class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    Design</a></li>
                            <li class="flex items-center mt-2"><a href="#"
                                    class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    Django</a></li>
                            <li class="flex items-center mt-2"><a href="#"
                                    class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">- PHP</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- News Letter --}}
<div class="w-screen bg-indigo-600 h-96">

    <div class="w-full text-center py-5 ">
        <h1 class="text-yellow-400 text-4xl font-bold mt-20">SUBSCRIBE TO OUR NEWSLETTER</h1>
    </div>

    <div class="flex w-full my-3">
        <input style="background:none;" class="mx-auto w-1/2 border-b-2 border-white" type="text" placeholder="Enter Your Email">
    </div>

    <div class="flex w-full my-3">
        <button style="box-shadow:5px 10px indigo;" class="mx-auto p-8 bg-white text-black hover:p-4 ">Subscribe <i class="fa fa-arrow-right text-indigo-600" aria-hidden="true"></i></button>
    </div>

</div>

@endsection

