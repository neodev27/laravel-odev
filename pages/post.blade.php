@extends('../layout/' . $layout)

@section('subhead')
    <title>Yeni Gönderi Ekle - Midone - Tailwind HTML Yönetici Şablonu</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Yeni Gönderi Ekle</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <div class="dropdown mr-2">
                <button class="dropdown-toggle btn box flex items-center" aria-expanded="false" data-tw-toggle="dropdown">
                    İngilizce <i class="w-4 h-4 ml-2" data-lucide="chevron-down"></i>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="activity" class="w-4 h-4 mr-2"></i>
                                <span class="truncate">İngilizce</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="activity" class="w-4 h-4 mr-2"></i>
                                <span class="truncate">Endonezce</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <button type="button" class="btn box mr-2 flex items-center ml-auto sm:ml-0">
                <i class="w-4 h-4 mr-2" data-lucide="eye"></i> Önizle
            </button>
            <div class="dropdown">
                <button class="dropdown-toggle btn btn-primary shadow-md flex items-center" aria-expanded="false" data-tw-toggle="dropdown">
                    Kaydet <i class="w-4 h-4 ml-2" data-lucide="chevron-down"></i>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Yeni Gönderi Olarak
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Taslak Olarak

                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> PDF'e Çıkar
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Word'e Çıkar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Post Content -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <input type="text" class="intro-y form-control py-3 px-4 box pr-10" placeholder="Yazı">
            <div class="post intro-y overflow-hidden box mt-5">
                <ul class="post__tabs nav nav-tabs flex-col sm:flex-row bg-slate-200 dark:bg-darkmode-800" role="tablist">
                    <li class="nav-item">
                        <button title="Fill in the article content" data-tw-toggle="tab" data-tw-target="#content" class="nav-link tooltip w-full sm:w-40 py-4 active" id="content-tab" role="tab" aria-controls="content" aria-selected="true">
                            <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> İçerik
                        </button>
                    </li>
                    <li class="nav-item">
                        <button title="Adjust the meta title" data-tw-toggle="tab" data-tw-target="#meta-title" class="nav-link tooltip w-full sm:w-40 py-4" id="meta-title-tab" role="tab" aria-selected="false">
                            <i data-lucide="code" class="w-4 h-4 mr-2"></i> Meta Yazı
                        </button>
                    </li>
                    <li class="nav-item">
                        <button title="Use search keywords" data-tw-toggle="tab" data-tw-target="#keywords" class="nav-link tooltip w-full sm:w-40 py-4" id="keywords-tab" role="tab" aria-selected="false">
                            <i data-lucide="align-left" class="w-4 h-4 mr-2"></i> Anahtar Kelimeler
                        </button>
                    </li>
                </ul>
                <div class="post__content tab-content">
                    <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                            <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Yazı İçeriği
                            </div>
                            <div class="mt-5">
                                <div class="editor">
                                    <p>Ediörün İçeriği.</p>
                                </div>
                            </div>
                        </div>
                        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">
                            <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Yakalama ve Resimler
                            </div>
                            <div class="mt-5">
                                <div>
                                    <label for="post-form-7" class="form-label">Yakalama</label>
                                    <input id="post-form-7" type="text" class="form-control" placeholder="Yakalama yaz">
                                </div>
                                <div class="mt-3">
                                    <label class="form-label">Resim Yükle</label>
                                    <div class="border-2 border-dashed dark:border-darkmode-400 rounded-md pt-4">
                                        <div class="flex flex-wrap px-4">
                                            @foreach (array_slice($fakers, 0, 4) as $faker)
                                                <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                    <img class="rounded-md" alt="Midone - HTML Yönetici Şablonu" src="{{ asset('dist/images/' . $faker['images'][0]) }}">
                                                    <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                                        <i data-lucide="x" class="w-4 h-4"></i>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                            <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span class="text-primary mr-1">Dosya Yükle</span> veya sürükle bırak
                                            <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post Content -->
        <!-- BEGIN: Post Info -->
        <div class="col-span-12 lg:col-span-4">
            <div class="intro-y box p-5">
                <div>
                    <label class="form-label">Yazan</label>
                    <div class="dropdown">
                        <div class="dropdown-toggle btn w-full btn-outline-secondary dark:bg-darkmode-800 dark:border-darkmode-800 flex items-center justify-start" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                            <div class="w-6 h-6 image-fit mr-3">
                                <img class="rounded" alt="Midone - HTML Yönetici Şablonu" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="truncate">{{ $fakers[0]['users'][0]['name'] }}</div>
                            <i class="w-4 h-4 ml-auto" data-lucide="chevron-down"></i>
                        </div>
                        <div class="dropdown-menu w-full">
                            <ul class="dropdown-content">
                                @foreach (array_slice($fakers, 0, 5) as $faker)
                                    <li>
                                        <a href="javascript:;" class="dropdown-item">
                                            <div class="w-6 h-6 absolute image-fit mr-3">
                                                <img class="rounded" alt="Midone - HTML Yönetici Şablonu" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                            </div>
                                            <div class="ml-8 pl-1">{{ $faker['users'][0]['name'] }}</div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="post-form-2" class="form-label">Gönderi Tarihi</label>
                    <input type="text" class="datepicker form-control" id="post-form-2" data-single-mode="true">
                </div>
                <div class="mt-3">
                    <label for="post-form-3" class="form-label">Kategoriler</label>
                    <select data-placeholder="Select categories" class="tom-select w-full" id="post-form-3" multiple>
                        <option value="1" selected>Korku</option>
                        <option value="2">Bilim Kurgu</option>
                        <option value="3" selected>Aksiyon</option>
                        <option value="4">Drama</option>
                        <option value="5">Komedi</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="post-form-4" class="form-label">Etiketler</label>
                    <select data-placeholder="Select your favorite actors" class="tom-select w-full" id="post-form-4" multiple>
                        <option value="1" selected>Leonardo DiCaprio</option>
                        <option value="2">Johnny Deep</option>
                        <option value="3" selected>Robert Downey, Jr</option>
                        <option value="4">Samuel L. Jackson</option>
                        <option value="5">Morgan Freeman</option>
                    </select>
                </div>
                <div class="form-check form-switch flex flex-col items-start mt-3">
                    <label for="post-form-5" class="form-check-label ml-0 mb-2">Yayınlandı</label>
                    <input id="post-form-5" class="form-check-input" type="checkbox">
                </div>
                <div class="form-check form-switch flex flex-col items-start mt-3">
                    <label for="post-form-6" class="form-check-label ml-0 mb-2">Sahibin Adını Göster</label>
                    <input id="post-form-6" class="form-check-input" type="checkbox">
                </div>
            </div>
        </div>
        <!-- END: Post Info -->
    </div>
@endsection

@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection
