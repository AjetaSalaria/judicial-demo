@extends('layoutdashboard')
@section('title', 'Home - judicial Legal Intelligence')
@section('content')
    {{-- <section class="py-8 py-md-11 border-bottom section-2">
                  <div class="container">
                  </div>
               </section>  --}}

    <div id="bodyWrapper" class="bodyBackground">
        <div class="results-header d-flex flex-column">
            <div class="search-bar-container d-flex flex-row justify-content-center">
                <form id="core-search-form" class="w-100">
                    <p class="mobilePlaceHolderText d-md-none">
                        Search anything: judges, parties, opposing counsel, motion types, legal issues
                    </p>
                    <div id="search-form-wrapper">
                        <div class="header-center-wrapper">
                            <div class="coreSearchInput" style="width: 100%; position: relative;">

                                    <input id="textSearchs" name="q" type="text" class="form-control" aria-label="Search anything: judges, parties, opposing counsel, motion types, legal issues" placeholder="Search anything: judges, parties, opposing counsel, motion types, legal issues" autocomplete="off" wrongful termination "">
                                    <div class="spinner-border float-left" role="status" style="display:none;">
                                     </div>
                            </div>
                            <div id="searchTipsDropdownContainer" style="margin-bottom: 48px; z-index: -1; right: -1px; position: absolute; width: 100%; margin-top: -5px; top: 28px;">
                                <div class="dropDownContainer GayGW">
                                    <div class="searchDropDownContainer bAcwUd">
                                        <div class="tipsContainer">
                                            <div class="tipsTitle">
                                                SEARCH TIPS
                                           </div>
                                            <div class="tipContent">
                                                <span><strong>
                                                    judge:last-name
                                                </strong></span>
                                                <span>
                                                    judge:Abbot
                                                </span>
                                                <span>
                                                Filter by a specific judge name.
                                                </span>
                                            </div>
                                            <div class="tipContent"> <span><strong>party:party-name</strong></span> <span>party:&quot;Apple inc&quot;</span> <span>Filter by a specific party name.</span> </div>
                                            <div class="tipContent"> <span><strong>county:name</strong></span> <span>county:losangeles</span> <span>Filter by a specific county without spaces.</span> </div>
                                            <div class="tipContent"> <span><strong>AND</strong></span> <span>&quot;damages&quot; AND &quot;injuries&quot; AND &quot;relief&quot;</span> <span>Both terms must appear in document</span> </div>
                                            <div class="tipContent"> <span><strong>OR</strong></span> <span>&quot;modify&quot; OR &quot;ammend&quot;</span> <span>Either terms can appear in document</span> </div>
                                            <div class="tipContent"> <span><strong>&quot;&quot;</strong></span> <span>&quot;motion for summary judgment&quot;</span> <span>Exact match of phrase</span> </div>
                                            <div class="tipContent"> <span><strong>*</strong></span> <span>negligen*</span> <span>Match anything after the *</span> </div>
                                            <div class="tipContent"> <span><strong>( )</strong></span> <span>&quot;motion&quot; AND (&quot;dismiss&quot; OR &quot;summary&quot;)</span> <span>Grouping of terms</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="advancedSearchButtonContainer">
                                    <button class="advancedSearchButton" type="button"> Advanced Search </button>
                                </div>
                            </div>
                            <div class="input-group-append">
                                <select id="stateSelect" class="custom-select multiselect dropdown-toggle btn btn-default" name="state" multiple="multiple" title="select state here"></select>
                                <button class="btn btn-search" type="submit" aria-label="search button">
                                    <div class="rINcab searchButtonIcon"> <span class="z1asCe MZy1Rb" id="textSearch">
    <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
    <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
    </path>
    </svg>
    </span> </div>
                                    <div class="spinner-border text-primary searchButtonSubmitting d-none" role="status"> <span class="sr-only">Loading...</span> </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="advancedSearch" class="advancedSearchContainer">
                        <div class="overlay-button mr-auto">
    {{--                             <button type="button" class="alert-action-btn ml-xl-2 alert-overlay-btn" data-alert-name='judge:anderle AND &quot;wrongful termination&quot;' data-alert-state="[&#39;ca&#39;]" data-toggle="tooltip" data-placement="top" data-add-all=1 title="Alert me with new cases related to this topic"> <img src="/static/alerts/bell-icon-2.svg" alt="bell-icon"> Track This Topic </button> --}}
                        </div>
                        <button class="advanced-search-btn dropdown-toggle" type="button" aria-label="advanced search button dropdown-toggle"> Advanced Search &nbsp;
                            <svg class="advancedArrowDown" width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.17917 0L5 4.32839L8.82083 0L10 1.33581L5 7L0 1.33581L1.17917 0Z" fill="#333333" /> </svg>
                            <svg class="advancedArrowUp" width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.82083 7L5 2.67161L1.17917 7L0 5.66419L5 1.19209e-07L10 5.66419L8.82083 7Z" fill="#333333" /> </svg>
                        </button>
                        <div class="advancedSearchForm dropdown-menu row">
                            <div class="advancedSearchFormLeft col-12 col-md-6">
                                <div class="advancedInputGroup">
                                    <label class="sectionLabel" for="Judge_Name">Judge</label>
                                    <input type="text" class="form-control" name="advanced_judge" placeholder="Judge Name" id="Judge_Name"> </div>
                                <div class="advancedInputGroup">
                                    <label class="sectionLabel" for="Party_Name">Party</label>
                                    <input type="text" class="form-control" name="advanced_party" placeholder="Party Name" id="Party_Name"> </div>
                            </div>
                            <div class="advancedSearchFormRight col-12 col-md-6">
                                <div>
                                    <label class="sectionLabel">Date</label>
                                    <div class="dateRangeInputContainer d-flex flex-row">
                                        <label class="customRadioContainer">Last 6 Months
                                            <input name="date_range" value="6" type="radio"> <span class="checkmark"></span> </label>
                                        <label class="customRadioContainer">Last Year
                                            <input name="date_range" value="12" type="radio"> <span class="checkmark"></span> </label>
                                        <label class="customRadioContainer">All Time
                                            <input name="date_range" value="all" type="radio"> <span class="checkmark"></span> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="searchTipsContainer2">
                                <button class="advanced-search-tips-btn" type="button"> SEARCH TIPS </button>
                                <div id="searchTipsDropdownContainer2">
                                    <div class="dropDownContainer GayGW">
                                        <div class="searchDropDownContainer bAcwUd">
                                            <div class="tipsContainer">
                                                <div class="tipContent"> <span><strong>judge:last-name</strong></span> <span>judge:Abbot</span> <span>Filter by a specific judge name.</span> </div>
                                                <div class="tipContent"> <span><strong>party:party-name</strong></span> <span>party:&quot;Apple inc&quot;</span> <span>Filter by a specific party name.</span> </div>
                                                <div class="tipContent"> <span><strong>county:name</strong></span> <span>county:losangeles</span> <span>Filter by a specific county without spaces.</span> </div>
                                                <div class="tipContent"> <span><strong>AND</strong></span> <span>&quot;damages&quot; AND &quot;injuries&quot; AND &quot;relief&quot;</span> <span>Both terms must appear in document</span> </div>
                                                <div class="tipContent"> <span><strong>OR</strong></span> <span>&quot;modify&quot; OR &quot;ammend&quot;</span> <span>Either terms can appear in document</span> </div>
                                                <div class="tipContent"> <span><strong>&quot;&quot;</strong></span> <span>&quot;motion for summary judgment&quot;</span> <span>Exact match of phrase</span> </div>
                                                <div class="tipContent"> <span><strong>*</strong></span> <span>negligen*</span> <span>Match anything after the *</span> </div>
                                                <div class="tipContent"> <span><strong>( )</strong></span> <span>&quot;motion&quot; AND (&quot;dismiss&quot; OR &quot;summary&quot;)</span> <span>Grouping of terms</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid search-container">
            <div class="results-container d-flex flex-column justify-content-center align-items-center">
                <div class="main-content-container d-flex flex-row w-100">
                    <div id="sidebar" class="filters-container d-none d-md-block">
                        <h3 class="sidebarHeader">Filter By:</h3>
                        <form method="get" id="refine-form" action="/rulings/judge:anderle AND &quot;wrongful termination&quot;">
                            <div id="rulingFilterContainer">
                                <div class="filter-module filter-type">
                                    <h4>Type</h4>
                                    <div class="filter-radio-button-holder">
                                        <input type="text" id="type-input" class="filterBoxInput form-control" placeholder="Filter by Type" onkeyup="if (!window.__cfRLUnblockHandlers) return false; filterAggregations('type-input',
                                                                      'type-item')" onkeydown="if (!window.__cfRLUnblockHandlers) return false; disableEnterKey()" data-cf-modified-acfcc1acf16c1b3b565e9d8c-="" />
                                                                  </div>
                                    <div class="filter-radio-button-holder">
                                        <div class="filter-group type-item">
                                            <input id="filter-state-civil" class="filter-input judicialRulingSearchFilter" name="type" type="checkbox" value="civil">
                                            <label class="filter-label" for="filter-state-civil"> Civil (7) </label>
                                        </div>
                                    </div>
                                    <div class="applyButtonFooter">
                                        <button class="judicial-apply-button judicial-green2">Apply</button>
                                    </div>
                                </div>
                                <div class="filter-module filter-judge">
                                    <h4>Judge</h4>
                                    <div class="filter-radio-button-holder">
                                        <input type="text" id="judge-input" class="filterBoxInput form-control" placeholder="Filter by Judge Name" onkeyup="if (!window.__cfRLUnblockHandlers) return false; filterAggregations('judge-input',
                                                                      'judge-item')" onkeydown="if (!window.__cfRLUnblockHandlers) return false; disableEnterKey()" data-cf-modified-acfcc1acf16c1b3b565e9d8c-="" /> </div>
                                    <div class="filter-radio-button-holder">
                                        <div class="filter-group judge-item">
                                            <input id="filter-state-Thomas Anderle" class="filter-input judicialRulingSearchFilter" name="judge" type="checkbox" value="Thomas Anderle">
                                            <label class="filter-label" for="filter-state-Thomas Anderle"> Thomas Anderle (34) </label>
                                        </div>
                                    </div>
                                    <div class="applyButtonFooter">
                                        <button class="judicial-apply-button judicial-green2">Apply</button>
                                    </div>
                                </div>
                                <div class="filter-module filter-county">
                                    <h4>County</h4>
                                    <div class="filter-radio-button-holder">
                                        <input type="text" id="county-input" class="filterBoxInput form-control" placeholder="Filter by County" onkeyup="if (!window.__cfRLUnblockHandlers) return false; filterAggregations('county-input',
                                                                      'county-item')" onkeydown="if (!window.__cfRLUnblockHandlers) return false; disableEnterKey()" data-cf-modified-acfcc1acf16c1b3b565e9d8c-="" /> </div>
                                    <div class="filter-radio-button-holder">
                                        <div class="filter-group county-item">
                                            <input id="filter-state-6083" class="filter-input judicialRulingSearchFilter" name="county" type="checkbox" value="6083">
                                            <label class="filter-label" for="filter-state-6083"> Santa Barbara County, CA (34) </label>
                                        </div>
                                    </div>
                                    <div class="applyButtonFooter">
                                        <button class="judicial-apply-button judicial-green2">Apply</button>
                                    </div>
                                </div> <a class="all-reset d-block mt-2" href="/rulings/judge:anderle AND &quot;wrongful termination&quot;">Reset All</a> </div>
                        </form>
                    </div>
                    <div id="results-right" class="search-results-container d-flex flex-column">
                        <div class="tabs-container d-flex flex-row justify-content-start">
                            {{-- <a href="/rulings/judge:anderle%20AND%20%22wrongful%20termination%22/?" class="search-tabs-btn mr-2 active">
                                Rulings
                                <span class="tabCount rulingCountTab">
                                </span>
                            </a> --}}
                            {{-- <a href="/cases/judge:anderle%20AND%20%22wrongful%20termination%22/?" class="search-tabs-btn mr-2 ">
                                Dockets
                                <span class="tabCount docketCountTab">
                                </span>
                            </a>  --}}
                            {{-- <a href="/docs/judge:anderle%20AND%20%22wrongful%20termination%22/?" class="search-tabs-btn mr-2 ">
                                Documents
                                <span class="tabCount documentCountTab">
                                </span>
                            </a>  --}}
                        </div>
                        <div class="results-sort-bar d-flex flex-row justify-content-center justify-content-md-between align-items-center">
                            <div class="results-count d-none d-md-flex ml-1">
                                <p><span class="pageCount"></span></p>
                            </div>
                            <div class="sort-by-bar d-flex flex-row align-items-center">
                                <div class="d-flex flex-row align-items-center">
                                    <p class="mr-3">Sort By</p>
                                    <div class="dropdown judicialDropdown sort-button-group">
                                        <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle sortGroupButton" href="#"> <span id="selected">Most Relevant</span> <span class="caret"></span> </a>
                                        <ul class="judicialDropdownMenu dropdown-menu dropdown-menu-right">
                                            <li class="active"> <a href="/rulings/judge:anderle%20AND%20%22wrongful%20termination%22?sort=relevance" data-sort-by="relevance" class="search-sort-button ">Most Relevant</a> </li>
                                            <li class=""> <a href="/rulings/judge:anderle%20AND%20%22wrongful%20termination%22?sort=date" data-sort-by="date" class="search-sort-button">Newest to Oldest</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="results-wrapper">
                            <div class="track-overlay">
                                <div class="overlay-content">
                                    <div class="overlay-text">
                                        <p> Get an alert with new cases related to: judge:anderle AND &quot;wrongful termination&quot; </p>
                                    </div>
                                    <div class="overlay-button">
                                        <button type="button" class="alert-action-btn ml-xl-2 alert-overlay-btn" data-alert-name='judge:anderle AND &quot;wrongful termination&quot;' data-alert-state="[&quot;ca&quot;]" data-toggle="tooltip" data-placement="top" data-add-all=1 title="Alert me with new rulings related to this topic"> <img src="/static/alerts/bell-icon-2.svg" alt="bell-icon"> Track This Topic </button>
                                    </div>
                                    <div class="overlay-checkbox">
                                        <label class="judicialCheckboxContainer mt-2">Don't show this again
                                            <input id="alertShowSetting" type="checkbox" name="show_topic_alert" class="dont-show-input"> <span class="checkmark"></span> </label>
                                    </div>
                                </div>
                            </div>
                            <div id="search_result">
                            </div>
                            <span class="mainLoadingIcon"></span>
                            </div>
                                <p class="judicial-pagination"> <span class="step-links">
                                <span class="current">


                           {{--  <a href="/rulings/judge:anderle%20AND%20%22wrongful%20termination%22?" class="deactivate">1</a>
                            <a href="/rulings/judge:anderle%20AND%20%22wrongful%20termination%22/2?">2</a> --}}

                            {{-- </span> &nbsp; <a rel="next" href="/rulings/judge:anderle%20AND%20%22wrongful%20termination%22/2?">next</a>&nbsp; <a href="/rulings/judge:anderle%20AND%20%22wrongful%20termination%22/2?">last &raquo;</a>&nbsp;
                            </span> --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-container printable">
            <h1 class="print-text">For full print and download access, please subscribe at https://www.judicial.law/.</h1> </div>
        <script type="acfcc1acf16c1b3b565e9d8c-text/javascript" src="/static/CACHE/js/output.bc7edacc955d.js"></script>
        <script type="acfcc1acf16c1b3b565e9d8c-text/javascript" src="/static/user_account/js/unpause_alert.js"></script>
        <script type="acfcc1acf16c1b3b565e9d8c-text/javascript" src="/static/global/mark-8.4.0.min.js"></script>
        <script type="acfcc1acf16c1b3b565e9d8c-text/javascript" src="/static/smart_search/js/index.js"></script>
        <input type='hidden' name='csrfmiddlewaretoken' value='8RDFOuw4KNXUxnJv9LHwokHbvsMLZB0dhFjAhvVvMAJ7amzHObh20R40bcZvVYxl' />
        <div class="modal alertModal judicial-popup-modal" id="alertAddSuccessModal" tabindex="-1" role="dialog" aria-labelledby="alertAddSuccessModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="judicialPopupContent border-gray pt-0 d-flex flex-column align-items-start mt-4">
                        <div class="modal-title d-flex flex-row justify-content-start align-items-center"> <img class="modal-icon" src="/static/alerts/bell-icon-2.svg" alt="close icon" />
                            <h5>Alert Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <p class="content mt-2">
                         Your alert tracking was succesfully added. We will email you when new changes related to "
                            <span class="alert-name-text"></span>" are available. </p>
                        <div class="d-flex flex-row align-items-center justify-content-between w-100">
                            <a class="linkToEnableShareWithOthersPanel" href="#">Add other recipients</a>
                            <button type="button" class="button-close modal-btn btn-green done" data-dismiss="modal">
                             <span>Done</span>
                            </button>
                        </div>
                        <div class="shareWithOthersPanel mt-5">
                            <div class=" d-flex flex-column align-items-start">
                                <label class="mb-2" for="alert_modal_recipients_list">Share this Alert with other recipients:</label>
                                <div id="alert_modal_recipients_list" class="judicialEmailList"></div>
                                <label class="judicialCheckboxContainer mt-2">Exclude myself from this Alert
                                    <input type="checkbox" name="excludeMeFromAlert" id="exclude_creator" /> <span class="checkmark"></span> </label>
                                <div class="d-flex flex-row justify-content-between align-items-center w-100 mt-3"> <a target="_blank" class="alertSettingsLink" href="/alerts">Alert Settings</a>
                                    <button type="button" class="startPlanButton modal-btn btn-green done" id="alert_modal_recipients_add" data-dismiss="modal"> <span>Done</span> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="upgradeTierSuccessModal" class="modal popupModalBox popupRequestConfirmation dark" tabindex="-1" role="dialog" aria-labelledby="upgradeTierSuccessModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header pb-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="border-gray pt-0 mb-4">
                        <h5 class="modal-title mb-3" id="exampleModalLabel">Thank You</h5>
                        <p>Your subscription was successfully upgraded <span class="optionalUpgradeText"></span></p>
                    </div>
                    <div class="modal-footer">
                        <a class="confirmationAnchor btn-primary btn-green" href="/rulings/judge:anderle AND &quot;wrongful termination&quot;" aria-label="Continue">
                        Continue
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="updateCardSuccessModal" class="modal popupModalBox popupRequestConfirmation dark" tabindex="-1" role="dialog" aria-labelledby="updateCardSuccessModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header pb-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="border-gray pt-0 mb-4">
                        <h5 class="modal-title mb-3" id="exampleModalLabel">Thank You</h5>
                        <p>Your card has been successfully updated.</p>
                    </div>
                    <div class="modal-footer">
                        <div class="updateCardConfirmationAnchor text-decoration-none">
                            <button type="button" class="d-block button___2r4xk modal-btn btn-green">
                                <span class="d-flex flex-nowrap justify-content-center align-items-center" aria-label="Continue">
                                    Continue
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="loaderContainer">
        <div class="loadingScreen"> <img class="mainLoadingIcon" src="/static/global/loader-4-css.svg" alt="">
            <p>Please wait a moment while we load this page.</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="modal fade" id="credits-purchased-modal" tabindex="-1" role="dialog" aria-labelledby="subscription-change-started" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div id="success-modal-header" class="modal-header">
                            <button id="close-button" type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div id="upper-modal-block">
                            <div class="modal-title-container outer-margin">
                                <h5 class="modal-title" id="modal-title">Thank you</h5> </div>
                            <div id="success-modal-body"> Your credits were successfully purchased. </div>
                        </div>
                        <div id="success-modal-footer" class="modal-footer outer-margin mb-3"> <a class="close-anchor" href="#">Close</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="modal fade" id="subscription-upgraded-modal" tabindex="-1" role="dialog" aria-labelledby="subscription-change-started" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div id="success-modal-header" class="modal-header">
                            <button id="close-button" type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div id="upper-modal-block">
                            <div class="modal-title-container outer-margin">
                                <h5 class="modal-title" id="modal-title">Thank you</h5> </div>
                            <div id="success-modal-body"> Your subscription has successfully been upgraded. </div>
                        </div>
                        <div id="success-modal-footer" class="modal-footer outer-margin mb-3"> <a class="close-anchor" href="#">Close</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="acfcc1acf16c1b3b565e9d8c-|49" defer=""></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var search = $('#textSearchs').val();
        $.ajax({
            type: "GET",
            url: '/search',
            data: {
                search: search
            },
            success: function(data) {
                $('#search_result').html(data);
            }
        });
    })
    $(document).on(' keyup click', '#textSearch,#textSearchs', function(e) {
        var search = $('#textSearchs').val();
        $('.spinner-border').show();
        $.ajax({
            type: "GET",
            url: '/search',
            data: {
                search: search
            },
            success: function(data) {
                 $('.spinner-border').hide();
                $('#search_result').html(data);
            }
        });
    });
</script>
