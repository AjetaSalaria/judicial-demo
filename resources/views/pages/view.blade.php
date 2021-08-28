@extends('layouts.auth_navigation') @section('title', 'SearchView - TranscriptMinerSM') @section('content')
<div id="bodyWrapper" class="bodyBackground">
    <div class="search-bar-container rulingSearchBarContainer d-flex flex-row justify-content-center">
        <style>
        #search-form-wrapper .form-control {
            border: transparent;
            background: transparent;
            padding: 0.375rem 1.75rem;
            padding-right: 0.25rem;
            height: 100%;
            color: #000;
        }
        
        #search-form-wrapper .form-control:focus {
            color: #495057;
            background-color: transparent;
            border-color: transparent;
            outline: 0;
            box-shadow: none;
        }
        
        #search-form-wrapper .btn.btn-search {
            width: 50px;
            background: rgb(98, 0, 135) !important;
            border-top-right-radius: 14px;
            border-bottom-right-radius: 14px;
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px;
        }
        
        #search-form-wrapper .input-group-append > *:first-child {
            border-radius: 0;
            border-top: 1.2px solid #dfe1e5;
            border-bottom: 1.2px solid #dfe1e5;
            border-right: 0;
        }
        
        #search-form-wrapper .input-group-append {
            margin-left: 0;
        }
        
        #search-form-wrapper .btn-group {
            height: 100%;
        }
        
        #search-form-wrapper .custom-select {
            display: none;
        }
        
        #search-form-wrapper .multiselect-selected-text,
        #search-form-wrapper .multiselect-container>li>a {
            font-size: 13px;
            color: #006744;
        }
        
        #search-form-wrapper .multiselect-container>li>a {
            display: flex;
            align-items: center;
        }
        
        #search-form-wrapper .multiselect-container>li>a:hover {
            text-decoration: none;
        }
        
        #search-form-wrapper .multiselect-container>li>a input[type=checkbox] {
            margin-right: 1em;
        }
        
        #search-form-wrapper .dropdown-menu.multiselect-container {
            border-radius: 0;
            background: #F5F6F4;
            box-shadow: 0px 10px 24px rgba(26, 71, 66, 0.2);
            left: -1px!important;
            padding: 7px 6px 0px;
        }
        
        #search-form-wrapper .dropdown-toggle::after {
            vertical-align: 0.15em;
        }
        
        #search-form-wrapper .multiselect-container>li {
            padding: 5px 12px 5px;
        }
        
        #search-form-wrapper .multiselect-container>li:last-of-type {
            padding-bottom: 15px;
        }
        
        #search-form-wrapper .multiselect-container>li>a>label {
            padding: 0;
        }
        
        :focus {
            outline: 0;
        }
        
        #search-form-wrapper .multiselect-container>li.disabled label {
            cursor: not-allowed;
            color: #CECFCC;
        }
        
        #search-form-wrapper .multiselect-container>li>a>label>input[type=checkbox]:disabled {
            background: #CECFCC;
        }
        
        #search-form-wrapper .multiselect-container>li>a>label>input[type=checkbox] {
            margin-bottom: 5px;
            margin-right: 8px;
        }
        
        #search-form-wrapper .multiselect-container input[type=radio] {
            display: none;
        }
        
        #search-form-wrapper .dropdown-menu.show {
            display: block;
        }
        
        #search-form-wrapper button.multiselect {
            background: #F5F6F4;
            border-radius: 0;
        }
        
        #search-form-wrapper button.multiselect[aria-expanded="true"] {
            background: #F5F6F4;
            border-radius: 0;
        }
        
        #search-form-wrapper .spinner-border {
            border-width: 1px;
            width: 1rem;
            height: 1rem;
        }
        
        .btn.focus,
        .btn:focus {
            box-shadow: none;
        }
        </style>
        <script type="f73247061111a56f15ff5412-text/javascript">
        var states = [{
            'code': 'ca',
            'name': 'California',
            'active': 1
        }, {
            'code': 'de',
            'name': 'Delaware',
            'active': 1
        }, {
            'code': 'fl',
            'name': 'Florida',
            'active': 1
        }, {
            'code': 'il',
            'name': 'Illinois',
            'active': 1
        }, {
            'code': 'ma',
            'name': 'Massachusetts',
            'active': 1
        }, {
            'code': 'nv',
            'name': 'Nevada',
            'active': 1
        }, {
            'code': 'ny',
            'name': 'New York',
            'active': 1
        }, {
            'code': 'pa',
            'name': 'Pennsylvania',
            'active': 1
        }, {
            'code': 'tx',
            'name': 'Texas',
            'active': 1
        }, {
            'code': 'wa',
            'name': 'Washington',
            'active': 1
        }];
        var states_selected = ['ca'];
        var formUrl = "/rulings/";
        var query = "";
        Cookies.set('raw_query', "");
        $(document).ready(function() {
            // Init State Multiselect
            $('#stateSelect').multiselect({
                nonSelectedText: 'Select State'
            });
            // State Change
            $('#stateSelect').change(function() {
                var stateList = $(this).val();
                // always remember the states the user selected
                if(stateList.length > 0) {
                    Cookies.set('states_selected', stateList.join('|'));
                } else {
                    // if no state selected, the backend will create a cookie with whatever state
                    // the user is coming from
                    Cookies.remove('states_selected');
                }
            });
            // Populate State Multiselect
            for(i = 0; i < states.length; i++) {
                var htm = '';
                var attributes = '';
                attributes += 'value="' + states[i]['code'] + '"';
                if(states[i]['active'] != 1) {
                    attributes += ' disabled=disabled';
                }
                if(states_selected.indexOf(states[i]['code']) > -1) {
                    attributes += ' selected';
                }
                htm += '<option ' + attributes + '>' + states[i]['code'].toUpperCase() + '</option>';
                $('#stateSelect').append(htm);
                $('#stateSelect').multiselect('rebuild');
            }
            // Select checkbox on li click
            $('.multiselect-container li').click(function(e) {
                var stateInput = $(this).find('input[type=checkbox]').first();
                stateInput.click();
            });
            // Prevent the nested a tag from triggering above event
            $('.multiselect-container li input').click(function(e) {
                e.stopPropagation();
            });
            // Advanced Search Drop Down
            // Manual Toggle Trigger
            $('.advanced-search-btn').on('click', function(event) {
                event.stopPropagation();
                $('.advancedSearchForm').toggleClass('show');
                if($('.advancedSearchForm').css('display') == 'none') {
                    $('.advancedArrowDown').show();
                    $('.advancedArrowUp').hide();
                } else {
                    $('.advancedArrowDown').hide();
                    $('.advancedArrowUp').show();
                }
                // Amplitude - Signup View
                amplitude.getInstance().logEvent('Advanced Search - Clicked');
            });
            // Only close when clicking outside the block
            $('body').on('click', function(e) {
                if(!$('.advancedSearchForm').is(e.target) && $('.advancedSearchForm.dropdown-menu').has(e.target).length === 0 && $('.show').has(e.target).length === 0 && !$('.advanced-search-btn').is(e.target) && !$('.advancedSearchButton').is(e.target)) {
                    $('.advancedSearchForm').removeClass('show');
                    $('.advancedArrowDown').show();
                    $('.advancedArrowUp').hide();
                    $('#searchTipsDropdownContainer2').hide();
                }
            });
            $('.advancedSearchButton').click(function() {
                    $('.header-center-wrapper').removeClass('active');
                    $('#searchTipsDropdownContainer').hide();
                    $('.advanced-search-btn').click();
                })
                // Search Tips on Advanced Search
            $('.advanced-search-tips-btn').click(function() {
                $('#searchTipsDropdownContainer2').toggle();
                // Amplitude - Advanced Search Tips Toggled
                amplitude.getInstance().logEvent('Advanced Search Tips - Clicked');
            });
            // Toggle Search Tips
            $("#id_q_results").focus(function() {
                $('#searchTipsDropdownContainer').show();
                $('.header-center-wrapper').addClass('active');
            });
            $("#id_q_results").blur(function() {
                $('.header-center-wrapper').removeClass('active');
            });
            // Close on Click Outside of Box
            $(document).click(function(event) {
                $target = $(event.target);
                if(!$target.closest('#searchTipsDropdownContainer').length && $('#searchTipsDropdownContainer').is(":visible") && !$target.closest('#search-form-wrapper').length) {
                    $('#searchTipsDropdownContainer').hide();
                }
            });
            // Close on hit Escape
            $(document).keyup(function(e) {
                if(e.keyCode === 27) {
                    // Hide Search Tips
                    $('#searchTipsDropdownContainer').hide();
                    // Hide Advanced Search
                    $('.advancedSearchForm').removeClass('show');
                    $('.advancedArrowDown').show();
                    $('.advancedArrowUp').hide();
                }
            });
        });
        </script>
        <form id="core-search-form" class="w-100">
            <p class="mobilePlaceHolderText d-md-none">Search anything: judges, parties, opposing counsel, motion types, legal issues</p>
            <div id="search-form-wrapper">
                <div class="header-center-wrapper">
                    <div class="coreSearchInput" style="width: 100%; position: relative;">
                        <input id="id_q_results" name="q" type="text" class="form-control" aria-label="Search anything: judges, parties, opposing counsel, motion types, legal issues" placeholder="Search anything: judges, parties, opposing counsel, motion types, legal issues" autocomplete="off"> </div>
                    <div id="searchTipsDropdownContainer" style="margin-bottom: 48px; z-index: -1; right: -1px; position: absolute; width: 100%; margin-top: -5px; top: 28px;">
                        <div class="dropDownContainer GayGW">
                            <div class="searchDropDownContainer bAcwUd">
                                <div class="tipsContainer">
                                    <div class="tipsTitle">SEARCH TIPS</div>
                                    <div class="tipContent"> 
                                        <span><strong>judge:last-name</strong></span> <span>judge:Abbot</span> <span>Filter by a specific judge name.</span>
                                     </div>
                                    <div class="tipContent"> 
                                        <span><strong>party:party-name</strong></span> <span>party:&quot;Apple inc&quot;</span> <span>Filter by a specific party name.</span> 
                                    </div>
                                    <div class="tipContent">
                                        <span><strong>county:name</strong></span> <span>county:losangeles</span> <span>Filter by a specific county without spaces.</span> 
                                    </div>
                                    <div class="tipContent"> 
                                        <span><strong>AND</strong></span> <span>&quot;damages&quot; AND &quot;injuries&quot; AND &quot;relief&quot;</span> <span>Both terms must appear in document</span> 
                                    </div>
                                    <div class="tipContent"> 
                                        <span><strong>OR</strong></span> <span>&quot;modify&quot; OR &quot;ammend&quot;</span> <span>Either terms can appear in document</span> 
                                    </div>
                                    <div class="tipContent"> 
                                        <span><strong>&quot;&quot;</strong></span> <span>&quot;motion for summary judgment&quot;</span> <span>Exact match of phrase</span> 
                                    </div>
                                    <div class="tipContent">
                                       <span><strong>*</strong></span> <span>negligen*</span> <span>Match anything after the *</span> 
                                    </div>
                                    <div class="tipContent"> 
                                        <span><strong>( )</strong></span> <span>&quot;motion&quot; AND (&quot;dismiss&quot; OR &quot;summary&quot;)</span> <span>Grouping of terms</span> 
                                    </div>
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
                            <div class="rINcab searchButtonIcon"> <span class="z1asCe MZy1Rb">
                                    <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                    </path>
                                    </svg>
                                    </span> 
                            </div>
                            <div class="spinner-border text-primary searchButtonSubmitting d-none" role="status">
                              <span class="sr-only">Loading...</span> 
                           </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="advancedSearchForm dropdown-menu row">
                <div class="advancedSearchFormLeft col-12 col-md-6">
                    <div class="advancedInputGroup">
                        <label class="sectionLabel" for="Judge_Name">Judge</label>
                        <input type="text" class="form-control" name="advanced_judge" placeholder="Judge Name" id="Judge_Name"> 
                    </div>
                    <div class="advancedInputGroup">
                        <label class="sectionLabel" for="Party_Name">Party</label>
                        <input type="text" class="form-control" name="advanced_party" placeholder="Party Name" id="Party_Name"> 
                    </div>
                </div>
                <div class="advancedSearchFormRight col-12 col-md-6">
                    <div>
                        <label class="sectionLabel">Date</label>
                        <div class="dateRangeInputContainer d-flex flex-row">
                            <label class="customRadioContainer">Last 6 Months
                                <input name="date_range" value="6" type="radio"> <span class="checkmark"></span> 
                            </label>
                            <label class="customRadioContainer">Last Year
                                <input name="date_range" value="12" type="radio"> <span class="checkmark"></span> 
                            </label>
                            <label class="customRadioContainer">All Time
                                <input name="date_range" value="all" type="radio"> <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="searchTipsContainer2">
                    <button class="advanced-search-tips-btn" type="button"> SEARCH TIPS </button>
                    <div id="searchTipsDropdownContainer2">
                        <div class="dropDownContainer GayGW">
                            <div class="searchDropDownContainer bAcwUd">
                                <div class="tipsContainer">
                                    <div class="tipContent"> 
                                        <span><strong>judge:last-name</strong></span> <span>judge:Abbot</span> <span>Filter by a specific judge name.</span> 
                                    </div>
                                    <div class="tipContent"> 
                                        <span><strong>party:party-name</strong></span> <span>party:&quot;Apple inc&quot;</span> <span>Filter by a specific party name.</span> 
                                    </div>
                                    <div class="tipContent"> 
                                        <span><strong>county:name</strong></span> <span>county:losangeles</span> <span>Filter by a specific county without spaces.</span> 
                                    </div>
                                    <div class="tipContent"> 
                                        <span><strong>AND</strong></span> <span>&quot;damages&quot; AND &quot;injuries&quot; AND &quot;relief&quot;</span> <span>Both terms must appear in document</span> 
                                    </div>
                                    <div class="tipContent"> 
                                        <span><strong>OR</strong></span> <span>&quot;modify&quot; OR &quot;ammend&quot;</span> <span>Either terms can appear in document</span> 
                                    </div>
                                    <div class="tipContent"> 
                                        <span><strong>&quot;&quot;</strong></span> <span>&quot;motion for summary judgment&quot;</span> <span>Exact match of phrase</span> 
                                    </div>
                                    <div class="tipContent"> 
                                        <span><strong>*</strong></span> <span>negligen*</span> <span>Match anything after the *</span> 
                                    </div>
                                    <div class="tipContent">
                                     <span><strong>( )</strong></span> <span>&quot;motion&quot; AND (&quot;dismiss&quot; OR &quot;summary&quot;)</span> <span>Grouping of terms</span> 
                                 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
