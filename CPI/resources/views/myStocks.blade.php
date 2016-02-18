@extends('Templates.Master')

@section('title')
    Home | Stock Tracker
@endsection

@section('content')
    <h3>Tracked Stocks:</h3>

    <table class="table table-responsive">
    @foreach($results as $result)
            <tr>
                <td>
                    <h5>Symbol: {{$result->symbol}}</h5>
            <!-- TradingView Widget BEGIN -->
            <script type="text/javascript" src="https://d33t3vvu2t2yu5.cloudfront.net/tv.js"></script>
            <script type="text/javascript">
                new TradingView.widget({
                    "width": 1000,
                    "height": 400,
                    "symbol": "{{$result->symbol}}",
                    "interval": "D",
                    "timezone": "exchange",
                    "theme": "White",
                    "style": "1",
                    "locale": "en",
                    "toolbar_bg": "#f1f3f6",
                    "allow_symbol_change": false,
                    "hideideas": true,
                    "show_popup_button": true,
                    "popup_width": "1000",
                    "popup_height": "650"
                });
            </script>
            <!-- TradingView Widget END -->
                </td>
            </tr>

            <tr>
                <td>
                    <!-- start feedwind code -->
                    <script type="text/javascript">document.write('\x3Cscript type="text/javascript" src="'
                                + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js">\x3C/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "https://feeds.finance.yahoo.com/rss/2.0/headline?s={{$result->symbol}}&region=US&lang=en-US",
                            rssmikle_frame_width: "1000",rssmikle_frame_height: "100",frame_height_by_article: "0",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",scrollbar: "on",autoscroll: "on",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "Off",rssmikle_title: "on",rssmikle_title_sentence: "Latest News: {{$result->symbol}}",rssmikle_title_link: "",rssmikle_title_bgcolor: "#F1F3F6",rssmikle_title_color: "#333333",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#0066FF",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",item_link: "off",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M %p",item_description_style: "text+tn",item_thumbnail: "full",item_thumbnail_selection: "auto",article_num: "15",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; width:1000px;"><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a><!--Please display the above link in your web page according to Terms of Service.--></div><!-- end feedwind code --><!--  end  feedwind code -->
                </td>
            </tr>
    @endforeach
    </table>
@endsection