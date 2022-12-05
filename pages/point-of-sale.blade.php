@extends('../layout/' . $layout)

@section('subhead')
    <title>Satış Noktas - Midone - Tailwind HTML Yönetici Şablonu</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Satış Noktası</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#new-order-modal" class="btn btn-primary shadow-md mr-2">Yeni Sipariş</a>
            <div class="pos-dropdown dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-lucide="chevron-down"></i>
                    </span>
                </button>
                <div class="pos-dropdown__dropdown-menu dropdown-menu">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="activity" class="w-4 h-4 mr-2"></i>
                                <span class="truncate">INV-0206020 - {{ $fakers[3]['users'][0]['name'] }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="activity" class="w-4 h-4 mr-2"></i>
                                <span class="truncate">INV-0206022 - {{ $fakers[4]['users'][0]['name'] }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="activity" class="w-4 h-4 mr-2"></i>
                                <span class="truncate">INV-0206021 - {{ $fakers[5]['users'][0]['name'] }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Item List -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <div class="lg:flex intro-y">
                <div class="relative">
                    <input type="text" class="form-control py-3 px-4 w-full lg:w-64 box pr-10" placeholder="Öge ara...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 text-slate-500" data-lucide="search"></i>
                </div>
                <select class="form-select py-3 px-4 box w-full lg:w-auto mt-3 lg:mt-0 ml-auto">
                    <option>Şuna göre sırala</option>
                    <option>A'dan Z'ye</option>
                    <option>Z'den A'ya</option>
                    <option>Düşük Fiyat</option>
                    <option>Yüksek Fiyat</option>
                </select>
            </div>
            <div class="grid grid-cols-12 gap-5 mt-5">
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Çorba</div>
                    <div class="text-slate-500">5 Öge</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box bg-primary p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base text-white">Krep ve Tost</div>
                    <div class="text-white text-opacity-80 dark:text-slate-500">8 Öge</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Makarna</div>
                    <div class="text-slate-500">4 Öge</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Gofret</div>
                    <div class="text-slate-500">3 Öğe</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Atıştırmalıklar</div>
                    <div class="text-slate-500">8 Öge</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Tatlılar</div>
                    <div class="text-slate-500">8 Öge</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">İçecek</div>
                    <div class="text-slate-500">9 Öge</div>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-5 mt-5 pt-5 border-t">
                @foreach (array_slice($fakers, 0, 8) as $faker)
                    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 2xl:col-span-3">
                        <div class="box rounded-md p-3 relative zoom-in">
                            <div class="flex-none relative block before:block before:w-full before:pt-[100%]">
                                <div class="absolute top-0 left-0 w-full h-full image-fit">
                                    <img alt="Midone - HTML Yönetici Şablonu" class="rounded-md" src="{{ asset('dist/images/' . $faker['foods'][0]['image']) }}">
                                </div>
                            </div>
                            <div class="block font-medium text-center truncate mt-3">{{ $faker['foods'][0]['name'] }}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <!-- END: Item List -->
        <!-- BEGIN: Ticket -->
        <div class="col-span-12 lg:col-span-4">
            <div class="intro-y pr-1">
                <div class="box p-2">
                    <ul class="nav nav-pills" role="tablist">
                        <li id="ticket-tab" class="nav-item flex-1" role="presentation">
                            <button
                                class="nav-link w-full py-2 active"
                                data-tw-toggle="pill"
                                data-tw-target="#ticket"
                                type="button"
                                role="tab"
                                aria-controls="ticket"
                                aria-selected="true"
                            >
                                Bilet
                            </button>
                        </li>
                        <li id="details-tab" class="nav-item flex-1" role="presentation">
                            <button
                                class="nav-link w-full py-2"
                                data-tw-toggle="pill"
                                data-tw-target="#details"
                                type="button"
                                role="tab"
                                aria-controls="details"
                                aria-selected="false"
                            >
                                Detaylar
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="ticket" class="tab-pane active" role="tabpanel" aria-labelledby="ticket-tab">
                    <div class="box p-2 mt-5">
                        @foreach (array_slice($fakers, 0, 5) as $key => $faker)
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-darkmode-600 hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md">
                                <div class="max-w-[50%] truncate mr-1">{{ $faker['foods'][0]['name'] }}</div>
                                <div class="text-slate-500">x 1</div>
                                <i data-lucide="edit" class="w-4 h-4 text-slate-500 ml-2"></i>
                                <div class="ml-auto font-medium">${{ $faker['totals'][0] }}</div>
                            </a>
                        @endforeach
                    </div>
                    <div class="box flex p-5 mt-5">
                        <input type="text" class="form-control py-3 px-4 w-full bg-slate-100 border-slate-200/60 pr-10" placeholder="Kupo kodu kullanın...">
                        <button class="btn btn-primary ml-2">Kaydet</button>
                    </div>
                    <div class="box p-5 mt-5">
                        <div class="flex">
                            <div class="mr-auto">Alt Toplam</div>
                            <div class="font-medium">$250</div>
                        </div>
                        <div class="flex mt-4">
                            <div class="mr-auto">İndirim</div>
                            <div class="font-medium text-danger">-$20</div>
                        </div>
                        <div class="flex mt-4">
                            <div class="mr-auto">Vergi</div>
                            <div class="font-medium">15%</div>
                        </div>
                        <div class="flex mt-4 pt-4 border-t border-slate-200/60 dark:border-darkmode-400">
                            <div class="mr-auto font-medium text-base">Toplam Tutar</div>
                            <div class="font-medium text-base">$220</div>
                        </div>
                    </div>
                    <div class="flex mt-5">
                        <button class="btn w-32 border-slate-300 dark:border-darkmode-400 text-slate-500">Ögeleri Temizle</button>
                        <button class="btn btn-primary w-32 shadow-md ml-auto">Öde</button>
                    </div>
                </div>
                <div id="details" class="tab-pane" role="tabpanel" aria-labelledby="details-tab">
                    <div class="box p-5 mt-5">
                        <div class="flex items-center border-b border-slate-200 dark:border-darkmode-400 pb-5">
                            <div>
                                <div class="text-slate-500">Saat</div>
                                <div class="mt-1">02/06/20 02:10 PM</div>
                            </div>
                            <i data-lucide="clock" class="w-4 h-4 text-slate-500 ml-auto"></i>
                        </div>
                        <div class="flex items-center border-b border-slate-200 dark:border-darkmode-400 py-5">
                            <div>
                                <div class="text-slate-500">Müşteri</div>
                                <div class="mt-1">{{ $fakers[0]['users'][0]['name'] }}</div>
                            </div>
                            <i data-lucide="user" class="w-4 h-4 text-slate-500 ml-auto"></i>
                        </div>
                        <div class="flex items-center border-b border-slate-200 dark:border-darkmode-400 py-5">
                            <div>
                                <div class="text-slate-500">Kişi</div>
                                <div class="mt-1">3</div>
                            </div>
                            <i data-lucide="users" class="w-4 h-4 text-slate-500 ml-auto"></i>
                        </div>
                        <div class="flex items-center pt-5">
                            <div>
                                <div class="text-slate-500">Masa</div>
                                <div class="mt-1">21</div>
                            </div>
                            <i data-lucide="mic" class="w-4 h-4 text-slate-500 ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Ticket -->
    </div>
    <!-- BEGIN: New Order Modal -->
    <div id="new-order-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Yeni Sipariş</h2>
                </div>
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    <div class="col-span-12">
                        <label for="pos-form-1" class="form-label">Ad</label>
                        <input id="pos-form-1" type="text" class="form-control flex-1" placeholder="Müşteri Adı">
                    </div>
                    <div class="col-span-12">
                        <label for="pos-form-2" class="form-label">Masa</label>
                        <input id="pos-form-2" type="text" class="form-control flex-1" placeholder="Müşteri Masası">
                    </div>
                    <div class="col-span-12">
                        <label for="pos-form-3" class="form-label">Kişi Sayısı</label>
                        <input id="pos-form-3" type="text" class="form-control flex-1" placeholder="Kişi">
                    </div>
                </div>
                <div class="modal-footer text-right">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-32 mr-1">İptal</button>
                    <button type="button" class="btn btn-primary w-32">Bilet Oluştur</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: New Order Modal -->
    <!-- BEGIN: Add Item Modal -->
    <div id="add-item-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">{{ $fakers[0]['foods'][0]['name'] }}</h2>
                </div>
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    <div class="col-span-12">
                        <label for="pos-form-4" class="form-label">Miktar</label>
                        <div class="flex mt-2 flex-1">
                            <button type="button" class="btn w-12 border-slate-200 bg-slate-100 dark:bg-darkmode-700 dark:border-darkmode-500 text-slate-500 mr-1">-</button>
                            <input id="pos-form-4" type="text" class="form-control w-24 text-center" placeholder="Item quantity" value="2">
                            <button type="button" class="btn w-12 border-slate-200 bg-slate-100 dark:bg-darkmode-700 dark:border-darkmode-500 text-slate-500 ml-1">+</button>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <label for="pos-form-5" class="form-label">Notlar</label>
                        <textarea id="pos-form-5" class="form-control w-full mt-2" placeholder="Öge Notları"></textarea>
                    </div>
                </div>
                <div class="modal-footer text-right">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">İptal</button>
                    <button type="button" class="btn btn-primary w-24">Öge Ekle</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Add Item Modal -->
@endsection
