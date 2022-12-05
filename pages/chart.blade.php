@extends('../layout/' . $layout)

@section('subhead')
    <title>Grafik - Midone - Tailwind HTML Yönetici Şablonu</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Grafik</h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Vertical Bar Chart -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Dikey Çubuk Grafik</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Örnek Kodu Göster</label>
                        <input id="show-example-1" data-target="#vertical-bar-chart" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="vertical-bar-chart" class="p-5">
                    <div class="preview">
                        <div class="h-[400px]">
                            <canvas id="vertical-bar-chart-widget"></canvas>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-vertical-bar-chart" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Örnek Kodu Kopyala
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-vertical-bar-chart" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="h-[400px]">
                                            <canvas id="vertical-bar-chart-widget"></canvas>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Vertical Bar Chart -->
            <!-- BEGIN: Horizontal Bar Chart -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Yatay Çubuk Grafik</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Örnek Kodu Göster</label>
                        <input id="show-example-2" data-target="#horizontal-bar-chart" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="horizontal-bar-chart" class="p-5">
                    <div class="preview">
                        <div class="h-[400px]">
                            <canvas id="horizontal-bar-chart-widget"></canvas>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-horizontal-bar-chart" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Örnek Kodu Kopyala
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-horizontal-bar-chart" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="h-[400px]">
                                            <canvas id="horizontal-bar-chart-widget"></canvas>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Horizontal Bar Chart -->
            <!-- BEGIN: Donut Chart -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Çörek Grafiği</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Örnek Kodu Göster</label>
                        <input id="show-example-3" data-target="#donut-chart" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="donut-chart" class="p-5">
                    <div class="preview">
                        <div class="h-[400px]">
                            <canvas id="donut-chart-widget"></canvas>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-donut-chart" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Örnek Kodu Kopyala
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-donut-chart" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="h-[400px]">
                                            <canvas id="donut-chart-widget"></canvas>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Donut Chart -->
        </div>
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Stacked Bar Chart -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Yığılmış Çubuk Grafik</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Örnek Kodu Göster</label>
                        <input id="show-example-4" data-target="#stacked-bar-chart" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="stacked-bar-chart" class="p-5">
                    <div class="preview">
                        <div class="h-[400px]">
                            <canvas id="stacked-bar-chart-widget"></canvas>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-stacked-bar-chart" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Örnek Kodu Kopyala
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-stacked-bar-chart" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="h-[400px]">
                                            <canvas id="stacked-bar-chart-widget"></canvas>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Stacked Bar Chart -->
            <!-- BEGIN: Line Chart -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Hat Grafiği</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Örnek Kodu Göster</label>
                        <input id="show-example-5" data-target="#line-chart" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="line-chart" class="p-5">
                    <div class="preview">
                        <div class="h-[400px]">
                            <canvas id="line-chart-widget"></canvas>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-line-chart" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Örnek Kodu Kopyala
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-line-chart" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="h-[400px]">
                                            <canvas id="line-chart-widget"></canvas>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Line Chart -->
            <!-- BEGIN: Pie Chart -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Turta Grafik</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Örnek Kodu Göster</label>
                        <input id="show-example-6" data-target="#pie-chart" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="pie-chart" class="p-5">
                    <div class="preview">
                        <div class="h-[400px]">
                            <canvas id="pie-chart-widget"></canvas>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-pie-chart" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Örnek Kodu Kopyala
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-pie-chart" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="h-[400px]">
                                            <canvas id="pie-chart-widget"></canvas>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Pie Chart -->
        </div>
    </div>
@endsection
