@php
    $status = true;
@endphp

<div class="p-4 my-2 rounded bg-slate-300 text-black">
    <p @class(['text-red-600' => $status])>
        Admin Card!
    </p>
</div>
