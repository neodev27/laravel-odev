@extends('../layout/' . $layout)

@section('subhead')
    <title>Uyarılar - Midone - Tailwind HTML Yönetici Şablonu</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Uyarılar</h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Alert -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Temel Uyarılar</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-1">Örnek kodu göster</label>
                        <input id="show-example-1" data-target="#basic-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="basic-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-primary show mb-2" role="alert">Kolay bir uyarı öğesi</div>
                        <div class="alert alert-secondary show mb-2" role="alert">Kolay bir uyarı öğesi</div>
                        <div class="alert alert-success show mb-2" role="alert">Kolay bir uyarı öğesi</div>
                        <div class="alert alert-warning show mb-2" role="alert">Kolay bir uyarı öğesi</div>
                        <div class="alert alert-pending show mb-2" role="alert">Kolay bir uyarı öğesi</div>
                        <div class="alert alert-danger show mb-2" role="alert">Kolay bir uyarı öğesi</div>
                        <div class="alert alert-dark show mb-2" role="alert">Kolay bir uyarı öğesi</div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-basic-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Örnek kodu kopyala
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-basic-alert" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="alert alert-primary show mb-2" role="alert">Kolay bir uyarı öğesi</div>
                                        <div class="alert alert-secondary show mb-2" role="alert">Kolay bir uyarı öğesi</div>
                                        <div class="alert alert-success show mb-2" role="alert">Kolay bir uyarı öğesi</div>
                                        <div class="alert alert-warning show mb-2" role="alert">Kolay bir uyarı öğesi</div>
                                        <div class="alert alert-pending show mb-2" role="alert">Kolay bir uyarı öğesi</div>
                                        <div class="alert alert-danger show mb-2" role="alert">Kolay bir uyarı öğesi</div>
                                        <div class="alert alert-dark show mb-2" role="alert">Kolay bir uyarı öğesi</div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Basic Alert -->
            <!-- BEGIN: Icon's Alert -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Simge Uyarıları</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-2">Örnek kodu göster</label>
                        <input id="show-example-2" data-target="#icon-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="icon-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-primary show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                        </div>
                        <div class="alert alert-secondary show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                        </div>
                        <div class="alert alert-success show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                        </div>
                        <div class="alert alert-warning show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                        </div>
                        <div class="alert alert-pending show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                        </div>
                        <div class="alert alert-danger show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                        </div>
                        <div class="alert alert-dark show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-icon-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Örnek kodu kopyala
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-icon-alert" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="alert alert-primary show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                        </div>
                                        <div class="alert alert-secondary show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                        </div>
                                        <div class="alert alert-success show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                        </div>
                                        <div class="alert alert-warning show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                        </div>
                                        <div class="alert alert-pending show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                        </div>
                                        <div class="alert alert-danger show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                        </div>
                                        <div class="alert alert-dark show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Icon's Alert -->
            <!-- BEGIN: Additional Content Alert -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Additional Content Alerts</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-3">Örnek kodu göster</label>
                        <input id="show-example-3" data-target="#additional-content-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="additional-content-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-primary show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Bilgili uyarı</div>
                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">Yeni</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-secondary show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Bilgili uyarı</div>
                                <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">Yeni</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-success show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Bilgili uyarı</div>
                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">Yeni</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-warning show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Bilgili uyarı</div>
                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">Yeni</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-pending show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Bilgili uyarı</div>
                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">Yeni</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-danger show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Bilgili uyarı</div>
                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">Yeni</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="alert alert-dark show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-lg">Bilgili uyarı</div>
                                <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">Yeni</div>
                            </div>
                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-additional-content-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Örnek kodu kopyala
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-additional-content-alert" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="alert alert-primary show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Bilgili uyarı</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">Yeni</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-secondary show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Bilgili uyarı</div>
                                                <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">Yeni</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-success show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Bilgili uyarı</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">Yeni</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-warning show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Bilgili uyarı</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">Yeni</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-pending show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Bilgili uyarı</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">Yeni</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-danger show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Bilgili uyarı</div>
                                                <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">Yeni</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                        <div class="alert alert-dark show mb-2" role="alert">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">Bilgili uyarı</div>
                                                <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">Yeni</div>
                                            </div>
                                            <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.</div>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Additional Content Alert -->
            <!-- BEGIN: Icon & Dismiss Alert -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">İkon & Uyarıları Kapat</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-4">Örnek kodu göster</label>
                        <input id="show-example-4" data-target="#icon-dismiss-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="icon-dismiss-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-primary alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-secondary alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-warning alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-pending alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-dark alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-icon-dismiss-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Örnek kodu kopyala
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-icon-dismiss-alert" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="alert alert-primary alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-secondary alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-success alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-warning alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-pending alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-dark alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Icon & Dismiss Alert -->
            <!-- BEGIN: Outline Alert -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">anahat uyarıları</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-5">Örnek kodu göster</label>
                        <input id="show-example-5" data-target="#outline-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="outline-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-outline-primary alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-secondary alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-success alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-warning alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-pending alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-danger alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="alert alert-outline-dark alert-dismissible show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-outline-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Örnek kodu kopyala
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-outline-alert" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="alert alert-outline-primary alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-secondary alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-success alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-warning alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-pending alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-danger alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                        <div class="alert alert-outline-dark alert-dismissible show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Outline Alert -->
            <!-- BEGIN: Soft Color Alert -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Yumuşak Renk Uyarıları</h2>
                    <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0" for="show-example-6">Örnek kodu göster</label>
                        <input id="show-example-6" data-target="#softcolor-alert" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="softcolor-alert" class="p-5">
                    <div class="preview">
                        <div class="alert alert-primary-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                        </div>
                        <div class="alert alert-secondary-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                        </div>
                        <div class="alert alert-success-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                        </div>
                        <div class="alert alert-warning-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                        </div>
                        <div class="alert alert-pending-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                        </div>
                        <div class="alert alert-danger-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                        </div>
                        <div class="alert alert-dark-soft show flex items-center mb-2" role="alert">
                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-softcolor-alert" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Örnek kodu kopyala
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-softcolor-alert" class="source-preview">
                                <code class="html">
                                    {{ str_replace('>', 'HTMLCloseTag', str_replace('<', 'HTMLOpenTag', '
                                        <div class="alert alert-primary-soft show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                        </div>
                                        <div class="alert alert-secondary-soft show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                        </div>
                                        <div class="alert alert-success-soft show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                        </div>
                                        <div class="alert alert-warning-soft show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                        </div>
                                        <div class="alert alert-pending-soft show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                        </div>
                                        <div class="alert alert-danger-soft show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                        </div>
                                        <div class="alert alert-dark-soft show flex items-center mb-2" role="alert">
                                            <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i> İkonlu uyarı
                                        </div>
                                    ')) }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Soft Color Alert -->
        </div>
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Metodlar -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Metodlar</h2>
                </div>
                <div class="p-5">
                    <div class="text-base font-medium">Get or Create Instance</div>
                    <div class="mt-2">Bir DOM öğesiyle ilişkilendirilmiş uyarı örneğini almanıza veya başlatılmamış olması durumunda yeni bir tane oluşturmanıza olanak sağlayan statik yöntem.</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                const myAlert = tailwind.Alert.getOrCreateInstance(document.querySelector("#myAlert"));
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Örnek Al</div>
                    <div class="mt-2">Bir DOM öğesiyle ilişkilendirilmiş uyarı örneğini almanızı sağlayan statik yöntem.</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                const myAlert = tailwind.Alert.getInstance(document.querySelector("#myAlert"));
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Gizle</div>
                    <div class="mt-2">Bir uyarıyı el ile gizler. Uyarı gerçekten gizlenmeden önce (yani <span class="text-red-500">hidden.tw.alert</span> olay gerçekleşmeden önce) arayana geri döner.</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                myAlert.hide();
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">geçiş</div>
                    <div class="mt-2">Uyarıyı el ile açar. Uyarı gerçekten gösterilmeden önce arayana geri döner(yani <span class="text-red-500">shown.tw.alert</span> olay gerçekleşmeden önce).</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                myAlert.show();
                            </code>
                        </pre>
                    </div>
                    <div class="text-base font-medium mt-3">Geçiş</div>
                    <div class="mt-2">Manuel olarak alarmı açar / kapatır. Uyarı gerçekten gösterilmeden veya gizlenmeden önce arayana geri döner (yani <span class="text-red-500">shown.tw.alert</span> yada <span class="text-red-500">hidden.tw.alert</span> olay gerçekleştirmeden önce).</div>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                myAlert.toggle();
                            </code>
                        </pre>
                    </div>
                </div>
            </div>
            <!-- END: Metodlar -->
            <!-- BEGIN: Events -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Etkinlikler</h2>
                </div>
                <div class="p-5">
                    Midone'un uyarı sınıfı, uyarı işlevine bağlanmak için birkaç olay ortaya çıkarır. Tüm uyarı olayları uyarının kendisinde tetiklenir (yani <span class="text-red-500">&lt;div class="alert"&gt;</span>'da).
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Etkinlik Türü</th>
                                <th class="whitespace-nowrap">Açıklama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-top text-red-500">show.tw.alert</td>
                                <td class="align-top">Bu olay, <span class="text-red-500">göster</span> örnek yöntemi çağrıldığında hemen tetiklenir.</td>
                            </tr>
                            <tr>
                                <td class="align-top text-red-500">hide.tw.alert</td>
                                <td class="align-top">Bu olay, <span class="text-red-500">gizle</span> örnek yöntemi çağrıldığında hemen tetiklenir.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="overflow-y-auto mt-3 rounded-md">
                        <pre class="source-preview">
                            <code class="javascript">
                                const myAlertEl = document.getElementById('myAlert')
                                myAlertEl.addEventListener('hidden.tw.alert', function (event) {
                                    // do something...
                                })
                            </code>
                        </pre>
                    </div>
                </div>
            </div>
            <!-- END: Events -->
        </div>
    </div>
@endsection
