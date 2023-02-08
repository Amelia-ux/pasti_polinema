@extends('layouts.app')

<div class="main-menu menu-fixed menu-dark menu-bg-default rounded menu-accordion menu-shadow">
    <div class="main-menu-content"><a class="navigation-brand d-none d-md-block d-lg-block d-xl-block" href="/dashboard"><img class="brand-logo" alt="CryptoDash admin logo" src="assets/app-assets/images/ico/logo pasti.jpg" /></a>
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item active"><a href="/dashboard"><i class="icon-home"></i></i><span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="/" target="_blank"><i class="icon-eye"></i><span class="menu-title" data-i18n="">Lihat Website</span></a>
            </li>
            <li class=" nav-item"><a href="/about"><i class="icon-grid"></i><span class="menu-title" data-i18n="">Data Tentang UKM</span></a>
            </li>
            <li class=" nav-item"><a href="/faq"><i class="icon-question"></i><span class="menu-title" data-i18n="">Data FAQ</span></a>
            </li>
            <li class=" nav-item"><a href="/relation"><i class="icon-cup"></i><span class="menu-title" data-i18n="">Data Relasi</span></a>
            </li>
            <li class=" nav-item"><a href="/team"><i class="icon-users"></i><span class="menu-title" data-i18n="">Data DPH 26</span></a>
            </li>
            <li class=" nav-item"><a href="/workplan"><i class="icon-calendar"></i><span class="menu-title" data-i18n="">Program Kerja</span></a>
            </li>
            <li class=" nav-item"><a href="/contact"><i class="icon-envelope"></i><span class="menu-title" data-i18n="">Kontak</span></a>
            </li>
        </ul>
    </div>
</div>

@section('content')
<div class="card">
    <div class="card-content">
        <div class="table-responsive">
            <table id="recent-orders" class="table table-hover table-xl mb-0">
                <thead>
                    <tr>
                        <th class="border-top-0">Status</th>
                        <th class="border-top-0">Date</th>
                        <th class="border-top-0">Amount</th>
                        <th class="border-top-0">Currency</th>
                        <th class="border-top-0">Currency</th>
                        <th class="border-top-0">Tokens (CIC)</th>
                        <th class="border-top-0">Details</th>
                        <th class="border-top-0"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                        <td class="text-truncate"><a href="#">2018-01-03</a></td>
                        <td class="text-truncate">
                            <a href="#" class="mb-0 btn-sm btn btn-outline-success round">Deposit</a>
                        </td>
                        <td class="text-truncate p-1">5.34111</td>
                        <td>
                            <i class="cc ETH-alt"></i> ETH
                        </td>
                        <td>-</td>
                        <td class="text-truncate">Deposit to your Balance</td>
                        <td><i class="la la-thumbs-up warning float-right"></i></td>
                    </tr>
                    <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                        <td class="text-truncate"><a href="#">2018-01-03</a></td>
                        <td class="text-truncate">
                            <a href="#" class="mb-0 btn-sm btn btn-outline-success round">Deposit</a>
                        </td>
                        <td class="text-truncate p-1">5.34111</td>
                        <td>
                            <i class="cc ETH-alt"></i> ETH
                        </td>
                        <td>3,258</td>
                        <td class="text-truncate">Tokens Purchase</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o warning font-medium-1 mr-1"></i> in Process</td>
                        <td class="text-truncate"><a href="#">2018-01-21</a></td>
                        <td class="text-truncate">
                            <a href="#" class="mb-0 btn-sm btn btn-outline-warning round">Referral</a>
                        </td>
                        <td class="text-truncate p-1">-</td>
                        <td>-</td>
                        <td>200.88</td>
                        <td class="text-truncate">Referral Promo Bonus</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o danger font-medium-1 mr-1"></i> Pending</td>
                        <td class="text-truncate"><a href="#">2018-01-25</a></td>
                        <td class="text-truncate">
                            <a href="#" class="mb-0 btn-sm btn btn-outline-danger round">Withdrawal</a>
                        </td>
                        <td class="text-truncate p-1">-</td>
                        <td>-</td>
                        <td>-3,458.88</td>
                        <td class="text-truncate">Tokens withdrawn</td>
                        <td><i class="la la-dollar warning float-right"></i></td>
                    </tr>
                    <tr>
                        <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
                        <td class="text-truncate"><a href="#">2018-01-28</a></td>
                        <td class="text-truncate">
                            <a href="#" class="mb-0 btn-sm btn btn-outline-danger round">Deposit</a>
                        </td>
                        <td class="text-truncate p-1">0.8791</td>
                        <td><i class="cc BTC-alt"></i> BTC</td>
                        <td>--</td>
                        <td class="text-truncate">Deposit to your Balance</td>
                        <td><i class="la la-thumbs-up warning float-right"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection