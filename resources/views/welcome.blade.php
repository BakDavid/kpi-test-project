<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/shared.css'); }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css'); }}" rel="stylesheet">
</head>

<body class="antialiased">
    <header class="main-header">
        <div>
            <a href="#" class="main-header__brand">
                <img src="{{ asset('assets/Icon1_19.png')}}" /> TKI RESEARCH LIBRARY</a>
        </div>
        <nav class="main-nav">
            <ul class="main-nav__items">
                <li class="main-nav__item">
                    <a href="#">Log In</a>
                </li>
                <span class="toggle-button__bar"></span>
                <li class="main-nav__item">
                    <a href="#">Register</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="product-overview">
            <div class="product-title">The KPI Dictionary Volume I: Functional Areas</div>
            <div class="product-indicator">
                <div class="product-indicator__content">3,200+ Key Performance Indicator Definitions for an in depth view on performance measurement</div>
            </div>
            <div class="product-volume">
                <div class="product-volume__content">
                    <strong>The KPI Dictionary - Volume 1</strong> is a reference collection of Key Performance Indicators, used in practice today, which covers the major functional areas of an organization, regardless of its industry specifics. The collection contains the most relevant means for measuring performance, throughout the most common departments in either public, private or non-profit organizations, such as: Finance, Sales, Human Resources, Marketing and IT.
                </div>
            </div>
            <div class="product-benefits">
                <div class="product-benefits__left">
                    <div class="product-benefits__left-header">
                        <img src="{{ asset('assets/Icon1_03.png')}}" />
                        <div class="product-benefits__left-header-text">KEY BENEFITS OF THE FUNCTIONAL AREAS KPI DICTIONARY</div>
                    </div>
                    <div class="product-benefits__left-section">
                        <div class="product-benefits__left-section-text">
                            <div class="product-benefits__left-section-text-each">
                                <div class="green-bold-text">SELECT</div> - the critical KPIs to drive operational success
                            </div>
                            <div class="product-benefits__left-section-text-each">
                                <div class="green-bold-text">ACCESS</div> - a full collection of KPIs, specific for each functional area
                            </div>
                            <div class="product-benefits__left-section-text-each">
                                <div class="green-bold-text">CONFIGURE</div> - your own customized departmental scorecard and dashboard
                            </div>
                            <div class="product-benefits__left-section-text-each">
                                <div class="green-bold-text">IMPROVE</div> - your current KPI framework
                            </div>
                            <div class="product-benefits__left-section-text-each">
                                <div class="green-bold-text">BUILD</div> - your internal KPI library
                            </div>
                        </div>
                        <div class="product-benefits__left-section-image">
                            <img src="{{ asset('assets/Icon1_07.png')}}" />
                        </div>
                    </div>
                </div>
                <div class="product-benefits__right">
                    <div class="product-benefits__right-title">
                        DOWNLOAD A FREE PREVIEW
                    </div>
                    <div class="product-benefits__right-info">
                        To proceed with your order, please take a moment to fill in the fields below.
                    </div>
                    <form class="input-form" method="POST" action="{{url('/')}}">
                        @csrf
                        <input type="text" placeholder="First Name" name="firstName" required />
                        <input type="text" placeholder="Last Name" name="lastName" required />
                        <input type="text" placeholder="Company" name="company" required />
                        <select name="country">
                            <option value="" selected>Country</option>
                            @foreach($countries as $country)

                            <option value="{{ $country->phoneCode }}, {{ $country->name }}">
                                {{ $country->name }}
                            </option>

                            @endforeach
                        </select>
                        <!-- <input type="text" placeholder="Country" name="country" required /> -->
                        <input type="tel" placeholder="Phone Number" name="phoneNumber" required />
                        <input type="email" placeholder="Email Address" name="email" required />
                        <div class="product-benefits__right-info">
                            <i>We value your privacy and will never disclose your data to third parties without your consent.</i>
                        </div>
                        <div class="form-submit-section">
                            <button type="submit">DOWNLOAD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="product-facts">
            <div class="product-facts-title">TKI FACTS AND FIGURES</div>
            <div class="product-facts-list">
                <div class="product-facts-list-card">
                    <img src="{{ asset('assets/Icon1_11.png')}}" />
                    <div class="green-fact">75,000+</div>
                    <div class="normal-fact">COMMUNITY MEMBERS</div>
                </div>
                <div class="product-facts-list-card">
                    <img src="{{ asset('assets/Icon1_13.png')}}" />
                    <div class="green-fact">240+</div>
                    <div class="normal-fact">RESOURCES PROVIDED</div>
                </div>
                <div class="product-facts-list-card">
                    <img src="{{ asset('assets/Icon1_15.png')}}" />
                    <div class="green-fact">20+</div>
                    <div class="normal-fact">BUSINESS ANALYSTS</div>
                </div>
                <div class="product-facts-list-card">
                    <img src="{{ asset('assets/Icon1_17.png')}}" />
                    <div class="green-fact">12+</div>
                    <div class="normal-fact">PRACTICE DOMAINS</div>
                </div>
                <div class="product-facts-list-card">
                    <img src="{{ asset('assets/Icon1_19.png')}}" />
                    <div class="green-fact">11+</div>
                    <div class="normal-fact">YEARS OF RESEARCH</div>
                </div>
            </div>
        </div>
        <div class="product-support">
            <div class="product-support-card">
                <div class="product-support-card-top">
                    <img src="{{ asset('assets/chatus_btn.png')}}" />
                    <div>CHAT WITH US</div>
                </div>
                <div class="product-support-card-bottom">
                    Have questions? A customer service representative is online to help you via Live Chat. Join in the conversation.
                </div>
            </div>
            <div class="product-support-card">
                <div class="product-support-card-top">
                    <img src="{{ asset('assets/callus_btn.png')}}" />
                    <div>CALL US</div>
                </div>
                <div class="product-support-card-bottom">
                    Get in touch with us. For immediate assistance, we're available to take your call at +61 3 9028 2223.
                </div>
            </div>
            <div class="product-support-card">
                <div class="product-support-card-top">
                    <img src="{{ asset('assets/emailus_btn.png')}}" />
                    <div>EMAIL US</div>
                </div>
                <div class="product-support-card-bottom">
                    We'd love to help. Send us an email at office@kpiinstitute.org and a representative will get back to you.
                </div>
            </div>
        </div>
    </main>
    <footer class="main-footer">
        <nav>
            <ul class="main-footer__links">
                <li class="main-footer__link">
                    Copyright © 2009-2015 The KPI Institute Ltd. All Rights Reserved
                </li>
            </ul>
        </nav>
    </footer>
</body>

</html>