@extends('layouts.auth_navigation') @section('title', 'Judicial - TranscriptMinerSM') @section('content')
<div id="bodyWrapper" class="bodyBackground">
    <div class="container-fluid search-container search-section-block">
        <style>
        .judicial-sec h5{
            font-family: "Garamond";
        }
        .container-fluid.search-container.search-section-block {
            position: relative;
            margin: 0px 0px 2px !important;
            min-height: 52vh;
        }
        .container-fluid.search-section-block form {
            position: absolute;
            left: 50%;
            right: 0;
            margin: 0px;
            top: 50%;
            transform: translate(-50%, -50%);
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


        .judicial-sec {
            padding-top: 60px;
            font-size: 17px;
            padding-bottom: 40px;
            font-family: HelveticaNeueLTPro-Roman, Helvetica Neue, Helvetica, Arial, sans-serif !important;
            font-weight: 400;
            line-height: 1.6;
            color: #161c2d;
            text-align: left;
        }

        .judicial-sec p {
            padding-bottom: 20px;
        }

        .judicial-sec ul li {
            padding-bottom: 10px;
        }
        .judicial-sec span {
            border-bottom: 1px solid;
            padding-bottom: 3px;
        }
        
        a.selling-link {
            font-size: 17px;
            color: rgb(71, 37, 88);
        }
        

        </style> {{--
        <script type="text/javascript">
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
        </script> --}}

<div class="row justify-content-center">
    <div class="col-lg-8">
         <div class="judicial-sec">
            <ul>
              <li>
                  
                  For this test, only the  <span>search</span> functions are enabled. In the future, additional analytical tools will be added to enable users to gain useful and actionable insights about judges, as detailed in the Read Me section.
              </li>
              <li>
                In the future, additional analytical tools will be added:
                <ul>
                  <li>
                      <h5><span>Sentiment analysis.</span></h5>  This tool will give you the ability to find out what aparticular judge doesn’t like; for example, about procedures they would like you to follow in their courtroom, arguments they don’t like, expert witnesses they hold in low regard, etc.  This will allow you to avoid a roasting when appearing before that judge, and save you both time.
                  </li>
                  <li>
                      <h5><span>Personality/communication style analysis.</span></h5> In the past, to analyze someone’s personality for the purpose of determining that person’s preferred communication style, you either had to know that person well, or have that person take a “personality profile questionnaire”—perhaps you (like me) have worked in organizations that required you to take the Meyers-Briggs personality assessment, ostensibly to allow others in the organization to tailor their communications to your personality and preferred communication style.  Now there are commercially-available tools which can accurately assess personalities by using a resume, or LinkedIn profile, or the target person’s writings or oral statements, i.e., without a test. This TranscriptMiner<sup>SM</sup> function is not meant to psychoanalyze judges, but rather to enable attorneys to tailor their writings and court presentations to the judge’s preferred communication style. Because judges are people, they all have different personalities. Wouldn't it be nice to know before you go into the courtroom whether the judge is “folksy” and wants to engage in pleasantries, or is a get-right-to-the-point judge, or tends to like to “educate” the attorneys appearing before them, or is a judge of few words (like Peter Walsh of Delaware, whose customary reply to most everything was “OK”)?  TranscriptMiner<sup>SM</sup> will provide tips on how to communicate with each judge based on their personality and preferred communication style.  When you stand before the judge, you are selling your argument—and the more a salesperson knows about the prospect, the better the chances of making a sale! <a class="selling-link" href="https://abovethelaw.com/2018/07/selling-the-law-lawyers-are-salesmen-whether-they-like-it-or-not/" >(https://abovethelaw.com/2018/07/selling-the-law-lawyers-are-salesmen-whether-they-like-it-or-not/)</a>
                  </li>
                  <li>
                     <h5><span> Natural Language Processing (“NLP”) and AI.</span></h5>  In virtually all hearings there are “nuggets”—useful and actionable things judges say, that would never appear in a written opinion.  Besides which, not only in the Bankruptcy Court, but in District Courts, written opinions are only issued in a minority of rulings on motions.  Sometimes judges will state their ratio decidendi orally even when the order merely says, “Based on the statements made on the record, the motion is granted (or denied).”  So the only way you would know why a judge ruled the way they did is through the transcript. The ability of NLP to understand speech is progressing all the time. In the future, TranscriptMiner<sup>SM</sup> will allow you to find these “nuggets” which will inform how you write your motion papers as well as what you might say in addressing the judge.
                  </li>
                </ul>
              </li>
            </ul>
             <p>
        Using TranscriptMiner<sup>SM</sup> in conjunction with standard legal research on written opinions will not only provide a more comprehensive view of how and why a judge might rule, but will allow you to gain other useful and actionable insights about each judge—which will benefit both you and the judge, and save you both time. 
       </p>
       <p>
        The current “judicial analytics” applications available from various providers (e.g., Westlaw Edge, Lexis Advance, Lexalytics, et al.) only provide “descriptive statistics,” i.e., how many cases are in Judge X’s docket, how quickly does Judge X rule on various types of motions, how often does Judge X rule in favor of the movant/respondent in particular types of motions, etc.  All these products are good at answering the “what” question, but none of them deal with the “why” question.  Some vendors offer certain types of information about judges, such as asking attorneys for “reviews” of judges, but the sample sizes are extremely small, the “reviews” are totally subjective, and the attorneys leaving the reviews often self-select because they experienced a bad result with the judge they are reviewing, and  the “reviews” are skewed accordingly.  With TranscriptMiner<sup>SM</sup> you get first hand data from the judge, not second hand filtered through another attorney who you probably don’t know and never heard of.  In other words, TranscriptMiner<sup>SM</sup> empowers you with the information you deem to be important from which you can draw your own conclusions, based on statements the judge has made throughout their career on the bench. 
        </p>
        </div>
      
    </div>
    </div>
</div>
</div>
@endsection