</div>
<div class="page-container">
    <div class="h-100 container-fluid ruling-content">
        <div class="row contentRowContainer">
            <div id="commentsContainer" class="main-content col-sm-12 col-md-8 inactive">
                <div class="header-container">
                    <div class="header-block">
                        <h1 class="title">{{$result->results_heading}}</h1> 
                    </div>
                </div>
                <h3 class="ruling-h3 mt-2 d-flex align-items-center">
                    Case No : {{$result->detail_case_number}}
                </h3>
                <div class="cta-block hide-on-print d-none d-md-block"> 
                    <a class="btn judicial-action-btn download-document mr-1 judicialCallToAction  inactive-purchase-flow-link " href="#" data-download="ruling" data-page="Ruling" data-action="Download">
                        Download Ruling
                            </a> {{-- <a class="btn judicial-action-btn print-document mr-1 judicialCallToAction  inactive-purchase-flow-link " href="/pricing?post_logged_in_path=L3ByaWNpbmc/ZHJjPTEmdXBncmFkZV9zdGF0ZT1ZMkU9&post_purchase_path=L3J1bGluZy8xNUNWMDA1ODkvUXVpYW5hLUZvbGV5LXZzLVNCLUJvb2tzLzIwMTUxMDI3ZjVlNDg0P3ByaW50UGFnZT0x&cn=UXVpYW5hIEZvbGV5IHZzIFNCIEJvb2tz&upgrade_state=Y2E=" data-print="ruling" data-page="Ruling" data-action="Print">
                            Print Ruling
                            </a>  --}}
                </div>
                <form>
                    <input type='hidden' name='csrfmiddlewaretoken' value='gDZfGv16fNXtUnCONZF2XD0m4SGGv27NprFa9wqxhAJGxms0spfyzanbKCTqrpEV' />
                    <div class="submitEditBug submitErrorMessage___zzXHm"></div>
                    <div id="toolbar" class="ql-toolbar ql-snow">
                             <span class="ql-formats">
                                    <button type="button" class="ql-indent" value="-1">
                                         <svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="3" x2="15" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="9" x2="15" y1="9" y2="9"></line> <polyline class="ql-stroke" points="5 7 5 11 3 9 5 7"></polyline> </svg>
                                    </button>
                                    <button type="button" class="ql-indent" value="+1">
                                        <svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="3" x2="15" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="9" x2="15" y1="9" y2="9"></line> <polyline class="ql-fill ql-stroke" points="3 7 3 11 5 9 3 7"></polyline> </svg>
                                    </button>
                                      </span> 
                                      <span class="ql-formats">
                                            <select class="ql-font">
                                            <option selected="selected"></option>
                                            <option value="serif"></option>
                                            <option value="monospace"></option>
                                            </select>
                                      </span> 
                                      <span class="ql-formats">
                                            <button type="button" class="ql-save">Save</button>
                                      </span> 
                                      <span class="ql-formats">
                                            <button type="button" class="ql-cancel">Cancel</button>
                                      </span>
                    </div>
                    <div id="comments" class="main-text">
                        <p>Nature of Proceedings : {{$result->nature_of_proceeding}}
                            <br />
                            <br /> Ruling:
                            <br />
                            <br /> {{$result->ruling}}
                            <br />
                            <br /> Background :  
                            <br />
                            <br /> {{$result->details_background}}
                            <br />
                            <br /> 
                            <div style="display: block; position:relative; margin-top: 2em; margin-bottom: 2em; z-index:1000; text-align: center;">
                                <a class="de-anchor judicialCallToAction  inactive-purchase-flow-link " href="#" data-page="Ruling" data-action="Continue Reading">
                                    <button class="continue-reading-link judicial-action-btn walledOff" type="button" data-nosnippet>Continue Reading</button>
                                </a>
                            </div>
                    </div>
                </form>
            </div>
            <div class="side-bar col-sm-12 col-md-4">
                <div class="side-container-title">
                    <h3>Case Info</h3> 
                </div>
                <div class="ruling-summary side-box">
                    <div class="summaryBoxLeft">
                        <div class="summaryContext">
                            <h4>JUDGE</h4>
                            <p> 
                             <a href="/judge/thomas.p.anderle">{{$result->details_judge}}</a> 
                            </p>
                        </div>
                        <div class="summaryContext">
                            <h4>CASE NO.</h4>
                            <p class="walledOff" data-nosnippet>
                            <a href="/case no./thomas.p.anderle">{{$result->detail_case_number}}</a>
                            </p>
                        </div>
                        <div class="summaryContext">
                            <h4>HEARING DATE</h4>
                            <p>{{$result->results_hearing}}</p>
                        </div>
                        <div class="summaryContext">
                            <h4>COUNTRY</h4>
                            <p><a href="/county/ca/santabarbara">{{$result->details_county}}</a></p>
                        </div>
                        <div class="summaryContext">
                            <h4>DEPARTMENT</h4>
                            <p>{{$result->details_department}}</p>
                        </div>
                    </div>
                    <div class="summaryBoxRight">
                        <div class="summaryContext">
                            <h4>FILED</h4>
                            <p>{{$result->details_filed}}</p>
                        </div>
                        <div class="summaryContext">
                            <h4>CATEGORY</h4>
                            <p>{{$result->details_category}}</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
            <input type='hidden' name='csrfmiddlewaretoken' value='gDZfGv16fNXtUnCONZF2XD0m4SGGv27NprFa9wqxhAJGxms0spfyzanbKCTqrpEV' />
            <div class="page-container printable">
                <h1 class="print-text">For full print and download access, please subscribe at https://www.judicial.law/.</h1> 
            </div>
                <script type="f73247061111a56f15ff5412-text/javascript" src="/static/CACHE/js/output.bc7edacc955d.js"></script>
                <script type="f73247061111a56f15ff5412-text/javascript" src="/static/user_account/js/unpause_alert.js"></script>
                <script type="f73247061111a56f15ff5412-text/javascript" src="/static/global/mark-8.4.0.min.js"></script>
                <script type="f73247061111a56f15ff5412-text/javascript" src="/static/global/js/ruling.js"></script>
                <script type="f73247061111a56f15ff5412-text/javascript">
                amplitude.getInstance().logEvent('Ruling - View', {
                    'Title': "Quiana Foley vs SB Books - 15CV00589 October 27, 2015",
                    'URL': "detail..html"
                });
                </script>
                <input type='hidden' name='csrfmiddlewaretoken' value='gDZfGv16fNXtUnCONZF2XD0m4SGGv27NprFa9wqxhAJGxms0spfyzanbKCTqrpEV' />
        <div class="modal alertModal judicial-popup-modal" id="alertAddSuccessModal" tabindex="-1" role="dialog" aria-labelledby="alertAddSuccessModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="judicialPopupContent border-gray pt-0 d-flex flex-column align-items-start mt-4">
                        <div class="modal-title d-flex flex-row justify-content-start align-items-center"> 
                            <img class="modal-icon" src="/static/alerts/bell-icon-2.svg" alt="close icon" />
                            <h5>Alert Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                            <p class="content mt-2"> Your alert tracking was succesfully added. We will email you when new changes related to "<span class="alert-name-text"></span>" are available. </p>
                        <div class="d-flex flex-row align-items-center justify-content-between w-100"> 
                            <a class="linkToEnableShareWithOthersPanel" href="#">Add other recipients</a>
                            <button type="button" class="button-close modal-btn btn-green done" data-dismiss="modal"> <span>Done</span> </button>
                        </div>
                        <div class="shareWithOthersPanel mt-5">
                            <div class=" d-flex flex-column align-items-start">
                                <label class="mb-2" for="alert_modal_recipients_list">Share this Alert with other recipients:</label>
                                <div id="alert_modal_recipients_list" class="judicialEmailList"></div>
                                <label class="judicialCheckboxContainer mt-2">Exclude myself from this Alert
                                    <input type="checkbox" name="excludeMeFromAlert" id="exclude_creator" /> <span class="checkmark"></span>
                                </label>
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
                        <a class="confirmationAnchor btn-primary btn-green" href="detail.html" aria-label="Continue">
                        Continue</a>
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
        <div class="loadingScreen"> 
            <img class="mainLoadingIcon" src="/static/global/loader-4-css.svg" alt="">
            <p>Please wait a moment while we load this page.</p>
        </div>
    </div> 
</div>
@endsection