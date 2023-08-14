<x-mail::message>
# Introduction

The body of your message.
-Prénoms : {{$data ['firstname']}},
-Nom : {{$data ['last_name']}},
-Téléphone : {{$data ['phone']}},
-Mail : {{$data ['mail']}},

**Message : <br>
{{$data ['message']}},




<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
