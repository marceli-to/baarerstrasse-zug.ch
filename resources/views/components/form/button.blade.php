@props(['type' => 'submit'])
<button type="{{ $type }}" {{ $attributes->merge(['class' => 'bg-indigo hover:bg-plum text-white rounded-sm font-poppins-medium text-md md:text-lg font-medium flex uppercase py-5 px-15 transition-all']) }}>
  {{ $slot}}
</button>