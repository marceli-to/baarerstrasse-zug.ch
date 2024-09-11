@extends('app')
@section('content')
<x-layout.section class="bg-white text-pewter">
  <x-layout.inner>
    <div class="max-w-4xl">
      <h1 class="text-plum">Baarerstrasse Zug – <br>Ihr zentraler Knotenpunkt!</h1>
      <h2 class="text-plum">Erstvermietung</h2>
      <p>Ab Winter 2025 vermieten wir in zentraler Lage in der <a href="https://maps.app.goo.gl/xRx177oz1n2tv2sb9" target="_blank" title="Auf Googlemaps anzeigen" class="underline hover:no-underline underline-offset-4 decoration-1">Baarerstrasse 57/59</a>, nach Gesamtsanierung, 57 komfortable 1- bis 3.5-Zimmerwohnungen samt 52 Einstellplätzen sowie ca. 860 m2 Bürofläche und 650 m2 Gewerbefläche für den Einzelhandel.</p>
      <p><strong class="uppercase text-plum">Sind Sie interessiert?</strong><br>Gerne senden wir Ihnen weitere Informationen, sobald die Vermietung startet. Füllen Sie dazu bitte unser Kontaktformular aus und wir halten Sie auf dem Laufenden.</p>
    </div>
  </x-layout.inner>
</x-layout.section>
<x-layout.section class="bg-nimbus">
  <x-layout.inner>
    <h1 class="text-indigo">Kontaktformular</h1>
    @livewire('create-inquiry')
  </x-layout.inner>
</x-layout.section>
@endsection