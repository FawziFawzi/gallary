@props(['href','classes','datafilter'])


<a {{$attributes->merge(['class'=>'btn '.$classes.' pp-filter-button'])}} href={{$href}} data-filter={{$datafilter}}>

    {{ $slot }}

</a>
