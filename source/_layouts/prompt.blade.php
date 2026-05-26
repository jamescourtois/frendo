<div class="flex flex-col p-10 border text-center border-not-black dark:border-not-white mx-auto">
	<h2 class="text-center mb-8 mx-auto font-semibold max-w-[850px]">{!! $question !!}</h2>
	<ul class="list-none m-0 flex flex-col lg:flex-row flex-wrap items-center justify-center gap-8">
		@foreach($answers as $a)
			<li class="flex flex-grow flex-col gap-4 items-center justify-center">
				<button
					@click="document.querySelector('#{{$a['id']}}').scrollIntoView({ behavior: 'smooth' })"
					class="btn-green w-full text-xl lg:text-2xl font-bold  rounded-full px-4 py-2 "
					aria-label="Select 'I want the easiest experience.'">
					{!! $a['text'] !!}
				</button>
			</li>
		@endforeach
	</ul>
</div>