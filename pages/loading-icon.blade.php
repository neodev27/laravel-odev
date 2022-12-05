@extends('../layout/' . $layout)

@section('subhead')
    <title>Simge - Midone - Tailwind HTML Yönetici Şablonu</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">SVG Loaders</h2>
    </div>
    <!-- BEGIN: Icon List -->
    <div class="intro-y grid grid-cols-12 sm:gap-6 gap-y-6 box px-5 py-8 mt-5">
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="audio" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">ses</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="ball-triangle" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">ucgen-top</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="bars" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">cubuklar</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="circles" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">daireler</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="grid" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">izgara</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="hearts" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">kalpler</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="oval" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">oval</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="puff" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">puff</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="rings" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">halkalar</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="spinning-circles" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">donen-daireler</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="tail-spin" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">donen-kuyruk</div>
        </div>
        <div class="col-span-6 sm:col-span-3 xl:col-span-2 flex flex-col justify-end items-center">
            <i data-loading-icon="three-dots" class="w-8 h-8"></i>
            <div class="text-center text-xs mt-2">uc-nokta</div>
        </div>
    </div>
    <!-- END: Icon List -->
@endsection
