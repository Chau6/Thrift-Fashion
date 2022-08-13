<script>
    var tt_live_search = {
        selector: "#search input[name='search']",
        text_no_matches: "",
        height: "50px",
    };

    $(document).ready(function () {
        var html = "";
        html += '<div class="live-search">';
        html += "	<ul>";
        html += "	</ul>";
        html += '<div class="result-text"></div>';
        html += "</div>";

        $(tt_live_search.selector).after(html);

        $(tt_live_search.selector).autocomplete({
            source: function (request, response) {
                var filter_name = $(tt_live_search.selector).val();
                var cat_id = 0;
                var module_tt_live_search_min_length = "1";
                if (filter_name.length < module_tt_live_search_min_length) {
                    $(".live-search").css("display", "none");
                } else {
                    var html = "";
                    html += '<li style="text-align: center;height:10px;">';
                    html += '<img class="loading" src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/catalog/demo/banners/loading.gif" />';
                    html += "</li>";
                    $(".live-search ul").html(html);
                    $(".live-search").css("display", "block");

                    $.ajax({
                        url: "index.php?route=extension/module/tt_live_search&filter_name=" + encodeURIComponent(filter_name),
                        dataType: "json",
                        success: function (result) {
                            var products = result.products;
                            $(".live-search ul li").remove();
                            $(".result-text").html("");
                            if (!$.isEmptyObject(products)) {
                                var show_image = 1;
                                var show_price = 1;
                                var show_description = 0;
                                $(".result-text").html(
                                    '<a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/search&amp;search=' +
                                        filter_name +
                                        '" class="view-all-results">       View all results        (' +
                                        result.total +
                                        ")</a>"
                                );

                                $.each(products, function (index, product) {
                                    var html = "";

                                    html += "<li>";
                                    html += '<a href="' + product.url + '" title="' + product.name + '">';
                                    if (product.image && show_image) {
                                        html += '	<div class="product-image col-sm-4"><img alt="' + product.name + '" src="' + product.image + '"></div>';
                                    }
                                    html += '<div class="search-description col-sm-8 col-xs-8">';
                                    html += '	<div class="product-name">' + product.name;
                                    if (show_description) {
                                        html += "<p>" + product.extra_info + "</p>";
                                    }
                                    html += "</div>";
                                    if (show_price) {
                                        if (product.special) {
                                            html += '	<div class="product-price"><span class="price">' + product.special + '</span><span class="special">' + product.price + "</span></div>";
                                        } else {
                                            html += '	<div class="product-price"><span class="price">' + product.price + "</span></div>";
                                        }
                                    }
                                    html += "</div>";
                                    html += '<span style="clear:both"></span>';
                                    html += "</a>";
                                    html += "</li>";
                                    $(".live-search ul").append(html);
                                });
                            } else {
                                var html = "";
                                html += '<li style="text-align: center;height:10px;">';
                                html += tt_live_search.text_no_matches;
                                html += "</li>";

                                $(".live-search ul").html(html);
                            }
                            $(".live-search").css("display", "block");
                            return false;
                        },
                    });
                }
            },
            select: function (product) {
                $(tt_live_search.selector).val(product.name);
            },
        });

        $(document).bind("mouseup touchend", function (e) {
            var container = $(".live-search");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.hide();
            }
        });
    });
    //-->
</script>
