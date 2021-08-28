@extends('layouts.auth_navigation')
@section('title', 'Search - TranscriptMinerSM')
@section('content')
<div id="bodyWrapper" class="bodyBackground">
<div class="container-fluid search-container search-section-block">
<style>
.container-fluid.search-container.search-section-block{
    position: relative;
    margin: 0px 0px 2px !important;
    min-height: 57vh;
}

.container-fluid.search-section-block form {
    position: absolute;
    left: 50%;
    right: 0;
    margin: 0px;
    top: 70%;
    transform: translate(-50%, -70%);
}
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
    background: rgb(0, 135, 90) !important;
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
#search-form-wrapper .multiselect-selected-text, #search-form-wrapper .multiselect-container>li>a {
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
.btn.focus, .btn:focus {
    box-shadow: none;
}

.searchHintBox ul li {
    font-size: 12px;
    padding-bottom: 7px;
}

.searchHintBox ul {
    padding-top: 20px;
}

</style>
{{-- <script type="text/javascript">
    
var states = [{'code': 'ca', 'name': 'California', 'active': 1}, {'code': 'de', 'name': 'Delaware', 'active': 1}, {'code': 'fl', 'name': 'Florida', 'active': 1}, {'code': 'il', 'name': 'Illinois', 'active': 1}, {'code': 'ma', 'name': 'Massachusetts', 'active': 1}, {'code': 'nv', 'name': 'Nevada', 'active': 1}, {'code': 'ny', 'name': 'New York', 'active': 1}, {'code': 'pa', 'name': 'Pennsylvania', 'active': 1}, {'code': 'tx', 'name': 'Texas', 'active': 1}, {'code': 'wa', 'name': 'Washington', 'active': 1}];
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
        if (stateList.length > 0) {
            Cookies.set('states_selected', stateList.join('|'));
        } else {
            // if no state selected, the backend will create a cookie with whatever state
            // the user is coming from
            Cookies.remove('states_selected');
        }
    });
    // Populate State Multiselect
    for (i = 0; i < states.length; i++) {
        var htm = '';
        var attributes = '';
        attributes += 'value="' + states[i]['code'] + '"';
        if (states[i]['active'] != 1) {
            attributes += ' disabled=disabled';
        }
        if (states_selected.indexOf(states[i]['code']) > -1) {
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
    $('.advanced-search-btn').on('click', function (event) {
        event.stopPropagation();
        $('.advancedSearchForm').toggleClass('show');
        if ($('.advancedSearchForm').css('display') == 'none') {
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
    $('body').on('click', function (e) {
        if (!$('.advancedSearchForm').is(e.target)
            && $('.advancedSearchForm.dropdown-menu').has(e.target).length === 0
            && $('.show').has(e.target).length === 0
            && !$('.advanced-search-btn').is(e.target)
            && !$('.advancedSearchButton').is(e.target)
        ) {
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
    $('.advanced-search-tips-btn').click(function(){
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
        if(
            !$target.closest('#searchTipsDropdownContainer').length
            && $('#searchTipsDropdownContainer').is(":visible")
            && !$target.closest('#search-form-wrapper').length
        ) {
          $('#searchTipsDropdownContainer').hide();
        }
      });
    // Close on hit Escape
    $(document).keyup(function(e) {
        if (e.keyCode === 27) {
            // Hide Search Tips
            $('#searchTipsDropdownContainer').hide();

            // Hide Advanced Search
            $('.advancedSearchForm').removeClass('show');
            $('.advancedArrowDown').show();
            $('.advancedArrowUp').hide();
       }
    });
});
</script> --}}
<form action="/mainSearch" id="core-search-form" class="w-100">
<p class="mobilePlaceHolderText d-md-none">Search anything: judges, parties, opposing counsel, motion types, legal issues</p>
<div id="search-form-wrapper">
<div class="header-center-wrapper">
<div class="coreSearchInput" style="width: 100%; position: relative;">
<input id="id_q_results" name="searchQuery" type="text" class="form-control" aria-label="" placeholder="" autocomplete="off">
</div>
<div id="searchTipsDropdownContainer" style="margin-bottom: 48px; z-index: -1; right: -1px; position: absolute; width: 100%; margin-top: -5px; top: 28px;">
<div class="dropDownContainer GayGW">
<div class="searchDropDownContainer bAcwUd">
<div class="tipsContainer">
<div class="tipsTitle">SEARCH TIPS</div>
<div class="tipContent">

<span><strong>judge:last-name</strong></span>
<span>judge:Abbot</span>
<span>Filter by a specific judge name.</span>
</div>
<div class="tipContent">

<span><strong>party:party-name</strong></span>
<span>party:"Apple inc"</span>
<span>Filter by a specific party name.</span>
</div>
<div class="tipContent">

<span><strong>county:name</strong></span>
<span>county:losangeles</span>
<span>Filter by a specific county without spaces.</span>
</div>
<div class="tipContent">

<span><strong>AND</strong></span>
<span>"damages" AND "injuries" AND "relief"</span>
<span>Both terms must appear in document</span>
</div>
<div class="tipContent">

<span><strong>OR</strong></span>
<span>"modify" OR "ammend"</span>
<span>Either terms can appear in document</span>
</div>
<div class="tipContent">

<span><strong>""</strong></span>
<span>"motion for summary judgment"</span>
<span>Exact match of phrase</span>
</div>
<div class="tipContent">

<span><strong>*</strong></span>
<span>negligen*</span>
<span>Match anything after the *</span>
</div>
<div class="tipContent">

<span><strong>( )</strong></span>
<span>"motion" AND ("dismiss" OR "summary")</span>
<span>Grouping of terms</span>
</div>
</div>
</div>
</div>
<div class="advancedSearchButtonContainer">
<button class="advancedSearchButton" type="button">
Advanced Search
</button>
</div>
</div>
<div class="input-group-append">
<select id="stateSelect" class="custom-select multiselect dropdown-toggle btn btn-default" name="state" multiple="multiple" title="select state here"></select>
<button class="btn btn-search" type="submit" aria-label="search button">
<div class="rINcab searchButtonIcon">
<span class="z1asCe MZy1Rb">
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
<div id="advancedSearch" class="advancedSearchContainer">
<div class="searchHintBox">
<ul>
    <li>You are able to use the search queries you are used to: keyword, Boolean terms and connectors, and natural language search.</li>
    <li>Soundex is a search function that returns results based on the phonetic sound of your search criteria (homophones) as opposed to the traditional exact match, e.g., "roll up," "roll-up," "rollup". </li>
    <li>Future versions of TranscriptMiner<sup>SM</sup> will also include “semantic search,” which will return results based on context even if your exact keyword or search term does not appear in a transcript.</li>
</ul>
</div>
</div>
</form>
</div>
</div>
@endsection