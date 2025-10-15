<x-layout>
  <x-slot:title>
    Welcome
  </x-slot:title>

  <div class="flex flex-col items-center justify-start w-screen min-h-[100svh] pt-20">
    @foreach ($chirps as $chirp)
  <div class="card bg-base-100 shadow w-96 mb-6 last:mb-0">
    <div class="card-body text-center">
      <div class="font-semibold">{{ $chirp['author'] }}</div>
      <div class="mt-1">{{ $chirp['message'] }}</div>
      <div class="text-sm text-gray-500 mt-2">{{ $chirp['time'] }}</div>
    </div>
  </div>
    @endforeach

  </div>
</x-layout>

